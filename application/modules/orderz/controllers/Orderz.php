<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Orderz extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('order');
	}
	
	public function index(){
		$data['order'] = $this->order->fetch_table('*','ukm_order','','id','desc','','',TRUE);

		$this->template->write_view('index', $data);
    }

    function processDelete(){
		$this->order->delete_table("ukm_order","id", $this->input->get('id'));
		redirect('orderz');
	}
}