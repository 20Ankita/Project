<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$id = $_GET['diide'];
	// echo'<pre>';print_r($id);die;
	$q="DELETE FROM tb_studepart WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:ad_studepartli.php');
	exit;
	?>