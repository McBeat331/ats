<?php
class ControllerExtensionModuleAlsoViewed extends Controller {
    // Module Unifier
    private $moduleName;
    private $moduleNameSmall;
    private $modulePath;
    private $callModel;
    private $moduleModel;
    private $moduleLanguage;
    // Module Unifier

    public function __construct($registry) {
        parent::__construct($registry);

        $this->config->load('isenselabs/alsoviewed');

        /* OC version-specific declarations - Begin */
        $this->moduleName      = $this->config->get('alsoviewed_name');
        $this->moduleNameSmall = $this->config->get('alsoviewed_name_small');
        $this->modulePath      = $this->config->get('alsoviewed_path');
        /* OC version-specific declarations - End */

        /* Module-specific declarations - Begin */
        $this->load->model($this->modulePath);
        $this->callModel   = $this->config->get('alsoviewed_model_call');
        $this->moduleModel = $this->{$this->callModel};

        $this->moduleLanguage = $this->load->language($this->modulePath, $this->moduleNameSmall);
        $this->moduleLanguage = $this->moduleLanguage[$this->moduleNameSmall];
        /* Module-specific declarations - End */
    }

    public function index() {
        $data = $this->moduleLanguage->all();
        $data['modulePath']		 = $this->modulePath;
        $data['decode_widget']   = htmlspecialchars_decode($this->moduleData['WrapInWidget']['CustomCSS']);

        if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
            $data['data']['alsoviewed'] = str_replace('http', 'https', $this->config->get('alsoviewed'));
        } else {
            $data['data']['alsoviewed'] = $this->config->get('alsoviewed');
        }

        $data['data']['alsoviewed'] = $this->config->get('alsoviewed_module');

        if (file_exists(DIR_TEMPLATE . $this->getConfigTemplate() . '/template/' . $this->modulePath)) {
            $this->template = $this->getConfigTemplate() . '/template/' . $this->modulePath;
        } else {
            $this->template = 'default/template/' . $this->modulePath;
        }

        $moduleSetting      = $this->moduleModel->getSetting('alsoviewed', $this->config->get('config_store_id'));
        $data['moduleData'] = isset($moduleSetting['alsoviewed']) ? $moduleSetting['alsoviewed'] : array();

        if (!isset($data['moduleData']['PanelName'][$this->config->get('config_language')])) {
            $data['PanelName'] = $data['heading_title'];
        } else {
            $data['PanelName'] = $data['moduleData']['PanelName'][$this->config->get('config_language')];
        }

        if (isset($this->request->get['product_id'])) {
            $alsoViewedProducts = $this->listalsoViewedById((int) $this->request->get['product_id'], (int) $data['moduleData']['NumberOfProducts']);
        } else {
            $alsoViewedProducts = array();
        }

        $this->load->model('tool/image');

        $data['products'] = array();

        foreach ($alsoViewedProducts as $result) {
            if ($result['image']) {
                $image = $this->model_tool_image->resize($result['image'], $data['moduleData']['PictureWidth'], $data['moduleData']['PictureHeight']);
            } else {
                $image = false;
            }

            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float) $result['special']) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float) $result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }


            if ($this->config->get('config_review_status')) {
                $rating = $result['rating'];
            } else {
                $rating = false;
            }

            $data['products'][] = array(
                'product_id' => $result['product_id'],
                'thumb' => $image,
                'name' => $result['name'],
                'price' => $price,
                'special' => $special,
                'rating' => $rating,
                'tax' => $tax,
                'href' => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                'description' =>  utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
            );
        }

        $ajaxrequest = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

        if ($ajaxrequest == false) {
            $data['product_id'] = $this->request->get['product_id'];
            if (version_compare(VERSION, '2.2.0.0', "<")) {
                if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/' . $this->modulePath)) {
                    return $this->load->view($this->config->get('config_template') . '/template/' . $this->modulePath, $data);
                } else {
                    return $this->load->view('default/template/'.$this->modulePath, $data);
                }
            } else {
                return $this->load->view($this->modulePath, $data);
            }
        } else {
            if (version_compare(VERSION, '2.2.0.0', "<")) {
                if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/' . $this->modulePath . '/alsoviewed.twig')) {
                    return $this->load->view($this->config->get('config_template') . '/template/' . $this->modulePath . '/alsoviewed.twig', $data);
                } else {
                    return $this->load->view('default/template/'.$this->modulePath . '/alsoviewed.twig', $data);
                }
            } else {
                return $this->load->view($this->modulePath . '/alsoviewed', $data);
            }
        }
    }

    public function getindex() {
        $this->response->setOutput($this->index());
    }

    public function getCatalogURL($store_id) {
        if (isset($store_id) && $store_id) {
            $storeURL = $this->db->query('SELECT url FROM `' . DB_PREFIX . 'store` WHERE store_id=' . $store_id)->row['url'];
        } elseif (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
            $storeURL = HTTPS_SERVER;
        } else {
            $storeURL = HTTP_SERVER;
        }
        return $storeURL;
    }

    public function logProductView($eventRoute, $data) {
        if (!isset($this->request->get['product_id'])) return;

        $this->load->model('catalog/product');
        $product_info = $this->model_catalog_product->getProduct($this->request->get['product_id']);
        $this->catchAlsoViewed($product_info);
    }

    public function catchAlsoViewed($product_info) {
        if (empty($this->session->data['alsoViewed'])) {
            $this->session->data['alsoViewed'] = $product_info['product_id'];
        } else {
            if (strstr($this->session->data['alsoViewed'],$product_info['product_id']) == false) {
                $this->session->data['alsoViewed'] .= ','.$product_info['product_id'];
            }

        }

        $alsoViewed = explode(',',$this->session->data['alsoViewed']);

        sort($alsoViewed);

        $groupedalsoViewed = array();
        foreach ($alsoViewed as $k => $b) {
            for ($i=1; $i<count($alsoViewed); $i++) {
                if (!empty($alsoViewed[$k+$i])) {
                    $groupedalsoViewed[] = array('low'=>$b,'high'=>$alsoViewed[$k+$i]);
                }
            }
        }

        foreach($groupedalsoViewed as $p) {
            $pairExists = $this->db->query("SELECT * FROM `" . DB_PREFIX . "alsoviewed` WHERE `low` = '".$p['low']."' AND `high` = '".$p['high']."'");

            if (empty($pairExists->rows)) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "alsoviewed` SET `low` = '".$p['low']."', `high`='".$p['high']."',`number` = '1', `date_added`=NOW()");
            } else {
                foreach ($pairExists->rows as $rec) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "alsoviewed` SET `number` = '" . ((int)$rec['number']+1) . "' WHERE `id`='".$rec['id']."'");
                }
            }
        }
    }

    private function listalsoViewedById($product_id, $limit = 5) {
        $this->load->model('catalog/product');
        $data = $this->db->query("SELECT * FROM `" . DB_PREFIX . "alsoviewed` WHERE `low` = $product_id OR `high` = $product_id ORDER BY `number` DESC LIMIT $limit");

        $rows     = $data->rows;
        $products = array();

        foreach ($rows as $row) {
            if ($row['low'] == $product_id) {
                $pid = $row['high'];
            } else {
                $pid = $row['low'];
            }
            $products[$pid] = $this->model_catalog_product->getProduct($pid);
        }
        return $products;
    }

    private function getConfigTemplate() {
        if (version_compare(VERSION, '2.2.0.0', '<')) {
            return $this->config->get('config_template');
        } else {
            return $this->config->get($this->config->get('config_theme') . '_directory');
        }
    }
}
