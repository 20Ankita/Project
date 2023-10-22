<?php
$c=mysqli_connect('localhost','root','','db_sms');
// if($c){
	// echo'hello';
// }
// else{
	// echo'ignore';
// }
	$v="SELECT * FROM tb_course";
	$v1=mysqli_query($c,$v);
	// $v3=mysqli_fetch_array($v1);
	// echo'<pre>';print_r($v3);				
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
	body{
		overflow-y:hidden;
	}
	.t1 {
    background-color: #222215;
    color: white;
    padding-left: 649px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
	}
	.frm{
	color:white;
	background-color:black;
	opacity:0.8;
	background-size: 100% 100%;
    border: solid black 2px;
    line-height: 1.5;
    border-radius: 9px;
    padding: 48px 0px 30px 20px;
    margin: 220px 350px 342px 350px;
    font-size: 20px;
	}
	</style>
	<script>
	$document(
	</script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row t1">
				<div class="col-md-12">
					<p>Manage Semester</p>
				</div>
			</div>
		</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 img">
				<div class="a1">
					<form method="post" name="one" class="frm">
						
						<table border="1">
							<tr>
								<td>COURSE</td>
								<td>
								
										
									<select name="cor" style="width:230px;">
										<option value="">...select...</option>
										<?php
										
										while($v3=mysqli_fetch_array($v1)){
												echo "<option value='".$v3['id']."'>".$v3['course']."</option>";
											}
										?>
									</select>
								
							</tr>
							<tr>
								<td>SEMESTER</td>
								<td>
									<input type="number" name="sem">
								</td>
							</tr>
						</table>
					</form>
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