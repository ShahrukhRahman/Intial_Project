<?php
session_start();

{ 
	
	fclose($myfile);
	header('location: Home.php');
}

?>