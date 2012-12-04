<?php 
session_start();
if( isset($_GET['logout']) ) session_destroy();
if( isset($_SESSION['login'] ) === TRUE) {
	header('Location: dashboard.php');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div>
  <div id="login-box">
    <h2>Login</h2>
    For edit your products, please login to your admin panel.<br />
    <?php if(isset($_GET['error'])) { ?>
    	<br /><span class="error"><b>The username or password you entered is incorrect!</b></span><br />
    <?php } ?>
    <br />
    <form action="logincheck.php" method="post">
      <div id="login-box-name" style="margin-top:20px;">User Name:</div>
      <div id="login-box-field" style="margin-top:20px;">
        <input name="username" type="text" class="form-login" title="Username" value="" size="30" maxlength="128" />
      </div>
      <div id="login-box-name">Password:</div>
      <div id="login-box-field">
        <input name="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" />
      </div>
      	<input type="submit" name="submit" value="" id="submit"/>
    </form>
</div>
</body>
</html>
