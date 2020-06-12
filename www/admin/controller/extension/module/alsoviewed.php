<?php
class ControllerExtensionModuleAlsoViewed extends Controller
{
    // Module Unifier
    private $moduleName;
    private $moduleNameSmall;
    private $modulePath;
    private $extensionsLink;
    private $callModel;
    private $moduleModel;
    private $moduleVersion;
    private $moduleLanguage;
    private $error = array();
    // Module Unifier

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->config->load('isenselabs/alsoviewed');

        /* OC version-specific declarations - Begin */
        $this->moduleName      = $this->config->get('alsoviewed_name');
        $this->moduleNameSmall = $this->config->get('alsoviewed_name_small');
        $this->extensionsLink  = $this->url->link($this->config->get('alsoviewed_extensions_link'), 'user_token=' . $this->session->data['user_token'] . $this->config->get('alsoviewed_extensions_link_params'), 'SSL');
        $this->modulePath      = $this->config->get('alsoviewed_path');
        /* OC version-specific declarations - End */

        /* Module-specific declarations - Begin */
        $this->load->model($this->modulePath);
        $this->callModel     = $this->config->get('alsoviewed_model_call');
        $this->moduleModel   = $this->{$this->callModel};
        $this->moduleVersion = $this->config->get('alsoviewed_version');

        $this->moduleLanguage = $this->load->language($this->modulePath, $this->moduleNameSmall);
        $this->moduleLanguage = $this->moduleLanguage[$this->moduleNameSmall];
        /* Module-specific declarations - End */

        /* Module-specific loaders - Begin */
        $this->load->model('setting/store');
        $this->load->model('setting/setting');
        $this->load->model('localisation/language');
        $this->load->model('design/layout');
        /* Module-specific loaders - End */
    }

    public function index() {
        $data = $this->moduleLanguage->all();

        $data['modulePath']      = $this->modulePath;
        $data['moduleName']      = $this->moduleName;
        $data['moduleNameSmall'] = $this->moduleNameSmall;
        $data['moduleModel']     = $this->moduleModel;

        $this->document->setTitle($this->moduleLanguage->get('heading_title'));
        $this->document->addStyle('view/stylesheet/alsoviewed.css');

        if (!isset($this->request->get['store_id'])) {
            $this->request->get['store_id'] = 0;
        }
        $store = $this->getCurrentStore($this->request->get['store_id']);

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (!$this->user->hasPermission('modify', $this->modulePath)) {
                $this->validate();
                $this->redirect($this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], 'SSL'));
            }
            if (!empty($_POST['OaXRyb1BhY2sgLSBDb21'])) {
                $this->request->post['alsoviewed']['LicensedOn'] = $_POST['OaXRyb1BhY2sgLSBDb21'];
            }
            if (!empty($_POST['cHRpbWl6YXRpb24ef4fe'])) {
                $this->request->post['alsoviewed']['License'] = json_decode(base64_decode($_POST['cHRpbWl6YXRpb24ef4fe']), true);
            }

            $this->moduleModel->editSetting('alsoviewed', $this->request->post, $this->request->post['store_id']);

            $this->session->data['success'] = $this->moduleLanguage->get('text_success');

            $this->moduleModel->removeEventHandlers();

            if ($this->request->post[$this->moduleNameSmall]['Enabled'] == 'yes'){
                $this->model_setting_setting->editSetting('module_'.strtolower($this->moduleNameSmall), array('module_'.strtolower($this->moduleNameSmall).'_status' => 1));
                $this->moduleModel->setupEventHandlers();
            } else{
                $this->model_setting_setting->editSetting('module_'.strtolower($this->moduleNameSmall), array('module_'.strtolower($this->moduleNameSmall).'_status' => 0));
            }
            
            if (!empty($_GET['activate'])) {
                $this->session->data['success'] = $this->moduleLanguage->get('text_success_activation');
            }

            $selectedTab = (empty($this->request->post['selectedTab'])) ? 0 : $this->request->post['selectedTab'];
            $this->response->redirect($this->url->link($this->modulePath, 'store_id=' . $this->request->post['store_id'] . '&user_token=' . $this->session->data['user_token'], 'SSL'));
        }

        $alsoViewedStats = $this->db->query("SELECT * FROM `" . DB_PREFIX . "alsoviewed` ORDER BY `number` DESC LIMIT 100");

        $data['alsoViewedStats'] = $alsoViewedStats->rows;

        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        foreach ($data['alsoViewedStats'] as $k => $v) {

            if (!empty($v['high']) && (!empty($v['low']))) {

                $data['alsoViewedStats'][$k]['highProduct'] = $this->model_catalog_product->getProduct($v['high']);
                if (isset($data['alsoViewedStats'][$k]['highProduct']['image'])) {
                    $data['alsoViewedStats'][$k]['highProduct']['image'] = $this->model_tool_image->resize($data['alsoViewedStats'][$k]['highProduct']['image'], 80, 80);
                }
                $data['alsoViewedStats'][$k]['lowProduct'] = $this->model_catalog_product->getProduct($v['low']);
                if (isset($data['alsoViewedStats'][$k]['lowProduct']['image'])) {
                    $data['alsoViewedStats'][$k]['lowProduct']['image'] = $this->model_tool_image->resize($data['alsoViewedStats'][$k]['lowProduct']['image'], 80, 80);
                }
            } else {
                unset($data['alsoViewedStats'][$k]);
            }
        }

        $data['heading_title'] = $data['heading_title'] . ' ' . $this->moduleVersion;
        $this->load->model('localisation/language');
        $languages                 = $this->model_localisation_language->getLanguages();
        $data['languages']         = $languages;
        $firstLanguage             = array_shift($languages);
        $data['firstLanguageCode'] = $firstLanguage['code'];

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs']   = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], 'SSL'),
            'separator' => false
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->moduleLanguage->get('text_module'),
            'href' => $this->extensionsLink,
            'separator' => ' :: '
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->moduleLanguage->get('heading_title'),
            'href' => $this->url->link($this->modulePath, 'user_token=' . $this->session->data['user_token'], 'SSL'),
            'separator' => ' :: '
        );

        $data['action'] = $this->url->link($this->modulePath, 'user_token=' . $this->session->data['user_token'], 'SSL');
        $data['cancel'] = $this->extensionsLink;
        if (isset($this->request->post['alsoviewed'])) {
            foreach ($this->request->post['alsoviewed'] as $key => $value) {
                $data['data']['alsoviewed'][$key] = $this->request->post['alsoviewed'][$key];
            }
        } else {
            $configValue                = $this->config->get('alsoviewed');
            $data['data']['alsoviewed'] = $configValue;
        }

        $data['user_token']              = $this->session->data['user_token'];
        $data['moduleSettings']     = $this->moduleModel->getSetting('alsoviewed', $store['store_id']);
        $data['data']['alsoviewed'] = isset($data['moduleSettings']['alsoviewed']) ? $data['moduleSettings']['alsoviewed'] : array();

        $data['stores'] = array_merge(array(
            0 => array(
                'store_id' => '0',
                'name' => $this->config->get('config_name') . $this->language->get('text_default'),
                'url' => HTTP_SERVER,
                'ssl' => HTTPS_SERVER
            )
        ), $this->model_setting_store->getStores());

        $data['store']  = $store;

        $data['currenttemplate'] = $this->config->get('config_template');

        $this->load->model('design/layout');
        $data['layouts'] = $this->model_design_layout->getLayouts();

        if ($this->config->get('alsoviewed_status')) {
            $data['alsoviewed_status'] = $this->config->get('alsoviewed_status');
        } else {
            $data['alsoviewed_status'] = '0';
        }

        $hostname = (!empty($_SERVER['HTTP_HOST'])) ? $_SERVER['HTTP_HOST'] : '' ;
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        $data['b64']         = empty($data['data']['alsoviewed']['LicensedOn']) ? base64_decode('ICAgIDxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciBmYWRlIGluIj4NCiAgICAgICAgPGJ1dHRvbiB0eXBlPSJidXR0b24iIGNsYXNzPSJjbG9zZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgYXJpYS1oaWRkZW49InRydWUiPsOXPC9idXR0b24+DQogICAgICAgIDxoND5XYXJuaW5nISBVbmxpY2Vuc2VkIHZlcnNpb24gb2YgdGhlIG1vZHVsZSE8L2g0Pg0KICAgICAgICA8cD5Zb3UgYXJlIHJ1bm5pbmcgYW4gdW5saWNlbnNlZCB2ZXJzaW9uIG9mIHRoaXMgbW9kdWxlISBZb3UgbmVlZCB0byBlbnRlciB5b3VyIGxpY2Vuc2UgY29kZSB0byBlbnN1cmUgcHJvcGVyIGZ1bmN0aW9uaW5nLCBhY2Nlc3MgdG8gc3VwcG9ydCBhbmQgdXBkYXRlcy48L3A+PGRpdiBzdHlsZT0iaGVpZ2h0OjVweDsiPjwvZGl2Pg0KICAgICAgICA8YSBjbGFzcz0iYnRuIGJ0bi1kYW5nZXIiIGhyZWY9ImphdmFzY3JpcHQ6dm9pZCgwKSIgb25jbGljaz0iJCgnYVtocmVmPSNpc2Vuc2Vfc3VwcG9ydF0nKS50cmlnZ2VyKCdjbGljaycpIj5FbnRlciB5b3VyIGxpY2Vuc2UgY29kZTwvYT4NCiAgICA8L2Rpdj4=') : '';
        $data['hostname']       = (strstr($hostname,'http://') === false) ? 'http://'.$hostname : $hostname;
        $data['domHostname'] 	= base64_encode($data['hostname']);
        $data['licenseDataBase64'] = !empty($data['data']['alsoviewed']['License']) ? base64_encode(json_encode($data['data']['alsoviewed']['License'])) : '';

        $data['tab_statistics'] = $this->load->view($this->modulePath.'/tab_statistics', $data);
        $data['tab_control_panel'] = $this->load->view($this->modulePath.'/tab_panel', $data);

        $this->response->setOutput($this->load->view($this->modulePath, $data));
    }


    public function install() {
        $this->moduleModel->install();
    }

    public function uninstall() {
        $this->load->model('setting/setting');

        $this->load->model('setting/store');
        $this->model_setting_setting->deleteSetting('alsoviewed_module', 0);
        $stores = $this->model_setting_store->getStores();
        foreach ($stores as $store) {
            $this->model_setting_setting->deleteSetting('alsoviewed_module', $store['store_id']);
        }
        $this->moduleModel->uninstall();
    }

    private function validate()
    {
        if (!$this->user->hasPermission('modify', $this->modulePath)) {
            $this->error = true;
        }

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

    private function getCatalogURL()
    {
        if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
            $storeURL = HTTPS_CATALOG;
        } else {
            $storeURL = HTTP_CATALOG;
        }

        return $storeURL;
    }

    private function getServerURL()
    {
        if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
            $storeURL = HTTPS_SERVER;
        } else {
            $storeURL = HTTP_SERVER;
        }

        return $storeURL;
    }

    private function getCurrentStore($store_id)
    {
        if ($store_id && $store_id != 0) {
            $store = $this->model_setting_store->getStore($store_id);
        } else {
            $store['store_id'] = 0;
            $store['name']     = $this->config->get('config_name');
            $store['url']      = $this->getCatalogURL();
        }

        return $store;
    }

}
