<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c)
	// {
		// echo'connected';
	// }
	// else
	// {
		// echo'not connected';
	// }
	$id=$_GET['did'];
	$v="SELECT * FROM tb_departli WHERE departid='$id'";
	$q=mysqli_query($c,$v);
	$v1=mysqli_fetch_array($q);
	// echo'<pre>';print_r($v);die;
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
			background-image:url('asset/images/depart.jpg');
			background-size:100% 100%;
			}
			.t1 {
				background-color: #1d3c59;
				color: white;
				text-align:center;
				padding-top:25px;
				font-size: 51px;
				font-weight: bold;
			}
			.one{
				background-color:#10151b;
				opacity:0.9;
				color:white;
				border:none;
				border-radius:9px;
				padding:0px 0px 0px 0px;
				margin:84px 6px 24px 102px;
			}
			.i1{
				border:none;
				padding:5px 84px 6px 88px;
				margin:0px 0px 0px 0px;
			}
			img{
				margin-top:20px;
				margin-left:100px;
				height:190px;
				width:190px;
				border-radius:9px;
			}	
			.i2{
				color:white;
				font-size:27px;
				font-weight:bold;
				border:none;
				border-radius:9px;
				background-color:#38586f;
				padding: 10px 0px 10px 185px;
				margin: 0px -84px -5px -88px;
			}
			.two{
				background-color:#10151b;
				opacity:0.9;
				color:white;
				border:none;
				border-radius:9px;
				padding:0px 0px 0px 0px;
				margin:84px 102px 24px 6px;
			}
			.i3{
				text-align:center;
				Color:white;
				font-size:40px;
				font-weight:900;
			}
			.three{
				margin:0px 241px 0px 241px;
				padding:0px 0px 0px 0px;
				border-radius:17px;
			}
			.i4{
				color:white;
				font-size:27px;
				font-weight:bold;
				text-align:center;
			}
			.a{
				width:100%;
				text-align:center;
				border-radius:4px;				
			}
		</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t1">
			<div class="col-md-12">
			<p>Department of  <?php echo $v1['dename']; ?></p>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 img">
				<div class="row">
					<div class="col-md-1"></div>
					<div  class="col-md-5">
						<div class="one">
							<div class="i1">
							<div class="i4">Head of department</div>
							<?php
								echo '<img src="asset/depart/'.$v1['hodpic'].'" ><br>';
								echo $v1['hoddes'];
								echo $v1['dename'];
								echo'<div class="i2">'.$v1['hodnm'].' </div>';
								?>				
							</div>
							
							
						</div>
					</div>
					<div class="col-md-5">
						<div class="two">
							<div class="i1">
							<div class="i4">President</div>
							<?php
							echo '<img src="asset/depart/'.$v1['prepic'].'" style="width=50px; height=50px;"><br>';
							echo $v1['predes'];
							echo'<div class="i2">'.$v1['prenm'].' </div>';?>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-12">
							<form method="post"  name="frm" class="three" style="background-color:black; color:white;">
								<p class="i3">Faculty</p>
								<table border="1" class="a">
									<?php
										$u="SELECT *FROM tb_faculty WHERE departid='$id'";
										$u1=mysqli_query($c,$u);
									?>
									<tr><b>
										<td><b>Sr.N</b></td>
										<td><b>Name</b></td>
										<td><b>Designation</b></td>
										<td><b>Mobile No.</b></td>
									</tr>
									
									<?php
									$i=1;
									while($u2=mysqli_fetch_array($u1))
									{
										echo'<tr>';
										echo'<td>'.$i.'</td>';
										echo'<td>'.$u2['name'].'</td>';
										echo'<td>'.$u2['desig'].'</td>';
										echo'<td>'.$u2['contact'].'</td>';
										echo'</tr>';
									
									$i++;
									}
									?>
									
								</table>
							</form>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">	
						<center style="color:white; font-size:20px; margin-top:30px; margin-bottom:40px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
