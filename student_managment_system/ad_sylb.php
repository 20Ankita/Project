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
// echo'<pre>';print_r($c);die;
if(isset($_POST['submit'])){
	$one=$_FILES['one']['name'];
	// echo'<pre>';print_r($one);die;
	$store='asset/pdf/'.$one;
	// echo'<pre>';print_r($store);die;
	move_uploaded_file($_FILES['one']['tmp_name'],$store);
	$two=$_FILES['two']['name'];
	// echo'<pre>';print_r($one);die;
	$store='asset/pdf/'.$two;
	move_uploaded_file($_FILES['two']['tmp_name'],$store);
	$three=$_FILES['three']['name'];
	// echo'<pre>';print_r($one);die;
	$store='asset/pdf/'.$three;
	move_uploaded_file($_FILES['three']['tmp_name'],$store);
	$four=$_FILES['four']['name'];
	// echo'<pre>';print_r($one);die;
	$store='asset/pdf/'.$four;
	move_uploaded_file($_FILES['four']['tmp_name'],$store);
	$five=$_FILES['five']['name'];
	// echo'<pre>';print_r($five);die;
	$store='asset/pdf/'.$five;
	move_uploaded_file($_FILES['five']['tmp_name'],$store);
	$six=$_FILES['six']['name'];
	// echo'<pre>';print_r($six);die;
	$store='asset/pdf/'.$six;
	move_uploaded_file($_FILES['six']['tmp_name'],$store);
	$seven=$_FILES['seven']['name'];
	// echo'<pre>';print_r($seven);die;
	$store='asset/pdf/'.$seven;
	move_uploaded_file($_FILES['seven']['tmp_name'],$store);
	$eight=$_FILES['eight']['name'];
	// echo'<pre>';print_r($one);die;
	$store='asset/pdf/'.$eight;
	move_uploaded_file($_FILES['eight']['tmp_name'],$store);
	$v="INSERT INTO tb_sylb(one,two,three,four,five,six,seven,eight)VALUES('$one','$two','$three','$four','$five','$six','$seven','$eight')";
	// echo'<pre>';print_r($v);die;
	$q=mysqli_query($c,$v);
		
}

?>
<!DOCTYPE html>
<html>
	<head><title>stu_list</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
		.b1{
	background-image:url('asset/images/it.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t1{
	background-color:black;
	opacity:0.8;
	color:white;
	width:80%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	.t2 {
    background-color: #1f293bd1;
    color: white;
    padding-left: 646px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
a{
	color:white;
	text-decoration:none;
}
a:hover{
	color:white;
	text-decoration:none;
}
button{
	color:white;
	background-color:green;
	margin-left:30px;
}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<span>it_syllabus</span>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<form name="name" method="post" class="f1" enctype="multipart/form-data">
	<table border="1" class="t1">
	<tr>
	<?php
	$v1="SELECT * FROM tb_sylb";
	// echo'<pre>';print_r($v1);
	$q1=mysqli_query($c,$v1);
		// echo'<pre>';print_r($q1);
	$v2=mysqli_fetch_assoc($q1);
	

	?>
	<td>SEMESTER</td>>
	<td>pdf</td>
	</tr>
	<tr>
	<td>1st semester</td>
	<td><input type="file"  name="one"><?php echo'<a href="asset/pdf/'.$v2['one'].'">1 sem</a>';?></td>
	</tr>
	<tr>
	<td> 2nd semester</td>>
	<td><input type="file"  name="two"><?php echo'<a href="asset/pdf/'.$v2['two'].'">2 sem</a>';?></td>	
	</tr>
	<tr>
	<td>3rd semester</td>
	<td><input type="file"  name="three"><?php echo'<a href="asset/pdf/'.$v2['three'].'">3 sem</a>';?></td>

	</tr>
	<tr>
	<td> 4th semester</td>
	<td><input type="file"  name="four"><?php echo'<a href="asset/pdf/'.$v2['four'].'">4 sem</a>';?></td>

	</tr>
	<tr>
	<td> 5th semester</td>
	<td><input type="file"  name="five"><?php echo'<a href="asset/pdf/'.$v2['five'].'">5 sem</a>';?></td>
	</tr>
	<td> 6th semester</td>
	<td><input type="file"  name="six"><?php echo'<a href="asset/pdf/'.$v2['six'].'">6 sem</a>';?></td>

	</tr>
	<tr>
	<td> 7th semester</td>
	<td><input type="file"  name="seven"><?php echo'<a href="asset/pdf/'.$v2['seven'].'"> 7sem</a>';?></td>

	</tr>
	<tr>
	<td> 8th semester</td>
	<td><input type="file"  name="eight"><?php echo'<a href="asset/pdf/'.$v2['eight'].'">8 sem</a>';?></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit"></td>
	<?php echo'<td><button type="submit"><a href="ad_upsylb.php?sylb='.$v2['id'].'">Update</a></button></td>';?>

	</tr>
	</table>
	</form>
	</div>
	</div>
	</div>
	</body>
</html>