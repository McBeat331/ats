<?php
class ModelExtensionModuleSticker extends Model {
	public function getProductSticker($product) {
		
		$this->load->language('extension/module/sticker');
		
		if (!isset($product['sticker_bestseller']) || !isset($product['sticker_custom'])) {
			$data = $this->getStickerData($product['product_id']);
			$product['sticker_bestseller'] = $data['sticker_bestseller'];
			$product['sticker_custom'] = $data['sticker_custom'];
		}
		
		$language_id = $this->config->get('config_language_id');
		
		$sticker_data = array(
			'left'  => array(),
			'right' => array(),
		);

		// New
		$sticker_new = $this->config->get('module_sticker_new');
		$date_added = (time() - strtotime($sticker_new['date_new'] ? $product['date_added'] : $product['date_available'])) / 86400;
		
		if ($sticker_new['name_status']) {
			$name = html_entity_decode($sticker_new[$language_id]['name'], ENT_QUOTES, 'UTF-8');
		} else {
			$name = false;
		}

		if ($sticker_new['status'] && (int)$date_added <= (int)$sticker_new['day']) {
			$sticker_data[$sticker_new['position']][] = array(
				'class' 	 => 'sticker-new sticker-' . $sticker_new['type'],
				'name'  	 => $name,
				'sort_order' => $sticker_new['sort_order']
			);
		}
		
		// Bestseller
		$sticker_bestseller = $this->config->get('module_sticker_bestseller');
		
		if ($sticker_bestseller['status'] && (int)$sticker_bestseller['sale'] && $product['sticker_bestseller'] && $product['sticker_bestseller'] >= $sticker_bestseller['sale']) {
			
			if ($sticker_bestseller['name_status']) {
				$name = html_entity_decode($sticker_bestseller[$language_id]['name'], ENT_QUOTES, 'UTF-8');
			} else {
				$name = false;
			}
			
			$sticker_data[$sticker_bestseller['position']][] = array(
				'class' 	 => 'sticker-bestseller sticker-' . $sticker_bestseller['type'],
				'name'  	 => $name,
				'sort_order' => $sticker_bestseller['sort_order']
			);
		}
		
		// Discount
		$sticker_discount = $this->config->get('module_sticker_discount');
		
		if ($sticker_discount['status']) {

			foreach ($this->getProductDiscounts($product['product_id']) as $key => $value) {
				if ($sticker_discount['name_status']) {
				
					if ($sticker_discount['label']) {
						$discount = '<span class="sticker-discount-percent">' . $this->getPercent($product['price'], $value['price']) . '</span>';
					} else {
						$discount = '<span class="sticker-discount-price">' . $this->currency->format($this->tax->calculate($value['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) . '</span>';
					}
					
					$name = html_entity_decode(sprintf($sticker_discount[$language_id]['name'], $value['quantity'], $discount), ENT_QUOTES, 'UTF-8');
				} else {
					$name = false;
				}
				
				$sticker_data[$sticker_discount['position']][] = array(
					'class' 	 => 'sticker-discount sticker-' . $sticker_discount['type'],
					'name'  	 => $name,
					'sort_order' => $sticker_discount['sort_order']
				);
			}
		}
		
		// Special
		$sticker_special = $this->config->get('module_sticker_special');
		$class = '';
		
		if ((float)$product['special'] && $sticker_special['status']) {
			if ($sticker_special['name_status']) {
				$name = html_entity_decode($sticker_special[$language_id]['name'] ? $sticker_special[$language_id]['name'] : $this->language->get('text_sticker_special'), ENT_QUOTES, 'UTF-8');
				
				if ($sticker_special['label'] == 2) {
					$name = $name . ' <span class="sticker-text-percent">' . $this->getPercent($product['price'], $product['special']) . '</span>';
				} elseif ($sticker_special['label'] == 1) {
					$class = ' sticker-percent';
					$name = $this->getPercent($product['price'], $product['special']);
				}
			} else {
				$name = false;
			}
			
			$sticker_data[$sticker_special['position']][] = array(
				'class' 	 => 'sticker-special sticker-' . $sticker_special['type'] . $class,
				'name'  	 => $name,
				'sort_order' => $sticker_special['sort_order']
			);
		}
		
		// Stock Status
		$sticker_stock = $this->config->get('module_sticker_stock');
		
		if ($sticker_stock['status'] && ($product['quantity'] <= 0)) {
			
			if ($sticker_stock['name_status']) {
				$name = html_entity_decode($product['stock_status'], ENT_QUOTES, 'UTF-8');
			} else {
				$name = false;
			}
			
			$sticker_data[$sticker_stock['position']][] = array(
				'class' 	 => 'sticker-stock sticker-' . $sticker_stock['type'],
				'name'  	 => $name,
				'sort_order' => $sticker_stock['sort_order']
			);
		}
		
		// Price
		if ($this->config->get('module_sticker_price')) {
			if ((float)$product['special']) {
				$price = $this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax'));
			} else {
				$price = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));
			}
			
			foreach ($this->config->get('module_sticker_price') as $key => $value) {
				if ($value['status'] && (!$value['date_start'] || $value['date_start'] <= date('Y-m-d')) && (!$value['date_end'] || $value['date_end'] > date('Y-m-d')) && ($price >= (float)$value['min']) && ($price <= (float)$value['max'])) {
					
					if ($value['name_status']) {
						$name = html_entity_decode($value[$language_id]['name'], ENT_QUOTES, 'UTF-8');
					} else {
						$name = false;
					}
					
					$sticker_data[$value['position']][] = array(
						'class' 	 => 'sticker-price' . $key . ' sticker-' . $value['type'],
						'name'  	 => $name,
						'sort_order' => $value['sort_order']
					);
				}
			}
		}
		
		// Custom
		if ($product['sticker_custom'] && $this->config->get('module_sticker_custom')) {
			$sticker_custom = unserialize($product['sticker_custom']);
			
			foreach ($this->config->get('module_sticker_custom') as $key => $value) {
				if ($value['status'] && isset($sticker_custom[$key]['status']) && $sticker_custom[$key]['status'] &&  (!$value['date_start'] || $value['date_start'] <= date('Y-m-d')) && (!$value['date_end'] || $value['date_end'] > date('Y-m-d'))) {
					
					if ($value['name_status']) {
						$name = html_entity_decode($value[$language_id]['name'], ENT_QUOTES, 'UTF-8');
					} else {
						$name = false;
					}
					
					$sticker_data[$value['position']][] = array(
						'class' 	 => 'sticker-custom' . $key . ' sticker-' . $value['type'],
						'name'  	 => $name,
						'sort_order' => $value['sort_order']
					);
				}
			}
		}
		
		if ($sticker_data) {
			$sort_order = array();

			if ($sticker_data['left']) {
			
				foreach ($sticker_data['left'] as $key => $value) {
					$sort_order['left'][$key] = $value['sort_order'];
				}

				array_multisort($sort_order['left'], SORT_ASC, $sticker_data['left']);
			}

			if ($sticker_data['right']) {
			
				foreach ($sticker_data['right'] as $key => $value) {
					$sort_order['right'][$key] = $value['sort_order'];
				}
				array_multisort($sort_order['right'], SORT_ASC, $sticker_data['right']);
			}
			
			return array(
				'left'  => $sticker_data['left'],
				'right' => $sticker_data['right']
			);
		} else {
			return false;
		}
	}
	
	private function getStickerData($product_id) {
		$sticker_bestseller = $this->config->get('module_sticker_bestseller');
			
		if ($this->config->get('module_sticker_status') && $sticker_bestseller['status'] && $sticker_bestseller['sale']) {
			$bestseller_sql = ", (SELECT SUM(op.quantity) FROM " . DB_PREFIX . "order_product op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (op.product_id = p2s.product_id) WHERE op.product_id = p.product_id AND o.order_status_id > '0' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' GROUP BY op.product_id LIMIT 1) AS sticker_bestseller";
		} else {
			$bestseller_sql = '';
		}
			
		$query = $this->db->query("SELECT DISTINCT p.sticker_custom " . $bestseller_sql . " FROM " . DB_PREFIX . "product p WHERE p.product_id = '" . (int)$product_id . "'");

		if ($query->num_rows) {
			return array(
				'sticker_custom'     => $query->row['sticker_custom'],
				'sticker_bestseller' => isset($query->row['sticker_bestseller']) ? $query->row['sticker_bestseller'] : '',
			);
		} else {
			return false;
		}
	}
	
	private function getProductDiscounts($product_id) {
		$sticker_discount = $this->config->get('module_sticker_discount');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND quantity >" . ($sticker_discount['quantity'] ? "=" : "") . " 1 AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY quantity ASC, priority ASC, price ASC");

		return $query->rows;
	}
	
	private function getPercent($price_old, $price_new) {
		return '-' . round(($price_old - $price_new) / ($price_old / 100)) . '%';
	}
}