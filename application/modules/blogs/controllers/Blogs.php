<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Blogs extends MX_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('blog');
    }
    
	public function index(){
		$this->template->write_view('index');
    }

    public function getUkmBlog(){
        $rowno = $this->input->get('pageno');

        // Row per page
        $rowperpage = 2;
    
        // Row position
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->blog->getRecordCount();

        // Get records
        $users_record = $this->blog->getData($rowno,$rowperpage);
     
        // Pagination Configuration
        $config['next_tag_open'] = '<li class="next-arrow">';
        $config['next_link'] = '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="next-arrow">';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<a href="" class="active">';
        $config['cur_tag_close'] = '</a>';
        $config['base_url'] = base_url().'shops/getUkmBlog';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
    
        // Initialize
        $this->pagination->initialize($config);
    
        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
        if ($allcount == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Blog tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $response = array(
            'code' => 200,
            'message' => 'Blog ditemukan',
            'data' => array(
                'blog' => $data,
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    function getAdditionalData(){
        $blogUkm = $this->blog->fetch_table('*','ukm_blog','','views','desc','',5,TRUE);

        if (count($blogUkm) == 0) {
            $response = array(
                'code' => 204,
                'message' => 'Blog tidak ada'
            );
            echo json_encode($response, JSON_PRETTY_PRINT);
            die();
        }

        $response = array(
            'code' => 200,
            'message' => 'Ukm ditemukan',
            'data' => array(
                'blog' => $blogUkm
            )
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }
    
}