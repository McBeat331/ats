<?php
class ControllerExtensionModuleNewsletters extends Controller {

	private $error = array();

	public function index() {
		$this->load->language('extension/module/newsletter');
		$this->load->model('extension/module/newsletters');
		
		$this->model_extension_module_newsletters->createNewsletter();

		
		$data['brands'] = array();

		//$data['footernewstext'] = $this->load->controller('common/footernewstext');
		
		return $this->load->view('extension/module/newsletters', $data);
	}
	public function news()
	{
		$this->load->model('extension/module/newsletters');
		
		$json = array();
		$json['message'] = $this->model_extension_module_newsletters->subscribes($this->request->post);
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		
	}
	
	public function uninstall() {
		$this->load->model('codezeel/newsletter');

		$this->model_codezeel_newsletter->dropNewsletter();
	}
	
}
