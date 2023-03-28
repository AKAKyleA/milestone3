<?php
session_start();

if ($_SESSION["isAdmin"] == 1): ?>

<li class="adminuse">
  <a class="nav-link link-primary" href="isadmin.php">admin</a>
</li>

<?php
endif;
?>

<?php


if ($_SESSION["isManager"] == 1): ?>

<li class="manageruse">
  <a class="nav-link link-primary" href="ismanager.php">manager</a>
</li>

<?php
endif;
?>


<?php
if ($_SESSION["isEmployee"] == 1): ?>

<li class="Employeeuse">
  <a class="nav-link link-primary" href="isemployee.php">employee</a>
</li>

<?php
endif;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style3 {
	margin-left: 0px;
}
.auto-style4 {
	text-align: right;
}
</style>
</head>

<body>

<form action="" method="post">
	<div class="auto-style4">
		<button onclick ="window.location.href='logout.php';" name="Button3" type="button" value="Log Out" >Log Out</button></div>
</form>
<form action="" method="post">
	<div class="auto-style1">
		Welcome!</div>
</form>
<form action="" method="post">
	<div class="auto-style1">
		<button onclick ="window.location.href='viewinfo.php';" name="Button1" style="width: 134px; height: 37px" type="button" value="View Information" >View Information</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button onclick ="window.location.href='update.html';" type="button" class="auto-style3" name="Button2" style="width: 153px; height: 37px"  value="Update Information" >Update Information</button></div>
</form>

</body>

</html>