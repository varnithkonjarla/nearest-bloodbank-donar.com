<!Doctype html>
<html>
    <style>
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        </style>
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
</div></div>
<tr>
<td><br></td>
</tr>
<h1><u> BLOODBANK REGISTRATION</u></h1>
<form action="" method="post" name="register1">
    <center>
        <table>
        <tr>
<td></td>
</tr>
            <tr>
                 <td><font size="5" >Bloodbank Email:</font></td>
                <td><input type="email" name="email" required></input></td>
            </tr>
            <tr>
                <td><font size="5">Bloodbank Name:</font></td>
                <td><input type="text" name="name" required></input></td>
            </tr>
            <tr>
                <td><font size="5">Bloodbank Mobile:</font></td>
                <td><input type="tel" name="phn" required /></td>
            </tr>
            <tr>
                <td><font size="5">Bloodbank City:</font></td>
                <td><select name="city">
                            <option value="Karimnagar">karimnagar</option>
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
                <td><font size="5">Quantity:</font></td>
                <td><input type="text" name="quantity" required></input></td>
            </tr>
            <tr></tr>
            <tr>
                <td colspan="2">
                <center>
                <input type="submit" value="submit" name="b1"/>
                <input type="submit" value="update" name="b2"/>
                <input type="submit" value="delete" name="b3"/>
    </center>
                </td>
            </tr>
        </table>
    </center>
</form>
<?php
include "connection.php";
 if(isset($_POST["b1"]))
{
 $Email=$_POST["email"];
 $Name=$_POST["name"];
 $Mob=$_POST["phn"];
 $City=$_POST["city"];
 $Bg=$_POST["bgroup"];
 $quantity=$_POST["quantity"];
 $sqll="insert into register2 values('".$Email."','".$Name."','".$Mob."','".$City."','".$Bg."','".$quantity."')";
if(mysqli_query($conn,$sqll))
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
}
if(isset($_POST["b2"]))
{
    $Email=$_POST["email"];
 $Name=$_POST["name"];
 $Mob=$_POST["phn"];
 $City=$_POST["city"];
 $Bg=$_POST["bgroup"];
 $quantity=$_POST["quantity"];
    $sqll="update register2 set quantity='".$quantity."' where email='".$Email."'";
    if(mysqli_query($conn,$sqll))
    {
    ?>
        <script type="text/javascript">alert('Records updated');</script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">alert('Some error occured in updating  records');</script>
    <?php	
        echo"Error in updating data: ".mysqli_error($conn);
    } 
}
if(isset($_POST["b3"]))
{
    $Email=$_POST["email"];
 $Name=$_POST["name"];
 $Mob=$_POST["phn"];
 $City=$_POST["city"];
 $Bg=$_POST["bgroup"];
 $quantity=$_POST["quantity"];
    $sqll="delete from register2 where email='".$Email."'";
    if(mysqli_query($conn,$sqll))
    {
    ?>
        <script type="text/javascript">alert('Record deleted');</script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">alert('Some error occured in deleting the records');</script>
    <?php	
        echo"Error in deleting data: ".mysqli_error($conn);
    } 
}
mysqli_close($conn);
?>
</body>
</html>
