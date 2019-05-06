<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboardz extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('dashboard');
	}
	
	public function index(){
		$this->template->write_view('index');
    }
}