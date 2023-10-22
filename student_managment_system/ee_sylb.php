<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c)
	// {
		// echo'connected';
	// }
	// else
	// {
		// echo
	// }
	$crs=$_GET['courseid'];
	$sem_cont = $_GET['semcount'];
	// $q="SELECT * FROM tb_sem";
	// $v=mysqli_query($c,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ADD COURSE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="../bootstrap3/css/bootstrap.min.css"> -->
		<!-- <script src="../jquery2/jquery.min.js"></script> -->
		<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
		<script src="asset/jquery2/jquery.js"></script>
		<!-- <script src="jquery2/jquery-1.10.2.js"></script>-->
		<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
		<style>
		.img{
	background-image:url('asset/images/lib.jpg');
	background-size:100% 100%;
	}
		

.t1 {
    background-color: #222215;
    color: white;
    padding-left:667px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
	}
	.t2{
	background-color:white;

	color:black;
	width:60%;
	margin:59px 0px 73px 321px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Admin Syllabus</p>
	</div>
	</div>
	</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 img">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<!--<button type="submit"class="btn btn-success btn-lg bt2" name="submit">ADD COURSE</button>-->	
		<button type="submit"class="btn btn-success btn-lg bt2" name="submit"><a href="add_course.php">ADD</a></button>
	<form>
		<table border="1" class="t2">
			<tr>
				<td><label>Course ID</label></td>
				<td><input type="text" value="<?php echo $crs;?>"></td>
			</tr>
			<tr>
				<td><label>semcount</label></td>
				<td><input type="text" value="<?php echo $sem_cont;?>"></td>
			</tr>
			
			<?php
				for($i=1;$i<=$sem_cont;$i++){
					echo "<tr>
							<td><label>semester</label></td>
					        <td><input type='text' name='sem'></td>
							<td><label>syllabus</label></td>
							<td><input type='file' name='syl'></td>
					       </tr>";
					
				}
			?>
			
		</table>	
	</form>		
	</div>
	</div>
	</div>
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