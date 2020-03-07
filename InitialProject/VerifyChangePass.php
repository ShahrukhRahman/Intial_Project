<?php
session_start();
if(isset($_POST['submit']))
{
	$oldpass= $_POST['pass']; 	
	$newpass= $_POST['new pass'];
	$renewpass= $_POST['retype pass'];
	if($_SESSION['pass']== $oldpass)
	{
		if($newpass== $renewpass)
		{$myfile = fopen('info.text','a');
	fwrite($myfile,"$_SESSION['id']|$newpass|$_SESSION['name']|$_SESSION['user']\r\n");
	fclose($myfile);}
		
	}
}
?>