<?php

class ModelExtensionShippingNewpost extends Model
{

    function getQuote($address)
    {
        $this->load->language('extension/shipping/newpost');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $this->config->get('free_geo_zone_id') . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");

        if (!$this->config->get('free_geo_zone_id'))
        {
            $status = true;
        } elseif ($query->num_rows)
        {
            $status = true;
        } else
        {
            $status = false;
        }

        if ($this->cart->getSubTotal() < $this->config->get('free_total'))
        {
            $status = false;
        }

        $image = HTTP_SERVER.'image/catalog/shipping/cur_newpost.jpg';
        $image_html = "<img src='$image' alt='".$this->language->get('text_title')."' title='".$this->language->get('text_title')."'>";
        
        $method_data = array();

        if ($status)
        {
            $quote_data = array();

            $quote_data['newpost'] = array(
                'code' => 'newpost.newpost',
                'title' => $image_html.' '.$this->language->get('text_description'),
                'cost' => $this->config->get('shipping_newpost_cost'),
                'tax_class_id' => $this->config->get('shipping_newpost_tax_class_id'),
                'text' => $this->currency->format($this->tax->calculate($this->config->get('shipping_newpost_cost'), $this->config->get('shipping_newpost_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
            );

            $method_data = array(
                'code' => 'newpost.newpost',
                'title' => $this->language->get('text_title'),
                'quote' => $quote_data,
                'sort_order' => $this->config->get('shipping_newpost_sort_order'),
                'error' => false
            );
        }

        return $method_data;
    }

}
