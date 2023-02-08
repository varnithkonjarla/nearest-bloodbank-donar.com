<!DOCTYPE html>
<html>
<body >
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
<form>
  <p></p>
   <table  align="center" width="60%" style="box-shadow: 2px 4px 8px silver; padding: 30px;">
       <tr>
           <td>
               <h2>Rate us and support &#128543;:</h2>
           </td>
       </tr>
       <tr>
           <td><h3 style="background-color: rgba(255, 255, 0, 0.658);"><input type="radio" name="star" id="one">1 <input type="radio" name="star" id="two">2 <input type="radio" name="star" id="three">3 <input type="radio" name="star" id="four">4 <input type="radio" name="star" id="five">5</h3></td>
       </tr>
       <tr>
           <td></td>
       </tr>
   </table><br>
</form>
<form>
<table style="box-shadow: 2px 4px 8px silver; padding: 30px;" width="60%" align="center">
    <tr>
        <td><h2>write reviews :</h2> </td>
    </tr>
    <tr>
        <td>
            <textarea name="textarea" id="textarea" cols="100" rows="15"></textarea>
        </td>
    </tr>
<br><br>
      <center><input type="submit" value="submit" name="submit">
      </center> 
    </table>
    </form>
    <?php
include "connection.php";
if(isset($_POST["submit"]))
{
$area=$_POST["textarea"];
$sql="insert into reviews values('".$area."')";
if(mysqli_query($conn,$sqll))
{
?>
	<script type="text/javascript">alert('reviews saved');</script>
<?php
}
else
{
?>
	<script type="text/javascript">alert('Some error occured in saving reviews');</script>
<?php	
	echo"Error in inserting reviews: ".mysqli_error($conn);
}
}
?>
</body>
</html>
