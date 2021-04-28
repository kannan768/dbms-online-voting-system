<html>
<body>
<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$last=$_POST['candidateid'];
$sql="delete from candidate where candidateid='$last'";
if(mysqli_query($link,$sql))
{
echo "RECORD DELETED SUCCESSFULLY.";
}else
{echo "COULDN'T DELETE".mysqli_error($link);
}
mysqli_close($link);

?>
</body><br>
<a href="home.html">GO TO HOME</a>

</html>