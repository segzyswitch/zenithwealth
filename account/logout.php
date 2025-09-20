<?php
session_start();
// Remove active sessions
unset($_SESSION["moon_account_id"]);
unset($_SESSION["accnt_status"]);
// redirect to lign
header("Location: ../");
