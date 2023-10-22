<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['cid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_contact WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:ad_contactli.php');
	exit;
	?>