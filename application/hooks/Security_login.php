<?php
	/*#### Security For Login ####*/
	if(!function_exists('session_check')) {
	function session_check(){
		$CI = &get_instance();
		$CI->load->database();
		if(!($CI->session->userdata('id'))) {
				if($CI->uri->segment(1) != "logins" &&
				$CI->uri->segment(1) != "blogs" &&
				$CI->uri->segment(1) != "shops" &&
				$CI->uri->segment(1) != "contactus" &&
				$CI->uri->segment(1) != "ukms" &&
				$CI->uri->segment(1) != "carts" &&
				$CI->uri->segment(1) != "confirmations" &&
				$CI->uri->segment(1) != "")	{
					return redirect('logins');
				}
			}
		}
	}
?>