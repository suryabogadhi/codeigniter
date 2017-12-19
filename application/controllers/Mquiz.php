<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mquiz extends CI_Controller {
	public function __construct(){
		parent::__construct();
		ob_start();
		$this->load->model('Mquizmodel','m');
		$this->load->library('session');
	    $this->load->library('Facebook');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('home');
	}

	/*public function home(){
		$this->load->view('home');
	}*/

	public function login(){
		// FACEBOOK CODE
	$user = $this->facebook->getUser();
        
        if ($user) {
			$data['user_profile'] = $this->facebook->api('/me?fields=id,first_name,last_name,email,locale,gender,link,name');

			// Get logout url of facebook
			$data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/mquiz/logout'));

			// Send data to profile page
			$this->load->view('profile', $data);
			} else {

			// Store users facebook login url
			$data['login_url'] = $this->facebook->getLoginUrl();
			$this->session->set_userdata($data);
			$this->load->view('login', $data);
		}	
	}

	public function signin(){
		$this->load->view('signin');
	}

	public function about(){
		$this->load->view('about');
	}

	public function categories(){
		$data['category'] = $this->m->get_category();
		$this->load->view('categories',$data);
	}

	public function contactus(){
		$this->load->view('contactus');
	}

	public function terms_and_conditions(){
		$this->load->view('terms-and-conditions');	
	}

	public function disclaimer(){
		$this->load->view('disclaimers');
	}

	public function privacy_and_policy(){
		$this->load->view('privacypolicy');
	}

	public function statuspage(){
		$amount = $this->session->userdata('amount');
		$data['tot_amount'] = number_format((float)$amount, 2, '.', '');
		$this->load->view('statuspage',$data);
	}

	public function quiz(){
		$user_data = $this->m->get_user($this->session->userdata('email'));
        foreach ($user_data as $key => $val) {
            $main_id = $val['id'];
        }

		$data['ndData'] = $this->m->getNdData("result_table","nd",$main_id);
		foreach ($data['ndData'] as $key => $value) {
			$user_id = $value['user_id'];
			$this->m->update_nd("result_table",$user_id);
		}
		$data['category'] = $this->m->get_category();
		$this->load->view('quiz',$data);
	}
		
	public function loginuser(){ 
        // NORMAL LOGIN CODE
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailphone', 'Email', 'trim|required|callback_validation_user');
		$this->form_validation->set_rules('pwd', 'Password', 'md5|trim|required');
		if($this->form_validation->run()== TRUE){
			$data = array('email' => $this->input->post('emailphone'),
						  'is_logged_in' => 1
						 );
			$this->session->set_userdata($data);
			$url = base_url()."mquiz/quiz.html";
			redirect($url);
		}else{
			$this->load->view('login');
		}
	}

	public function validation_user(){
		//$this->load->model('mquiz_model');
		$email_phone = $this->input->post('emailphone');
		$pwd = $this->input->post('pwd');
		//$remember = $this->input->post('remember');

		if($this->m->can_log_in($email_phone,$pwd)){
			return true;
		}else{
			$this->form_validation->set_message('validation_user',"Email / Phone and password Incorrect.");
			return false;
		}
	}

	public function logout(){
		$this->load->library('facebook');
        $this->facebook->destroySession();

		$this->session->sess_destroy();
		/*setcookie('emailphone',"",time() - 3600);
		setcookie('emailphone',"",time() - 3600);*/
		$url = base_url()."mquiz/login.html";
		redirect($url);
	}

	public function register(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_validate_email');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_pwd', 'Password Confirmation', 'trim|required|matches[pwd]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('number', 'Mobile', 'trim|required|regex_match[/^[0-9]{10}$/]');

		if($this->form_validation->run()==FALSE){
			$this->load->view('signin');
		}else{
			$this->m->submit();
			$this->session->set_flashdata('success', 'Successfully Inserted and please Login');
			$this->load->view('login');
		}
	}

	public function validate_email(){
		$email = $this->input->post('email');
		if($this->m->check_email($email) == TRUE){
			$this->form_validation->set_message('validate_email',"Email already registered.");
			return false;
		}else{
			return true;
		}
	}

	// pending==================================================
	public function subscribe(){
		$email = $this->input->post('email');
		if($this->m->checkNewslatterEmail("newslatter",$email) == TRUE){
			echo "Sorry! Email already registered.";
		}else{
			$this->m->sub_email("newslatter",$email);
			echo "Thank you for subscribing.";
		}
	}

	public function email_check(){
		if($this->input->is_ajax_request()){
			$email = $this->input->post('email');
			if(!$this->form_validation->is_unique($email, 'newslatter.email')) { 
				echo "The email is already taken, choose another one";
			}
		}
	}

	public function category($id) {
		$data['category_id'] = $id;
        $data['qus'] = $this->m->get_category_qus("questions",$id);
        $get_category_name = $this->m->get_category_name($id);
        	foreach ($get_category_name as $key => $value){
				$data['get_category_name'] = $value['category_name'];
        	}
       // $data = array('get_category_name' => $category_name );
        $this->session->set_userdata($data);
        $this->load->view('start_page', $data);
    }

    public function page($c_id, $id) {
    	$qus = $this->m->get_category_qus("questions",$c_id);
        $user_data = $this->m->get_user($this->session->userdata('email'));
        foreach ($user_data as $key => $val) {
            $user_id = $val['id'];
        }
        
        $countrange = $this->m->getListingData("result_table", array("cate_id" => $c_id, "user_id" => $user_id, "vComplete=" => 'nd'));
        if (count($countrange) < 30) {
            if (array_key_exists($id, $qus)) {
                $data['rand_id'] = $qus[$id];
                $data['get_category_name'] = $this->m->get_category_name($c_id);
                $this->load->view('page', $data);
            } else {
                echo "sorry";
            }
        } else {
            $poin = $this->m->getListingData("result_table", array("cate_id" => $c_id, "user_id" => $user_id, 'result_data' => "yes",'vComplete' => "nd"));

            $ids = array();
            for ($i = 0; $i < count($countrange); $i++) {
                array_push($ids, $countrange[$i]['id']);
            }
            $poin_up = $this->m->update("result_table", $ids);
            $points = count($poin)*5;
            
            //======  WALLET AMOUNT UPDATE  OR INSERT
            $query = $this->db->select("*")->from("user_wallet")->where("user_id",$user_id)->get();
	        if($query->num_rows() > 0){
	        	$getWalletAmount = $this->m->get_wallet_amount("user_wallet",$user_id);
	        	foreach ($getWalletAmount as $key => $bal){
	        		echo $bal['wallet_amount'];
	        		echo $balance = $bal['wallet_amount'] + $points ; 
	        	}
				$this->m->wallet_update("user_wallet",$user_id, array('wallet_amount' => $balance));
	        }else{
	        	$arr = array(
				   	"wallet_amount" => $points,
				   	"user_id" => $user_id
				   	);
				$this->db->insert("user_wallet",$arr);
	        }
            //=======
            $rs = ($points)/ 100;
            $points_data = array(
            	'amount' => $rs 
            	);
            $this->session->set_userdata($points_data);
            $url = base_url()."mquiz/statuspage";
	    	redirect($url);   
        }
    }

    public function result_page(){
		$data['user_answer'] = $this->input->post('optionsRadios');
		$data['hid_val'] = $this->input->post('hidden_val');
		$cate_id = $this->session->userdata('category_id');

		$newArray = array();
        foreach ($this->session->userdata('qus') as $key => $entry) {
            $qus_id[] = $entry['id'];
        }

        $rand_id = array_rand($qus_id);
        $data2 = array('rand_id' => $rand_id);
        $this->session->set_userdata($data2);

        $r_answer = $this->m->get_answer($data['hid_val']);
        foreach ($r_answer as $key => $value) {
            $right_answer = $value['answer'];
        }

        $user_data = $this->m->get_user($this->session->userdata('email'));
        foreach ($user_data as $key => $val) {
           $user_id = $val['id'];
        }
        
        $date = date('d-m-Y');
       
        if ($data['user_answer'] == $right_answer) {
            $data = array(
                "result_data" => "yes",
                "user_id" => $user_id,
                "cate_id" => $cate_id,
                "date_time" => date('d-m-Y')
            );
            $result_data = $this->m->insert("result_table", $data);
            $data1 = array(
            	"one" => "rrr",
            	"rand_id" => $rand_id
            );
            $this->session->set_userdata($data1);
            $this->load->view('result',$data1);
        } else {
            $data = array(
                "result_data" => "No",
                "user_id" => $user_id,
                "cate_id" => $cate_id,
                "date_time" => date('d-m-Y')
            );
            $result_data = $this->m->insert("result_table", $data);
            $data1 = array(
            	"one" => "www",
            	"rand_id" => $rand_id
            );
            $this->session->set_userdata($data1);
            $this->load->view('result',$data1);
        }
	} 

    public function nnn() {
        $this->load->view('result');
    }

	public function forget(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('forget_email', 'Email', 'trim|required|valid_email');
		if($this->form_validation->run()==FALSE){
			$this->load->view('forget');
		}else{
			$email = $this->input->post('forget_email');
			if($this->m->check_email($email) == FALSE){
				$this->session->set_flashdata('errormsg', 'Enter registerd email address');
				$this->load->view('forget');
			}else{
				$user_email = $this->input->post('forget_email');
				$this->load->helper('string');
				$rs = random_string('alnum', 16);
				$data = array('reset_pass' => $rs);

				$this->db->where('email',$email);
				$this->db->update("user_registration",$data);

				/*$get_id = $this->m->getUserId("user_registration",$email);
				foreach ($get_id as  $value) {
					$user_id = $value['id'];
				}*/
				
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

				$link = base_url()."mquiz/reset_password/".$rs;

				$message= "<p>To reset your password <a href=".$link.">CLICK HERE</a></p>";
				
				$this->email->from('support@mquiz.in', 'Admin');
				$this->email->to($user_email);
				$this->email->subject('forgetpasswrod');
				$this->email->message($message);
				if($this->email->send()) {
			        $this->session->set_flashdata("email_sent","Email send to ur mail"); 
			        $this->load->view('forget');
		        } else {
		        	$this->session->set_flashdata("email_error","Sorry! There wrong in email send."); 
		         	$this->load->view('forget');
		        }
			}
		}
	}

	public function contact(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phonenumber', 'Phone Number', 'trim|required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('message', 'Address', 'trim|required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('contactus');
		}else{
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
			$user_email = $this->input->post('email');
			$user_name = $this->input->post('name');
			$phone = $this->input->post('phonenumber');
			$feedback = $this->input->post('message');

			$this->email->initialize($config);
			$this->load->library('email');


			$message= "User Name : ".$user_name."\r\n"."User Email : ".$user_email ."\r\n"."Phone Number : ".$phone."\r\n"."Feedback : ".$feedback ;
			
			$this->email->from($user_email, $user_name);
			$this->email->to('support@mquiz.in');
			$this->email->subject('User Feedback');
			$this->email->message($message);
			if($this->email->send()) {
		        $this->session->set_flashdata("email_sent","Thank you for the valuable feedback."); 
		        $this->load->view('contactus');
	        } else {
	        	$this->session->set_flashdata("email_error","Sorry! There wrong in email send."); 
	         	$this->load->view('contactus');
	        }      
		}
	}

	public function forget_password(){
		$this->load->view('forget');
	}

	public function reset_password($id){
		$data['rs_id'] = $id;
		$this->load->view('reset_password',$data);
	}

	public function reset_pwd($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required');
		$this->form_validation->set_rules('cpwd', 'Password Confirmation', 'trim|required|matches[pwd]');
		if($this->form_validation->run() == false){
			$this->load->view('reset_password');
		}else{
			$this->m->resetEmailPassword("user_registration",$id);
			$this->session->set_flashdata("re_pass_success","Password Changed Please Login"); 
			$this->load->view('reset_password');
		}
	}

	public function wallet(){
		$this->load->view('wallet');
	}


}
