<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Confirmations extends MX_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->model('confirmation');
	}
	
	public function index(){
        if($this->cart->total() > 0){
            $this->template->write_view('index');
        }else{
            redirect(site_url('shops'));
        }
    }
}