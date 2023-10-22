<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['hid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_holiday WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:ad_holidayli.php');
	exit;
	?>