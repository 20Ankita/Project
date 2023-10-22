<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$course = $_GET['course'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_course WHERE id='$course' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:ad_addcourse.php');
	exit;
	?>