<?php
class ModelExtensionModuleAlsoviewed extends Model {
    private $eventGroup = 'alsoviewed';
    private $modulePath;

    public function __construct($registry){
        parent::__construct($registry);

        $this->load->config('isenselabs/alsoviewed');
        $this->modulePath = $this->config->get('alsoviewed_path');
        $this->load->model('setting/event');
    }

    public function setupEventHandlers() {
        $this->model_setting_event->deleteEventByCode($this->eventGroup);

        // Catalog events
        $this->model_setting_event->addEvent($this->eventGroup, "catalog/controller/product/product/before", $this->modulePath . "/logProductView");
    }

    public function removeEventHandlers() {
        $this->model_setting_event->deleteEventByCode($this->eventGroup);
    }

    public function install() {
        $query = $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "alsoviewed`
            (`id` INT(11) NOT NULL AUTO_INCREMENT,
                `low` INT(11) NULL DEFAULT '0',
                `high` INT(11) NULL DEFAULT '0',
                `number` INT(11) NULL DEFAULT '0',
                `date_added` DATETIME  NOT NULL DEFAULT '0000-00-00 00:00:00',
                PRIMARY KEY (`id`));");
    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "alsoviewed`");
        $this->model_setting_event->deleteEventByCode($this->eventGroup);
    }

    public function getSetting($code, $store_id = 0) {
        $this->load->model('setting/setting');
        return $this->model_setting_setting->getSetting($code, $store_id);
    }

    public function editSetting($code, $data, $store_id = 0) {
        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting($code, $data, (int)$store_id);
    }
}
