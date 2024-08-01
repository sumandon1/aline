
<?php
$ser="localhost";
$user="root";
$pass="Sigma5@x";
$db="pr1";
$conn=mysqli_connect($ser,$user,$pass,$db);
if(!$conn){echo "Not connetced";}else{echo"connected";}

if(isset($_POST['register'])){
$phn=$_POST['Phone'];
$pass=$_POST['Password'];
$sql="INSERT INTO register (Phone,Password) VALUES ('$phn','$pass')";
$query=mysqli_query($conn,$sql);

if($query){echo '<script>alert("inserted")</script>';} else {echo '<script>alert("Not Inserted")</script>';}}
?>

<html>
<head>

<style>
body{/*background-color:black;*/
background: linear-gradient(180deg, violet 20%, white ,black,violet);

}

.dv4:hover{height:180px;color:red;
width:400px;
transform: translateY(-14px);
box-shadow: 0 0 29px rgba(0, 0, 0, 8.9);

transition:all 0.4s ease-out;
}




.dv4
{
background: linear-gradient(180deg,violet,white,black,white,violet);
transform:translatex(-24px);
box-shadow: 0 0 11px rgba(0, 0, 0, 2);
transition:all 0.5s ease-in;
border-radius:10%; 
align:center;  
background-color:violet;
height:180px;
width:400px; 

}

.td2{
padding-left:550px;
padding-top:200px;
background-color:;
height:200px;
width:200px;
}

.p2
{
padding-left:185px;


}


.bottom1{
position:relative; 
top:10px;
padding-left:160px;
}

#button{box-shadow: 0 0 10px rgba(0, 0, 0, 2.9);
background-color:black;
color:white;
height:30px;
width:58px;
border-radius:22%;
}

#button:hover{
height:35px;
width:60px;mouse:pointer;
box-shadow: 0 0 23px rgba(0, 0, 0, 17);}

.login1{ box-shadow: 0 0 27px rgba(0, 0, 0, 14);}


.login2{ box-shadow: 0 0 27px rgba(0, 0, 0, 14);}

</style>

</head>
<div class="td2"><div class="dv4"><p class="p2">Admin</p>

<div class="login">
</div>
<form action="" method="post">
<input type="text" placeholder= "phn.no" class="login1" name="Phone"></input>

 <input type="text"  placeholder="password" class="login2" name="Password"></input> 
 <div class="bottom1"><input type="submit" id="button" value="Register" name="register"></input></div> 

</div> 

</form>
  

</div>
</html>
