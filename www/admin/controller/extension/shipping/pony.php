<?php

class ControllerExtensionShippingPony extends Controller
{

    private $error = array();

    public function index()
    {
        $this->load->language('extension/shipping/pony');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate())
        {
            $this->model_setting_setting->editSetting('shipping_pony', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (isset($this->error['warning']))
        {
            $data['error_warning'] = $this->error['warning'];
        } else
        {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_shipping'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/shipping/pony', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/shipping/pony', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true);

        if (isset($this->request->post['shipping_pony_cost']))
        {
            $data['shipping_pony_cost'] = $this->request->post['shipping_pony_cost'];
        } else
        {
            $data['shipping_pony_cost'] = $this->config->get('shipping_pony_cost');
        }

        if (isset($this->request->post['shipping_pony_tax_class_id']))
        {
            $data['shipping_pony_tax_class_id'] = $this->request->post['shipping_pony_tax_class_id'];
        } else
        {
            $data['shipping_pony_tax_class_id'] = $this->config->get('shipping_pony_tax_class_id');
        }

        $this->load->model('localisation/tax_class');

        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

        if (isset($this->request->post['shipping_pony_geo_zone_id']))
        {
            $data['shipping_pony_geo_zone_id'] = $this->request->post['shipping_pony_geo_zone_id'];
        } else
        {
            $data['shipping_pony_geo_zone_id'] = $this->config->get('shipping_pony_geo_zone_id');
        }

        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        if (isset($this->request->post['shipping_pony_status']))
        {
            $data['shipping_pony_status'] = $this->request->post['shipping_pony_status'];
        } else
        {
            $data['shipping_pony_status'] = $this->config->get('shipping_pony_status');
        }

        if (isset($this->request->post['shipping_pony_sort_order']))
        {
            $data['shipping_pony_sort_order'] = $this->request->post['shipping_pony_sort_order'];
        } else
        {
            $data['shipping_pony_sort_order'] = $this->config->get('shipping_pony_sort_order');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/shipping/pony', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/shipping/pony'))
        {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

}
