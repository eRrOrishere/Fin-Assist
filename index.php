<?php
    session_start ();
    $session_name = "user";
    if (!isset ($_SESSION["visit"]) || $_SESSION["visit"] == "") {
        $_SESSION ["main_color"]="blue";
    }
    if (!isset ($_SESSION[$session_name]) || $_SESSION[$session_name] == "") {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    }
    if (isset($_GET['disability'])) {
        $_SESSION['disability']=$_GET['disability'];
        echo "<script type='text/javascript'> document.location = 'language.php'; </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      	<style type="text/css">
      		body {font-family: 'Raleway', sans-serif;color: #263238;}
      		.round {border-radius: 50px;}
	  		.loginpanel {width: 320px;top: 50%;left: 50%;position: absolute;transform: translate(-50%,-50%);}
	  		img {height: 100%;}
	  		.he {height: 250px;}
	  		div.scrollmenu {overflow: auto;white-space: nowrap;}
			div.scrollmenu a {display: inline-block;text-align: center;text-decoration: none;padding-left: 15px;color: #263238;}
			.ico_he {height: 100px;}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

	  	<div class="carousel carousel-slider center z-depth-3">
    		<div class="carousel-item orange darken-1 white-text valign-wrapper" href="#one!">
				<div class="container flow-text">
					<p class="white-text"><h5>Budget tells us what we can’t afford, but it doesn't keep us from buying it.</h5></p>
				</div>
			</div>
			<div class="carousel-item cyan white-text valign-wrapper" href="#one!">
				<div class="container flow-text">
					<p class="white-text"><h5>Under Capitalism, man exploits man. Under communism, it’s just the opposite</h5></p>
				</div>
			</div>
			<div class="carousel-item green white-text valign-wrapper" href="#one!">
				<div class="container flow-text">
					<p class="white-text"><h5>Wealth Consist not in having great possessions, but in having few wants.</h5></p>
				</div>
			</div>
  		</div>

	  	<div class="card-panel z-depth-3 center">
	  		<span class="flow-text">EXPLORE</span><br><br>
	  		<div class="row center">
	  			<div class="col s6 ico_he">
	  				<div class="card-panel round">
	  					<a href="advisor.php" class="black-text">Advisor</a>
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel round">
	  					<a href='reports.php' class="black-text">Reports</a>
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel round">
	  					<a href='commingsoon.php' class="black-text">Fin Education</a>
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel round">
					  <a href='commingsoon.php' class="black-text">Calculators</a>
	  				</div>
	  			</div>
	  		</div>
	  	</div>

	  	<div class="scrollmenu card-panel z-depth-3">
	  		<a href="commingsoon.php" class="ico_he">
	  			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/1200px-Emblem_of_India.svg.png" height="75px">
	  		</a>
	  		<a href="commingsoon.php" class="ico_he">
	  			<img src="https://upload.wikimedia.org/wikipedia/en/4/46/Make_In_India.png" height="75px">
	  		</a>
	  		<a href="commingsoon.php" class="ico_he">
	  			<img src="https://upload.wikimedia.org/wikipedia/hi/d/d7/Swachh_Bharat_Abhiyan_logo.jpg" height="75px">
	  		</a>
	  	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>