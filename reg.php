<!DOCTYPE html>
<html>
<body bgcolor="white">
<link rel="stylesheet" type="text/css" href="style.css"/>
<div class="topnav">
         <a class="active " href="index.html">Home</a>
         <a class="active " href="reg.php">Donar Register</a>
         <a class="active " href="reg1.php">Bloodbank Register</a>
         <a class="active " href="search1.php">Search</a>
         <div style="float:right;">
        <a class="active " href="about.php" target="bottom">About</a>
        <a class="active " href="mailto:someone@example.com">Mail to</a>
        <a class="active " href="Reviews & Rating.php" target="bottom">Rate us</a>
        </div>
        </div>
<tr>
<td><br></td>
</tr>
<h1><u> DONAR REGISTRATION </u></h1>
<form action="" method="post" name="register">
<center>
<table>
<tr>
<td><br></td>
</tr>


<tr>
                    <td><font size="6" >Email:</font></td>
                    <td><input type="email" name="email" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Name:</font></td>
                    <td><input type="text" name="name" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Mobile:</font></td>
                    <td><input type="tel" name="phn" required /></td>
                </tr>
                <tr>
                    <td><font size="6">City:</font></td>
                    <td><select name="city">
                                <option value="karimnagar">karimnagar</option>
                        </select></td>
                </tr>
                <tr>
                    <td><font size="6">Blood Group:</font></td>
                    <td><select name="bgroup">
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select></td>
                </tr>
               <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" name="b1"/>
                </tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
</table>
</center>
</form>
<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $inEmail=$_POST["email"];
 $inName=$_POST["name"];
 $inMob=$_POST["phn"];
 $inCity=$_POST["city"];
 $inBg=$_POST["bgroup"];
 $sql="insert into register values('".$inEmail."','".$inName."','".$inMob."','".$inCity."','".$inBg."')";
if(mysqli_query($conn,$sql))
{
?>
	<script type="text/javascript">alert('Records saved');</script>
<?php
}
else
{
?>
	<script type="text/javascript">alert('Some error occured in saving records');</script>
<?php	
	echo"Error in inserting data: ".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
