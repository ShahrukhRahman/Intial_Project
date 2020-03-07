<?php
session_start();
if(isset($_SESSION['id']))
{
?>
<html>
<body>
<table border="1" height= "40" width= "60">
<tr>
<td   height= "40" width= "60" colspan= "3"> Current Course </td>

<td> </td>
</tr>

<tr> 
<td height= "40" width= "60"> Course</td>

<td height= "40" width= "60"><?='Grades';?></td>

<td height= "40" width= "60"><?='Time';?></td>
</tr>
<tr>
<td> Maths </td>

<td height= "40" width= "60"> A </td>

<td height= "40" width= "60"> Monday (1-3) </td>
</tr>
<tr>
<td> Chemistry </td>

<td height= "40" width= "60"> A </td>

<td height= "40" width= "60"> Sunday (11-2) </td>
</tr>
<tr>
<td> Physics </td>

<td height= "40" width= "60"> A </td>

<td height= "40" width= "60"> Wednesday (10-3) </td>
</tr>
<tr>
<td  height= "40" width= "60"colspan= "3"> <a href= "Home.php"> Go home <a href= "DropCourse.php"> Drop Course </a> </td>

<td> </td>
</tr>

<tr> 


</table>
</body>
</html>
<?php
}
?>