<?php
	$c=mysqli_connect('localhost','root','','db_sms');
		if(isset($_POST['submit'])){
			$notice=$_POST['notice'];
			$v="INSERT INTO tb_news(notice)VALUE('$notice')";
			// echo'<pre>';print_r($v);die;
			$v1=mysqli_query($c,$v);
		}
?>
<!DOCTYPE html>
<html>
	<head><title>Ad_event</title>
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
		text-align:center;
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
		padding: 38px 25px 200px 26px;
		margin: 121px 329px 90px 358px;
		font-size: 20px;
	}
	
		
	</style>
	
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
			<span>Recent News
			</span>
			</div>
		</div>
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 b1">
					<form name="name" method="post" class="frm1">
					
						<table style="width:100%;" class="t1">
						<tr>	
							<td colspan="2"><input type="text" id="entertext" style="width :100%" name="notice"></td>
						</tr>
						<tr>
							<td><button type="submit" id="btn"class="btn btn-success btn-lg" name="submit" style="margin-left:405px; margin-top:20px;";>
							submit</button></td>
						</tr>
						<tr>
							<?php
									$v2="SELECT * FROM tb_news";
									$q=mysqli_query($c,$v2);
									$i='->';
									while($v3=mysqli_fetch_array($q))
									{	
									echo'<tr>';
									echo'<td>'.$i.$v3["notice"].'</td>';
									echo'<td><a href="ad_newsde.php?nid='.$v3["id"].'">Delete</a></td>';
									echo'</tr>';
									$i++;
									}
							?>
							</textarea> 
						</tr>
						</table>
					</form>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">	
						<center style="color:black; font-size:20px; margin-bottom:340px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
</body>
</html>