<html>
<head>
<style>
head
{color: white;
}

a:link, a:visited {
  background-color: #001f3f;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
text-align:center;
}

a:hover, a:active {
  background-color: #FF4136;
}
.someclass
{border-collapse: collapse;
  width: 100%;
}
p
{ 
    font-size:40px;
    font-family: "Courier New Header";
    color: #168AE3;
    text-align:center;
}
</style>
</head>
<body>
<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$sql="insert into voter(voterid,name,sex,age,locationid,password) values('$_POST[voterid]','$_POST[name]','$_POST[sex]','$_POST[age]','$_POST[locationid]','$_POST[password]')";
if(mysqli_query($link,$sql))
{
echo "<p>RECORD ADDED SUCCESSFULLY</p>";
}
else
{echo "COULDN'T EXECUTE ".mysqli_error($link);
}
mysqli_close($link);
?>
</body><br>
<br>
<br>
<center><a href="voterdetails.html">BACK</a></center>

</html>
