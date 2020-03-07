<?php
session_start();
if(isset($_SESSION['id']))
{
?>
<html>
<body>
<table border="1" height= "40" width= "60">
<tr>
<td   height= "40" width= "60" colspan= "2"> Profile </td>

<td> </td>
</tr>

<tr> 
<td height= "40" width= "60"> id</td>

<td height= "40" width= "60"><?=$_SESSION['id'];?></td>
</tr>
<tr>
<td> Name</td>

<td height= "40" width= "60"><?=$_SESSION['name'];?></td>
</tr>
<tr>
<td> User Type</td>

<td height= "40" width= "60"><?=$_COOKIE['user'];?></td>
</tr>
<tr>
<td  height= "40" width= "60"colspan= "2"> <a href= "Home.php"> Go home </a> </td>

<td> </td>
</tr>

<tr> 


</table>
</body>
</html>
<?php
}
?>