<html>
<title>Animal Information </title>
<style type="text/css">
.body{
  background-color:#8573CC;
  height: 100%;
}

</style>
<body>
<form enctype="multipart/form-data" action="storeinfo.php" method="POST">

<table border=0 align=center bgcolor=blue width=100%>
<tr><td colspan=2><h2>&nbsp</h2></td></tr>
</table>
<div class ="body">
<table border=0 align=center bgcolor=yellow>
<tr>
  <td colspan=2><h2>Animal Information</h2></td>
</tr>
<tr>
 <td>Animal Name</td>
 <td><input type=text name="aname"></td>
</tr>
<tr>
 <td>Animal Description</td>
 <td><input type=text name="adetails"></td>
</tr>
<tr>
 <td>Animal Photo</td>
 <td><input type=file name="aphoto"></td>
</tr>
<tr>
 <td></td>
 <td><input type=submit name="submit" value="Store Information"></td>
</tr>
</table>
</form>
</div>
</body>
</html>