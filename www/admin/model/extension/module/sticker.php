<?php
class ModelExtensionModuleSticker extends Model {
	public function createColumns () {
		// Custom
		$query = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product");
		$sticker_custom = false;

		if ($query->rows) {
			
			foreach ($query->rows as $row) {
				if ($row['Field'] == 'sticker_custom') {
					$sticker_custom = true;
				}
			}

			if (!$sticker_custom) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product`  ADD `sticker_custom` TEXT NOT NULL;");
			}
		}
	}
	
	public function editProduct($product_id, $sticker_custom) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET sticker_custom = '" . $this->db->escape(serialize($sticker_custom)) . "', date_modified = NOW() WHERE product_id = '" . (int)$product_id . "'");

		$this->cache->delete('product');
	}
}