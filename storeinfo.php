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
$aname = $_POST['aname'];
$adetails = $_POST['adetails'];
$aphoto = addslashes (file_get_contents($_FILES['aphoto']['tmp_name']));
$image = getimagesize($_FILES['aphoto']['tmp_name']);//to know about image type etc

$imgtype = $image['mime'];

$q ="INSERT INTO animaldata VALUES('','$aname','$adetails','$aphoto','$imgtype')";

$r = mysql_query($q,$conn);
if($r)
{
echo "Information stored successfully";
}
else
{
echo mysql_error();
}


?>