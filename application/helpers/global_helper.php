<?php
/*-------- GET DATA MAIN UKM --------*/
if(!function_exists('main_ukm')) {
	function main_ukm() {
		$CI = &get_instance();
		$CI->load->database();

		$CI->db->select('*');
		$CI->db->from('ukm');
		$CI->db->where('id', 1);
		$result = $CI->db->get();
		return $result->row();
	}
}

/*-------- GENERATE RANDOM STRING & NUMBER FOR ORDER CODE --------*/
function generateInvoiceNumber($length = 4) {
	$CI = &get_instance();
	$CI->load->database();

	$data = array();
	$CI->db->select_max('id');
	$CI->db->from('ukm_order');
	$query = $CI->db->get();
	$max_id = sprintf("%04s", $query->row()->id + 1);
	
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString.''.$max_id;
}
?>