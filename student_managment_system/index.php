 <?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }
	if(isset($_POST['bt1'])){
		$fn=$_POST['nm'];
		// echo'<pre>';print_r($fn);die;
		$ln=$_POST['cl'];
		// echo'<pre>';print_r($ln);
		$fan=$_POST['fn'];
		
		// echo'<pre>';print_r($fan);
		$mn=$_POST['mt'];
		// echo'<pre>';print_r($mn);
		$gen=$_POST['ge'];
		// echo'<pre>';print_r($gen);
		$mail=$_POST['mail'];
		// echo'<pre>';print_r($mail);
		$dt=$_POST['dt'];
		// echo'<pre>';print_r($dt);
		$nat=$_POST['nat'];
		// echo'<pre>';print_r($nat);
		$pn=$_POST['ph'];
		// echo'<pre>';print_r($pn);
		$dep=$_POST['dep'];
		// echo'<pre>';print_r($dep);
		// $pass=$_POST['pass'];
		// echo'<pre>';print_r($pass);
	$v="INSERT INTO tb_reg(fname,lname,faname,moname,gender,email,dob,nationality,pn,department)VALUES('$fn','$ln','$fan','$mn','$gen','$mail','$dt','$nat','$pn','$dep')";
	// echo'<pre>';print_r($v);
	$v1=mysqli_query($c,$v);
	// echo'<pre>';print_r($v1);die;
	
	// if($v1){
		// echo'connected';
	// }else{
		// echo'not connected';
	// }
	
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student managment system</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="../bootstrap3/css/bootstrap.min.css"> -->
		<!-- <script src="../jquery2/jquery.min.js"></script> -->
		<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
		<script src="asset/jquery2/jquery.js"></script>
		<!-- <script src="jquery2/jquery-1.10.2.js"></script>-->
		<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
		<style>
		body{
			overflow-x: hidden;
		}
		.container-fluid{
			padding-left:0px;
			padding-right:0px;
		}
		.p{
			padding-right:0px;
		}
		.modal-content{
			background-color: #0a0e64;
			}
		.modal-backdrop.fade {
			opacity: 0.9;
		}
		.one{
			background-image:linear-gradient(to bottom right,#0406a9,#b7b0e3);
			height:125px;
			Padding-top:43px;
		}
		.t1{
			color:white;
			word-spacing:10px;
			font-weight:bold;
			font-size:27px;
			padding-left:511px;
			padding:bottom:3px;
		}
		.t2{
			color:white;
			font-size:23px;
			font-weight:bold;
			padding-left:16px;
		}
		.t3{
			color:white;
			font-size:18px;
			padding-left:671px;
		}
		.b1{
			border-radius:61px;
			background-color:#2e2eb6;
			color:white;
			height:38px;
			padding:8px 52px 0px 65px;
			margin:7px 79px 7px 726px;
			font-family:verdana;
			font-weight:bold;
		}
		.two{
			background-color:#2e2eb6;
			height:48px;
		}
		.three{
			font-family:titillium_websemibold !important;
			color:white;
			font-size:23px;
			padding:10px 0px 0px 40px;
			margin:0px 0px 0px 55px;
			list-type:none;
		}
		<!-- .four{ -->
		<!-- padding:0px 0px 0px 30px; -->
		<!-- } -->
		.im{
			background-image:url("asset/images/i1.jpg");
			background-size:100% 100%;
		}
		#slideshow{width:auto;
			height:450px;
			position:relative;
			padding:10px;
			box-shadow: 0 0 20px rgba(0,0,0,0.4);
		}
		#slideshow > div{position: absolute;
			top:10px;
			left:10px;
			right:10px;
			bottom:10px;
		}
		#img{
			width:100%;
			height:450px;
			padding:0px 90px 0px 90px;
			margin-top:-10px;
		}
		.five{
			border:none;
			padding:0px 0px 0px 0px;
			margin:84px 0px 22px 109px;
		}
		.i8{
			border:solid #2e2eb6 1px;
			padding:0px 0px 6px 56px;
			margin:0px 80px 0px -25px;
		}
		.i9{
			color:white;
			font-size:20px;
			font-weight:bold;
			border:none;
			background-color:#2e2eb6;
			padding:0px 0px 0px 111px;
			margin:0px 80px 0px -25px;
		}
		.a1{
			font-size:small;
			font-weight:bold;
			padding:0px 0px 0px 0px;
		}
		.im1{
			margin:22px 0px 14px 30px;
			border:solid 6px #2e2eb6;
		}
		.six{
			background-color:#2e2eb6;
			margin:15px 0px 0px 0px;
			padding:20px 0px 0px 30px;
			color:white;
			font-size:22px;
			line-height: 1.2;
			text-align: left;
			font-family:titillium_websemibold !important;
		}
		.sev{
			font-size:18px;
			font-family:titillium_websemibold !important;
			line-height:2.2;
			list-style-type:none;
			padding-left:13px;
			}
		.eig{
			font-size:18px;
			font-family:titillium_websemibold !important;
		}
		.t5{
			text-align:right;
			padding-left:1300px;
			margin-bottom:5px;
		}
		.t4{
			padding-left:20px;
		}
		.b2{
			border:solid black 2px;
			margin: -2px 30px 35px 225px;
			padding:0px 0px 0px 0px;
			height:280px;
		}
		.b3{
			color:white;
			font-family:Bahnschrift !important;
			background-image:linear-gradient(to bottom right,#0406a9,#b7b0e3);
			border:solid black 2px;
			padding: 3px 20px 273px 20px;
			margin: 0px 225px 35px 30px;
		}
		.nine{
			// color:white;
			font-size:19px;
			font-family:titillium_websemibold !important;
			padding:0px 0px 0px 0px;
			margin:94px 0px 0px 493px;
		<!-- line-height:1.5; -->
		}
		.t6{
			color:black;
			font-family:titillium_websemibold !important;
			font-size:12px;
		}
		#mymodal{
			display:none;
		}
		.c1{
			color:white;
		}	
		.modal-body {
			padding: 0px 11px 0px 17px;
		}
		#frm1 label{
			margin-top:10px;
			margin-left:20px;
			margin-bottom:5px;
		}
		#frm1 input{
			margin-top:10px;
			margin-bottom:5px;
		}
		a:hover{
			color:white;
			text-decoration:none;
		}
		.p1{
			color:white;
			font-family:titillium_websemibold !important;
			color:white;
			font-size:23px;
			font-weight:normal;
		}
		.z1{
			color:white;
			font-size:25px;
			font-weight:bold;
			border:none;
			background-color:#2e2eb6;
			padding:4px 0px 0px 195px;
			margin:60px 30px 0px 225px;
		}
		.z2{
			color:white;
			font-size:25px;
			font-weight:bold;
			border:none;
			background-color:#2e2eb6;
			padding:4px 0px 0px 239px;
			margin:60px 225px 0px 30px;
		}
		.marq{
			background-image:linear-gradient(to bottom left,#0406a9,#b7b0e3);
			
			color:white;
			color:white;
			font-size:19px;
			height:100%;
		}
		#slideshow1{width:auto;
			height:auto;
			position:relative;
			box-shadow: 0 0 20px rgba(0,0,0,0.4);
		}
		#slideshow1 > div{position: absolute;
			top:20px;
			left:10px;
			right:10px;
			bottom:10px;
		}
		</style>
		<script>
			$("#slideshow > div:gt(0)").hide();
			setInterval(function(){
				$('#slideshow > div:first')
					.fadeOut(1000)
					.next()
					.fadeIn(1000)
					.end()
					.appendTo('#slideshow');
					},4000);
			$(document).ready(function(){
			$('#fn').blur(function(){
				validatefn();
			});
			function validatefn()
			{
			var fnvalue = $('#fn').val();
			var regexp = new RegExp('^([a-zA-Z])+$');
				if(fnvalue=="")
				{
					$('#show_error1').html('Please enter your Name');
					$('#show_error1').css('color','#88887e');
					return false;
				}
				if(regexp.test(fnvalue))
				{
					$('#show_error1').html('');
					return true;
				}
				else
				{
					$('#show_error1').html('Username is invalid ,Use only letter');
					$('#show_error1').css('color','#88887e');
					return false;
				}
			}
			$('#fname').blur(function(){
				validatefname();
			});
			function validatefname()
			{
			var fnamevalue=$('#fname').val();
			var regexp=new RegExp('^([a-z A-Z])+$');
				if(fnamevalue=="")
				{
					$('#show_error3').html("Enter Your Father's name");
					$('#show_error3').css('color','#88887e');
					return false;
				}
				if(regexp.test(fnamevalue))
				{
					$('#show_error3').html('');
					return true;
				}
				else
				{
					$('#show_error3').html('use only letters');
					$('#show_error3').css('color','#88887e');
					return false;
				}
			}
			$('#mname').blur(function(){
				validatemname();
			});
			function validatemname()
			{
			var mnamevalue=$('#mname').val();
			var regexp=new RegExp('^([a-z A-Z])+$');
				if(mnamevalue=="")
				{
					$('#show_error4').html("Enter your mother's name");
					$('#show_error4').css('color','#88887e');
					return false;
				}
				if(regexp.test(mnamevalue))
				{
					$('#show_error4').html('');
					return true;
				}
				else
				{
					$('#show_error4').html('use only letters');
					$('#show_error').css('color','#88887e');
					return false;
				}
			}
			$('#contact').blur(function(){
			validatecontact();
			});
			function validatecontact()
			{
			var contactvalue=$('#contact').val();
			var regexp=new RegExp('^([0-9])+$');
				if(contactvalue=='')
				{
					$('#show_error5').html('Field is empty');
					$('#show_erroe5').css('color','#88887e');
					return false;
				}
				if(regexp.test(contactvalue))
				{
					$('#show_error5').html('');
					return true;
				}
				else
				{
					$('#show_error5').html('Contact is invalid,plz enter the correct contact');
					$('#show_error5').css('color','#88887e');

				}
			}
			$('#frm1').submit(function(){
				var fnerror=validatefn();
				var fnameerror=validatefname();
				var mnameerror=validatemname();
				var contacterror=validatecontact();
				// <!-- var classerror=validateclass(); -->
				// <!-- var contacterror=validatecontact(); -->
					if(fnerror===true  && fnameerror===true && mnameerror===true && contacterror===true)
					return true;
					else
					return false;
			});
		});
		</script>
	</head>
	<body>
		<div class="container-fluid one" >
			<div class="row">
				<span class="t1">भारतीय प्रौद्योगिकी संस्थान      </span>
				<img src="asset/images/logo.jpeg" style="height:41px; width:41px; margin-left:17px;"><span class="t2">INDIAN INSTITUTE OF TECHNOLOGY</span>
				
			</div>
			<div class="row">
				<p class="t3">(A Central Goverment University Accredited by NAAC)<p>
			</div>
		</div>
		
		
		<div class="container-fluid">
			<div class="row">
				<p class="b1">INDIAN UNIVERSITY</p>
			</div>
		</div>
		
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 p">
				<nav class="navbar navbar-expand-md two">
				<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul class="navbar-nav ">
						<li class="nav-item three"><a class="nav-link" style="color:white;" href="#">Home</a></li>
						<li class="nav-item dropdown three">
						  <a class="nav-link dropdown-toggle p1" data-toggle="dropdown" >Academics</a>
							  <div class="dropdown-menu" style="margin-top:-8px; margin-left:10px" >
								<a class="dropdown-item"  href="Academics.php">Academic overview</a>
								<a class="dropdown-item"  href="program.php" class="t6">Program(courses)</a>
								<a class="dropdown-item"  href="holiday.php" class="t6">List of holidays</a>
							  </div>
						</li>
						<!--<li class="nav-item  dropdown three">
							<a class="nav-link dropdown-toggle p1" data-toggle="dropdown" style="margin-top:3px;">Admission</a>
								<div class="dropdown-menu" style=" margin-top:-8px;">
									<a class="dropdown-item"  href="syllabus.php"></a>
									<a class="dropdown-item"  href="#" class="t6">Admission Criteria</a>
									<a class="dropdown-item"  href="#" class="t6">Course Fee</a>
									<a class="dropdown-item"  href="#" class="t6">How to apply</a>
									<a class="dropdown-item"  href="#" class="t6">Admission office</a>
								</div>
						 </li>-->
						<li class="nav-item three"><a class="nav-link" href="syllabus.php"      style="color:white;">Syallabus</a></li>	
						<li class="nav-item three"><a class="nav-link" href="department.php"    style="color:white;">Department</a></li>
						<li class="nav-item three"><a class="nav-link" href="stu_portal.php"    style="color:white;">Student</a></li>
						<li class="nav-item three"><a class="nav-link" href="contact.php"       style="color:white;">Contact us</a></li>
						<li class="nav-item three"><a class="nav-link" href="student_login.php" style="color:white;">Sign in</a></li>
						<li class="nav-item three" data-toggle="modal" data-target="#myModal">
						<a class="nav-link" style="color:white;"href="#">register	</a></li>
						<div class="modal fade" id="myModal" role="dialog" >
							<div class="modal-dialog nine" style="max-width: 820px;" >
								<div class="modal-content" style="color:white;">
									<div class="modal-header"> 
										<div class="modal-title"style="padding-left:290px;"><b>Student Registration form</b></div>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									
									<div class="modal-body">
										<form method="post" name="frm" id="frm1">
											<table>
												<tr>
													<td><label for="fn"style="color:white;" >First Name</label></td>
													<td><input type="text" name="nm"id="fn"><br><span id="show_error1"></span></td>
													<td><label for="ln" style="color:white;">Last name</label></td>
													<td><input type="text" name="cl" id="ln"></td>	
												</tr>
												<tr>
													<td><label for="fname" style="color:white;">Father name</label></td>
													<td><input type="text" name="fn" id="fname"><br><span id="show_error3"></span></td>
													<td><label for="mname" style="color:white;">Mother name</label></td>
													<td><input type="text" name="mt" id="mname"><br><span id="show_error4"></span></td>
												</tr>
												<tr>
													<td><label for="ge" style="color:white;">Gender</label></td>
													<td>
													<input type="radio" name="ge" value="ma" >Male
													<input type="radio" name="ge" value="fe">Female
													<input type="radio" name="ge" value="oth">Others</td>
													<td><label for="mail">Email</label></td>
													<td><input type="email" name="mail"></td>
												</tr>
												<tr>
													<td><label for="db" style="color:white;">DOB</label></td>
													<td><input type="date" name="dt" style="width:100%;" id="db"></td>
													<td><label for="nat" style="color:white;">Nationality</label></td>
													<td><select style="width:100%"; name="nat">
													<option value="in">Indian</option>
													<option value="ni">other</option>
													</select></td>
												</tr>
												<tr>
													<td><label for="ph" style="color:white;">Phone no:</label></td>
													<td><input type="text" id="contact" name="ph"><br><span id="show_error5"></span></td>
													<td><label for="dep"style="color:white;">Department</label></td>
													<td><select style="width:100%;" name="dep">
													<option value="b.t" selected="selected">B.tech</option>
													<option value="it">IT</option>
													<option value="cse">CSE</option>
													<option value="ee">EE</option>
													<option value="me">ME</option>
													</td>
												</tr>
											</table>	
									</div>
									<div class="modal-footer">
										<input type="submit" class="btn btn-default" style="color:white;" name="bt1" value="Submit">
										</form>
									</div>
								</div>
							</div>
						</div>
						</ul>
					</div>
				</nav>
			</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 im">
							<div id="slideshow">
							<div>
								<img src="asset/images/i5.jpg" id="img">
							</div>
							<div>	
								<img src="asset/images/i2.jpg" id="img">
							</div>	
							<div>
								<img src="asset/images/i3.jpg" id="img">
							</div>
							<div>
								<img src="asset/images/i4.jpg" id="img">
							</div>
							<div>
								<img src="asset/images/i1.jpg" id="img">
							</div>
							</div>
				</div>
			</div>
		</div>
		<marquee style="background-color: #2e2eb6; color:white; font-size:20px; font-family:titillium_websemibold !important;">Admission starting from 30 March to july 2022</marquee>
		
		
		<div class="container-fluid">
			<div class="row">
				<div  class="col-md-4">
					<div class="five">
						<div  class="i9">Jawaharlal Nehru</div>
						<div class="i8">
						<img src="asset/images/i6.jpg" height="220px" width="190px" class="im1">
						<div class="a1"> "The object of education was to produce <br>a desire to serve the community 
						as a whole <br>and to apply the knowledge gained not<br> only for personal but for public welfare.'' 
						</div>
						</div>
						<div  class="i9">*****</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="five">
						<div  class="i9">Abul kalam azad</div>
						<div class="i8">
						<img src="asset/images/i8.jpg" height="240px" width="195px" class="im1">
						<div class="a1">“Education is the ability to listen<br> to almost anything without losing your <br>
						temper or your self-confidence.”</div>
						</div>
						<div  class="i9">Fijfoj</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="five">
						<div  class="i9">Dr. Avinash Chander</div>
						<div class="i8">
						<img src="asset/images/i7.jpg" height="220px" width="210px" class="im1">
						<div class="a1">“If You are planning for a year, sow rice;<br> if you are planning for a decade,
						plant <br>trees; if you are planning for a lifetime, <br>educate people”
						</div>
						</div>
						<div  class="i9">Fijfoj</div>
						
				</div>
			</div>
		</div>
		</div>
		<div class="container-fluid">
			<div class="row">
			<div class="col-md-6">
				<div class="z1">RECENT NEWS</div>
				<div class="b2">
					<marquee  direction="up"  class="marq">
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
					</marquee>
				</div>
			</div>
			<div class="col-md-6">
			<div class="z2">NOTICE</div>
				<div class="b3">
					<div id="slideshow1">
		
					<div>
						<p>
							<?php
							$v2="SELECT * FROM tb_notice";
							$q=mysqli_query($c,$v2);
							$i='-';
							while($v3=mysqli_fetch_array($q))
							{	
							echo'<tr>';
							echo'<td>'.$i.$v3["one"].'</td><br>';;
							echo'</tr>';
							$i++;
							}
						?>
						</p>
					</div>
					<div>
						<p>
						<?php
							$v2="SELECT * FROM tb_notice1";
							$q=mysqli_query($c,$v2);
							$i='-';
							while($v3=mysqli_fetch_array($q))
							{	
							echo'<tr>';
							echo'<td>'.$i.$v3["two"].'</td><br>';;
							echo'</tr>';
							$i++;
							}
						?>
						</p>
					</div>
					<div>
						<p>
						<?php
							$v2="SELECT * FROM tb_notice2";
							$q=mysqli_query($c,$v2);
							$i='-';
							while($v3=mysqli_fetch_array($q))
							{	
							echo'<tr>';
							echo'<td>'.$i.$v3["three"].'</td><br>';;
							echo'</tr>';
							$i++;
							}
						?>
						</p>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container-fluid six">
			<div class="row">
			<div class="col-md-4">
				Important<br>
				<hr style="background-color:white; height:0px;">
				<ul class="sev">
					<li><a href="archieve.php" class="c1">Archieve</a></li>
					<li><a href="syllabus.php" class="c1">Syllabus</a></li>
					<li><a href="event.php" class="c1">Conference and events</a></li>
					<li><a href="webpolicy.php" class="c1">Website policies</a></li>
					<li><a href="finance.php" class="c1">Finance wing</a></li>

				<ul>
			</div>
			<div class="col-md-4"><br>
				<hr style="background-color:white; height:0px; width:100%">
				<ul class="sev">
				
					<li><a href="contact.php" class="c1">Contact Us</a></li>
					<li><a href="terms.php" class="c1">Terms & condition</a></li>
					<li><a href="htr.php" class="c1">How to reach</a></li>
					<li><a href="about.php" class="c1">About Us</a></li>
					<li><a href="feedback.php" class="c1">Feedback</a></li>
					
				</ul>
			</div>
			<div class="col-md-4" style="padding-right:5px;"> 
				Address<br>
				<hr style="background-color:white; height:0px; padding-right:5px;">
				<p class="eig">New Delhi Main rd,IIT campus,Delhi.<br>Pin code- 110016.
				<br>+91 8580487151<br>ansparihar1@gmail.com<br> </p>
			
			</div>
			<hr style="background-color:white; height:0px; width:100% ">
			<div class="container-fluid">
				<div class="row">
					<small class="t4">copyright 2022,All Right Reserved.</small>
					<small class="t5">last updated on<br>  05/05/2022</small>
				</div>
			</div>
		</div>
		</div>
	</body>
	<script>
			$("#slideshow1 > div:gt(0)").hide();
			setInterval(function(){
				$('#slideshow1 > div:first')
					.fadeOut(2000)
					.next()
					.fadeIn(2000)
					.end()
					.appendTo('#slideshow1');
					},5000);
		</script>
</html>