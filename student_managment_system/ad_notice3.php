<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['thid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE  FROM tb_notice2 WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:notice.php');
	exit;
	?>