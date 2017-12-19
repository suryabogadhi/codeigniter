<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$site_details = $this->m->get_site_details();
            foreach ($site_details as $key => $val)
            	$title = $val['title'];

		?>
		<title><?php echo $title;?></title>	
		<link rel="shortcut icon" type="image/png" href="<?=base_url()?>images/favicon.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/mQuiz.css">
		<style>
		  .carousel-inner > .item > img,
		  .carousel-inner > .item > a > img {
		      width:1140px;
			  height:300px;
		      margin: auto;
		  }
		</style>
		
	</head>
