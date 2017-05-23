<?php
	
	$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "edpms";
	//$con=@mysqli_connect("localhost","lands","Password1234","edpms") or die("Cannot connect to server now, please try again. ");
	try {
		  $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
	      // $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } 
    catch(PDOException $ex)
	{
		die($ex->getMessage());
	}