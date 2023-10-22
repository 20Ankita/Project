<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['tid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE  FROM tb_notice1 WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:notice.php');
	exit;
	?>