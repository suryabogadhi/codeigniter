<?php 
		if($this->session->userdata('is_logged_in')){
			$user_data = $this->load->m->get_user($this->session->userdata('email'));
				foreach ($user_data as $key => $val) {
					$user_id = $val['id'];
				}
			//$this->m->checkUserWallet("user_wallet",$user_id);

			$ql = $this->db->select("*")->from("user_wallet")->where("user_id",$user_id)->get();

			if( $ql->num_rows() > 0 ) {} else {
			   $arr = array(
			   	'wallet_amount' => '100', 
			   	'user_id' => $user_id
			   	);
			   $this->db->insert('user_wallet',$arr);
			   $this->session->set_flashdata("bonus_amount","Yahoo! You got 1.00 rs bounus amount");
			} 

			$wallet_amount = $this->m->get_wallet_amount("user_wallet",$user_id);
				foreach ($wallet_amount as $key => $wal) {
					$wallet = $wal['wallet_amount'];
				}
			$result = ($wallet)/100;
			$user_amount = number_format((float)$result, 2, '.', '');
		}else{
			$url = "mquiz/login.html";
			redirect($url);
		}
?>	
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>mQuiz</title>
		<link rel="shortcut icon" type="image/png" href="<?=base_url()?>images/favicon.png"/>	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/mQuiz.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="<?=base_url()?>js/mquiz.js"></script>

		
	</head>
	<body style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" 
		 unselectable="on"
		 onselectstart="return false;">

		<!--style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" 
		 unselectable="on"
		 onselectstart="return false;" 
		 onmousedown="return false;"-->
		 <nav class="navbar navbar-default navbar-inverse shadow" data-spy="affix" data-offset-top="500">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand logo" href="<?=base_url()?>mquiz/quiz.html"><img class="img-logo" src="<?=base_url()?>images/logo.png" alt="MQuiz"></a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right one">
                    	<li><a href="<?=base_url()?>mquiz/wallet"><span class="glyphicon glyphicon-gift"></span> <?php echo $user_amount;?></a></li>
                    	<li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $val['user_name']?> </a></li>
				  		 <li class="active"><a href="<?=base_url()?>mquiz/logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
                </div>
            </div>
        </nav>
		