<?php

    require "database.php";
	
    session_start ();
    $sql = "SELECT `fname`, `lname`, `contact` FROM `user` WHERE `username` = '".$_SESSION['user']."'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($result);
	$_SESSION["name"]=$row[0]." ".$row[1];

    if (isset($_GET['logout'])) {
        session_unset(); 
        session_destroy();
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    }
    
    echo "
        <nav class='darken-5 white-text z-depth-5 center' style='background-image: linear-gradient(to bottom right, #42a5f5 , #7e57c2 );'>
    		<a href='#' data-target='slide-out' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
    		<ul id='slide-out' class='sidenav left-align '>
    			<li>
    				<div class='user-view darken-5 center' style='background-image: linear-gradient(to bottom right, #42a5f5 , #7e57c2 );'><br>
				      	<a href='#user'><i class='material-icons' style='font-size: 100px'>account_circle</i></a>
				      	<a href='#name'><span class='white-text name'>".$row[0]." ".$row[1]."</span></a>
				      	<a href='#email'><span class='white-text email'>".$row[2]."</span></a>
    				</div>
    			</li>
    			<li><a class='waves-effect' href='index.php'>Home</a></li>
				<li><a class='waves-effect' href='portfolio.php'>Portfolio</a></li>
				<li><a class='waves-effect' href='bank.php'>My Bank</a></li>
				<li><a class='waves-effect' href='index.php'>Financial Goals</a></li>
				<li><a class='waves-effect' href='index.php'>Smart Contacts</a></li>
				<li><a class='waves-effect' href='index.php'>Action Plan</a></li>
				<li><a class='waves-effect' href='index.php'>Connect</a></li>
			    <li><div class='divider'></div></li>
			    <li><a class='waves-effect' href='navigation.php?logout=true'>Logout</a></li>
  			</ul>
  			<img src='images/logo.png'>
  			<i class='material-icons right-align'><a href='index.php'>home</a></i>
    	</nav>
    	";
?>