<?php
    session_start ();
    $session_name = "user";
    if (!isset ($_SESSION["visit"]) || $_SESSION["visit"] == "") {
        $_SESSION ["main_color"]="blue";
    }
    if (!isset ($_SESSION[$session_name]) || $_SESSION[$session_name] == "") {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
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

        <div class="card-panel round z-depth-3 center">
	  	    <span class="flow-text">Advisor</span>
	  	</div>
        
        <div class="container">
            <table class="black-text">
                <tbody>
                    <tr>
                        <td><a href='commingsoon.php'>Adivor Details</a></td>
                    </tr>
                    <tr>
                        <td><a href='commingsoon.php'>Reports</a></td>
                    </tr>
                    <tr>
                        <td><a href='commingsoon.php'>Suggestion</a></td>
                    </tr>
                    <tr>
                        <td><a href='commingsoon.php'>Performance</a></td>
                    </tr>
                    <tr>
                        <td><a href='commingsoon.php'>Chat</a></td>
                    </tr>
                    <tr>
                        <td><a href='commingsoon.php'>Rate</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>