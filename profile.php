
<DOCTYPE html>
<html>
<head>

<style>
body{background-color:black;
background: linear-gradient(180deg, black, white, black);

}

.profile1{position:absolute;top:150px;left:520px;height:500px;width:750px;

background: linear-gradient(180deg,white,black, white, black);

}
#pr{ 
box-shadow: 0 0 37px rgba(0, 0, 0, 24);
height:485px;
padding-bottom:0px;
font-size:23px;
width:750px;padding-left:;padding-top:0px;color:black; }

.su{
background: linear-gradient(180deg, black, white, black);

padding-left:325px;
padding-top:0px;
color:;

color:white;
font-size:20px;

}


#white{color:white;}
//#green{color:viole;}
//#yellow{color:violet;}

</style>
</head>

<body>

<?php

session_start();

?>

<div class="profile1">

<table border="30"id="pr">

<tr><div class="su">Profile</div></tr>
<tr>
<td id="yellow">Name</td><td id="yellow"><?php  echo $_SESSION['Name'];?>  </td>
</tr>
<tr>
<td id="white">Model</td><td id="white"><?php echo $_SESSION['Model']; ?></td>
</tr>
<tr> 
<td id="yellow">Days</td><td id="yellow"><?php echo $_SESSION['Days']; ?></td>
</tr>
<tr> 
<td id="">Image</td><td id="red"><?php echo $_SESSION['Image']; ?></td>
</tr>
<tr>    
<td id="red">Last Date</td><td id="">___</td>
</tr>
</table>
</div>

</body>


</html>

