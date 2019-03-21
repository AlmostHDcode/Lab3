<html>

<head>
<style type="text/css">
.auto-style1 {
	border-width: 2px;
}
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
.auto-style3 {
	border-width: 1px;
}
</style>
</head>

<body>

Welcome to CSIS4485 mydemo website.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="update.html">Update Profile</a><br><br>You personal information is listed as follows:<br>

<?php
session_start();
$ret = $_SESSION['row'];

?>
<table class="auto-style2" style="width: 56%">
	<tr>
		<td style="width: 243; height: 23" class="auto-style1">First name</td>
		<td style="width: 229px; height: 23px;">Last Name</td>
		<td style="height: 23px">Email:</td>
	</tr>
	<tr>
		<td style="width: 243; height: 2" class="auto-style3"><?php echo $ret['firstname']; ?></td>
		<td style="width: 229px" class="auto-style3"><?php echo $ret['lastname']; ?></td>
		<td class="auto-style3"><?php echo $ret['email']; ?></td>
	</tr>
</table>


<?php
unset($_SESSION['row']);
?>
</body>
</html>