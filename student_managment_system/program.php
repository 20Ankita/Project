<?php
$c=mysqli_connect('localhost','root','','db_sms');
?>
<!DOCTYPE html>
<html>
	<head><title>It </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.container-fluid{
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
	.t4 {
		background-color: #d0ceb1;
		margin:0px -15px 1px -15px;
		opacity:0.8;
		
	}
	.t5{
		color:black;
		padding:70px 201px 50px 159px;
		margin:0px -15px 0px -15px;
	}
	.a1{
		margin:15px 362px 60px 0px ;
		line-height:1.8;
	
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
	<style>
	</style>
	</head>
	<body>
	<div class="container-fluid">
			<div class="row b1">
				<div class="col-md-12">
					<div class="t2">
						
						<span style="font-size:50px; line-height:1.8; ">INDIAN INSTITUTE OF TECHNOLOGY<br></span>
						<big style="font-size:30px;">(COURSE FEE)</big>
					</div>
				</div>
			</div>	
			<div class="row b3">
				<div class="col-md-12">
					<div class="t4">
						<div class="t5">
						<span style="font-size:30px;font-weight:bold; ">Indian Institute  of Technology  Course Fee</span><br>
						<div style="font-size:20px;" class="a1">
						Indian institute of technology  [IIT]imparts quality  education at an afforadable and  competitive  fee stucture  offering  Best(ROI)Return of investment  to  the student .IIT  offers  industry oriented  professional program  in  Engineering( IT,CSE,ME,EE)  and many more  with the lowest  course fee   as compared  to other  universities  in the region.</div>> 
						</div>
					</div>
			<div>
				</div>
			</div>
		</div>
		<div class="row b2">
			<div class="col-md-12">
				<form name="name" method="post" class="frm1">
					<div style="color:white; font-size:45px; margin-bottom:20px; margin-top:30px; text-align:center; font-weight:bold;">Fee Stucture</div>
					<table border="1" style="width:100%; text-align:center;" class="a2">
					<tr style="font-weight:900">
						<td style="text-align:center;">Sr.N</td>
						<td style="text-align:center;">Program(course)</td>
						<td style="text-align:center;">Duration</td>
						<td style="text-align:center;">Fee</td>
					</tr>
					<tr>
						<?php
						$v="SELECT * FROM tb_prog";
						$v1=mysqli_query($c,$v);
						$i = 1;
						while($v2=mysqli_fetch_array($v1)){
						echo'<tr>';
						echo'<td>'.$i.'</td>';
						echo'<td>'.$v2["program"].'</td>';
						echo'<td>'.$v2["duration"].'</td>';
						echo'<td>'.$v2["fee"].'</td>';
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