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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type = "text/css" href="animate.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href='//fonts.googleapis.com/css?family=Gudea' rel='stylesheet'>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script type="text/javascript" src="jquery.tablesorter.js"></script>
<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#MedicalTable2").tablesorter(); 
    } 
); 
	function Counter(arr) {
		var a = [], b = [], prev;

		arr.sort();
		for ( var i = 0; i < arr.length; i++ ) {
		    if ( arr[i] !== prev ) {
		        a.push(arr[i]);
		        b.push(1);
		    } else {
		        b[b.length-1]++;
		    }
		    prev = arr[i];
		}

		return [a, b];
	}
</script>
<style>
	body{
			background: url('Pictures/BackgroundHomePage2.png');
			background-size: 100%;
		}
		#MedicalTable,#MedicalTable2 {
		    font-size: 18px; 
		    font-family: 'Gudea';
		    table-layout: fixed;
			width: 100%;
		}
		#MedicalTable2 .header2 th,#MedicalTable2 td{
			padding:30px;
			padding:30px;
		}
		td{
			padding:10px;
		}
		th, td{
			text-align: center; 
		    width: 150px;
		    text-wrap: normal;
			word-wrap: break-word;
		}
		#MedicalTable  .header, #MedicalTable2  .header2 {
		    border-bottom: 3px solid #c1c1c1;
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
			border-bottom: solid 2px rgba(0,0,0,1);
			transition: border ease-out 0.5s;
		}
		#GVHeader3 a:hover{
			border-bottom: solid 2px rgba(0,0,0,1);
			transition: border ease-out 0.5s;
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
			display: block;
	   		margin: auto;
		  	padding-top: 10px;
	  		width:80%;
	  		text-align: center;
		}
		.grid-item {
	  		float: left;
		  	width: 200px;
		  	height: 200px;
		  	margin-bottom: 10px;
		  	text-align: center;
		  	display: flex;
		    justify-content:center;
		    align-content:center;
		    flex-direction:column;
		    font-size:30px;
		    transition: filter 0.5s ease-in-out;
		}
		.grid-item:hover {
			-webkit-filter: brightness(80%);
	   		filter: brightness(80%);
		}
		.show{
			z-index: 1;
			opacity: 1;
			position:absolute;
			margin:-22px 0 0 55px;
		}
		.hover{
			opacity:0;
			z-index:2;
			position:absolute;
			margin:-22px 0 0 25px;
		}
		.show, .hover {
		    transition: opacity 0.5s ease-in-out;
		}

		.grid-item:hover .show {
		    opacity: 0;
		}
		.grid-item:hover .hover {
		    opacity: 1;
		}
		#scrollviewtable,#scrollviewtable2{
			box-shadow: 0.2px 0.2px 2px 2px rgba(0,0,0,0.1);
			height:60vh;
			overflow:auto;
		}
		#scrollviewtable::-webkit-scrollbar-track
		{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.035);
			border-radius: 10px;
			background-color: transparent;
		}

		#scrollviewtable::-webkit-scrollbar
		{
			width: 5px;
			height:5px;
			background-color: transparent;
		}

		#scrollviewtable::-webkit-scrollbar-thumb
		{
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: rgba(26, 153, 65, 0.1);
			opacity: 0;
		}
		#scrollviewtable:hover::-webkit-scrollbar-thumb{
			opacity: 1;
		}
		#scrollviewtable::-webkit-scrollbar-corner {
		  background: rgba(0,0,0,0);
		}
		#scrollviewtable2::-webkit-scrollbar-track
		{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.035);
			border-radius: 10px;
			background-color: transparent;
		}

		#scrollviewtable2::-webkit-scrollbar
		{
			width: 5px;
			height:5px;
			background-color: transparent;
		}

		#scrollviewtable2::-webkit-scrollbar-thumb
		{
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: rgba(26, 153, 65, 0.1);
			opacity: 0;
		}
		#scrollviewtable2:hover::-webkit-scrollbar-thumb{
			opacity: 1;
		}
		#scrollviewtable2::-webkit-scrollbar-corner {
		  background: rgba(0,0,0,0);
		}
		#SearchField{
			text-align: center;
			background: rgb(255, 228, 142);
			padding-left:10px;
			padding-right:10px;
			padding-top:30px;
			padding-bottom:30px;
			border-radius: 5px;
		}
		select.Conditionals {
		   -webkit-appearance: button;
		   -webkit-border-radius: 2px;
		   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
		   -webkit-padding-end: 20px;
		   -webkit-padding-start: 2px;
		   -webkit-user-select: none;
		   background-image: url("SelectDropdown.png"), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
		   background-position: 97% center;
		   background-repeat: no-repeat;
		   border: 1px solid #AAA;
		   color: #555;
		   font-size: inherit;
		   overflow: hidden;
		   text-overflow: ellipsis;
		   white-space: nowrap;
		   width: 75px;
		   text-align:center;
		}
		input{
			width:170px;
		}
		.btn-circle {
		  width: 30px;
		  height: 30px;
		  text-align: center;
		  padding: 6px 0;
		  font-size: 12px;
		  line-height: 1.428571429;
		  border-radius: 15px;
		}
		#Refresh{
			display: inline;
    		float: right;
    		margin-top: 420px;
			margin-right:-60px;
		}
		#Download{
			display: inline;
    		float: right;
    		margin-top: 480px;
			margin-right:-60px;
		}
		#Download2{
			display: inline;
    		float: right;
    		margin-top: 10px;
			margin-right:-60px;
		}
		#Back2{
			display: inline;
    		float: right;
    		margin-top: 10px;
			margin-right:-20px;
		}
		#CounterTable{
			display: inline;
    		float: right;
    		margin-top: 540px;
			margin-right:-60px;
		}
		#InvertTable{
			display: inline;
    		float: right;
    		margin-top: 600px;
			margin-right:-60px;
		}
		#RefreshID{
			display: inline;
    		float: right;
    		margin-top: 425px;
			margin-right:-110px;
			font-size:12px;
			opacity:0;
			transition: opacity 0.5s ease-in-out;
		}
		#DownloadID{
			display: inline;
    		float: right;
    		margin-top: 486px;
			margin-right:-123px;
			font-size:12px;
			opacity:0;
			transition: opacity 0.5s ease-in-out;
		}
		#DownloadID2{
			display: inline;
    		float: right;
    		margin-top: 15px;
			margin-right:-123px;
			font-size:12px;
			opacity:0;
			transition: opacity 0.5s ease-in-out;
		}
		#BackID2{
			display: inline;
    		float: right;
    		margin-top: 15px;
			margin-right:5px;
			font-size:12px;
			opacity:0;
			transition: opacity 0.5s ease-in-out;
		}
		#CounterID{
			display: inline;
    		float: right;
    		margin-top: 544px;
			margin-right:-112px;
			font-size:12px;
			opacity:0;
			transition: opacity 0.5s ease-in-out;
		}
		#InvertID{
			display: inline;
    		float: right;
    		margin-top: 605px;
			margin-right:-103px;
			font-size:12px;
			opacity:0;
			transition: opacity 0.5s ease-in-out;
		}
		#Back2:hover ~ #BackID2{
			opacity:1;
		}
		#Refresh:hover ~ #RefreshID{
			opacity:1;
		}
		#Download:hover ~ #DownloadID{
			opacity:1;
		}
		#Download2:hover ~ #DownloadID2{
			opacity:1;
		}
		#CounterTable:hover ~ #CounterID{
			opacity:1;
		}
		#InvertTable:hover ~ #InvertID{
			opacity:1;
		}
		.divider th{
			width:100%;
			text-align: center; 
			background: linear-gradient(#c1c1c1, rgba(0, 0, 0, 0.1), #c1c1c1,#c1c1c1,#c1c1c1,#c1c1c1,#c1c1c1 rgba(0, 0, 0, 0.1)); 
		 }
		.modal,.modal2{
		    display: none;
		    position: fixed; 
		    z-index: 1;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%; 
		    overflow: auto; 
		    background-color: rgb(0,0,0); 
		    background-color: rgba(0,0,0,0.4); 
    		align-items: center;
		}
		.modal-content {
		    background-color: #fefefe;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #888;
		    width: 80%;
		    height:70%;
		}
		.close,.close1 {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}
		.close:hover,
		.close:focus,.close1:hover,.close1:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}
		@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
		[type="checkbox"]:not(:checked),
		[type="checkbox"]:checked {
		  position: absolute; 
		  left: -9999px;
		}
		[type="checkbox"]:not(:checked) + label,
		[type="checkbox"]:checked + label {
		  position: relative;
		  padding-left: 95px;
		  cursor: pointer;
		}
		[type="checkbox"]:not(:checked) + label:before,
		[type="checkbox"]:checked + label:before,
		[type="checkbox"]:not(:checked) + label:after,
		[type="checkbox"]:checked + label:after {
		  content: '';
		  position: absolute;
		}
		[type="checkbox"]:not(:checked) + label:before,
		[type="checkbox"]:checked + label:before {
		  left: 0; top: 0;
		  width: 80px; height: 30px;
		  background: #DDDDDD;
		  border-radius: 6px;
		  transition: background-color .2s;
		}
		[type="checkbox"]:not(:checked) + label:after,
		[type="checkbox"]:checked + label:after {
		  width: 30px; height: 30px;
		  transition: all .2s;
		  border-radius: 6px 0 0 6px;
		  background: #7F8C9A;
		  top: 0; left: 0;
		}

		/* on checked */
		[type="checkbox"]:checked + label:before {
		  background:#34495E; 
		}
		[type="checkbox"]:checked + label:after {
		  background: #39D2B4;
		  top: 0; left: 51px;
		  border-radius: 0 6px 6px 0;
		}

		[type="checkbox"]:checked + label .ui,
		[type="checkbox"]:not(:checked) + label .ui:before,
		[type="checkbox"]:checked + label .ui:after {
		  position: absolute;
		  left: 6px;
		  width: 65px;
		  border-radius: 15px;
		  font-size: 14px;
		  font-weight: bold;
		  line-height: 22px;
		  transition: all .2s;
		}

		[type="checkbox"]:not(:checked) + label .ui:before {
		  font-family: 'FontAwesome';
		  content: "\f00d";
		  left: 46px;
		  margin-top: 3px;
		}
		[type="checkbox"]:checked + label .ui:after {
		  font-family: 'FontAwesome';
		  content: "\f00c";
		  color: #39D2B4;
		  margin-top: 3px;
		  left: 12px;
		}
		[type="checkbox"]:focus + label:before {
		  border: 0; outline: 0;
		  box-sizing: border-box;
		}
		.FormMultiple{
			height:80%;
		}
		#GVH3{
			display: inline;
			font-size: 20px;
			color:rgb(0,0,0);
			padding-left: 30px;
		}
		#DoneID{
			display: inline;
			font-size:12px;
		}
		#submitDone{
			display: inline;
			text-align:right;
		}
		table.tablesorter thead tr .header23 {
			background-image: url(bg.gif);
			background-repeat: no-repeat;
			background-position: center right;
			cursor: pointer;
		}
		table.tablesorter thead tr .headerSortUp {
			background-image: url(asc.gif);
			background-repeat: no-repeat;
		}
		table.tablesorter thead tr .headerSortDown {
			background-image: url(desc.gif);
			background-repeat: no-repeat;
		}
		#AddButton{
			float:right;
			margin-top: -38px;
			margin-right:-50px;
		}
		#MinusButton{
			float:right;
			margin-top: -78px;
			margin-right:-50px;
		}
		.SubmitButton{
			float:right;
			margin-top: -38px;
			margin-right:-95px;
		}
		.FilterDefault{
			float:right;
			margin-top: -78px;
			margin-right:-95px;
		}
		#Second{
			display:none;
		}
		#Three{
			display:none;
		}
		#Four{
			display:none;
		}
		#Five{
			display:none;
		}
	</style>
</head>
<body>
<nav class="nav" id="nav">
<h3 class="display-3" id = "GVHeader1">View Database</h3>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<h3 id = "GVHeader2" class="display-3"><a class="nav-link"  href="UploadFile.php">Upload Files</a></h3>
<div class="dropdown">
  <h3 id = "GVHeader4" class="display-3"><div id = "GVH4"><?php echo $_SESSION["Username"]; ?>▾</div></h3>
  <div class="dropdown-content">
    <a href="LogIn.php" id = "AtagLogOut">Log Out</a>
    <a href="#">Change Password</a>
  </div>
</div>
</nav>
<div id="myModal" class="modal">
	<div class="modal-content">
		<span class="close">&times;</span>
		<div id="submitDone">
			<button type="button" class="btn btn-primary btn-circle" id = "Done"><i class="fa fa-check"></i></button>
			<p id = "DoneID">Done</p>
		</div>
		<h3 id = "GVH3" class="display-3">Pick files to view:</h3><br/>
	    <form action="#" style = "margin: auto; text-align:center; overflow:auto; column-count: 3;column-gap: 20px;" id = "FormMultiple">
	    </form>
	</div>
</div>
<div id="myModal2" class="modal2">
	<div class="modal-content">
		<span class="close1">&times;</span>
		<h3 id = "GVH3" class="display-3" style="text-align:center"><u>Field Counter</u></h3><br/>
	    <form action="#" style = "margin: auto; text-align:center; overflow:auto;" id = "FormMultiple">
	    	Counter Variable 1: <input type="text" id = "CountVar1" name="search" placeholder="Search.."/><br/><br/>
	    	Counter Variable 2: <input type="text" id = "CountVar2" name="search" placeholder="Search.."/><br/><br/>
	    	Counter Variable 3: <input type="text" id = "CountVar3" name="search" placeholder="Search.."/><br/><br/>
	    </form>
		<div id="submitDone">
			<button type="button" class="btn btn-primary btn-circle" id = "Done2"><i class="fa fa-check"></i></button>
			<p id = "DoneID2">Done</p>
		</div>
	</div>
</div>
<div id="BackgroundImage" class="animated fadeIn">
	<?php
		include('Net/SSH2.php');
		$ssh = new Net_SSH2('<Server Name>');
		include('Net/SFTP.php');
		$sftp = new Net_SFTP('<Server Name>');
		if (!$ssh->login('<User Name>','<Password>' )) {
			exit('Login Failed');
		}
		if (!$sftp->login('<User Name>', '<Password>')) {
		   exit('Login Failed');
		}
		if(!isset($_GET['Database'])){
			$Count = $ssh->exec("ls DatabaseTSV/".$_SESSION["Organisation"]." | wc -l");
			$FilesNames = $ssh->exec("ls DatabaseTSV/".$_SESSION["Organisation"]);
			$FilesNamesArray = explode(PHP_EOL,$FilesNames);
			function randomColor ($minVal = 0, $maxVal = 255)
					{

					    // Make sure the parameters will result in valid colours
					    $minVal = $minVal < 0 || $minVal > 255 ? 0 : $minVal;
					    $maxVal = $maxVal < 0 || $maxVal > 255 ? 255 : $maxVal;

					    // Generate 3 values
					    $r = mt_rand($minVal, $maxVal);
					    $g = mt_rand($minVal, $maxVal);
					    $b = mt_rand($minVal, $maxVal);

					    // Return a hex colour ID string
					    return sprintf('#%02X%02X%02X', $r, $g, $b);

					}
			?>
				<div class="grid" data-masonry='{ "itemSelector": ".grid-item",  "gutter": 10}'>
				<div class="grid-item" id = "GridAll" style='background-color:<?php echo randomColor(150,200); ?>'>Select All</div>
				<div class="grid-item" id = "GridMultiple" style='background-color:<?php echo randomColor(150,200); ?>'>Choose Multiple</div>
				<?php
				for ($p = 0;$p<$Count;$p++){
					$a = randomColor(150,255);
					echo "<div class='grid-item' id = 'GridItem".$p."' style='background-color:".randomColor(150,200). "'><span class = 'show'>". str_replace(".tsv", "", $FilesNamesArray[$p])."</span><span class = 'hover'>View ". str_replace(".tsv", "", $FilesNamesArray[$p])."</span></div>";
					$location = "ViewDatabase.php?Database=".str_replace(".tsv", "", $FilesNamesArray[$p]);
					echo "<script>
						$('#GridItem".$p."').click(function(){
						    window.location.href='".$location."'; 
						});
						$('#GridAll').click(function(){
							";
							$location1 = 'ViewDatabase.php?Database=All';
						    echo "window.location.href='".$location1."'; 
						});
						$('#GridMultiple').click(function(){
							var modal = document.getElementById('myModal');
							var span = document.getElementsByClassName('close')[0];
							modal.style.display = 'flex';
							span.onclick = function() {
							    modal.style.display = 'none';
							}
							window.onclick = function(event) {
							    if (event.target == modal) {
							        modal.style.display = 'none';
							    }
							}
							$('#Done').click(function(){
								var arr = $('input:checkbox.Checkboxes').filter(':checked').map(function () {
								    return this.id;
								}).get();
								if(arr.length==0){
									alert('Nothing selected!');
								}else{
									var Stringcapture;
									for(b = 0;b<arr.length;b++){
										if(b == 0){
											Stringcapture = arr[b];
										}else{
											Stringcapture = Stringcapture + 'ꙗ' + arr[b];
										}
									}
									window.location.href = 'ViewDatabase.php?Database='+Stringcapture;
								}
							})";
							$Count = $ssh->exec("ls DatabaseTSV/".$_SESSION["Organisation"]." | wc -l");
							$FilesNames = $ssh->exec("ls DatabaseTSV/".$_SESSION["Organisation"]);
							$FilesNamesArray = explode(PHP_EOL,$FilesNames);
							$StorageTSVArray = array();
								echo "
								var p = document.createElement('p');
							    p.className = 'Selection';
							    p.innerHTML = '<input type=\"checkbox\" id=\"".$FilesNamesArray[$p]."\" class = \"Checkboxes\"/><label for=\"".$FilesNamesArray[$p]."\"><span class=\"ui\" style = \"text-align:left\"></span>".$FilesNamesArray[$p]."</label>';
							    document.getElementById('FormMultiple').appendChild(p); 
							});
					</script>";
				}
				?></div><?php
		}elseif(isset($_GET['Relink'])){
			echo "
			<script>
			var tableArray = JSON.parse(localStorage.getItem('tabledata'));
			for (m=0; m < tableArray.length; m++) { 
				tableArray[m] = tableArray[m].split(',');
			}
			var html = '<div id = \"scrollviewtable2\"><table id = \"MedicalTable2\" class=\"tablesorter\"><thead>';
			html += '<tr class=\"header2\">';
			for( var j = 0; j < tableArray[0].length; j++  ) {
			 html += '<th class=\"headerSortDown header23\">' + tableArray[0][j] + '</th>';
			}
			html += '</tr></thead><tbody>';
			for( var i = 1; i < tableArray.length; i++) {
			html += '<tr>';
				for( var j = 0; j < tableArray[i].length; j++ ) {
				   html += '<td>' + tableArray[i][j] + '</td>';
				}
			}
			html += '</tbody></table></div>';
			$('#BackgroundImage').append(html);
			$('#BackgroundImage').css('margin-top','50px')
			</script>";
			echo '<div id = "Menu2">
					<button type="button" class="btn btn-primary btn-circle" id = "Download2"><i class="fa fa-download"></i></button>
					<p id = "DownloadID2">Download</p>
					<button type="button" class="btn btn-primary btn-circle" id = "Back2"><i class="fa fa-hand-o-left"></i></button>
					<p id = "BackID2">Back</p>
				</div>	
				<script>
					$("#Back2").click(function(){
						window.location.href ="'.$_GET['Relink'].'"
					})
					$("#Download2").click(function(){
						function downloadTSV(tsv, filename) {
						    var tsvFile;
						    var downloadLink;
						    tsvFile = new Blob([tsv], {type: "text/tsv"});
						    downloadLink = document.createElement("a");
						    downloadLink.download = filename;
						    downloadLink.href = window.URL.createObjectURL(tsvFile);
						    downloadLink.style.display = "none";
						    document.body.appendChild(downloadLink);
							downloadLink.click();
						}
						function exportTableToTSV(filename) {
						    var tsv = [];
						    var rows = document.querySelectorAll("table tr:not([style*=\'display:none\']):not([style*=\'display: none\'])");
						    for (var i = 0; i < rows.length; i++) {
						        var row = [], cols = rows[i].querySelectorAll("td:not([style*=\'display:none\']):not([style*=\'display: none\']), th:not([style*=\'display:none\']):not([style*=\'display: none\'])");
						        for (var j = 0; j < cols.length; j++) 
						            row.push(cols[j].innerText);
						        tsv.push(row.join("\t"));        
						    }
						    downloadTSV(tsv.join("\n"), filename);
						}';
						if (($position = strpos($_GET['Relink'], "=")) !== FALSE) { 
						    $InsertFileName = substr($_GET['Relink'], $position+1); 
						}
						echo 'exportTableToTSV("'.$InsertFileName.'_Counted.tsv");';
						echo '});
				</script>';
		}else{
			echo '<div id = "Menu">
					<button type="button" class="btn btn-primary btn-circle" id = "Refresh"><i class="fa fa-refresh"></i></button>
					<p id = "RefreshID">Refresh</p>
					<button type="button" class="btn btn-primary btn-circle" id = "Download"><i class="fa fa-download"></i></button>
					<p id = "DownloadID">Download</p>
					<button type="button" class="btn btn-primary btn-circle" id = "CounterTable"><i class="fa fa-list-ol"></i></button>
					<p id = "CounterID">Counter</p>
					<button type="button" class="btn btn-primary btn-circle" id = "InvertTable"><i class="fa fa-repeat"></i></button>
					<p id = "InvertID">Invert</p>
				</div>	
				<script>
					$("#Refresh").click(function(){
						for(var t = 1; t <= document.getElementById("MedicalTable").rows.length;t++){
							StringID1 = "Row"+t;
							$("#"+StringID1).css("display","table-row");
							document.getElementsByClassName("Holder")[0].selected = true;
							document.getElementsByClassName("Search")[0].value = "";
     						document.getElementsByClassName("FilterText")[0].value = "";
     						document.getElementsByClassName("FilterNumber")[0].value = "";
     						$(".Conditionals").prop("disabled", true);
					  		$(".FilterNumber").prop("disabled", true);
					  		$(".SubmitButton").prop("disabled", true);
						}
					});
					$("#Download").click(function(){
						function downloadTSV(tsv, filename) {
						    var tsvFile;
						    var downloadLink;
						    tsvFile = new Blob([tsv], {type: "text/tsv"});
						    downloadLink = document.createElement("a");
						    downloadLink.download = filename;
						    downloadLink.href = window.URL.createObjectURL(tsvFile);
						    downloadLink.style.display = "none";
						    document.body.appendChild(downloadLink);
							downloadLink.click();
						}
						function exportTableToTSV(filename) {
						    var tsv = [];
						    var rows = document.querySelectorAll("table tr:not([style*=\'display:none\']):not([style*=\'display: none\'])");
						    for (var i = 0; i < rows.length; i++) {
						        var row = [], cols = rows[i].querySelectorAll("td:not([style*=\'display:none\']):not([style*=\'display: none\']), th:not([style*=\'display:none\']):not([style*=\'display: none\'])");
						        for (var j = 0; j < cols.length; j++) 
						            row.push(cols[j].innerText);
						        tsv.push(row.join("\t"));        
						    }
						    downloadTSV(tsv.join("\n"), filename);
						}';
						if(strpos($_GET['Database'], 'ꙗ')!==false){
							echo 'exportTableToTSV("'.str_replace('ꙗ', '/', str_replace(".tsv", "", $_GET["Database"])).'.tsv");';
						}else{
							echo 'exportTableToTSV("'.$_GET["Database"].'".tsv);';
						};
						echo '});
				</script>
				<div id = "SearchField">
				<div id = "One">
				Field of Interest: <input type="text" class = "Search" name="search" placeholder="Search.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Text Filter:&nbsp;<input type="text" class = "FilterText" name="FilterText" placeholder="Filter.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Numerical Filter:&nbsp;
				<select id = "Cond1" class = "Conditionals" disabled>
					<option value="" class = "Holder" disabled selected>Cond.</option>
					<option value="<"><</option>
					<option value=">">></option>
					<option value="=">=</option>
					<option value="≠">≠</option>
				</select> &nbsp;
				<input type="text" class = "FilterNumber" name="search" placeholder="Filter.." disabled> 
				</div>
				<div id = "Second">
				<br>
				Field of Interest: <input type="text" class = "Search" name="search" placeholder="Search.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Text Filter:&nbsp;<input type="text" class = "FilterText" name="FilterText" placeholder="Filter.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Numerical Filter:&nbsp;
				<select id = "Cond2" class = "Conditionals" disabled>
					<option value="" class = "Holder" disabled selected>Cond.</option>
					<option value="<"><</option>
					<option value=">">></option>
					<option value="=">=</option>
					<option value="≠">≠</option>
				</select> &nbsp;
				<input type="text" class = "FilterNumber" name="search" placeholder="Filter.." disabled> 
				</div>
				<div id = "Three">
				<br>
				Field of Interest: <input type="text" class = "Search" name="search" placeholder="Search.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Text Filter:&nbsp;<input type="text" class = "FilterText" name="FilterText" placeholder="Filter.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Numerical Filter:&nbsp;
				<select id = "Cond3"  class = "Conditionals" disabled>
					<option value="" class = "Holder" disabled selected>Cond.</option>
					<option value="<"><</option>
					<option value=">">></option>
					<option value="=">=</option>
					<option value="≠">≠</option>
				</select> &nbsp;
				<input type="text" class = "FilterNumber" name="search" placeholder="Filter.." disabled> 
				</div>
				<div id = "Four">
				<br>
				Field of Interest: <input type="text" class = "Search" name="search" placeholder="Search.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Text Filter:&nbsp;<input type="text" class = "FilterText" name="FilterText" placeholder="Filter.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Numerical Filter:&nbsp;
				<select id = "Cond4" class = "Conditionals" disabled>
					<option value="" class = "Holder" disabled selected>Cond.</option>
					<option value="<"><</option>
					<option value=">">></option>
					<option value="=">=</option>
					<option value="≠">≠</option>
				</select> &nbsp;
				<input type="text" class = "FilterNumber" name="search" placeholder="Filter.." disabled> 
				</div>
				<div id = "Five">
				<br>
				Field of Interest: <input type="text" class = "Search" name="search" placeholder="Search.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Text Filter:&nbsp;<input type="text" class = "FilterText" name="FilterText" placeholder="Filter.."/>&nbsp;&nbsp;&nbsp;&nbsp;
				Numerical Filter:&nbsp;
				<select id = "Cond5" class = "Conditionals" disabled>
					<option value="" class = "Holder" disabled selected>Cond.</option>
					<option value="<"><</option>
					<option value=">">></option>
					<option value="=">=</option>
					<option value="≠">≠</option>
				</select> &nbsp;
				<input type="text" class = "FilterNumber" name="search" placeholder="Filter.." disabled> 
				</div>
			</div>
			<button type="button" class="btn btn-primary btn-circle SubmitButton" disabled><i class="fa fa-check"></i></button>
			<button type="button" class="btn btn-danger btn-circle FilterDefault"><i class="fa fa-filter"></i></button>
			<button type="button" class="btn btn-success btn-circle" id = "AddButton"><i class="fa fa-plus"></i></button>
			<button type="button" class="btn btn-warning btn-circle" id = "MinusButton" disabled><i class="fa fa-minus"></i></button><br/><br/>';
			if($_GET['Database'] == "All"){
				$Count = $ssh->exec("ls DatabaseTSV/".$_SESSION["Organisation"]." | wc -l");
				$FilesNames = $ssh->exec("ls DatabaseTSV/".$_SESSION["Organisation"]);
				$FilesNamesArray = explode(PHP_EOL,$FilesNames);
				$StorageTSVArray = array();
				for ($y=0; $y < count($FilesNamesArray); $y++) { 
					$StorageTSVArraySubs = array();
					$DataDivider = array();
					array_push($DataDivider, $FilesNamesArray[$y]);
					$StorageSpace = $sftp->get('DatabaseTSV/'.$_SESSION['Organisation']."/".$FilesNamesArray[$y]); 
					$StoragebyParts = explode(PHP_EOL, $StorageSpace);
					$StoredVar = 0;
					$StoredVar2 = 0;
					foreach ($StoragebyParts as $StoragePart) {
						$StorageTSVArraySubs[$y][] = str_getcsv($StoragePart, "\t");
					}
					if($y == 0){
						$StorageTSVArray[$y] = array();
						for ($a = 0;$a<count($StorageTSVArraySubs[$y][0]);$a++){
							array_push($StorageTSVArray[$y],$StorageTSVArraySubs[$y][0][$a]);
						}
						$t = count($StorageTSVArray) + 1;
						$StorageTSVArray[$t] = array();
						array_push($StorageTSVArray[$t],str_replace(".tsv", "", $DataDivider[0]));
						unset($StorageTSVArraySubs[$y][0]);
						array_values($StorageTSVArraySubs[$y]);
						for ($a = 1;$a<count($StorageTSVArraySubs[$y]);$a++){
							$t = count($StorageTSVArray) + 1;
							$StorageTSVArray[$t] = array();
							for($b = 0;$b<count($StorageTSVArraySubs[$y][$a]);$b++){
								array_push($StorageTSVArray[$t],$StorageTSVArraySubs[$y][$a][$b]);
							}
						}
					}else{
						$t = count($StorageTSVArray) + 1;
						$StorageTSVArray[$t] = array();
						array_push($StorageTSVArray[$t],str_replace(".tsv", "", $DataDivider[0]));
						unset($StorageTSVArraySubs[$y][0]);
						array_values($StorageTSVArraySubs[$y]);
						for ($a = 1;$a<count($StorageTSVArraySubs[$y]);$a++){
							$t = count($StorageTSVArray) + 1;
							$StorageTSVArray[$t] = array();
							for($b = 0;$b<count($StorageTSVArraySubs[$y][$a]);$b++){
								array_push($StorageTSVArray[$t],$StorageTSVArraySubs[$y][$a][$b]);
							}
						}
					}
				}
			}elseif(strpos($_GET['Database'], 'ꙗ') !== false){
				$FilesNamesArray = explode('ꙗ',$_GET['Database']);
				$StorageTSVArray = array();
				for ($y=0; $y < count($FilesNamesArray); $y++) { 
					$StorageTSVArraySubs = array();
					$DataDivider = array();
					array_push($DataDivider, $FilesNamesArray[$y]);
					$StorageSpace = $sftp->get('DatabaseTSV/'.$_SESSION['Organisation']."/".$FilesNamesArray[$y]); 
					$StoragebyParts = explode(PHP_EOL, $StorageSpace);
					$StoredVar = 0;
					$StoredVar2 = 0;
					foreach ($StoragebyParts as $StoragePart) {
						$StorageTSVArraySubs[$y][] = str_getcsv($StoragePart, "\t");
					}
					if($y == 0){
						$StorageTSVArray[$y] = array();
						for ($a = 0;$a<count($StorageTSVArraySubs[$y][0]);$a++){
							array_push($StorageTSVArray[$y],$StorageTSVArraySubs[$y][0][$a]);
						}
						$t = count($StorageTSVArray) + 1;
						$StorageTSVArray[$t] = array();
						array_push($StorageTSVArray[$t],str_replace(".tsv", "", $DataDivider[0]));
						unset($StorageTSVArraySubs[$y][0]);
						array_values($StorageTSVArraySubs[$y]);
						for ($a = 1;$a<count($StorageTSVArraySubs[$y]);$a++){
							$t = count($StorageTSVArray) + 1;
							$StorageTSVArray[$t] = array();
							for($b = 0;$b<count($StorageTSVArraySubs[$y][$a]);$b++){
								array_push($StorageTSVArray[$t],$StorageTSVArraySubs[$y][$a][$b]);
							}
						}
					}else{
						$t = count($StorageTSVArray) + 1;
						$StorageTSVArray[$t] = array();
						array_push($StorageTSVArray[$t],str_replace(".tsv", "", $DataDivider[0]));
						unset($StorageTSVArraySubs[$y][0]);
						array_values($StorageTSVArraySubs[$y]);
						for ($a = 1;$a<count($StorageTSVArraySubs[$y]);$a++){
							$t = count($StorageTSVArray) + 1;
							$StorageTSVArray[$t] = array();
							for($b = 0;$b<count($StorageTSVArraySubs[$y][$a]);$b++){
								array_push($StorageTSVArray[$t],$StorageTSVArraySubs[$y][$a][$b]);
							}
						}
					}
				}
			}else{
				$StorageSpace = $sftp->get('DatabaseTSV/'.$_SESSION['Organisation']."/".$_GET['Database'].".tsv"); 
				$StoragebyParts = explode(PHP_EOL, $StorageSpace);
				$StorageTSVArray = array();
				$StoredVar = 0;
				$StoredVar2 = 0;
				foreach ($StoragebyParts as $StoragePart) {
					$StorageTSVArray[] = str_getcsv($StoragePart, "\t");
				}
			}
			echo "<script>
				$('.Search').keyup(function() {
					$('.Search').blur(function() {
						if (!this.value) {
							for(var t = 1; t <= document.getElementById('MedicalTable').rows.length;t++){
								StringID1 = 'Row'+t;
								$('#'+StringID1).css('display','table-row');
								document.getElementsByClassName('Holder')[0].selected = true;
								document.getElementsByClassName('Search')[0].value = '';
	     						document.getElementsByClassName('FilterText')[0].value = '';
	     						document.getElementsByClassName('FilterNumber')[0].value = '';
	     						$('.Conditionals').prop('disabled', true);
						  		$('.FilterNumber').prop('disabled', true);
						  		$('.SubmitButton').prop('disabled', true);
							}
						}
					})
				});
				var SearchString = ".json_encode($StorageTSVArray[0]).";
				function filterItems(query) {
				  return SearchString.filter(function(el) {
				      return el.toLowerCase().indexOf(query.toLowerCase()) > -1;
				  })
				}
				$('.Search').keydown(function() {
				    $(\".Conditionals\").prop('disabled', true);
				  	$(\".FilterNumber\").prop('disabled', true);
				  	$(\".SubmitButton\").prop('disabled', true);
				});
				var FilteringTechnique = ['','','','',''];
				var Needle = ['','','','',''];
				var Haystack;
				$( \".Search\" ).autocomplete({
				  	source: [\"".join('","',$StorageTSVArray[0])."\"],
				  	select: function( event, ui ) {
					Haystack = '".join(',',$StorageTSVArray[0])."'
					HaystackArray = Haystack.split(',')
					var counter = $('input:visible').size();
				  	counter = counter/3 - 1;
				  	Needle[counter] = ui.item.value;
				  	if(ui.item.value.includes('Freq') == true || ui.item.value == 'GQX' || ui.item.value == 'Quality' || ui.item.value == 'Depth' || ui.item.value == 'Coordinate'){
				  		FilteringTechnique[counter] = 'Number';
				  		$(\".Conditionals\").prop('disabled', false);
				  		$(\".FilterNumber\").prop('disabled', false);
				  		$(\".SubmitButton\").prop('disabled', false);
				  	}else if(ui.item.value == 'SIFT' || ui.item.value == 'PolyPhen'){
						FilteringTechnique[counter] = 'Special';
				  		$(\".Conditionals\").prop('disabled', false);
				  		$(\".FilterNumber\").prop('disabled', false);
				  		$(\".SubmitButton\").prop('disabled', false);
				  	}else{
						FilteringTechnique[counter] = 'Text';
				  		$(\".Conditionals\").prop('disabled', true);
				  		$(\".FilterNumber\").prop('disabled', true);
				  		$(\".SubmitButton\").prop('disabled', false);
				  	}	
				  }
				});
				$( \"#CountVar1,#CountVar2,#CountVar3\" ).autocomplete({
					source: [\"".join('","',$StorageTSVArray[0])."\"],
					select: function( event, ui ) {
				  	Needle = ui.item.value;
					Haystack = '".join(',',$StorageTSVArray[0])."'
					HaystackArray = Haystack.split(',')
				  }
				});
				$('#InvertTable').click(function(){
					for(var t = 1; t <= document.getElementById('MedicalTable').rows.length;t++){
						StringID1 = 'Row'+t;
						if($('#'+StringID1).is(':visible')){
							$('#'+StringID1).css('display','none');
						}else{
							$('#'+StringID1).css('display','table-row');
						}
					}
				})
				$('#CounterTable').click(function(){
					var modal = document.getElementById('myModal2');
					var span = document.getElementsByClassName('close1')[0];
					modal.style.display = 'flex';
					span.onclick = function() {
					    modal.style.display = 'none';
					}
					window.onclick = function(event) {
					   if (event.target == modal) {
						    modal.style.display = 'none';
						}
					}
				})
				$('.FilterDefault').click(function(){
					var table, tr, td, i;
					table = document.getElementById(\"MedicalTable\");
					tr = table.getElementsByTagName(\"tr\");
					for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName(\"td\")[20];
						td2 = tr[i].getElementsByTagName(\"td\")[23];
						td3 = tr[i].getElementsByTagName(\"td\")[24];
						td4 = tr[i].getElementsByTagName(\"td\")[25];
						td5 = tr[i].getElementsByTagName(\"td\")[26];
						td6 = tr[i].getElementsByTagName(\"td\")[27];
						td7 = tr[i].getElementsByTagName(\"td\")[28];
					  	td8 = tr[i].getElementsByTagName(\"td\")[5];
					  	td9 = tr[i].getElementsByTagName(\"td\")[6];
					  	td10 = tr[i].getElementsByTagName(\"td\")[9];
					  	td11 = tr[i].getElementsByTagName(\"td\")[8];
					  	if(td && td2 && td3 && td4 && td5 && td6 && td7 && td8 && td9 && td10 && td11){
						    if (parseInt(td.innerHTML) < 5 && parseInt(td2.innerHTML) < 5 && parseInt(td3.innerHTML) < 5 && parseInt(td4.innerHTML) < 5 && parseInt(td5.innerHTML) < 5 && parseInt(td6.innerHTML) < 5 && parseInt(td6.innerHTML) < 5 && parseInt(td7.innerHTML) < 5 && td8.innerHTML.toUpperCase().indexOf(\"PASS\") > -1 && parseInt(td9.innerHTML) > 99 && parseInt(td10.innerHTML) > 100 && parseInt(td11.innerHTML) > 5) {
						    	if($('#'+tr[i].id).is(':visible')){
						    		console.log('Pass');
									$('#'+tr[i].id).css('display','table-row');
								}
						    }else{
						    	$('#'+tr[i].id).css('display','none');
							}
						}
						td12 = tr[i].getElementsByTagName(\"td\")[13];
					  	td13 = tr[i].getElementsByTagName(\"td\")[16];
					  	td14 = tr[i].getElementsByTagName(\"td\")[17];
					  	td15 = tr[i].getElementsByTagName(\"td\")[31];
						if(td12 && td13 && td14 && td15){
						    if (td15.innerHTML != '') {
						    	if($('#'+tr[i].id).is(':visible')){
						    		console.log('Pass');
									$('#'+tr[i].id).css('display','table-row');
								}
						    }else{
						    	if (td12.innerHTML.includes('synonymous') == true || td12.innerHTML.includes('intronic') == true || td12.innerHTML.includes('3_prime_UTR') == true || td12.innerHTML.includes('5_prime_UTR') == true) {
						    		$('#'+tr[i].id).css('display','none');
						    	}else if(td12.innerHTML.includes('missense') == true){
									if(td13.innerHTML.includes('Tolerated') == true || td14.innerHTML.includes('Benign') == true){
										$('#'+tr[i].id).css('display','none');
									}else{
										if($('#'+tr[i].id).is(':visible')){
								    		console.log('Pass');
											$('#'+tr[i].id).css('display','table-row');
										}
									}
						    	}else{
						    		if($('#'+tr[i].id).is(':visible')){
							    		console.log('Pass');
										$('#'+tr[i].id).css('display','table-row');
									}
						    	}
							}
						}
					}
				})
				$('#Done2').click(function(){
					var arrayLink = new Array();
					Haystack = '".join(',',$StorageTSVArray[0])."'
					HaystackArray = Haystack.split(',')
					var Indexes = new Array();
					if(document.getElementById('CountVar1').value != ''){
						arrayLink.push(document.getElementById('CountVar1').value.replace(/ /g,'_'))
						Indexes.push(HaystackArray.indexOf(document.getElementById('CountVar1').value) + 1);
					}
					if (document.getElementById('CountVar2').value != '') {
						arrayLink.push(document.getElementById('CountVar2').value.replace(/ /g,'_'))
						Indexes.push(HaystackArray.indexOf(document.getElementById('CountVar2').value) + 1);
					}
					if (document.getElementById('CountVar3').value != '') {
						arrayLink.push(document.getElementById('CountVar3').value.replace(/ /g,'_'))
						Indexes.push(HaystackArray.indexOf(document.getElementById('CountVar3').value) + 1);
					}
					var Connection = arrayLink.join();
					var Connection2 = window.location.pathname+'?'+location.href.substr(location.href.indexOf('?') + 1); ;
					var TableConnect = Connection + ',Count';
					if(arrayLink.length != 0){
						var ContainerArrayTableTemp = new Array();
						for(var t = 1; t <= document.getElementById('MedicalTable').rows.length;t++){
							StID1 = 'Row'+t;
							var DisplayStatus = $('#'+StID1).css('display')
							if(DisplayStatus != 'none'){
								var ContainerString;
								for(var p = 0; p < Indexes.length;p++){
									StID2 =  Indexes[p];
									if(p == 0){
										ContainerString = $('#'+StID1+' td:nth-child('+StID2+')').text();
									}else{
										ContainerString = ContainerString + ','+ $('#'+StID1+' td:nth-child('+StID2+')').text();
									}
								}
							if(ContainerString.trim().replace(/,/g ,'') != ''){
								ContainerArrayTableTemp.push(ContainerString);
							}
						}
					}
						var resultantcount = Counter(ContainerArrayTableTemp);
						var ContainerArrayTable = new Array();
						ContainerArrayTable.push(TableConnect);
						for (var u=0; u < resultantcount[0].length; u++) { 
							var StringAdd = resultantcount[0][u]+','+resultantcount[1][u];
							ContainerArrayTable.push(StringAdd);
						}
						localStorage.setItem('tabledata', JSON.stringify(ContainerArrayTable));
						location.href = 'ViewDatabase.php?Database='+Connection+'&Relink='+Connection2;
					}
				})
				$('#AddButton').click(function(){
					$('.SubmitButton').prop('disabled', true);
					if($('#Second').css('display') == 'none'){
						$('#Second').css('display','block')
						$(\"#AddButton\").prop('disabled', false);
						$(\"#MinusButton\").prop('disabled', false);
					}else{
						if($('#Three').css('display') == 'none'){
							$('#Three').css('display','block')
							$(\"#AddButton\").prop('disabled', false);
							$(\"#MinusButton\").prop('disabled', false);
						}else{
							if($('#Four').css('display') == 'none'){
								$('#Four').css('display','block')
								$(\"#AddButton\").prop('disabled', false);
								$(\"#MinusButton\").prop('disabled', false);
							}else{
								if($('#Five').css('display') == 'none'){
									$('#Five').css('display','block')
									$(\"#AddButton\").prop('disabled', true);
									$(\"#MinusButton\").prop('disabled', false);
								}
							}
						}
					}
				})
				$('#MinusButton').click(function(){
					if($('#Five').css('display') == 'block'){
						$('#Five').css('display','none')
						$(\"#MinusButton\").prop('disabled', false);
						$(\"#AddButton\").prop('disabled', false);
						$('#Five').find('input:text').val(''); 
					}else{
						if($('#Four').css('display') == 'block'){
							$('#Four').css('display','none')
							$(\"#MinusButton\").prop('disabled', false);
							$(\"#AddButton\").prop('disabled', false);
							$('#Four').find('input:text').val(''); 
						}else{
							if($('#Three').css('display') == 'block'){
								$('#Three').css('display','none')
								$(\"#MinusButton\").prop('disabled', false);
								$(\"#AddButton\").prop('disabled', false);
								$('#Three').find('input:text').val(''); 
							}else{
								if($('#Second').css('display') == 'block'){
									$('#Second').css('display','none')
									$(\"#AddButton\").prop('disabled', false);
									$(\"#MinusButton\").prop('disabled', true);
									$('#Second').find('input:text').val(''); 
								}
							}
						}
					}
				})
				$('.SubmitButton').click(function() {
				  	$(\"#AddButton\").prop('disabled', false);
				  	var counter = $('input:visible').size();
				  	counter = counter/3;
				  	for (i=0; i < counter; i++) { 
				  		if(FilteringTechnique[i] == 'Text'){
				  			console.log('Number of Rows: '+document.getElementById('MedicalTable').rows.length)
						for(var t = 1; t <= document.getElementById('MedicalTable').rows.length;t++){
							StringID1 = 'Row'+t;
							StringID2 =  HaystackArray.indexOf(Needle[i]) + 1;
							if($('.FilterText:visible:eq('+i+')').val() == ''){
								
							}else{
								if($('#'+StringID1+' td:nth-child('+StringID2+')').text().indexOf($('.FilterText:visible:eq('+i+')').val()) === -1){
									$('#'+StringID1).css('display','none');
								}else{
									if($('#'+StringID1).is(':visible')){
										$('#'+StringID1).css('display','table-row');
									}
								}
							}
						}
						console.log(StringID1+' '+$('#'+StringID1).is(':visible'));
				 	}else if(FilteringTechnique[i] == 'Number'){
				 		for(var t = 1; t <= document.getElementById('MedicalTable').rows.length;t++){
							StringID1 = 'Row'+t;
							StringID2 =  HaystackArray.indexOf(Needle[i]) + 1;
							if($('.FilterText:visible:eq('+i+')').val() == ''){
								
							}else{
								if($('#'+StringID1+' td:nth-child('+StringID2+')').text().indexOf($('.FilterText:visible:eq('+i+')').val()) === -1){
									$('#'+StringID1).css('display','none');
								}else{
									if($('#'+StringID1).is(':visible')){
										$('#'+StringID1).css('display','table-row');
									}
								}
							}
							if($('.FilterNumber:visible:eq('+i+')').val()== ''){

							}else{
								if($('.Conditionals:visible:eq('+i+')').val() == '<'){
									if(Number($('.FilterNumber:visible:eq('+i+')').val()) > Number($('#'+StringID1+' td:nth-child('+StringID2+')').text())){
										if($('#'+StringID1).is(':visible')){
											$('#'+StringID1).css('display','table-row');
										}
									}else{
										$('#'+StringID1).css('display','none');
									}
								}else if($('.Conditionals:visible:eq('+i+')').val() == '>'){
									if(Number($('.FilterNumber:visible:eq('+i+')').val()) < Number($('#'+StringID1+' td:nth-child('+StringID2+')').text())){
										if($('#'+StringID1).is(':visible')){
											$('#'+StringID1).css('display','table-row');
										}
									}else{
										$('#'+StringID1).css('display','none');
									}
								}else if($('.Conditionals:visible:eq('+i+')').val() == '='){
									console.log(Number($('.FilterNumber:visible:eq('+i+')').val()));
									if(Number($('.FilterNumber:visible:eq('+i+')').val()) == Number($('#'+StringID1+' td:nth-child('+StringID2+')').text())){
										if($('#'+StringID1).is(':visible')){
											$('#'+StringID1).css('display','table-row');
										}
									}else{
										$('#'+StringID1).css('display','none');
									}
								}else if($('.Conditionals:visible:eq('+i+')').val() == '≠'){
									if(Number($('.FilterNumber:visible:eq('+i+')').val()) != Number($('#'+StringID1+' td:nth-child('+StringID2+')').text())){
										if($('#'+StringID1).is(':visible')){
											$('#'+StringID1).css('display','table-row');
										}
									}else{
										$('#'+StringID1).css('display','none');
									}
								}
							}
						}
				 	}else if(FilteringTechnique[i] == 'Special'){
				 		for(var t = 1; t <= document.getElementById('MedicalTable').rows.length;t++){
							StringID1 = 'Row'+t;
							StringID2 =  HaystackArray.indexOf(Needle[i]) + 1;
							if($('.FilterText:visible:eq('+i+')').val() == ''){

							}else{
								if($('#'+StringID1+' td:nth-child('+StringID2+')').text().indexOf($('.FilterText:visible:eq('+i+')').val()) === -1){
									$('#'+StringID1).css('display','none');
								}else{
									if($('#'+StringID1).is(':visible')){
										$('#'+StringID1).css('display','table-row');
									}
								}
							}
							if($('.FilterNumber:visible:eq('+i+')').val()== ''){

							}else{
								if($('#'+StringID1+' td:nth-child('+StringID2+')').text() == ''){
									$('#'+StringID1).css('display','none');
								}else{
									if($('.Conditionals:visible:eq('+i+')').val() == '<'){
										if(Number($('.FilterNumber:visible:eq('+i+')').val()) > Number($('#'+StringID1+' td:nth-child('+StringID2+')').text().match(/\((.*?)\)/)[1])){
											if($('#'+StringID1).is(':visible')){
												$('#'+StringID1).css('display','table-row');
											}
										}else{
											$('#'+StringID1).css('display','none');
										}
									}else if($('.Conditionals:visible:eq('+i+')').val() == '>'){
										if(Number($('.FilterNumber:visible:eq('+i+')').val()) < Number($('#'+StringID1+' td:nth-child('+StringID2+')').text().match(/\((.*?)\)/)[1])){
											if(i == 0){
												$('#'+StringID1).css('display','table-row');
											}
										}else{
											$('#'+StringID1).css('display','none');
										}
									}else if($('.Conditionals:visible:eq('+i+')').val() == '='){
										if(Number($('.FilterNumber:visible:eq('+i+')').val()) == Number($('#'+StringID1+' td:nth-child('+StringID2+')').text().match(/\((.*?)\)/)[1])){
											if($('#'+StringID1).is(':visible')){
												$('#'+StringID1).css('display','table-row');
											}
										}else{
											$('#'+StringID1).css('display','none');
										}
									}else if($('.Conditionals:visible:eq('+i+')').val() == '≠'){
										if(Number($('.FilterNumber:visible:eq('+i+')').val()) != Number($('#'+StringID1+' td:nth-child('+StringID2+')').text().match(/\((.*?)\)/)[1])){
											if($('#'+StringID1).is(':visible')){
												$('#'+StringID1).css('display','table-row');
											}
										}else{
											$('#'+StringID1).css('display','none');
										}
									}
								}
							}
						}
				 	}
				  	}
				});
			</script>";
			echo "<div id = 'scrollviewtable' class='clusterize-scroll'>";
			echo "<table id = 'MedicalTable'><thead><tr class='header'>";
			for ($i = 0; $i < count($StorageTSVArray[0]); $i++){
				echo "<th class = Column".$i.">".$StorageTSVArray[0][$i]."</th>";
			}
		  	echo "</tr></thead><tbody>";
		  	for ($i = 1; $i < count($StorageTSVArray); $i++){
		  		if(isset($StorageTSVArray[$i][1])){
			  		echo "<tr id = Row".$i.">";
					  for ($j = 0; $j < count($StorageTSVArray[$i]); $j++){
						echo "<td class = Column".$j.">".$StorageTSVArray[$i][$j]."</td>";
					}
				  	echo "</tr>";
			  	}else{
			  		if (isset($StorageTSVArray[$i][0])){
			  			$ip = $i + 1;
			  			echo "<tr class = 'divider' bgcolor='#c1c1c1'><th colspan = '7'>".$StorageTSVArray[$i][0]."</th><th colspan = '7'>".$StorageTSVArray[$i][0]."</th><th colspan = '7'>".$StorageTSVArray[$i][0]."</th><th colspan = '7'>".$StorageTSVArray[$i][0]."</th><th colspan = '7'>".$StorageTSVArray[$i][0]."</th><th colspan = '7'>".$StorageTSVArray[$i][0]."</th><th colspan = '5'>".$StorageTSVArray[$i][0]."</th></tr>";
			  		}
			  	}
			}
			echo '</tbody></table>';
			echo "</div>";
		}
	?>
</div>
<!--<p>Designed by Pressfoto / Freepik</p>-->
</body>
</html>