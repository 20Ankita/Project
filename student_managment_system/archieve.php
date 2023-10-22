<?php
$c=mysqli_connect('localhost','root','','db_sms');
?>
<!DOCTYPE html>
	<html>
	<head><title>Archieve</title>
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
		background-image:url('asset/images/i1.jpg');
		background-size:100% 100%;
		opacity:0.9;
	}
	.t2 {
		background-color: #180962;
		color: white;
		text-align:center;
		font-size: 70px;
		font-weight: bold;
	}
	.frm1{
		color:white;
		background-color:black;
		opacity:0.8;
		background-size: 100% 100%;
		border: solid black 2px;
		border-radius: 9px;
		padding: 120px 350px 10px 350px;
		font-size: 20px;
	}
	.z1{
		color:white;
		font-size:25px;
		font-weight:bold;
		border:none;
		text-align:center;
		background-color:#1c04f8;
			
		}
	.b2{
		color:white;
		font-family:Bahnschrift !important;
		background-image:linear-gradient(to bottom right,#0407b8,#b7b0e3);
		padding:36px 11px 46px 24px;
		
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
				Archieve
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 b1">
			<form name="name" method="post" class="frm1">
					<div class="z1">RECENT NEWS</div>
					<div class="b2">

						<?php
									$v2="SELECT * FROM tb_news";
									$q=mysqli_query($c,$v2);
									$i='->';
									while($v3=mysqli_fetch_array($q))
									{	
									echo'<tr>';
									echo'<td>'.$i.$v3["notice"].'</td><br>';;
									echo'</tr>';
									$i++;
									}
						?>
					</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">	
						<center style="color:white; font-size:20px; margin-bottom:290px;  margin-top:290px;">
						<b>2022 Student login form .All rights  reserved .Design by Ankita .<br></b></center>
					</div>
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>
	</body>
</html>