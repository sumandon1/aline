<?php
session_start();
$ser="localhost";
$user="root";
$pass="Sigma5@x";
$db="pr1";
$conn=mysqli_connect($ser,$user,$pass,$db);
if(!$conn){echo "Not connetced";}else{echo"connected";}

if(isset($_POST['Book'])){
$_SESSION['Name']=$_POST['Name'];
$_SESSION['Model']=$_POST['Model'];
$_SESSION['Days']=$_POST['Days'];
$_SESSION['Image']=$_POST['Image'];



$Image=$_POST['Image'];
$Name=$_POST['Name'];

$Model=$_POST['Model'];
$Days=$_POST['Days'];


$sql="INSERT INTO booking (Name,Model,Days,Image) VALUES ('$Name','$Model','$Days','$Image')";
$query=mysqli_query($conn,$sql);

if($query){echo '<script>alert("Booked Successfully")</script>';} else {echo '<script>alert("Not Booked")</script>';}}
?>








<html>
<head>
<title>Book Car</title>
<style>

body{
background: linear-gradient(0deg,black, white,violet,black);


}

#table{height:500px;width:400px;align-items:center;}
.table:hover{box-shadow: 0 0 30px rgba(0, 0, 10, 7.9);
}

.table
{
box-shadow: 0 0 16px rgba(127, 10, 94, 159);

width:400px;
position:relative;left:700px;top:100px;background: linear-gradient(90deg,black, white,black);

}
#book{position:relative;left:24px; height:30px; width:50px;}
</style>
</head>

<body>
<div class="table">
<form action="" method="post">
<table border="45"id="table">
<tr><td>Name:</td><td><input type="text" name="Name"></input></td></tr>
<tr><td>Model:</td>
<td>
<select name ="Model">
<option value="Ford Mustang 1968">Ford Mustang 1968</option>
<option value="Toyota Supra">Toyota Supra</option>
<option value="Jeep Wrangler">Jeep Wrangler</option>
<option value="Scorpio">Scorpio</option>
<option value="Rolce Royce">Rolce Royce</option>

</select>
</td>
</tr>
<tr><td>Days:</td><td><input type="text" name="Days"></input></td></tr>
<tr><td>Passport_Pic:</td><td><input type="file" name="Image" accept="image"></td></tr>
<tr><td><input type="submit" value="Book" name="Book" id="book"></input></td></tr>

</table></form>
</div>

<a href="profile.php">Profile</a>
</body>
</html>
