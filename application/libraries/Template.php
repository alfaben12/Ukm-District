<?php

class Template {
	private $CI;
	/* the title for the layout */
	private $title_for_layout;
	/* title separator */
	/* you can change this in the construct */
	public $title_separator;
	/* holds the css and js files */
	private $includes;
	
	public function __construct() {
		$this->CI = &get_instance();
		$this->title_for_layout = NULL;
		$this->title_separator = ' | ';
		$this->includes = array();
	}
	
	public function set_title($title = NULL) {
		$this->title_for_layout = $title;
	}
	
	public function add_includes($type, $file, $options = NULL, $prepend_base_url = TRUE, $script = FALSE) {
		if($prepend_base_url) {
			$this->CI->load->helper('url');
			$file = config_item('url_javascript') . $file;
		}

		if($script) {
			$file = $file;
		}
		$this->includes[$type][] = array(
			'file' => $file,
			'options' => $options,
			'prepend_base_url' => $prepend_base_url,
			'script' => $script
			);
		/* allows chaining */
		return $this;
		
	}
	
	public function write_view($name, $data = array(), $layout = 'template') {
		/* get the contents of the view and store it */
		$view = $this->CI->load->view($name, $data, TRUE);
		/* set the title */
		$title = '';
		if($this->title_for_layout !== NULL) {
			$title = $this->title_for_layout . $this->title_separator;
		}

		$this->CI->load->view('template/' . $layout, array(
			'title_for_layout' => $title,
			'includes_for_layout' => $this->includes,
			'content_for_layout' => $view
			));
	}
}

/* End of file template.php */
/* Location: ./application/libraries/template.php */