<!Doctype html>
<html>
<body bgcolor="white">
<title>Blood Bank System</title>
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
<center>
<tr>
<td><br></td>
</tr>
        <h1> <u>SEARCH FOR BLOOD DONAR OR BLOOD BANK</u><h1>
<form name="Search" method="post" action="">
        <center>
<table>
 <tr>
                    <td><font size="5">City:</font></td>
                    <td><select name="city">
                                <option>karimnagar</option>
                        </select></td>
                </tr>
				
                <tr>
                    <td><font size="5">Blood Group:</font></td>
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
                    <td><input type="submit" value="Search Donar" name="search"/></td>
                    <td><input type="submit" value="Search Bloodbank" name="search1"/></td>
                        </tr>

</table>
</center>
</form>
</center>
</body>
</html>
<?php
include "connection.php";
if(isset($_POST["search"]))
{
$inCity=$_POST["city"];
$inBloodgroup=$_POST["bgroup"];
$sql="select * from register where (city='".$inCity."' && bgroup='".$inBloodgroup."')";
echo " <center><table border='1px'><tr><th>Email </th>";
echo " <th>Name </th>";
echo " <th>Mobile </th>";
echo " <th>City </th>";
echo " <th>Blood Group </th>";

$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo " <tr><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["phn"]."</td><td>".$row["city"]."</td><td>".$row["bgroup"]."</td></tr>";
}
echo "</table></center>";
}
else
{
?>
	<script type="text/javascript">alert('No data found !!!');</script>
<?php	
	echo" NO RESULTS! ";
}
}
if(isset($_POST["search1"]))
{
$inCity=$_POST["city"];
$inBloodgroup=$_POST["bgroup"];
$sql="select * from register2 where (city='".$inCity."' && bgroup='".$inBloodgroup."')";
echo " <center><table border='1px'><tr><th>Email </th>";
echo " <th>Name </th>";
echo " <th>Mobile </th>";
echo " <th>City </th>";
echo " <th>Blood Group </th>";
echo " <th>Quantity </th>";

$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo " <tr><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["phn"]."</td><td>".$row["city"]."</td><td>".$row["bgroup"]."</td><td>".$row["quantity"]."</td></tr>";
}
echo "</table></center>";
}
else
{
?>
	<script type="text/javascript">alert('No data found !!!');</script>
<?php	
	echo" NO RESULTS! ";
}
}
mysqli_close($conn);
?>
