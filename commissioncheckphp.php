<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
/*session_start();*/
$last=$_POST['adminid'];
$first=$_POST['password'];
if(!empty($last))
$sql="select * from commission where adminid='$last' and password='$first'";
if($result=mysqli_query($link,$sql)){
 $row = mysqli_fetch_array($result); 
if(!empty($row['adminid']) AND !empty($row['password']))
 { $_SESSION['adminid'] = $row['password'];
include 'tab2.html';
}
 else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; }
} 
/*if(mysqli_query($link,$sql))
{
echo "result obtained";
}else
{echo "COULDN'T EXECUTE ".mysqli_error($link);
}*/
mysqli_close($link);
?>
</body>
</html>