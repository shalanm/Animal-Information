<?php

$conn = mysql_connect("localhost","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("imagestore",$conn);
if(!$db)
{
echo mysql_error();
}
$ano = $_GET['ano'];
$q = "SELECT aphoto,aphototype FROM animaldata where ano='$ano'";
$r = mysql_query("$q",$conn);
if($r)
{

$row = mysql_fetch_array($r);
$type = "Content-type: ".$row['aphototype'];
header($type);
echo $row['aphoto'];
}
else
{
echo mysql_error();
}

?>