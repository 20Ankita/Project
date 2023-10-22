<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	$id=$_GET['did'];
	$q="DELETE FROM tb_course WHERE id='$id' ";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	header('location:add_syllabus.php');
	exit;
	?>
?>