<?php
	/*#### Security For Login ####*/
	if(!function_exists('session_check')) {
	function session_check(){
		$CI = &get_instance();
		$CI->load->database();
		if(!($CI->session->userdata('id'))) {
			if($CI->uri->segment(1) != "logins" &&
				$CI->uri->segment(1) != "")	{
					return redirect('logins');
				}
			}
		}
	}
?>