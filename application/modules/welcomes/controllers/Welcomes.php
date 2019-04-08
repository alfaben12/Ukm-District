<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Welcomes extends MX_Controller {
	public function index(){
		redirect('ukms/ukmDetailProfile?ukmName=Kopi Kutjur');
	}

}
?>