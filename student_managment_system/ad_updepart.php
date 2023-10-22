<?php
	$c=mysqli_connect('localhost','root','','db_sms');
		$id=$_GET['uid'];
		$v="SELECT * FROM tb_departli where departid='$id'";
		// echo'<pre>';print_r($v);die;
		$v1=mysqli_query($c,$v);
		$v2=mysqli_fetch_assoc($v1);
		if(isset($_POST['submit'])){
			$departid=$_POST['departid'];
			$dename=$_POST['dename'];
			$prepic=$_FILES['prepic']['name'];
			$pre1="asset/depart/".$prepic;
			// echo'<pre>';print_r($pre1);die;
			move_uploaded_file($_FILES['prepic']['tmp_name'],$pre1);
			
			$prenm=$_POST['prenm'];
			$predes=$_POST['predes'];
			
			$hodpic=$_FILES['hodpic']['name'];
			// echo'<pre>';print_r($hod);die;
			$hod1="asset/depart/".$hodpic;
			move_uploaded_file($_FILES['hodpic']['tmp_name'],$hod1);
			
			// echo'<pre>';print_r($hod1);
			$hodnm=$_POST['hodnm'];
			$hoddes=$_POST['hoddes'];
			
			$q2="UPDATE tb_departli SET departid='$departid', dename='$dename', prepic='$prepic', prenm='$prenm', predes='$predes', hodpic='$hodpic',
			hodnm='$hodnm',hoddes='$hoddes'";
			$q2=mysqli_query($c,$q1);
			header('location:ad_depart.php');
			exit;;
					}
?>
<!DOCTYPE html>
<html>
	<head><title>It department </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
		.img{
		background-image:url('asset/images/it1.jpg');
		background-size:100% 100%;
	}
	.t1 {
		background-color: #404040;
		color: white;
		padding-left: 513px;
		padding-top:20px;
		font-size: 51px;
		font-weight: bold;
	}
	.frm1{
		color:black;
		background-color:white;
		opacity:0.8;
		background-size: 100% 100%;
		border: solid black 2px;
		line-height: 1.5;
		border-radius: 9px;
		padding: 33px 32px 33px 24px;
		margin: 20px 317px 30px 330px;
		font-size: 20px;
	}
	.a1{
		text-align:center;
		width:100%;
	}
	input{
		width:100%;
	}
	textarea{
		width:100%;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Details of Department</p>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 img">
	<form name="name" method="post" class="frm1" enctype="multipart/form-data">
	
			<table border="1" class="a1" >
			<tr>
			<td> <label>Department ID</label> </td>
			<td> <input value="<?php echo $v2 ['departid']; ?>"name="departid" ></td>
			</tr>
			<tr>			
			<td><label>Department Name</label></td>
			<td><input  type="text" name="dename" value="<?php echo $v2 ['dename']; ?>">
			</tr>
			<tr>
				<td colspan="2"><b>PRESIDENT DETAILS</b></td>
			</tr>
			<tr>
				<td><label>PIC:</label></td>
				<td><img src="asset/depart/<?php echo $v2['prepic'];?>" height='50px'; width='50px';>
						<input type="file" name="prepic" ></td>
			</tr>
			<tr>
				<td><label>NAME:</label></td>
				<td><input type="text" name="prenm" value="<?php echo $v2 ['prenm']; ?>"></td>
			</tr>
			<tr>
				<td><label>DESCRIPTION:</label></td>
				<td><textarea name="predes" ><?php echo $v2 ['predes']; ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><b>HOD DETAILS</b></td>
			</tr>
			<tr>
				<td><label>PIC:</label></td>
				<td><img src="asset/depart/<?php echo $v2['hodpic'];?>" height='50px'; width='50px';>
						<input type="file" name="hodpic" ></td>
			</tr>
			<tr>
				<td><label>NAME:</label></td>
				<td><input type="text" name="hodnm" value="<?php echo $v2 ['hodnm']; ?>"></td>
			</tr>
			<tr>
				<td><label>DESCRIPTION:</label></td>
				<td><textarea name="hoddes" ><?php echo $v2 ['hoddes']; ?></textarea></td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="submit"></td>
			</tr>
			</table>
			</form>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">	
		<center style="color:white; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
		</div>
		</div>
		</div>	
	</div>
	</div>
	</div>
	</body>
</html>
