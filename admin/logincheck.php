<?php 

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	require_once '../app/dbinfo.php';
	$tableName = "adminstrator";
	
	$dbCon = @mysql_connect( $server, $dbUserName, $dbPassword ) or dieFunc();
	@mysql_set_charset('utf8');
	@mysql_select_db( $dbDataBase, $dbCon ) or dieFunc();
	
	$query = " SELECT * FROM `$tableName` WHERE `username` = '$user' ";
	
	$result = @mysql_query( $query, $dbCon ) or dieFunc();
	if(mysql_num_rows($result) !== 1) {
		header('Location: login.php?error');
		exit;
	}
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	if($row['username'] === $user && $row['password'] === $pass) {
		session_start();
		$_SESSION['login'] = TRUE;
		$_SESSION['user'] = $user;
		header('Location: dashboard.php');
		exit;
	}
	else {
		header('Location: login.php?error');
		exit;
	}
	
	function dieFunc() {
		die( "Error " . mysql_errno() . ": " .mysql_error() . "." );
	}
	
?>