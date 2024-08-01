<html>
<head> 
<style>
body{ 
background: linear-gradient(130deg,black,white,red,white,black);
}  
.login{box-shadow: 0 0 27px rgba(0, 0, 10, 8.9);height:140px;background-color:violet;width:523px;
color:red;
position:absolute;
 
top:30%;left:700px;
 
}
 
#button{color:red;}
</style>

</head>

<body>
<div class="login">
<form action="" method="post">
<table border="55"><tr><td>
<input type="text" placeholder= "username"  class="login1" name="username"></input>
</td>
<td> <input type="text"  placeholder="password"  class="login2" name="password"></input></td> 
<td><div class="bottom"><input type="submit" id="button" value="login" name="Rlogin"> </input></td></tr></div>
</table>
</div>
</form>
</body> 

</html>




<?php
  
//session_start();

$servername ="localhost";
$username="root";
$password="Sigma5@x";
$database="pr1";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo"connection not successful";
}

else{
if(isset($_POST['Rlogin'])){
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    $sql=" SELECT * FROM Rootregister WHERE Username='$Username' &&  Password='$Password'";
 $result=mysqli_query($conn,$sql);

if($result)
{
 $total=mysqli_num_rows($result);
}

 if($total!=0){ 
    $_SESSION['Password']=$Password;
 header('location:rootpage1.php');
echo'<script>alert("login")</script>';
    //header(location:)----->is a function it shows the file after users loged in

 }else
{echo '<script>alert("not login")</script>';}} }







?>
