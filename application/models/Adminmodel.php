<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model{
	public function can_log_in($username,$password){
		
		
		$this->db->select("*");
		$this->db->from("admin_login");
		$this->db->where("admin_username",$username);
		$this->db->where('admin_password',md5($password));
		 $query = $this->db->get();
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function submit(){
		$config['upload_path'] = './images/qustions-images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024*8;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload()){
			// NO IMAGE UPLOAD 
			$name = "no-image.png";
			$arr = array(
				'question' => $this->input->post('question'),
				'option1' => $this->input->post('option1'),
				'option2' => $this->input->post('option2'),
				'option3' => $this->input->post('option3'),
				'option4' => $this->input->post('option4'),
				'answer' => $this->input->post('answer'),
				'c_id' => $this->input->post('category'),
				'image_name' => $name
				);
			$this->db->insert('questions',$arr);
			if($this->db->affected_rows()>0){
				return true;
			}
		}else{
			// IMAGE UPLOAD
			$data = $this->upload->data();
			$arr = array(
				'question' => $this->input->post('question'),
				'option1' => $this->input->post('option1'),
				'option2' => $this->input->post('option2'),
				'option3' => $this->input->post('option3'),
				'option4' => $this->input->post('option4'),
				'answer' => $this->input->post('answer'),
				'c_id' => $this->input->post('category'),
				'image_name' => $data['file_name']

				);
			$this->db->insert('questions',$arr);
			if($this->db->affected_rows()>0){
				return true;
			}
		}
	}

	public function update_img($id){
		$config['upload_path'] = './images/qustions-images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024*8;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload()){
			echo "Somthing is worng";
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('admin/update',$error);
			$this->load->view('admin/questions');
		}else{
			$data = $this->upload->data();
			$arr = array(
				'question' => $this->input->post('question'),
				'option1' => $this->input->post('option1'),
				'option2' => $this->input->post('option2'),
				'option3' => $this->input->post('option3'),
				'option4' => $this->input->post('option4'),
				'answer' => $this->input->post('answer'),
				'c_id' => $this->input->post('category'),
				'image_name' => $data['file_name']
			);
			$this->db->where('id',$id);
			$this->db->update('questions',$arr);
			$this->load->view('admin/questions');
		}
	}

	public function user_update_arr($id){
		$arr = array(
			'question' => $this->input->post('question'),
			'option1' => $this->input->post('option1'),
			'option2' => $this->input->post('option2'),
			'option3' => $this->input->post('option3'),
			'option4' => $this->input->post('option4'),
			'answer' => $this->input->post('answer'),
			'c_id' => $this->input->post('category')
		);
		$this->db->where('id',$id);
		$this->db->update('questions',$arr);
		$this->load->view('admin/questions');
	}

	public function get_question_data($id){
		$this->db->select("*");
		$this->db->from("questions");
		$this->db->where("id",$id);
		return $data_arr = $this->db->get()->result_array(); 
		//echo $this->db->last_query();
		// exit();
	}
	
	public function get_questions(){
		$this->db->select("*");
		$this->db->from("questions");
		return $data_arr = $this->db->get()->result_array(); 

		 //echo $this->db->last_query();
		 //exit();
	}

	public function get_category(){
		$this->db->select("*");
		$this->db->from("categories");
		return $data_arr = $this->db->get()->result_array();
	}

	public function get_users(){
		$this->db->select("*");
		$this->db->from("user_registration");
		return $data_arr = $this->db->get()->result_array();
	}

	public function get_site_details($id){
		$this->db->select("*");
		$this->db->from("mquiz_details");
		$this->db->where("id",$id);
		return $data_arr = $this->db->get()->result_array();
	}

	public function get_image_name($id){
		$this->db->select("image_name");
		$this->db->from("questions");
		$this->db->where("id",$id);
		return $data_arr = $this->db->get()->result_array();
	}

	public function delete_question($id){
		$this->db->where("id",$id);
		$this->db->delete("questions");
		if($this->db->affected_rows()>0){
			return true;
		}	
	}

	public function get_category_details($id){
		$this->db->select("*");
		$this->db->from("categories");
		$this->db->where("c_id",$id);
		return $data_arr = $this->db->get()->result_array();
	}

	public function submit_category(){
		$config['upload_path'] = './images/category';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024*8;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/edit-category',$error);
		}else{
			$data = $this->upload->data();
			$arr = array(
				'category_name' => $this->input->post('cname'),
				'image_name' => $data['file_name'],
				'alias_name' => $this->input->post('aliasname')
				);
			$this->db->insert('categories',$arr);
			if($this->db->affected_rows()>0){
				return true;
			}
		}
	}

	public function get_category_image_name($id){
		$this->db->select("image_name");
		$this->db->from("categories");
		$this->db->where("c_id",$id);
		return $data_arr = $this->db->get()->result_array();
	}

	public function delete_category($id){
		$this->db->where("c_id",$id);
		$this->db->delete("categories");
		if($this->db->affected_rows()>0){
			return TRUE;
		}
	}

	public function newsLatter($tablename){
		$this->db->select("*");
		$this->db->from($tablename);
		return $data_arr = $this->db->get()->result_array();
	}

	public function getNewsEmail($tablename,$where){
		$this->db->select("email");
		$this->db->from($tablename);
		$this->db->where("e_id",$where);
		return $data_arr = $this->db->get()->result_array();
	}

	public function getAllemails($tablename){
		$this->db->select("email");
		$this->db->from($tablename);
		return $data_arr = $this->db->get()->result_array();
	}

}