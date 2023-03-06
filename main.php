<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Gene Viewer</title>
<meta name="description" content="Gene Viewer">
<meta name="author" content="">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="animate.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style>
	body{
		background:
			linear-gradient(
			    rgba(216, 216, 216,0.95), 
			    rgba(216, 216, 216,0.95)
		    ),url('Pictures/BackgroundLPSU2.jpg');
		    background-size: 100%;
		}
		#container1{
		    -webkit-column-count: 2; 
		    -moz-column-count: 2; 
		    column-count: 2;
		    margin-top: 30px;
		    background:
			    linear-gradient(
		      	rgba(237, 236, 232,0.9), 
		     	rgba(237, 236, 232,0.9)
		    	),url('Pictures/BackgroundLandingPage(SignUp).jpg');
		    background-size: 100%;
		    background-color: #edece8;
		    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.03);
		}
		#Jumbo1{
			background-color: rgba(0,0,0,0);
			height:500px;
			display: flex;
		  	flex-direction: column;
		  	justify-content: center;
		}
		#JumboBorder{
			padding-left:20px;
			background-color: rgba(0,0,0,0);
			border-left: 1px solid #d6d4cd;
			border-radius:0px;
		}
		#Jumbo2{
			background-color: rgba(0,0,0,0);
			padding-left:-20px;
			height:500px;
			display: flex;
		  	flex-direction: column;
		  	justify-content: center;
		}
		#Jumbo1 p{
			color:#9b9681;
			font-size: 30px;
			text-align: right;
			display: inline-block;
		}
		#Jumbo1 #DisplayP{
			color:#777363;
			font-size: 30px;
			text-align: right;
			display: inline-block;
		}
		#Jumbo2 #main1{
			color:#777777;
			text-align: left;
			font-size: 30px;
		}
		input[type="text"]
		{
		    font-size:17px;
		    padding: 10px;
			border: none;
			border-bottom: solid 2px #c9c9c9;
			transition: border 0.3s;
			background-color: rgba(0,0,0,0);
			outline: none; 
		}
		input[type="text"]:focus
		{
			border-bottom: solid 2px #8c8c8c;
		}
		input[type="password"]
		{
		    font-size:17px;
		    padding: 10px;
			border: none;
			border-bottom: solid 2px #c9c9c9;
			transition: border 0.3s;
			background-color: rgba(0,0,0,0);
			outline: none; 
		}
		input[type="password"]:focus
		{
			border-bottom: solid 2px #8c8c8c;
		}
		#Jumbo2 #sublegend{
			color:#302f2f;
			text-align: left;
			font-size: 20px;
		}
		#GVHeader1{
			padding-left: 70px;
			padding-top:20px;
			font-size: 30px;
		}
		#GVHeader2 a{
			padding-top:28px;
			font-size: 20px;
			color:rgb(0,0,0);
			border-bottom: solid 2px rgba(0,0,0,0);
		}
		#GVHeader3 a{
			padding-top:28px;
			font-size: 20px;
			color:rgb(0,0,0);
			border-bottom: solid 2px rgba(0,0,0,0);
		}
		#GVHeader2 a:hover{
			border-bottom: solid 2px #c9c9c9;
			transition: border ease-out;
		}
		#GVHeader3 a:hover{
			border-bottom: solid 2px #c9c9c9;
			transition: border ease-out;
		}
	</style>
</head>
<body>
<nav class="nav" id="nav">
<h3 class="display-3" id = "GVHeader1">Gene Viewer</h3>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<h3 id = "GVHeader2" class="display-3"><a class="nav-link"  href="#">Log In</a></h3>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<h3 id = "GVHeader3" class="display-3"><a class="nav-link" href="#">Information</a></h3>

</nav>
<div class = "container" id = "container1">
	<div class = "jumbotron" id = "Jumbo1">
		<p class="display-4" id="DisplayP"><strong>Welcome to the Gene Viewer</strong></p>
		<p class="display-4"><i> <b>Collaborate</b>, <b>Analyse</b> and <b>Share</b> Gene Data</i></p>
	</div>
	<div class = "jumbotron" id = "Jumbo2">
	<br>
		<div id = "JumboBorder">
		<form action="Registration.php" method="post">
		<fieldset>
			<legend class = "display-4" id="main1">Sign Up</legend>
			<legend class = "display-6" id="sublegend">Username</legend>
			<input type="text" name="Username" class = "display-4" placeholder="Something Unique"><br><br>
			<legend class = "display-6" id="sublegend">Organisation</legend>
			<input type="text" name="organisation" class = "display-4" placeholder="Organisation Name"><br><br>
			<legend class = "display-6" id="sublegend">Password</legend>
			<input type="password" name="password" class = "display-4" placeholder="Something Secure"><br><br>
			<input type="submit" value="Submit">
		</fieldset>
		</form>
		</div>
	</div>
</div>
<!--<p>Designed by Pressfoto / Freepik</p>-->
</body>
</html>