<html>
<head>
<style>
.someclass
{border-collapse: collapse;
  width: 100%;
}
p{ 
    font-size:40px;
    font-family: "Courier New Header";
    color: #168AE3;
     text-align:center;
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
<p>AREAWISE ELECTION RESULTS</p>
<?php
$link=mysqli_connect("localhost","root","","onlinevoting");
if($link==false)
{die("error cannot connect".mysqli_connect_error());
}
$sql=" select l.locationname,max(c.name) as CANDIDATE_NAME,s.symbolname,count(c.name) as VOTES from addvotes vo inner join voter v on vo.voterid=v.voterid inner join symbol s on vo.symbolid=s.symbolid inner join candidate c on vo.symbolid=c.symbolid and v.locationid=c.locationid inner join location l on c.locationid=l.locationid group by v.locationid order by count(c.name)  DESC ";

if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{

echo '<table class="someclass">';
echo "<tr>";
echo "<th> LOCATION</th> ";
echo "<th> CANDIDATE_NAME</th> ";
 echo "<th> SYMBOL</th> ";

echo "<th> VOTES</th> ";

echo "</tr>";
while($rows=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$rows['locationname']."</td>"; 
echo "<td>".$rows['CANDIDATE_NAME']."</td>";
echo "<td>".$rows['symbolname']."</td>";

echo "<td>".$rows['VOTES']."</td>";



echo "</tr>";
}echo "</table>";
mysqli_free_result($result);
}else
{echo "NO RECORD";
}}
else
{echo "ERROR".mysqli_connect_error();
}
?>

</body><br>
<center><a href="votestatus.html">BACK</a></center>

</html>
