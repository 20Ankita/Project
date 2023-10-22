<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['uid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_reg WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:stu_reg.php');
	exit;
	?>