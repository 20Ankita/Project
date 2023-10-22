<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }
	
	$id = $_GET['id'];
	// echo'<pre>';print_r($id);die;
	if(isset($_POST['submit'])){
	$courseid=$_POST['courseid'];
	$coursename=$_POST['coursename'];
	// echo'<pre>';print_r($coursenamae);die;
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
	$v="INSERT INTO tb_sylb(courseid,coursename,one,two,three,four,five,six,seven,eight)VALUES('$courseid','$coursename','$one','$two','$three','$four','$five','$six','$seven','$eight')";
	// echo'<pre>';print_r($v);die;
	$q=mysqli_query($c,$v);
	// echo'<pre>';print_r($q);die;
	header('location:sylb_view.php');
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Semester</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	<!--body{
		overflow-y:hidden;
	}-->
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
						<tr>
							<td>course id</td>
							<td><input type="text" name="courseid" value="<?php echo $id; ?>"></td>
						</tr>
						<tr>
							<td>Course name</td>
							<td><input type="text" name="coursename"></td>
						</tr>
						<tr>
							<td>SEMESTER</td>
							<td>pdf</td>
						</tr>
						<tr>
							<td>1st semester</td>
							<td><input type="file"  name="one"></td>
						</tr>
						<tr>
							<td> 2nd semester</td>
							<td><input type="file"  name="two"></td>	
						</tr>
						<tr>
							<td>3rd semester</td>
							<td><input type="file"  name="three"></td>
						</tr>
						<tr>
							<td> 4th semester</td>
							<td><input type="file"  name="four"></td>
						</tr>
						<tr>
							<td> 5th semester</td>
							<td><input type="file"  name="five"></td>
						</tr>
							<td> 6th semester</td>
							<td><input type="file"  name="six"></td>
						</tr>
						<tr>
							<td> 7th semester</td>
							<td><input type="file"  name="seven"></td>
						</tr>
						<tr>
							<td> 8th semester</td>
							<td><input type="file"  name="eight"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit"></td>
							<td><button type="submit"class="btn btn-success btn-lg bt2" name="update" ><a href="add_semup.php?id=<?php echo $id;?>" 
							style="color:white;">Update</a></button></td>
						</tr>
						</table>
					</form>	
				</div>
			</div>
		</div>
</body>
<html>