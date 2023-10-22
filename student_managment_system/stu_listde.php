<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['sid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_stu_reg WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:stu_list.php');
	exit;
	?>