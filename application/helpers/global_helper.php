<?php
/*-------- GET DATA payment method --------*/
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
?>