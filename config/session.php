<?php
session_start();

if ( isset($_SESSION["moon_account_id"]) && isset($_SESSION["accnt_status"]) ) {
	$user_id = $_SESSION["moon_account_id"];
	$status = $_SESSION["accnt_status"];
	// NOT CONFIRMED
	if ( $status == 'pending' ) {
		unset($_SESSION["moon_account_id"]);
		unset($_SESSION["accnt_status"]);
		header("Location: ./login?confirm_acnt");
		return false;
	}else
	// ACCOUNT LOCKED
	if ( $status == 'locked' ) {
		unset($_SESSION["moon_account_id"]);
		unset($_SESSION["accnt_status"]);
		header("Location: ./login?accnt_locked");
		return false;
	}

	require_once '../config/Controller.php';
	$Controller = new Controller;
	$user_info = $Controller->User();
}else {
	header("Location: ./login?login");
}
?>