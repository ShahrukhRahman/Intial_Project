<?php
session_start();
if(isset($_SESSION['id']))
{
?>
<html>
<head> <title> ChangePassword</title> </head>
<body>
<form >

<fieldset>
<legend> <h1> Change Password</h1> </legend>
<table>
<tr>
<td> Current Password </td>
</tr>
<tr>
<td> <input type= "password" name= "pass"> </td>
</tr>
<tr>
<td> New Password</td>
</tr>
<tr>
<td> <input type= "password" name= "new pass"> </td>
</tr>
<tr>
<td> Retype New Password </td>
</tr>
<tr>
<td> <input type= "password" name= "retype pass"> </td>
</tr>
<tr>
<td> <input type= "submit" name= "submit" value= "change"> <a href="Home.php"> Go Home </a> </td>
</tr>

</table>
</fieldset>

</form>
</body>

</html>
<?php
}
else
{header('location: Home.php');}
?>
