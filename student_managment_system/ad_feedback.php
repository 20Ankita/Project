<?php
$c=mysqli_connect('localhost','root','','db_sms');

?>
<!DOCTYPE html>
<html>
	<head><title>Ad_feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.b1{
		background-image:url('asset/images/feedback.jpg');
		background-size:100% 100%;
		opacity:0.9;
	}
	.t2 {
		background-color: #8e603b;
		color: white;
		padding-left:658px;
		font-size: 50px;
		font-weight: bold;
	}
	.frm1{
		color:white;
		background-color:black;
		opacity:0.8;
		background-size: 100% 100%;
		border: solid black 2px;
		line-height: 1.5;
		border-radius: 9px;
		padding: 38px 32px 35px 26px;
		margin: 30px 280px 30px 280px;
		font-size: 20px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
			<span>Admin Feedback </span>
			</div>
		</div>
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 b1">
					<form name="name" method="post" class="frm1">
						<table border="1" style="width:100%";>
						<tr>
							<td>Sr.N</td>
							<td>Name</td>
							<td>Email</td>
							<td>contact no</td>
						<td>Comments</td>
						</tr>
							<?php
								$v="SELECT * FROM tb_fdb";
								$v2=mysqli_query($c,$v);
								$i=1;
								while($v1=mysqli_fetch_array($v2)){
									echo'<tr>';
									echo'<td>'.$i.'</td>
										<td>'.$v1['name'].'</td>
										<td>'.$v1['email'].'</td>
										<td>'.$v1['contact'].'</td>
										<td>'.$v1['comment'].'</td>';
									echo'</tr>';
										$i++;
								}
							?>
						</table>
					</form>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">	
							<center style="color:black; font-size:25px; margin-bottom:30px; margin-top:30px;">
							<b>	2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>