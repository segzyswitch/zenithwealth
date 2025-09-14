<?php
require "../config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;

// GENERATE UNIQUE ID
function generateUniqueId($length = 10) {
  // Define the characters to be used in the ID
  $characters = time().'wertyupasdfghklcvbnm';
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}

// Get the current datetime
$current_time = date('Y-m-d H:i:s');
// Fetch all active trades that haven't been completed yet
$sql = "SELECT * FROM trades WHERE status = 'running' AND end_date <= '$current_time'";
$query = $conn->prepare($sql);
try {
	$query->execute();
	$completedTrades = $query->fetchAll();
	if (count($completedTrades) == 0) {
		echo "No trades completes today";
		return false;
	}
	foreach ($completedTrades as $key => $value) {
		$trade_id = $value['id'];
		$user_id = $value['user_id'];
		$returns = $value['returns'];
		$plan_name = $value['plan_name'];
		// Get user info
		$user_info = $Controller->singleUser($user_id);
		$wallet_bal = $user_info['wallet_bal'];
		// Set new user balance
		$new_balance = $wallet_bal + $returns;
		// Transaction description
	  $details = $plan_name." trade returns of $".number_format($returns).".00";
	  // Generate transaction invoice
	  $invoice = strtoupper(generateUniqueId(12));

		// Update user balance
		$update_balance = "UPDATE users SET wallet_bal = '$new_balance' WHERE id = '$user_id'";
		// Update trade status to completed
		$approve_trade = "UPDATE trades SET status = 'completed' WHERE id = '$trade_id'";
		// Add to transactions
	  $transact = "INSERT INTO transactions(user_id, type, invoice, amount,
	    initial_bal, source, proof, send_to, details, status)
	    VALUES('$user_id', 'return', '$invoice', '$returns',
	    '$wallet_bal', '$plan_name Plan', '-', 'Wallet balance', '$details', 'success')
	  ";

		$query1 = $conn->prepare($update_balance);
		$query2 = $conn->prepare($approve_trade);
		$query3 = $conn->prepare($transact);

		try {
			$query1->execute();
			$query2->execute();
			$query3->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}

?>