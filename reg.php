<?php

$n=$_POST['user'];
$c=$_POST['col'];
$id=$_POST['id'];
$m=$_POST['mail'];
$p=$_POST['mob'];
$con=mysql_connect("regaranya.db.9933539.hostedresource.com","regaranya","Aranya@2012");
if(!$con)
{
die(mysql_error());
}
mysql_select_db("regaranya");
$query=("INSERT INTO reg VALUES('$n','$c','$id','$m','$p')");
mysql_query($query);
$no=mysql_affected_rows();
if($no>0)
{
?>
<script>
window.location="thanks.html";
</script>
<?php
}
else
{
?>
<script>
window.location="error.html";
</script>
<?php
}
?>

