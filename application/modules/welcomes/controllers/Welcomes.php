<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Welcomes extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('welcome');
	}
	public function index(){
			redirect('ukms/ukmDetailProfile?ukmName='. main_ukm()->name);

	}

}
?>