<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Productz extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('product');
	}
	
	public function index(){
		$this->template->write_view('index');
    }
}