<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mquizmodel extends CI_Model{
	public function submit(){
		$arr = array(
			'user_name' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'user_pwd' => md5($this->input->post('pwd')),
			'user_confirm_pwd' => md5($this->input->post('confirm_pwd')),
			'address' => $this->input->post('address'),
			'phone_number' => $this->input->post('number')
			);
		$this->db->insert('user_registration',$arr);
		if($this->db->affected_rows()>0){
			return true;
		}
	}

	//news latter
	public function insert_subscribe(){
		$this->db->insert('newslatter', $data);	// insert data into `students table` 
		if ($this->db->affected_rows() > 0) {
	         return true;
	    }else {
	         return false;
	    }
	}

	public function can_log_in($email_phone,$pwd){
		$this->db->select("id,email,user_pwd,phone_number");
		$this->db->from("user_registration");
		$this->db->where("(email = '$email_phone' OR phone_number = '$email_phone')");
		//$this->db->where("email",$email_phone);
		//$this->db->or_where("phone_number",$email_phone);
		$this->db->where('user_pwd',md5($pwd));
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

//************************* NEW FUNCTIONS OF M2
	public function get_category_qus($tablename,$id){
		$this->db->select("*");
		$this->db->from($tablename);
		$this->db->where("c_id",$id);
		//$this->db->limit("20");
		return $data_arr = $this->db->get()->result_array();
	}

	public function get_category_id($name){
		$this->db->select("c_id");
		$this->db->from("categories");
		$this->db->where("alias_name",$name);
		return $data_arr = $this->db->get()->result_array();
	}

	public function get_category_questions($c_id){
		$this->db->select("*");
		$this->db->from("questions");
		$this->db->where("c_id",$c_id);
		return $data_arr = $this->db->get()->result_array();
		//kiran
	}

	public function get_question($kiran){
		$this->db->select("*");
		$this->db->from("questions");
		$this->db->where("id",$kiran);
		return $data_arr = $this->db->get()->result_array();
		// echo $this->db->last_query();
		// exit();
		//kiran
	}

	public function get_answer($id){
		$this->db->select("answer");
		$this->db->from("questions");
		$this->db->where("id",$id);
		return $data_arr = $this->db->get()->result_array();
		//kiran
	}

	public function get_amount($user_id,$date,$cate_id){
		$this->db->select("result_data");
		$this->db->from("result_table");
		$this->db->where("user_id",$user_id);
		$this->db->where("date_time",$date);
		$this->db->where("cate_id",$cate_id);
		return $data_arr = $this->db->get()->result_array(); 
		//kiran
	}

	public function get_category(){
		$this->db->select("*");
		$this->db->from("categories");
		$this->db->order_by("category_name","ASC");
		return $data_arr = $this->db->get()->result_array();
	//echo $this->db->last_query();
		// exit();
	}

	public function get_user($email){
		$this->db->select("id,user_name,email,");
		$this->db->from("user_registration");
		$this->db->where("(email = '$email' OR phone_number = '$email')");
       // $this->db->where("email",$email);  
        return $data_arr = $this->db->get()->result_array(); 
        //kiran
	}

	public function get_result_tb($user_id,$date,$cate_id){
		$this->db->select("result_data");
		$this->db->from("result_table");
		$this->db->where("user_id",$user_id);
		$this->db->where("date_time",$date);
		$this->db->where("cate_id",$cate_id);
		return $data_arr = $this->db->get()->result_array(); 
		//kiran
		
	}

	public function get_wallet_amount($tablename,$user_id){
		$this->db->select("wallet_amount");
		$this->db->from($tablename);
		$this->db->where("user_id",$user_id);
		return $data_arr = $this->db->get()->result_array();

		// echo $this->db->last_query();
		//exit();
		//kiran
	}

	public function wallet_update($tablename,$user_id,$data = array()){
		$this->db->where("user_id",$user_id);
		$this->db->update($tablename, $data);
		//kiran
	}

	public function balance_update($update_val,$user_id,$date){
		$this->db->where("user_id",$user_id);
		$this->db->where("date_time",$date);
		return $data_arr = $this->db->update('result_table',$update_val);
		//kiran
	}

	public function get_site_details(){
		$this->db->select("*");
		$this->db->from("mquiz_details");
		$this->db->where("id",1);
		return $data_arr = $this->db->get()->result_array();
	}

	public function get_category_name($cate_id){
		$this->db->select("category_name");
		$this->db->from("categories");
		$this->db->where("c_id",$cate_id);
		return $data_arr = $this->db->get()->result_array();
	}

	public function check_email($email){
		$this->db->select("email");
		$this->db->from("user_registration");
		$this->db->where("email",$email);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function checkNewslatterEmail($tablename,$email){
		$this->db->select("email");
		$this->db->from($tablename);
		$this->db->where("email",$email);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function checkUser($data){
		$this->db->select("email");
		$this->db->from("user_registration");
		$this->db->where("email",$data['email']);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return true;
		}else{
			$rand_password = 'mquiz'.rand('10000','200000');
			$user_data = array(
				'user_name' => $data['name'],
				'email' => $data['email'],
				'user_pwd' => $rand_password,
				'user_confirm_pwd' => $rand_password,
				'address' => '',
				'phone_number' => ''
			);
			$this->db->insert('user_registration',$user_data);
			return true;
		}
	}


	public function insert($tableName, $data = array()) {
        $this->db->insert($tableName, $data);
        $insert_id = $this->db->insert_id();
        $affectedRows = $this->db->affected_rows();
        return $affectedRows;
    }
    
    public function getListingData($tableName, $where) {

        $this->db->select('*');
        $this->db->from($tableName);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $result = $this->db->get()->result_array();
        return $result;
    }
    
	public  function update($tablename,$where){
      	$data=array(
          	"vComplete"=>"d"
      	);
        $this->db->where_in('id', $where);
        $this->db->update($tablename, $data);
	}

	public function sub_email($tablename,$email){
		$data = array('email' => $email);
		$this->db->insert($tablename,$data);
	}

	public function resetEmailPassword($tablename,$where){
		$data=array(
          	"user_pwd"=> md5($this->input->post('pwd')),
          	"user_confirm_pwd"=> md5($this->input->post('cpwd'))
      	);
        $this->db->where('reset_pass', $where);
        $this->db->update($tablename, $data);
	}

	public function getUserId($tablename,$email){
		$this->db->select('id');
		$this->db->from($tablename);
		$this->db->where('email',$email);
		return $data_arr = $this->db->get()->result_array();
	}

	public function getNdData($tablename,$where,$id){
		$this->db->select("*");
		$this->db->from($tablename);
		$this->db->where("vComplete",$where);
		$this->db->where("user_id",$id);
		return $data_arr = $this->db->get()->result_array();
	}

	public  function update_nd($tablename,$where){
      	$data=array(
          	"vComplete"=>"d"
      	);
        //$this->db->where("vComplete",$where);
		$this->db->where("user_id",$where);
        $this->db->update($tablename, $data);
	}

	/*$ql = $this->db->select("*")->from("result_table")->where("vComplete","nd")->get();
	public function checkUserWallet($tablename,$where){
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where("user_id",$where);
		$query = $this->db->get();
		if($query->num_rows() > 0){}else{
			$arr = array(
		   	'wallet_amount' => '', 
		   	'user_id' => $user_id
		   	);
		   $this->db->insert('user_wallet',$arr);
		}
	}*/
}