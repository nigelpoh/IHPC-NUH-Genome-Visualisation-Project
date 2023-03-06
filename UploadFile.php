<?php
session_start();
?>
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
<link href='//fonts.googleapis.com/css?family=Gudea' rel='stylesheet'>
<style>
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
			border-bottom: solid 2px rgba(0,0,0,1);
			transition: border ease-out 0.5s;
		}
		#GVHeader3 a:hover{
			border-bottom: solid 2px rgba(0,0,0,1);
			transition: border ease-out 0.5s;
		}
		body{
			background: url('Pictures/BackgroundHomePage.png');
			background-size: 100%;
		}
		#GVHeader4 {
		    font-size: 25px;
		    cursor: pointer;
		}

		.dropdown {
		    position: relative;
		    display: inline-block;
		    padding-top:23px;
			color:rgb(0,0,0);
			margin-left:620px;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #ffefdd;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
		    display: block;
		}

		.dropdown:hover .dropbtn {
		    background-color: #3e8e41;
		}
		.jumbotron{
			background:rgba(0,0,0,0);
	  		text-align: center;
		}
	#BackgroundImage{
		position:absolute;
		background:rgba(0,0,0,0);
		background-size: 100%;
    	width:100%;
    	height: 100%;
    	display: flex;
	  	flex-direction: column;
	  	justify-content: center;
	}
	</style>
	<script type="text/javascript">
	$(function() {

	  // We can attach the `fileselect` event to all file inputs on the page
	  $(document).on('change', ':file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	    input.trigger('fileselect', [numFiles, label]);
	  });

	  // We can watch for our custom `fileselect` event like this
	  $(document).ready( function() {
	      $(':file').on('fileselect', function(event, numFiles, label) {

	          var input = $(this).parents('.input-group').find(':text'),
	              log = numFiles > 1 ? numFiles + ' files selected' : label;

	          if( input.length ) {
	              input.val(log);
	          } else {
	              if( log ) alert(log);
	          }

	      });
	  });
	  
	});
	</script>
</head>
<body>
<nav class="nav" id="nav">
<h3 class="display-3" id = "GVHeader1">Upload Files</h3>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<h3 id = "GVHeader3" class="display-3"><a class="nav-link" href="ViewDatabase.php">View Database</a></h3>
<div class="dropdown">
  <h3 id = "GVHeader4" class="display-3"><div id = "GVH4"><?php echo $_SESSION["Username"]; ?>▾</div></h3>
  <div class="dropdown-content">
    <a href="LogIn.php" id = "AtagLogOut">Log Out</a>
    <a href="#">Change Password</a>
  </div>
</div>
</nav>
<div id="BackgroundImage" class="animated fadeIn">
<div class = "jumbotron">
	<h2 class="animated fadeInDown display-4">Upload one or more files for data processing.</h2>
	<hr class="my-4">
	<p class="animated fadeInUp">Please ensure that all files are in "vcf" format.</p>
	<p class="lead">
		<form action="UploadFileProcessorPre.php" method="post" enctype="multipart/form-data">
		<div class="container-fluid" style="margin-top: 20px;">
		<div class="row">
		<div>
            <div class="input-group animated fadeInUp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="input-group-btn" >
                    <span class="btn btn-warning" style=" top: 4px; height:40px">
                        Browse&hellip; <input type="file" name="fileToUpload[]" multiple id="fileToUpload" class="btn btn-primary" style="display:none;">
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
                <p style="visibility:hidden">---------------</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Upload File" name="submit" class="btn btn-warning">
        	</div>
        </div>
        </div>
		</form>
	</p>
</div>
</div>
<!--<p>Designed by Pressfoto / Freepik</p>-->
</body>
</html>