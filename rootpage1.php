<html>
<head> 
<style>
body{ 
background: linear-gradient(130deg,black,white,red,white,black);
}  
.login{box-shadow: 0 0 27px rgba(0, 0, 10, 8.9);height:220px;background-color:violet;width:489px;
color:red;
position:absolute;
 
top:30%;left:700px;
 
}
#button:hover{width:190px;padding-left:opx;
box-shadow: 0 0 9px rgba(0, 0, 0, 18);
} 

#button{color:red;background-color:black;width:185px;}
.bottom{padding-left:0px;}
</style>

</head>

<body>
<div class="login">
<form action="pr1.php" method="post">
<table border="55"><tr><td>
<input type="text" placeholder= "car1"name="car1"></input>
</td>
<td> <input type="text"  placeholder="car2"   name="car2"></input></td></tr> 
<tr><td>
<input type="text" placeholder= "car3"   name="car3"></input>
</td>
<td> <input type="text"  placeholder="car4"   name="car4"></input></td> 
<tr><td>
<input type="text" placeholder= "car5"   name="car5"></input>
</td>
<td> <input type="text"  placeholder="car6"   name="car6"></input></td> 


<tr><td><div class="bottom"><input type="submit" id="button" value="Submit" name="Submit"> </input></td></tr></div>
</table></form>
</div>
</form>
</body> 

</html>

