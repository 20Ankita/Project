<?php
$c=mysqli_connect('localhost','root','','db_sms');
?>
<!DOCTYPE html>
<html>
	<head><title>holiday list </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	body{
		overflow-x:hidden;
	}
	.b1{
		background-image:url('asset/images/depart.jpg');
		background-size:100% 100%;
	}
	.b2{
		background-image:url('asset/images/i1.jpg');
		background-size:100% 100%;
	}
	 .b3{
		background-image:url('asset/images/de.jpg');
		background-size:100% 100%;
	}
	.t2 {
		background-color: #404040;
		color: white;
		padding:70px 401px 104px 159px;
		margin:0px -15px 0px -15px;
		opacity:0.8;
	}	
	
	.frm1{
		color:white;
		background-color:black;
		opacity:0.8;
		background-size: 100% 100%;
		border: solid black 2px;
		line-height: 1.5;
		padding: 38px 358px 60px 358px;
		margin: 0px 0px 0px 0px;
		font-size: 20px;
	}
	.a2{
		background-color:#08085e;
		border-radius:9px;
		color:white;
		
	}
	 .col-md-12{
		padding-left:0px;
		padding-right:0px;
	}
	.one{
	margin:0px 0px 40px 220px ;
	font-size:46px;
	font-weight:bold;
	
	}
	<style>
	</style>
	</head>
	<body>
	<div class="container-fluid">
			<div class="row b1">
				<div class="col-md-12">
					<div class="t2">
						
						<span style="font-size:50px; line-height:1.8; ">INDIAN INSTITUTE OF TECHNOLOGY<br></span>
						<big style="font-size:30px;">(list of holidays)</big>
					</div>
				</div>
			</div>	
		<div class="row b2">
			<div class="col-md-12">
			
				<form name="name" method="post" class="frm1">
				<div class="one">List of Gazetted holiday</div>
					<table border="1" style="width:100%; text-align:center;" class="a2">
					<tr style="font-weight:900">
						<td style="text-align:center;">Sr.N</td>
						<td style="text-align:center;">Date</td>
						<td style="text-align:center;">Day of Week</td>
						<td style="text-align:center;">Event</td>
						
					</tr>
					<tr>
						<?php
						$v="SELECT * FROM tb_holiday";
						$v1=mysqli_query($c,$v);
						$i = 1;
						while($v2=mysqli_fetch_array($v1)){
						echo'<tr>';
						echo'<td>'.$i.'</td>';
						echo'<td>'.$v2["date"].'</td>';
						echo'<td>'.$v2["week"].'</td>';
						echo'<td>'.$v2["holiday"].'</td>';
						echo'</tr>';
						$i++;
						}
						?>
					</tr>
					</table>
					<div class="row">
						<div class="col-md-12">	
						<center style="color:white; font-size:25px; margin-bottom:20px; margin-top:30px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</body>
</html>