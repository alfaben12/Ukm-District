<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Orderz extends MX_Controller {
	public $flag = true;
    public $_version = '';

	public function __construct() {
		parent::__construct();
        $this->load->model('order');

        if ($this->flag) {
			$this->_version = '_v2.php';
		}else{
			$this->_version = '';
		}
	}
	
	public function index(){
		$data['order'] = $this->order->fetch_table('*','ukm_order','','id','desc','','',TRUE);

		$this->template->write_view('index'. $this->_version, $data);
    }

    function processDelete(){
		$this->order->delete_table("ukm_order","id", $this->input->get('id'));
		$this->order->delete_table("ukm_order_detail","order_id", $this->input->get('id'));
		redirect('orderz');
	}
}