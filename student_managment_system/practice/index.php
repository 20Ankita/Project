 <?php
	// $c=mysqli_connect('localhost','root','','db_reg');
	// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }
	// if(isset($_POST['bt1'])){
		// $fn=$_POST['nm'];
		// echo'<pre>';print_r($fn);die;
		// $ln=$_POST['cl'];
		// echo'<pre>';print_r($ln);
		// $fan=$_POST['fn'];
		// echo'<pre>';print_r($fan);
		// $mn=$_POST['mt'];
		// echo'<pre>';print_r($mn);
		// $gen=$_POST['ge'];
		// echo'<pre>';print_r($gen);
		// $mail=$_POST['mail'];
		// echo'<pre>';print_r($mail);
		// $dt=$_POST['dt'];
		// echo'<pre>';print_r($dt);
		// $nat=$_POST['nat'];
		// echo'<pre>';print_r($nat);
		// $pn=$_POST['ph'];
		// echo'<pre>';print_r($pn);
		// $dep=$_POST['dep'];
		// echo'<pre>';print_r($dep);
		// $pass=$_POST['pass'];
		// echo'<pre>';print_r($pass);
	// $v="INSERT INTO tb_r(fname,lname,faname,moname,gender,email,dob,nationality,pn,department,password)VALUES('$fn','$ln','$fan','$mn','$gen','$mail','$dt','$nat','$pn','$dep','$pass')";
	// echo'<pre>';print_r($v);
	// $v1=mysqli_query($c,$v);
	// echo'<pre>';print_r($v1);die;
	
	// if($v1){
		// echo'connected';
	// }else{
		// echo'not connected';
	// }
	
	// }
// ?>
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
		<script>
		
		</script>
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
		height:35px;
		}
		.three{
		font-family:titillium_websemibold !important;
		color:white;
		font-size:17px;
		padding:0px 0px 0px 40px;
		list-type:none;
		}
		<!-- .four{ -->
		<!-- padding:0px 0px 0px 30px; -->
		<!-- } -->
		.im{
		background-image:url("i1.jpg");
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
	    padding: 200px 20px 20px 20px;
		margin: 50px 30px 35px 225px;
		}
		.b3{
		border:solid black 2px;
	    padding: 200px 20px 20px 20px;
		margin: 50px 225px 35px 30px;
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
		}
		#mymodal{
		display:none;
		}
		a:hover {
		text-decoration:none;
		}
		.c1{
		color:white;
		}	
    .modal-body {
    padding: 0px 11px 0px 17px;
	}
	#frm1 label{
		margin-left:20px;
		margin-bottom:20px;
	}
	#frm1 input{
	margin-bottom:10px;
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
					$('#show_error1').html('field is empty');
					$('#show_error1').css('color','green');
					return false;
				}
				if(regexp.test(fnvalue))
				{
					$('#show_error1').html('');
					return true;
				}
				else
				{
					$('#show_error1').html('username is invalid,use only letters');
					$('#show_error1').css('color','green');
					return false;
				}
			}
			$('#ln').blur(function(){
				validateln();
			});
			function validateln()
			{
			var lnvalue=$('#ln').val();
			var regexp=new RegExp('^([a-z A-Z])+$');
				if(lnvalue=="")
				{
					$('#show_error2').html('field is empty');
					$('#show_error2').css('color','red');
					return false;
				}
				if(regexp.test(lnvalue))
				{
					$('#show_error2').html('field is empty');
					return true;
				}
				else
				{
					$('#show_error2').html('lastname is invalid,use only letters');
					$('#show_error2').css('color','red');
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
					$('#show_error3').html('field is empty');
					$('#show_error3').css('color','yellow');
					return false;
				}
				if(regexp.test(fnamevalue))
				{
					$('#show_error3').html('field is empty');
					return true;
				}
				else
				{
					$('#show_error3').html('use only letters');
					$('#show_error3').css('color','yellow');
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
					$('#show_error4').html('field is empty');
					$('#show_error4').css('color','white');
					return false;
				}
				if(regexp.test(mnamevalue))
				{
					$('#show_error4').html('field is empty');
					return true;
				}
				else
				{
					$('#show_error4').html('use only letters');
					$('#show_error').css('color','white');
					return false;
				}
			}
			
			$('#frm1').submit(function(){
				var fnerror=validatefn();
				var lnerror=validateln();
				var fnameerror=validatefname();
				var mnameerror=validatemname();
				// <!-- var classerror=validateclass(); -->
				// <!-- var contacterror=validatecontact(); -->
					if(fnerror===true && lnerror===true && fnameerror===true && mnameerror===true)
					return true;
					else
					return false;
			});
		});
		</script>
	<head>
	<body>
		<div class="container-fluid one" >
			<div class="row">
				<span class="t1">भारतीय प्रौद्योगिकी संस्थान      </span>
				<img src="logo.jpeg" style="height:41px; width:41px; margin-left:17px;"><span class="t2">INDIAN INSTITUTE OF TECHNOLOGY</span>
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
					<ul class="navbar-nav three">
					<li class="nav-item"><a class="nav-link" style="color:white;" href="#">Home</a></li>
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar1">
					<ul class="navbar-nav three">
					<li class="nav-item" data-toggle="dropdown"><a class="nav-link" style="color:white;"href="#">Academics</a>
					<ul class="dropdown-menu" style="margin-left:196px; margin-top:-1px; padding-left:13px;">
						<big><li><a href="#" class="t6"> Online Admission</a></li>
						<li><a href="#" class="t6"> Course fee</a></li>
						<li><a href="#" class="t6">How to apply</a></li></big>
					</ul>
					</li>
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar3">
					<ul class="navbar-nav three">
					<li class="nav-item" data-toggle="dropdown"><a class="nav-link" style="color:white;"href="#">Admission</a>
					<ul class="dropdown-menu" style="margin-left:390px; margin-top:-1px; padding-left:12px;">
						<big><li><a href="#" class="t6"> Online Admission</a></li>
						<li><a href="#" class="t6"> Course fee</a></li>
						<li><a href="#" class="t6">How to apply</a></li>
						<li><a href="#" class="t6">Education loan</a></li>
						<li><a href="#" class="t6">Refund policy</a></li></big>
					</ul></li>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar4">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar4">
					<ul class="navbar-nav three">
					<li class="nav-item"data-toggle="dropdown"><a class="nav-link" style="color:white;"href="#">Syallabus</a>
					<ul class="dropdown-menu" style="margin-left:579px; margin-top:-1px; padding-left:32px;">
						<big><li><a href="#"class="t6">B.tech(1st)</a></li>
						<li><a href="#"class="t6">B.tech(2nd)</a></li>
						<li><a href="#"class="t6">B.tech(3rd)</a></li>
						<li><a href="#"class="t6">B.tech(4th)</a></li></big>
					</ul></li>
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar5">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar5">
					<ul class="navbar-nav three">
					<li class="nav-item" data-toggle="dropdown"><a class="nav-link" style="color:white;"href="#">Department</a>
					<ul class="dropdown-menu" style="margin-left:769px; margin-top:-1px; padding-left:6px;">
						<big><li><a href="#"class="t6">Department of IT</a></li>
						<li><a href="#"class="t6">Department of cse</a></li>
						<li><a href="#"class="t6">Department of EE</a></li>
						<li><a href="#"class="t6">Department of ME</a></li></big>
					</ul>
					</li>
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar7">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar7">
					<ul class="navbar-nav three">
					<li class="nav-item" data-toggle="dropdown"><a class="nav-link" style="color:white;"href="#">Attendence</a>
					<ul class="dropdown-menu" style="margin-left:974px; margin-top:-1px; padding-left:0px;">
						<big><li><a href="#"class="t6">Department of IT</a></li>
						<li><a href="#"class="t6">Department of cse</a></li></big>
					</ul></li>
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar8">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar8">
					<ul class="navbar-nav three">
					<li class="nav-item" data-toggle="dropdown"><a class="nav-link" style="color:white;"href="#">Contact us</a></li>
				</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar9">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar9">
					<ul class="navbar-nav three">
					<li class="nav-item"><a href="pg/sign.php" target="_blank"class="nav-link t6" style="color:white;">Sign in</a>
			
					</li>
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar10">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar10">
					<ul class="navbar-nav three">
					<li class="nav-item" data-toggle="modal" data-target="#myModal">
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
								<td><input type="text" name="cl" id="ln"><br><span id="show_error2"></span></td>	
								
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
								<td><input type="text" id="ph" name="ph"></td>
								<td><label for="dep"style="color:white;">Department</label></td>
								<td><select style="width:100%;" name="dep">
								<option value="b.t" selected="selected">B.tech</option>
								<option value="it">IT</option>
								<option value="cse">CSE</option>
								<option value="ee">EE</option>
								<option value="ee">ME</option>
								</td>
								</tr>
								<tr>
								<td><label for="pass" style="color:white;">Password</label></td>
								<td><input type="password" id="pass" name="pass"></td>
								</table>	
								
							</div>
							<div class="modal-footer">
								<!--<button type="submit" class="btn btn-default" style="color:white" name="bt1">submit</button>-->
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
								<img src="i5.jpg" id="img">
							</div>
							<div>	
								<img src="i2.jpg" id="img">
							</div>	
							<div>
								<img src="i3.jpg" id="img">
							</div>
							<div>
								<img src="i4.jpg" id="img">
							</div>
							<div>
								<img src="i1.jpg" id="img">
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
						<div  class="i9" ></div>
						<div class="i8">
						<img src="i6.jpg" height="220px" width="190px" class="im1">
						<div class="a1"> "The object of education was to produce <br>a desire to serve the community 
						as a whole <br>and to apply the knowledge gained not<br> only for personal but for public welfare.'' 
						</div>
						</div>
						<div  class="i9" align ="center">Fijfoj</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="five">
						<div  class="i9">Fijfoj</div>
						<div class="i8">
						<img src="i8.jpg" height="240px" width="195px" class="im1">
						<div class="a1">“Education is the ability to listen<br> to almost anything without losing your <br>
						temper or your self-confidence.”</div>
						</div>
						<div  class="i9">Fijfoj</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="five">
						<div  class="i9">Fijfoj</div>
						<div class="i8">
						<img src="i7.jpg" height="220px" width="210px" class="im1">
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
				<div class="b2">
				</div>
			</div>
			<div class="col-md-6">
				<div class="b3">
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
					<li><a href="#" class="c1">Archieve</a></li>
					<li><a href="#" class="c1">Syllabus</a></li>
					<li><a href="#" class="c1">Downloads</a></li>
					<li><a href="#" class="c1">Admission</a></li>
					<li><a href="#" class="c1">Website policies</a></li>
					<li><a href="#" class="c1">Finance wing</a></li>

				<ul>
			</div>
			<div class="col-md-4"><br>
				<hr style="background-color:white; height:0px; width:100%">
				<ul class="sev">
				
					<li><a href="#" class="c1">Related link</a></li>
					<li><a href="#" class="c1">Contact Us</a></li>
					<li><a href="#" class="c1">Terms & condition</a></li>
					<li><a href="#" class="c1">How to reach</a></li>
					<li><a href="#" class="c1">About Us</a></li>
					<li><a href="#" class="c1">Feedback</a></li>
					
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
</html>