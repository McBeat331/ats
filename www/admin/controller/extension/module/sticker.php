<?php
class ControllerExtensionModuleSticker extends Controller {
	private $error = array();
	private $filename = DIR_CATALOG . 'view/theme/default/stylesheet/sticker/custom.css';

	public function index() {
		$this->load->language('extension/module/sticker');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_sticker', $this->request->post);
			$this->editStyle($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			
			if ((int)$this->request->post['module_sticker_apply']) {
				$this->response->redirect($this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'], true));
			}

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
		$this->load->model('catalog/product');
		
		$data = $this->getList();
		
		$data['version'] = '4.0.1';

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['tab_setting'] = $this->language->get('tab_setting');
		$data['tab_product'] = $this->language->get('tab_product');
		$data['tab_contact'] = $this->language->get('tab_contact');
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_new'] = $this->language->get('tab_new');
		$data['tab_discount'] = $this->language->get('tab_discount');
		$data['tab_special'] = $this->language->get('tab_special');
		$data['tab_bestseller'] = $this->language->get('tab_bestseller');
		$data['tab_stock'] = $this->language->get('tab_stock');
		$data['tab_price'] = $this->language->get('tab_price');
		$data['tab_custom'] = $this->language->get('tab_custom');
		
		$data['text_date_added'] = $this->language->get('text_date_added');
		$data['text_date_available'] = $this->language->get('text_date_available');
		$data['text_label_discount_percent'] = $this->language->get('text_label_discount_percent');
		$data['text_label_discount_price'] = $this->language->get('text_label_discount_price');
		$data['text_label_percent'] = $this->language->get('text_label_percent');
		$data['text_label_text'] = $this->language->get('text_label_text');
		$data['text_label_text_percent'] = $this->language->get('text_label_text_percent');
		$data['text_left'] = $this->language->get('text_left');
		$data['text_right'] = $this->language->get('text_right');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_warning'] = $this->language->get('text_warning');
		$data['text_version'] = $this->language->get('text_version');
		$data['text_no_sticker'] = $this->language->get('text_no_sticker');
		
		$data['tab_setting'] = $this->language->get('tab_setting');
		$data['tab_contact'] = $this->language->get('tab_contact');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_offset_catalog_left_x'] = $this->language->get('entry_offset_catalog_left_x');
		$data['entry_offset_catalog_right_x'] = $this->language->get('entry_offset_catalog_right_x');
		$data['entry_offset_product_left_x'] = $this->language->get('entry_offset_product_left_x');
		$data['entry_offset_product_right_x'] = $this->language->get('entry_offset_product_right_x');
		$data['entry_offset_catalog_y'] = $this->language->get('entry_offset_catalog_y');
		$data['entry_offset_product_y'] = $this->language->get('entry_offset_product_y');
		$data['entry_name_status'] = $this->language->get('entry_name_status');
		$data['entry_date_new'] = $this->language->get('entry_date_new');
		$data['entry_day'] = $this->language->get('entry_day');
		$data['entry_sale'] = $this->language->get('entry_sale');
		$data['entry_label'] = $this->language->get('entry_label');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_type'] = $this->language->get('entry_type');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_price'] = $this->language->get('entry_price');
		$data['entry_min'] = $this->language->get('entry_min');
		$data['entry_max'] = $this->language->get('entry_max');
		$data['entry_date'] = $this->language->get('entry_date');
		$data['entry_date_start'] = $this->language->get('entry_date_start');
		$data['entry_date_end'] = $this->language->get('entry_date_end');
		$data['entry_discount_quantity'] = $this->language->get('entry_discount_quantity');
		
		$data['button_apply'] = $this->language->get('button_apply');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_add'] = $this->language->get('button_add');
		$data['button_remove'] = $this->language->get('button_remove');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		$data['module_sticker_types'] = array(
			'star'      => $this->language->get('text_star'), 
			'rectangle' => $this->language->get('text_rectangle'), 
			'ribbon'    => $this->language->get('text_ribbon'), 
			'diagonal'  => $this->language->get('text_diagonal')
		);

		if (isset($this->request->post['module_sticker_status'])) {
			$data['module_sticker_status'] = $this->request->post['module_sticker_status'];
		} else {
			$data['module_sticker_status'] = $this->config->get('module_sticker_status');
		}

		if (isset($this->request->post['module_sticker_offset'])) {
			$data['module_sticker_offset'] = $this->request->post['module_sticker_offset'];
		} elseif ($this->config->get('module_sticker_offset')) {
			$data['module_sticker_offset'] = $this->config->get('module_sticker_offset');
		} else {
			$data['module_sticker_offset']['catalog']['x']['left'] = 0;
			$data['module_sticker_offset']['catalog']['x']['right'] = 0;
			$data['module_sticker_offset']['product']['x']['left'] = 0;
			$data['module_sticker_offset']['product']['x']['right'] = 0;
			$data['module_sticker_offset']['catalog']['y'] = 5;
			$data['module_sticker_offset']['product']['y'] = 5;
		}

		if (isset($this->request->post['module_sticker_new'])) {
			$data['module_sticker_new'] = $this->request->post['module_sticker_new'];
		} else {
			$data['module_sticker_new'] = $this->config->get('module_sticker_new');
		}

		if (isset($this->request->post['module_sticker_discount'])) {
			$data['module_sticker_discount'] = $this->request->post['module_sticker_discount'];
		} else {
			$data['module_sticker_discount'] = $this->config->get('module_sticker_discount');
		}
		
		if (isset($this->request->post['module_sticker_special'])) {
			$data['module_sticker_special'] = $this->request->post['module_sticker_special'];
		} else {
			$data['module_sticker_special'] = $this->config->get('module_sticker_special');
		}
		
		if (isset($this->request->post['module_sticker_bestseller'])) {
			$data['module_sticker_bestseller'] = $this->request->post['module_sticker_bestseller'];
		} else {
			$data['module_sticker_bestseller'] = $this->config->get('module_sticker_bestseller');
		}
		
		if (isset($this->request->post['module_sticker_stock'])) {
			$data['module_sticker_stock'] = $this->request->post['module_sticker_stock'];
		} else {
			$data['module_sticker_stock'] = $this->config->get('module_sticker_stock');
		}
		
		$this->load->model('tool/image');
		
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		
		if (isset($this->request->post['module_sticker_price'])) {
			$data['module_sticker_price'] = $this->request->post['module_sticker_price'];
		} elseif ($this->config->get('module_sticker_price')) {
			$data['module_sticker_price'] = $this->config->get('module_sticker_price');
		} else {
			$data['module_sticker_price'] = array();
		}
		
		if (isset($this->request->post['module_sticker_custom'])) {
			$data['module_sticker_custom'] = $this->request->post['module_sticker_custom'];
		} elseif ($this->config->get('module_sticker_custom')) {
			$data['module_sticker_custom'] = $this->config->get('module_sticker_custom');
		} else {
			$data['module_sticker_custom'] = array();
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/sticker', $data));
	}
	
	protected function getList() {
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = null;
		}

		if (isset($this->request->get['filter_model'])) {
			$filter_model = $this->request->get['filter_model'];
		} else {
			$filter_model = null;
		}

		if (isset($this->request->get['filter_price'])) {
			$filter_price = $this->request->get['filter_price'];
		} else {
			$filter_price = null;
		}

		if (isset($this->request->get['filter_quantity'])) {
			$filter_quantity = $this->request->get['filter_quantity'];
		} else {
			$filter_quantity = null;
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = null;
		}

		if (isset($this->request->get['filter_image'])) {
			$filter_image = $this->request->get['filter_image'];
		} else {
			$filter_image = null;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'pd.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_model'])) {
			$url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_price'])) {
			$url .= '&filter_price=' . $this->request->get['filter_price'];
		}

		if (isset($this->request->get['filter_quantity'])) {
			$url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_image'])) {
			$url .= '&filter_image=' . $this->request->get['filter_image'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['products'] = array();

		$filter_data = array(
			'filter_name'	  => $filter_name,
			'filter_model'	  => $filter_model,
			'filter_price'	  => $filter_price,
			'filter_quantity' => $filter_quantity,
			'filter_status'   => $filter_status,
			'filter_image'    => $filter_image,
			'sort'            => $sort,
			'order'           => $order,
			'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'           => $this->config->get('config_limit_admin')
		);

		$this->load->model('tool/image');

		$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

		$results = $this->model_catalog_product->getProducts($filter_data);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 40, 40);
			}

			$special = false;

			$product_specials = $this->model_catalog_product->getProductSpecials($result['product_id']);

			foreach ($product_specials  as $product_special) {
				if (($product_special['date_start'] == '0000-00-00' || strtotime($product_special['date_start']) < time()) && ($product_special['date_end'] == '0000-00-00' || strtotime($product_special['date_end']) > time())) {
					$special = $product_special['price'];

					break;
				}
			}

			$data['products'][] = array(
				'product_id'     => $result['product_id'],
				'image'          => $image,
				'name'           => $result['name'],
				'model'          => $result['model'],
				'price'          => $result['price'],
				'special'        => $special,
				'quantity'       => $result['quantity'],
				'status'         => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
				'sticker_custom' => unserialize($result['sticker_custom']),
				'edit'       	 => $this->url->link('catalog/product/edit', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $result['product_id'] . $url, true)
			);
		}
		
		$data['language_id'] = $this->config->get('config_language_id');
		$data['module_sticker_custom_list'] = $this->config->get('module_sticker_custom');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_image'] = $this->language->get('column_image');
		$data['column_name'] = $this->language->get('column_name');
		$data['column_model'] = $this->language->get('column_model');
		$data['column_price'] = $this->language->get('column_price');
		$data['column_quantity'] = $this->language->get('column_quantity');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_sticker'] = $this->language->get('column_sticker');
		$data['column_action'] = $this->language->get('column_action');

		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_model'] = $this->language->get('entry_model');
		$data['entry_price'] = $this->language->get('entry_price');
		$data['entry_quantity'] = $this->language->get('entry_quantity');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_image'] = $this->language->get('entry_image');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_filter'] = $this->language->get('button_filter');

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_model'])) {
			$url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_price'])) {
			$url .= '&filter_price=' . $this->request->get['filter_price'];
		}

		if (isset($this->request->get['filter_quantity'])) {
			$url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_image'])) {
			$url .= '&filter_image=' . $this->request->get['filter_image'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . '&sort=pd.name' . $url, true);
		$data['sort_model'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . '&sort=p.model' . $url, true);
		$data['sort_price'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . '&sort=p.price' . $url, true);
		$data['sort_quantity'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . '&sort=p.quantity' . $url, true);
		$data['sort_status'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . '&sort=p.status' . $url, true);
		$data['sort_order'] = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . '&sort=p.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_model'])) {
			$url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_price'])) {
			$url .= '&filter_price=' . $this->request->get['filter_price'];
		}

		if (isset($this->request->get['filter_quantity'])) {
			$url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_image'])) {
			$url .= '&filter_image=' . $this->request->get['filter_image'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $product_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('extension/module/sticker', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $product_total, ceil($product_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_model'] = $filter_model;
		$data['filter_price'] = $filter_price;
		$data['filter_quantity'] = $filter_quantity;
		$data['filter_status'] = $filter_status;
		$data['filter_image'] = $filter_image;

		$data['sort'] = $sort;
		$data['order'] = $order;

		return $data;
	}
	
	public function save() {
		$json = array();
		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = '';
		}
		
		if (isset($this->request->post['product_sticker_custom'])) {
			$sticker_custom = $this->request->post['product_sticker_custom'];
		} else {
			$sticker_custom = array();
		}
		
		$this->load->model('extension/module/sticker');
		$this->model_extension_module_sticker->editProduct($product_id, $sticker_custom);	
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/sticker')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!is_writable($this->filename)) {
			$this->error['warning'] = sprintf($this->language->get('error_writable'), $this->filename);
		}

		return !$this->error;
	}
	
	protected function editStyle($data) {
		$handle = fopen($this->filename, 'r+');
		
		$css = ".sticker-catalog.sticker-left{left: " . ((int)$data['module_sticker_offset']['catalog']['x']['left'] ? $data['module_sticker_offset']['catalog']['x']['left'] : 0) . "px;}\n";
		$css .= ".sticker-catalog.sticker-right{right: " . ((int)$data['module_sticker_offset']['catalog']['x']['right'] ? $data['module_sticker_offset']['catalog']['x']['right'] : 0) . "px;}\n";
		$css .= ".sticker-product.sticker-left{left: " . ((int)$data['module_sticker_offset']['product']['x']['left'] ? $data['module_sticker_offset']['product']['x']['left'] : 0) . "px;}\n";
		$css .= ".sticker-product.sticker-right{right: " . ((int)$data['module_sticker_offset']['product']['x']['right'] ? $data['module_sticker_offset']['product']['x']['right'] : 0) . "px;}\n";
		$css .= ".sticker-catalog{top: " . ((int)$data['module_sticker_offset']['catalog']['y'] ? $data['module_sticker_offset']['catalog']['y'] : 0) . "px;}\n";
		$css .= ".sticker-product{top: " . ((int)$data['module_sticker_offset']['product']['y'] ? $data['module_sticker_offset']['product']['y'] : 0) . "px;}\n";
		
		if ($data['module_sticker_new']['status'] && $data['module_sticker_new']['image']) {
			$css .= ".sticker-new{background: url('/image/" . $data['module_sticker_new']['image'] . "');}\n";
		}
		
		if ($data['module_sticker_bestseller']['status'] && $data['module_sticker_bestseller']['image']) {
			$css .= ".sticker-bestseller{background: url('/image/" . $data['module_sticker_bestseller']['image'] . "');}\n";
		}
		
		if ($data['module_sticker_special']['status'] && $data['module_sticker_special']['image']) {
			$css .= ".sticker-special{background: url('/image/" . $data['module_sticker_special']['image'] . "');}\n";
		}
		
		if ($data['module_sticker_discount']['status'] && $data['module_sticker_discount']['image']) {
			$css .= ".sticker-discount{background: url('/image/" . $data['module_sticker_discount']['image'] . "');}\n";
		}
		
		if ($data['module_sticker_stock']['status'] && $data['module_sticker_stock']['image']) {
			$css .= ".sticker-stock{background: url('/image/" . $data['module_sticker_stock']['image'] . "');}\n";
		}
		
		if (isset($data['module_sticker_price']) && $data['module_sticker_price']) {
			
			foreach ($data['module_sticker_price'] as $key => $value) {
				if ($value['status'] && $value['image']) {
					$css .= ".sticker-price" . $key . "{background: url('/image/" . $value['image'] . "');}\n";
				}
			}
		}
		
		if (isset($data['module_sticker_custom']) && $data['module_sticker_custom']) {
			
			foreach ($data['module_sticker_custom'] as $key => $value) {
				
				if ($value['status'] && $value['image']) {
					$css .= ".sticker-custom" . $key . "{background: url('/image/" . $value['image'] . "');}\n";
				}
			}
		}
		
		fwrite($handle, $css);
		fclose($handle);
	}
	
	public function install() {
		$this->load->model('extension/module/sticker');
		$this->model_extension_module_sticker->createColumns();
	}
}