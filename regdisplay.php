<!DOCTYPE HTML>
<html>
<head>
<title>
Aranya'12 Registrations
</title>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,900' rel='stylesheet' type='text/css'>
<style>

body{
margin-top:10px;
font-family: 'Titillium Web', sans-serif;
color:#000000;

background: #AED0F0 url('images/1.jpg') center top no-repeat;
background-size:cover;
}
h2{
color:#FFFFFF;
text-shadow: black 0.1em 0.1em 0.2em;
}
a
{
color:#FFFFFF;
}
a:hover
{
color:#FFFFFF;
}

</style>
</head>
<body>
<center>
<img src="images/logo.png" width="300px">
<h2>REGISTRATIONS FOR ARANYA'12</h2>
<?php
$con=mysql_connect("regaranya.db.9933539.hostedresource.com","regaranya","Aranya@2012");
if(!$con)
{
die(mysql_error());
}
mysql_select_db("regaranya");
$query=("SELECT * FROM reg");
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
echo $row['name']." (".$row['mail'].") from ".$row['col']." (".$row['id'].") PH: ".$row['phone']."<br><br>";
}
?>
</center>
</body>
</html>

