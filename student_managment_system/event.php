<?php
$c=mysqli_connect('localhost','root','','db_sms');
?>
<!DOCTYPE html>
<html>
	<head><title>event</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	body{
		overflow-y:hidden;
	}
	.b1{
		background-image:url('asset/images/event.jpg');
		background-size:100% 100%;
		opacity:0.9;
	}
	.t2 {
		background-color: #1f293bd1;
		color: white;
		padding-left: 646px;
		padding-top:20px;
		font-size: 51px;
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
		
		padding: 100px 360px 10px 360px;
		margin: 0px 0px 0px 0px;
		font-size: 20px;
	}
	.col-md-12{
    padding-right: 0px;
    padding-left: 0px;
}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
			<span>Conference & Event </span>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 b1">
				<form name="name" method="post" class="frm1">
					<table style="width:100%;">
						<tr>
						<?php
						$v="SELECT * FROM tb_ce";
						$v1=mysqli_query($c,$v);
						while($v2=mysqli_fetch_array($v1)){
						echo'<td style="background-color:black; color:white;">'.$v2['text'].'</td>';
						}
						?>
						</tr>
					</table>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">	
						<center style="color:white; font-size:30px; margin-top:200px; margin-bottom:180px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
						</div>
					</div>
				</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>