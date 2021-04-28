<html>
<head>
<style>
.someclass
{border-collapse: collapse;
  width: 100%;
}

a:link, a:visited {
  background-color: #001f3f;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
a:hover, a:active {
  background-color: #FF4136;
}

p{ 
    font-size:40px;
    font-family: "Courier New Header";
    color: #168AE3;
     text-align:center;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #E316CF;
  color: white;
}
</style>
</head>
<body>
<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$sql="select * from candidatehistory";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{
echo "<p>CANDIDATE HISTORY</p>";
echo '<table class="someclass">';
echo "<tr>";
echo "<th> Symbolid</th> "; 
echo "<th> Candidateid</th> "; 
echo "<th> Name</th> ";
echo "<th> Sex</th> ";
echo "<th> Age</th> ";
echo "<th> Locationid</th> ";
echo "</tr>";
while($rows=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$rows['symbolid']."</td>"; 
echo "<td>".$rows['candidateid']."</td>"; 
echo "<td>".$rows['name']."</td>";
echo "<td>".$rows['sex']."</td>";
echo "<td>".$rows['age']."</td>";
echo "<td>".$rows['locationid']."</td>";
echo "</tr>";
}echo "</table>";
mysqli_free_result($result);
}else
{echo "NO RECORD";
}}
else
{echo "ERROR".mysqli_connect_error();
}
mysqli_close($link);
?>
</body><br>
<center><a href="candidatedetails.html">BACK</a></center>

</html>