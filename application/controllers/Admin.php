<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Adminmodel','am');
		$this->load->library('session');

		$data = array(
			'no_users' => $this->db->count_all('user_registration'),
			'no_categories' => $this->db->count_all('categories'),
			'no_questions' =>$this->db->count_all('questions')
		);

		$this->session->set_userdata($data);
	}

	public function index(){
		$this->load->view('admin/login');
	}

	public function home(){
		$data['users'] = $this->am->get_users();
		$this->load->view('admin/home',$data);
	}

	public function questions(){
		$this->load->view('admin/questions');
	}

	public function newslatter(){
		$data = array(
			'no_users' => $this->db->count_all('user_registration'),
			'no_categories' => $this->db->count_all('categories'),
			'no_questions' =>$this->db->count_all('questions')
			);
		$this->load->view('admin/newslatter',$data);
	}

	public function sendemail($id){
		$data['getEmail'] = $this->am->getNewsEmail("newslatter",$id);
		$this->load->view('admin/sendmail',$data);
	}

	public function sendnewsmail(){
		//$from = $this->input->post('emailform');
		$to = $this->input->post('to');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$config = Array(
		  	'protocol' => 'smtp',
		  	'smtp_host' => 'ssl://sg2plcpnl0209.prod.sin2.secureserver.net',
		  	'smtp_port' => 465,
		  	'smtp_user' => 'support@mquiz.in', 
		  	'smtp_pass' => 'Bavadeep786r',
		  	'mailtype' => 'html',
		  	'charset' => 'iso-8859-1',
		  	'wordwrap' => TRUE,
		  	'newline' => "\r\n"
		);

		$this->email->initialize($config);
		$this->load->library('email');
		$this->email->from('support@mquiz.in', 'Admin');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		if($this->email->send()) {
	        $this->session->set_flashdata("email_sent","Email send to ur mail"); 
	        $this->load->view('admin/newslatter');
        } else {
        	$this->session->set_flashdata("email_error","Sorry! There wrong in email send."); 
         	$this->load->view('admin/newslatter');
        }
	}

	public function insert(){
		$data = array(
			'error' => '' ,
			'category' =>  $this->am->get_category()
		);
		$this->load->view('admin/insert-question',$data);
	}

	public function sendallmails(){
		$this->load->view('admin/sendallmails');
	}
	public function sendEmailallUsers(){
		$emails = $this->am->getAllemails("newslatter");
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		foreach ($emails as $key => $value) {
			$allmails = $value['email'];

			$config = Array(
			  	'protocol' => 'smtp',
			  	'smtp_host' => 'ssl://sg2plcpnl0209.prod.sin2.secureserver.net',
			  	'smtp_port' => 465,
			  	'smtp_user' => 'support@mquiz.in', 
			  	'smtp_pass' => 'Bavadeep786r',
			  	'mailtype' => 'html',
			  	'charset' => 'iso-8859-1',
			  	'wordwrap' => TRUE,
			  	'newline' => "\r\n"
			);

			$this->email->initialize($config);
			$this->load->library('email');
			$this->email->from('support@mquiz.in', 'Admin');
			$this->email->to($allmails);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();
		}
		$this->load->view('admin/newslatter');
	}

	public function details(){
		$data = array('error' => '');
		$this->load->view('admin/details', $data);
	}


	// admin login start ==========
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_validation_admin');
		$this->form_validation->set_rules('password', 'Password', 'md5|trim|required');

		if($this->form_validation->run()==true){
			$data = array('username' => $this->input->post('username'),
						  'is_logged_in' => 1
						 );
			$this->session->set_userdata($data);
			$url = base_url()."admin/home";
			redirect($url);
		}else{
			$this->load->view('admin/login');
		}
	}

	public function validation_admin(){
		//$this->load->model('admin_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->am->can_log_in($username,$password)){
			return true;
		}else{
			$this->form_validation->set_message('validation_admin',"Username and password Incorrect.");
			return false;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$url = base_url()."admin";
		redirect($url);
	}

	// admin login END =============

	public function do_insert(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category', 'Category', 'trim|required');
		$this->form_validation->set_rules('question', 'Question', 'trim|required');
		$this->form_validation->set_rules('option1', 'Option1', 'trim|required');
		$this->form_validation->set_rules('option2', 'Option2', 'trim|required');
		$this->form_validation->set_rules('option3', 'Option3', 'trim|required');
		$this->form_validation->set_rules('option4', 'Option4', 'trim|required');
		$this->form_validation->set_rules('answer', 'Answer', 'trim|required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/insert-question');
		}else{
			//echo "success";	
			$this->am->submit();

			$this->session->set_flashdata('success', 'Successfully Inserted');
			//$data['message_succ'] = "Inserted successfully.";	
			$this->load->view('admin/insert-question');
		}
	}

	public function edit($id){
		$data['get_data'] = $this->am->get_question_data($id);
		$this->load->view('admin/edit',$data);
	}

	public function do_update(){
		$id = $this->input->post('hidden_id');
		$get_image = $this->input->post('hidden_image');

		if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
			$no_img = "no-image.png";
			if($get_image == $no_img){
				$this->am->update_img($id);
			}else{
				$url = "images/qustions-images/".$get_image;
				unlink($url);
				$this->am->update_img($id);
			}
		}
		else{
			$this->am->user_update_arr($id);
		}
	}

	public function delete($id){
		$get_image = $this->am->get_image_name($id);
		foreach ($get_image as $key => $val) 
			$image_name = $val['image_name'];

		$no_img = "no-image.png";
		if($image_name == $no_img){
			$this->am->delete_question($id);
			$url = "admin/questions";
			redirect($url);
		}else{
			$url = "images/qustions-images/".$image_name;
			unlink($url);
			$this->am->delete_question($id);
			$url = base_url()."admin/questions";
			redirect($url);
		}	
	}

	public function find($id){
		$i=1;
		$url = base_url();
		$data = $this->am->get_question_data($id);
		foreach ($data as $key => $val) {
			echo '<tr>
			    	<td></td>
			    	<td>' .$i++.'</td>
			    	<td>' .$val['question'].'</td>
			    	<td>' .$val['option1'].'</td>
			    	<td>' .$val['option2'].'</td>
			    	<td>' .$val['option3'].'</td>
			    	<td>' .$val['option4'].'</td>
			    	<td>' .$val['answer']. '</td>
			    	<td><img src="'.$url.'images/qustions-images/'. $val['image_name'].'" width=50px></td>
			    	<td><a href="'.$url.'admin/edit/'.$val['id'].'" class="btn btn-primary" role="button">Edit</a></td>
			    	<td><a href="javascript:;" onClick="confirm_delete('.$val['id'].')" class="btn btn-danger" role="button">Delete</a></td>
			    </tr>';
		}
	}

	public function update(){
		$id = $this->input->post('hidden_id');
		$get_image = $this->input->post('hidden_image');

		if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024*8;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;
			$config['encrypt_name'] = TRUE;

			$config['image_library'] = 'gd2';
			$config['source_image']	= '/images/source/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']	= 117;
			$config['height']	= 80;

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);
		    $this->image_lib->resize();

			/*$config['image_library'] = 'gd2';
			$config['create_thumb'] = TRUE;
   			$config['maintain_ratio'] = TRUE;
   			$config['width']     = 117;
    		$config['height']   = 80;*/

    		$this->load->library('upload',$config);
    		//$this->load->library('image_lib');
		    //$this->image_lib->initialize($config);
		   	// $this->image_lib->resize();
		    //$this->image_lib->clear();

			
			if(!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/details',$error);
			}else{
				$data = $this->upload->data();
				$site_details = array(
					'title' => $this->input->post('title'),
					'logo' => $data['file_name'],
					'fb_link' => $this->input->post('fb'),
					'twitter_link' => $this->input->post('twitter'), 
					'parkpays_link' => $this->input->post('parkpays'),
					'google_link' => $this->input->post('google-plus'),
				);
				$this->db->where('id',$id);
				$this->db->update('mquiz_details',$site_details);
				$this->load->view('admin/details');
			}
		}else{
			$site_details = array(
				'title' => $this->input->post('title'),
				'fb_link' => $this->input->post('fb'),
				'twitter_link' => $this->input->post('twitter'), 
				'parkpays_link' => $this->input->post('parkpays'),
				'google_link' => $this->input->post('google-plus'),
			);
			$this->db->where('id',$id);
			$this->db->update('mquiz_details',$site_details);
			$this->load->view('admin/details');
		}
	}

	public function category(){
		$this->load->view('admin/categorypage');
	}

	public function add_category(){
		$this->load->view('admin/add-category' , array('error' => ''));
	}

	public function insert_category(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cname', 'Category Name', 'trim|required');
		$this->form_validation->set_rules('aliasname', 'Alias Name', 'trim|required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/add-category');
		}else{
			$this->am->submit_category();
			$this->session->set_flashdata('success', 'Successfully Inserted');
			$this->load->view('admin/add-category');
		}
	}

	public function edit_category($id){
		$data['get_category_details'] = $this->am->get_category_details($id);
		$this->load->view('admin/edit-category',$data);
	}

	public function update_category(){
		$id = $this->input->post('hidden_id');
		$get_image = $this->input->post('hidden_image');

		if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
			$config['upload_path'] = './images/category';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024*8;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload',$config);

			if(!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/add-category',$error);
			}else{
				$data = $this->upload->data();
				$arr = array(
					'category_name' => trim($this->input->post('cname')),
					'image_name' => $data['file_name'],
					'alias_name' => trim($this->input->post('aliasname'))
					);
				$this->db->where('c_id',$id);
				$this->db->update('categories',$arr);
				$this->load->view('admin/categorypage');
			}
		}else{
			$arr = array(
				'category_name' => trim($this->input->post('cname')),
				'alias_name' => trim($this->input->post('aliasname'))
				);
			$this->db->where('c_id',$id);
			$this->db->update('categories',$arr);
			$this->load->view('admin/categorypage');
		}
	}

	public function category_delete($id){
		$get_image = $this->am->get_category_image_name($id);
		foreach ($get_image as $key => $val) {
			$image_name = $val['image_name'];
			$url ="images/category/".$image_name;
			unlink($url);
		}
		$this->am->delete_category($id);
		redirect("admin/category");
	}
}
