<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['eid'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_ce WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:ad_eventli.php');
	exit;
	?>