<html>
	<head><title>Semester</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	body{
		overflow-y:hidden;
	}
	.a1{
		background-image:url('asset/images/de2.jpg');
		background-size:100% 100%;
	}
	.frm1{
		background-color:black;
		opacity:0.8;
		color:white;
		background-size: 100% 100%;
		border: solid black 2px;
		line-height: 1.5;
		border-radius: 9px;
		font-size: 30px;
		margin-top:40px;
		margin-bottom:200px;
		margin-left:456px;
		margin-right:400px;
	}
	label{
		color:white;
	}
	input{
		border-radius:9px;
	}
	.a2{
		color:white;
		background-color:black;
		opacity:0.8;
		line-height: 2.5;
		border-radius:99px;
		font-size: 46px;
		font-weight:bold;
		margin: 5px 340px 0px 340px;
        padding: 20px 0px 10px 410px;
	}
	a{
		color:blue;
		text-decoration:none;
	}
	a:hover{
		color:white;
	}
	</style>
	<body>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-12 a1">
				<p class="a2">syllabus</p>
				<form method="post" name="frm1" class="frm1" enctype="multipart/form-data">
					<table border="1" class="one">
						<?php
							$v1="SELECT * FROM tb_sylb";
							// echo'<pre>';print_r($v1);
							$q1=mysqli_query($c,$v1);
								// echo'<pre>';print_r($q1);
							$v2=mysqli_fetch_assoc($q1);
						?>	
					</table>
				</form>	
				</div>
			</div>
		</div>
</body>
<html>