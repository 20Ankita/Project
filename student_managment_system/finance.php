<?php
$c=mysqli_connect('localhost','root','','db_sms');
?>
<!DOCTYPE html>
<html>
	<head><title>Finance</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	body{
		overflow-y:hidden;
		overflow-x:hidden;
	}
	.container-fluid{
		padding-left:0px;
		padding-right:0px;
	}
	.b1{
		background-image:url('asset/images/fin.jpg');
		background-size:100% 100%;
		opacity:0.9;
	}
	.t2 {
		background-color: #44613b;
		color: white;
		text-align:center;
		padding-top:20px;
		font-size: 71px;
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
		padding: 60px 350px 10px 350px;
		font-size: 20px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
			<span>Finance</span>
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 b1">
			<form name="name" method="post" class="frm1">
			<table style="width:100%";>
			<tr>
			<td style="text-align:center; font-size:25px;"><b>Finance</b></td>
			</tr>
			<tr>
			<?php
			$v="SELECT * FROM tb_finance";
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
						<center style="color:white; font-size:28px; margin-bottom:450px; margin-top:160px">
						<b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
					</div>
				</div>
			</div>
			</form>
		
		</div>
		</div>
		</div>
</body>
</html>