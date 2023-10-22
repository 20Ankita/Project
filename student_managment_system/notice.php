<?php
$c=mysqli_connect('localhost','root','','db_sms');
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
		padding: 38px 0px 200px 0px;
		margin:55px 0px 325px 0px;
		font-size: 20px;
	}
	</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row t2">
				<div class="col-md-12">
				<span>Notice
				</span>
				</div>
			</div>
		</div>
		<div class="container-fluid b1">
				<div class="row">
					<div class="col-md-4">
						<form name="name" method="post" class="frm1">
						Notice 1
							<table style="width:100%;">
								<?php
									if(isset($_POST['submit'])){
										$one=$_POST['one'];
										$v="INSERT INTO tb_notice(one)VALUE('$one')";
										// echo'<pre>';print_r($v);die;
										$v1=mysqli_query($c,$v);
									}
								?>
								<tr>	
									<td><input type="text" id="entertext" style="width :100%" name="one"></td>
								</tr>
								<tr>
									<td><button type="submit" id="btn"class="btn btn-success btn-lg" name="submit" style="margin-left:45px";>submit</button></td>
								</tr>
								
								<?php
									$v2="SELECT * FROM tb_notice";
									$q=mysqli_query($c,$v2);
									$i='->';
									while($v3=mysqli_fetch_array($q))
									{	
									echo'<tr>';
									echo'<td>'.$i.$v3["one"].'</td>';
									echo'<td><a href="ad_notice1.php?oid='.$v3["id"].'">Delete</a></td>';
									echo'</tr>';
									$i++;
									}
							?>
								
							</table>
						</form>
					</div>
					<div class="col-md-4">
						<form name="name" method="post" class="frm1">
						Notice 2
							<table style="width:100%;">
								<?php
									if(isset($_POST['submit1'])){
										$two=$_POST['two'];
										$u="INSERT INTO tb_notice1(two)VALUE('$two')";
										// echo'<pre>';print_r($v);die;
										$u1=mysqli_query($c,$u);
									}
								?>
								<tr>	
									<td><input type="text" id="entertext" style="width :100%" name="two"></td>
								</tr>
								<tr>
									<td><button type="submit" id="btn"class="btn btn-success btn-lg" name="submit1" style="margin-left:45px";>submit</button></td>
								</tr>
								
								<?php
									$u2="SELECT * FROM tb_notice1";
									$q1=mysqli_query($c,$u2);
									$j='->';
									while($u3=mysqli_fetch_array($q1))
									{	
										echo'<tr>';
										echo'<td>'.$j.$u3["two"].'</td>';
										echo'<td><a href="ad_notice2.php?tid='.$u3["id"].'">Delete</a></td>';
										echo'</tr>';
										$j++;
									}
								?>
								
							</table>
						</form>
						
					</div>
					<div class="col-md-4">
						<form name="name" method="post" class="frm1">
						Notice 3
							<table style="width:100%;">
								<?php
									if(isset($_POST['submit2'])){
										$three=$_POST['three'];
										$y="INSERT INTO tb_notice2(three)VALUE('$three')";
										// echo'<pre>';print_r($v);die;
										$y1=mysqli_query($c,$y);
									}
								?>
								<tr>	
									<td><input type="text" id="entertext" style="width :100%" name="three"></td>
								</tr>
								<tr>
									<td><button type="submit" id="btn"class="btn btn-success btn-lg" name="submit2" style="margin-left:45px";>submit</button></td>
								</tr>
								
								<?php
									$y2="SELECT * FROM tb_notice2";
									$q2=mysqli_query($c,$y2);
									$k='->';
									while($y3=mysqli_fetch_array($q2))
									{	
									echo'<tr>';
									echo'<td>'.$k.$y3["three"].'</td>';
									echo'<td><a href="ad_notice3.php?thid='.$y3["id"].'">Delete</a></td>';
									echo'</tr>';
									$k++;
									}
							?>
								
							</table>
						</form>
						
					</div>
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