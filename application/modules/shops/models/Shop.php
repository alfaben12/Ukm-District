<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends MY_Model {
    public function __construct(){
        parent::__construct();
    }

  public function getData($rowno,$rowperpage,$category_id,$price_from,$price_to, $region_id) {
 
    $this->db->select('ukm_product.*, ukm_region.name AS region_name');
    $this->db->from('ukm_product');
    $this->db->join('ukm_region', 'ukm_region.id = ukm_product.region_id');
    if ($category_id != '') {
        $this->db->where('ukm_category_product_id', $category_id);
    }

    if ($region_id != '') {
      $this->db->where('region_id', $region_id);
    }

    if ($price_from != '' && $price_to != '') {
        $this->db->where('price >', $price_from);
        $this->db->where('price <', $price_to);
    }
    
    $this->db->limit($rowperpage, $rowno);  
    $query = $this->db->get();
 
    return $query->result_array();
  }

  public function getRecordCount($category_id,$price_from,$price_to, $region_id) {
    $this->db->select('count(*) as allcount');
    $this->db->from('ukm_product');
    if ($category_id != '') {
        $this->db->where('ukm_category_product_id', $category_id);
    }

    if ($region_id != '') {
      $this->db->where('region_id', $region_id);
    }

    if ($price_from != '' && $price_to != '') {
        $this->db->where('price >', $price_from);
        $this->db->where('price <', $price_to);
    }
    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
}