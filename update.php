<?php


session_start();
$_SESSION["userId"] = "9";
$conn = mysqli_connect("localhost", "nikita", "1234niki", "register") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from users WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["pass"]) {
        mysqli_query($conn, "UPDATE users set pass='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["username"] . "'");
        mysqli_query($conn, "UPDATE users set password='" .md5($_POST["newPassword"]). "' WHERE username='" . $_SESSION["username"] . "'");
 
        header("Location: confirmation.php");
       
    } else
        $message = "Current Password is not correct";
}
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/signup.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
<style>
	@import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');

	body{
		font-family: 'Kaushan Script', cursive;
	background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/signup.jpg);
	background-position: center;
	background-size: cover;
	font-weight: 300;
	width:100%;
	height: 100%;
	min-height:100vh;
	overflow: hidden;
	}
	.container{
		height:40vh;
		width:40%;
		background: rgba(0,0,0,0.6);
		margin-left: 30%;
		margin-top: 10%;
		border-radius: 10%;

	}
	td{
		color:white;
	}
</style>
<style>
	@import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');
	body{
		font-family: 'Kaushan Script', cursive;
		font-size:24px;
	}
.btnSubmit{
	height:6vh;
	border-radius: 10%;
	background:blue;
	width:20%;
}
</style>
</head>
<body>
	<div class="container">
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2" >Change Password</td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" placeholder="current password" class="txtField"  required="" /><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" placeholder="new password" class="txtField"/><span id="newPassword" class="required" required=""></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" placeholder="confirm password" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</div>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
</body></html>