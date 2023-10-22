<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	$id=$_GET['fid'];
	$v="DELETE FROM tb_faculty Where id='$id'";
	$q=mysqli_query($c,$v);
	header('location:ad_faclist.php');
	exit;

?>