<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Model {
    public function __construct(){
        parent::__construct();
    }

  public function getData($rowno,$rowperpage,$q) {
 
    $this->db->select('ukm_blog.*, admin.full_name AS author');
    $this->db->from('ukm_blog');
    $this->db->join('admin', 'admin.id = ukm_blog.admin_id');
    if ($q != '') {
      $this->db->like('title', $q);
      $this->db->or_like('description', $q);
    }
   
    $this->db->limit($rowperpage, $rowno);  
    $query = $this->db->get();
 
    return $query->result_array();
  }

  public function getRecordCount($q) {
    $this->db->select('count(*) as allcount');
    $this->db->from('ukm_blog');
    if ($q != '') {
      $this->db->like('title', $q);
      $this->db->or_like('description', $q);
    }
    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
}