<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Webservice extends REST_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mquizmodel','m');
	}

	//example
	function student_get(){
		$this->response("hello web services");
	}

	
	public function category_get(){
		$cat = $this->m->get_category();
		$this->response($cat);
	}

	public function categoryId_get(){
		$id = $this->uri->segment(3);

		$cat = $this->m->get_categoryID($c_id);

		if(isset($cat[$id])){
			$this->response( array('message' => 'success','status' => 'ture' ,'data' => $cat[$id]));
		}else{
			$this->response( array('message' => 'unsuccess','status' => 'false'));
		}
		//$this->response($cat);
	}
}
