
<?php

  
if (isset($_POST['Register']))
{header('Location:registration.php');}

session_start();

$servername ="localhost";
$username="root";
$password="Sigma5@x";
$database="pr1";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo"connection not successful";
} else{
if(isset($_POST['login'])){
    $Phone=$_POST['phone'];
    $Password=$_POST['password'];
    $sql=" SELECT * FROM register WHERE Phone='$Phone' &&  Password='$Password'";
 $result=mysqli_query($conn,$sql);
if($result){ $total=mysqli_num_rows($result);}
 if($total!=0){ 
    $_SESSION['Password']=$Password;

//
 $_SESSION['Name']=$Name;
 $_SESSION['Days']=$Days;
 $_SESSION['Model']=$Model;
//



 header('location:book.php');
echo'<script>alert("login")</script>';
    //header(location:)----->is a function it shows the file after users loged in

 }else
{echo '<script>alert("not login")</script>';}} }


if (isset($_POST['Rpage'])){
 header('location:rootpage.php');
}

if(isset($_POST['Submit'])){
$car1=$_POST['car1']; 
$car2=$_POST['car2'];$car3=$_POST['car3'];$car4=$_POST['car4'];$car5=$_POST['car5'];$car6=$_POST['car6'];

}


?>

<DOCTYPE html>
<head><title>Suman_pr1</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<style>
body{background-color:black;
/*background-image:url('sky2.jpg');
*/
}
.dv1{background: linear-gradient(180deg,violet,white,white,black,violet);

z-index:+1;
top:0px;
position:fixed;
padding-top:-10px;
width:100%;
height:50px;

color:green;

}
.nav{padding-left:50%;
padding-top:9px;
}



.dv2:hover{






color:red;
height:300px;
width:490px;
box-shadow: 0 0 17px rgba(0, 0, 0, 3.9);

transform: translateY(-30px);

transition:all 0.4s ease-out;

}




.dv2{ 
background: linear-gradient(180deg,violet,white,black,white,violet);


transform:translate(-30px);
border-radius:10%;
box-shadow: 0 0 11px rgba(0, 0, 0, 2);

transition:all 0.5s ease-in;

background-color:violet;
height:320px;
width:500px;
}

.dv4:hover{height:300px;color:red;
width:490px;
transform: translateY(-30px);
box-shadow: 0 0 17px rgba(0, 0, 0, 3.9);

transition:all 0.4s ease-out;
}


.dv4
{
background: linear-gradient(180deg,violet,white,black,white,violet);

transform:translate(30px);

box-shadow: 0 0 11px rgba(0, 0, 0, 2);

transition:all 0.5s ease-in;

border-radius:10%; 
align:center;  
background-color:violet;
height:320px;
width:500px; 

}
.td1{
background-color:black;
padding-left:100px;
}
.td2{
background-color:black;
padding-left:200px;

}

.dvT1{
padding-top:152px;
padding-left:90px;
}

.dv3{ background: linear-gradient(130deg,violet,white,black);


align-items:center;
box-shadow: 0 0 15px rgba(0, 0, 0, 2.9);
  color:black;
border-radius:10%; 

background-color:violet; 
height:30px;
width:300px;   
z-index:-1;
 transition:all 1s ease-out ;

}

.dvT2{
padding-top:132px;
padding-left:662px;

}
.dvT2{
padding-top:132px;
padding-left:662px;

}
 


.dv3:hover{ z-index:-1;
transform:scale(100%);
height:400px;
box-shadow: 0 0 16px rgba(0, 0, 0, 2.9);

transition:all 1s ease-in;
width:300px;
border-radius:2%;
color:black;
}

#text1{padding-left:80px;
font-size:17px;

}

.gif-container{
position:relative;
height:100px;
width:100px;


}
.gif{z-index:-1;
position:absolute;
top: 0;
left: 0;
animation: move-gif 14s ease-in-out infinite;


}
@keyframes move-gif {
0% {transform: translateX(-200px);
padding-top:70px;


}

25%{top:30px;}
45%{top:60px;}
75%{top:30px;}

100% { 
padding-top:0px;
transform:translateX(1870px);

}

}

.dv2s{
background-blur{filter:blur(20px);}height:340px;
width:
}
.dv4s{
background-blur{filter:blur(20px);}height:340px;
width:500px;
}

.background{height:240px;
width:300px;
border-radius:50%;
position:absolute;
right:-30px;
top:-10px;
box-shadow: 0 0 96px rgba(0, 0, 0, 79);

}

.color{padding-bottom:0px;
height:160px;
width:2000px;
background: linear-gradient(130deg,white,black 12%,white,black,white,violet);
animation: color1 5s ;
}
 @keyframes color1 {
0% { transform:scale(11);}
 100% {transform:scale(); }}

.p1{text-align:center;
padding-top:10px;
box-shadow: 0 0 17px rgba(0, 0, 0, 3.9);

}
.p2{text-align:center; 
padding-top:10px;
box-shadow: 0 0 17px rgba(0, 0, 0, 3.9);

}
.cars{color:blue;

}
.bottom{
position:relative;
top:179px;
padding-left:210px;
}
.bottom1{
position:relative; 
top:109px;
padding-left:210px;
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


.tt:hover{
transform:scale(100%);
box-shadow: 0 0 20px rgba(0, 0, 4, 3.9);
background: linear-gradient(130deg,white,black);

transition:all 1s ease-in;
width:300px;
border-radius:1.5%;
color:black;
opacity:1;height:92%;}

.tt{opacity:0;}

.cars{

opacity:0;
height:230px;width:470px;
}
.cars:hover{
adding-left:50px;
transform:scale(100%);
box-shadow: 0 0 20px rgba(0, 0, 4, 3.9);
background: linear-gradient(130deg,white,black);
transition:all 1s ease-in;
border-radius:1.5%;
color:black;
opacity:1;

height:197px;width:99%;

}



#textD{text-decoration:none;}
#pr{position:absolute;left:12px;top:-6px;background-color:;height:40px;width:40px;}
#primg2{height:50px;width:50px;}
#Root{text-decoration:none; padding-left:10px;color:Red;position:relative;top:-13px;left:50px;}
</style>

</head>
<body>

<form action="" method="post">

<div class="dv1">
<div class="nav"><b>NAV</b> </div> <div id="Root"><input type="submit" name="Rpage" id="root" value="RootPage"></input></div> 
<div id="pr"><a href="profile.php"id="textD"><img src="primg2.png" id="primg2"></a></div></div>
 </div>

</form>

<div class="gif-container">
<video src="new.gif" alt="animated" class="gif">
</video>
</div>        
<div class="dvT1">

</form>


<table>
<tr >
<td class="td1"><div class="dv2s"><div class="dv2"><p class="p1">Available Cars</p>
<table class="cars" > <tr><td>Cars:</td></tr><br><tr><td>1.<?php echo $car1;?> </td></tr>
<tr><td>2.
<?php  echo $car2; ?>
 </td></tr>
<tr><td>3. <?php echo $car3;?> </td></tr>
<tr><td>4. <?php echo $car4;?> </td></tr>
<tr><td>5. <?php echo $car5;?> </td></tr>
<tr><td>6. <?php echo $car6;?> </td></tr>
</table>

 </div> </div></td>

<td class="td3"></td>
<td class="td2"><div class="dv4s"><div class="dv4"><p class="p2">Admin</p>

<div class="login">
<form action="" method="post">

<input type="text" placeholder= "phn.no" class="login1" name="phone"></input>

 <input type="text"  placeholder="password" class="login2" name="password"></input> </div>
<div class="bottom"><input type="submit" id="button" value="login" name="login"> </input></div>
 <div class="bottom1"><input type="submit" id="button" value="Register" name="Register"> </input></div> 
</div> </div></td>
</tr>
</table>
</div>
</form>
<br>
<div class="dvT2">
<div class="dv3"><text id="text1" >Read The Content</text>
<div class="tt"><p id="">About Us:<br>Email: Sigmarules557@gmail.com </br></p></div></div>
</div>
<br>
<div class="color" ></div>
</form>
</body>
</html>

