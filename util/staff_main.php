<?php
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">

</head>
<body bgcolor="Yellow">
<br><br>
<center><h1>Vehicle Showroom Management System</h1></center><br>
<center> <table cellpadding=5 cellspacing=5 border=5>
<tr>
<td><a href="../BranchManagement/BranchManagement.php">Branch Management</a></td>
<td><a href="../CustomerManagement/CustomerManagement.php">Customer Management</a></td>
<td><a href="../ShowroomManagement/ShowroomManagement.php">Showroom Management</a></td>
</tr>
</table>
<br><br><br><br><br><br><br><br><br>
<a href="../index.php"> click here to go to the home page </a>
</table> </center>
</body>
</html>
