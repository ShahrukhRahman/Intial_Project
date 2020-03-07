<?php
session_start();
if(isset($_SESSION['id']))
{ $user= trim($_COOKIE['user']);
if( $user == "Student")
	{	
?>
<html>
<body>
<h1> Welcome <?=$_SESSION['name'];?> </h1>
<a href="Profile.php"> Profile </a> <br>
<a href="changepass.php"> Change Password</a><br>
<a href="info.text"> View Users </a> <br>
<a href="Course.php"> Current Course </a> <br>
<a href="Teacher.html"> Teachers </a> <br>

<a href="logout.php"> Logout </a> <br>
</body>
</html>
<?php
}
else
{

?>

<html>
<body>
<h1> Welcome <?=$_SESSION['name'];?> </h1>
<a href="Profile.php"> Profile </a> <br>
<a href="changepass.php"> Change Password</a><br>
 
<a href="logout.php"> Logout </a> <br>
</body>
</html>
<?php
}}
?>