<html>
<head>
<style>

td.bold {
  font-weight: bold;
}


</style>
</head>
<body>
<?php 
$firstname=$_REQUEST["fname"];
$lastname=$_REQUEST["lname"];
$username=$_REQUEST["uname"];
$passwd=$_REQUEST["pword"];
$gender=$_REQUEST["gender"];
$yr=$_REQUEST["year"];
$pno=$_REQUEST["phoneno"];
?>
<table border=1>
<tr>
<td class="bold">Name
</td>
<td>
<?php
echo "$firstname";
?>
</td>
</tr>
<tr>
<td class="bold"> Last Name
</td>
<td>
<?php
echo "$lastname";
?>
</td>
</tr>
<tr>
<td class="bold"> Username
</td>
<td>
<?php
echo "$username";
?>
</td>
</tr>
<tr>
<td class="bold"> Password
</td>
<td>
<?php
echo "$passwd";
?>
</td>
</tr>
<tr>
<td class="bold"> Gender
</td>
<td>
<?php
echo "$gender";
?>
</td>
</tr>
<tr>
<td class="bold"> Acadamic Year
</td>
<td>
<?php
echo "$yr";
?>
</td>
</tr>
<tr>
<td class="bold"> Phone No
</td>
<td>
<?php
echo "$pno";
?>
</td>
</tr>
</table>
</body>
</html>
