<?php
session_start();
require "../../config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;


// GENERATE UNIQUE ID
function generateUniqueId($length = 10) {
  // Define the characters to be used in the ID
  $characters = time().'ABCDEFGHJKLMNPQRSTUVWXYZ';
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}
// GENERATE ACCOUNT NUMBERS
function generateRandomNumber($length = 10) {
  // Define the characters to be used in the ID
  $characters = time();
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}

// SIGN IN
if ( isset($_POST["sign_in"]) ) {
  $usrname = $_POST["username"];
  $paswrd = $_POST["password"];

  $sql = "SELECT * FROM auth_users WHERE username = '$usrname'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    $row = $query->fetch();
    if ( $query->rowcount() < 1 ) {
      echo "Incorrect Username, check and try again.";
    }else {
      if ( password_verify($paswrd, $row["password"]) ) {
        if ( $row['status'] == 1 ) {
          $_SESSION["aave_auth_login_id"] = $row["admin_id"];
          $_SESSION["admin_status"] = $row["status"];
          echo "Login successful, you will be redirected";
        }elseif ( $row['status'] == 2 ) {
          echo "Account locked, contact admin for support";
        }elseif ( $row['status'] == 0 ) {
          echo "Account not confirmed, contact admin for support.";
        }
      }else {
	      echo "Incorrect Password, check and try again!";
      }
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// ADD NEW USER ACCOUNT
if ( isset($_POST["add_account"]) ) {
  // ADMIN ID
  $admin_id = $_SESSION["aave_auth_login_id"];
  // USER DETAILS
  $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_SPECIAL_CHARS);
  $gender = filter_var($_POST["gender"], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $dob = filter_var($_POST["dob"], FILTER_SANITIZE_SPECIAL_CHARS);
  $str_address = filter_var($_POST["str_address"], FILTER_SANITIZE_SPECIAL_CHARS);
  $city = filter_var($_POST["city"], FILTER_SANITIZE_SPECIAL_CHARS);
  $state = filter_var($_POST["state"], FILTER_SANITIZE_SPECIAL_CHARS);
  $zipcode = filter_var($_POST["zipcode"], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $current_balance = filter_var($_POST["current_balance"], FILTER_SANITIZE_SPECIAL_CHARS);
  $savings_balance = filter_var($_POST["savings_balance"], FILTER_SANITIZE_SPECIAL_CHARS);
  // GENERATE 4 RANDOM NUMBERS WITH LAST SIX OF TIME FUNCTION
  // $generate_id = generateUniqueId(10);
  // PASSWOD HASHING
  $hashpwd = password_hash($password, PASSWORD_DEFAULT);
  // Generate Account Number
  $current_account = substr(time(), strlen(time()) - 6).rand(1000,9999);
  $savings_account = substr(time(), strlen(time()) - 6).rand(1109,9988);

  // echo $generate_id;
  // return false;

  $checkinfo = $conn->prepare("SELECT email FROM users WHERE email='$email'");
  $checkinfo->execute();
  //
  if ( strlen($password) < 6 ) {
    ?>
      <div class="alert-danger alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Passwords should be at least 6 characters.</span>
      </div>
    <?php
  }elseif ( $password !== $confirm_password ) {
    ?>
      <div class="alert-danger alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Passwords do not match.</span>
      </div>
    <?php
  }elseif ( $checkinfo->rowcount() > 0 ) {
    ?>
      <div class="alert-danger alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Username or email already exists, try a new one.</span>
      </div>
    <?php
  }else {
    // validate password
    $sql = "INSERT INTO users(admin_id, firstname, lastname, email, phone,
        dob, gender,
        current_account, savings_account, savings_bal, current_bal,
        street_address, city, state, zipcode, password, alt_password)
        VALUES('$admin_id', '$firstname', '$lastname', '$email', '$phone',
        '$dob', '$gender',
        '$current_account', '$savings_account', '$savings_balance', '$current_balance',
        '$str_address', '$city', '$state', '$zipcode', '$hashpwd', '$password')";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      ?>
      <div class="alert-success alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> New user successfully created.</span>
        <a href="users">View users</a>
      </div>
    <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}

// Add plan
if ( isset($_POST['new_plan']) ) {
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $duration = filter_var($_POST['duration'], FILTER_SANITIZE_SPECIAL_CHARS);
  $interest = filter_var($_POST['interest'], FILTER_SANITIZE_SPECIAL_CHARS);
  $min_limit = filter_var($_POST['min_limit'], FILTER_SANITIZE_SPECIAL_CHARS);
  $max_limit = filter_var($_POST['max_limit'], FILTER_SANITIZE_SPECIAL_CHARS);
  $desc = filter_var($_POST['desc'], FILTER_SANITIZE_SPECIAL_CHARS);
  $recomend = 0;
  if (isset($_POST['recomend'])) $recomend = 1;

  $sql = "INSERT INTO plans(name, interest, duration, min_limit,
    max_limit, recomend, description)
  VALUES('$name', '$interest', '$duration', '$min_limit',
    '$max_limit', '$recomend', '$desc')";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    echo "New plan <b>".$name."</b> has been added successfully.";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// edit plan
if ( isset($_POST['edit_plan']) ) {
  $plan_id = $_POST['edit_plan'];
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $duration = filter_var($_POST['duration'], FILTER_SANITIZE_SPECIAL_CHARS);
  $interest = filter_var($_POST['interest'], FILTER_SANITIZE_SPECIAL_CHARS);
  $min_limit = filter_var($_POST['min_limit'], FILTER_SANITIZE_SPECIAL_CHARS);
  $max_limit = filter_var($_POST['max_limit'], FILTER_SANITIZE_SPECIAL_CHARS);
  $desc = filter_var($_POST['desc'], FILTER_SANITIZE_SPECIAL_CHARS);
  $recomend = 0;
  if (isset($_POST['recomend'])) $recomend = 1;

  $sql = "UPDATE plans
    SET name='$name',
    interest = '$interest',
    duration = '$duration',
    min_limit = '$min_limit',
    max_limit = '$max_limit',
    description = '$desc'
    WHERE id = '$plan_id'";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    echo "Plan <b>".$name."</b> has been updated successfully.";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// delete plan
if ( isset($_POST['delete_plan']) ) {
  header('Content-Type: application/json');
  $plan_id = $_POST['delete_plan'];
  $sql = "DELETE FROM plans WHERE id = '$plan_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    $response = [
      'id' => $plan_id,
      'message' => 'Plan deleted successfully'
    ];
    echo json_encode($response);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// update user status
if ( isset($_GET['activate_user']) ) {
  $user_id = $_GET['activate_user'];
  $status = $_GET['status'];
  // echo $user_id;
  $sql = "UPDATE users
    SET status = '$status'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo "success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// Modify transaction status
if ( isset($_GET['transact_user']) ) {
  $user_id = $_GET['transact_user'];
  $status = $_GET['status'];
  $new_status = null;
  if ( $status == 'true' ) {
    $new_status = 'false';
  }else {
    $new_status = 'true';
  }
  // echo $user_id;
  $sql = "UPDATE users
    SET transactions = '$new_status'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo "success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// update user profile
if ( isset($_POST['update_user']) ) {
  $user_id = $_POST['update_user'];
  $fname = filter_var($_POST['fname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_var($_POST["lname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_SPECIAL_CHARS);
  $address = filter_var($_POST["address"], FILTER_SANITIZE_SPECIAL_CHARS);
  $city = filter_var($_POST["city"], FILTER_SANITIZE_SPECIAL_CHARS);
  $state = filter_var($_POST["state"], FILTER_SANITIZE_SPECIAL_CHARS);
  $zip = filter_var($_POST["zip"], FILTER_SANITIZE_SPECIAL_CHARS);
  $status = filter_var($_POST["status"], FILTER_SANITIZE_SPECIAL_CHARS);
  $wallet_bal = filter_var($_POST["wallet_bal"], FILTER_SANITIZE_SPECIAL_CHARS);

  // return false;
  $sql = "UPDATE users
  SET fname = '$fname',
  lname = '$lname',
  email = '$email',
  phone = '$phone',
  address = '$address',
  city = '$city',
  state = '$state',
  zip = '$zip',
  wallet_bal = '$wallet_bal',
  status = '$status'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo "success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Credit/Debit User
if ( isset($_POST['make_payment']) ) {
  $user_id = $_POST['user_id'];
  $amount = filter_var($_POST['amount'], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_account = filter_var($_POST["payment_account"], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_type = filter_var($_POST["payment_type"], FILTER_SANITIZE_SPECIAL_CHARS);
  $created_at = filter_var($_POST["created_at"], FILTER_SANITIZE_SPECIAL_CHARS);
  // get user info
  $getUser = $conn->prepare("SELECT * FROM users WHERE id = '$user_id'");
  $getUser->execute();
  $userRow = $getUser->fetch();
  $current_bal = $userRow['current_bal'];
  $savings_bal = $userRow['savings_bal'];
  // Generate 13 char invoice
  $invoice = "#".strtolower(generateUniqueId(13));
  $benef_name = $userRow['firstname'].' '.$userRow['lastname'];

  if ( $payment_account=='current' ) {
    if ( $payment_type == 'credit' ) {
      $current_bal = $userRow['current_bal'] + $amount;
    }else $current_bal = $userRow['current_bal'] - $amount;
    // SQL QUERY
    $debit = "UPDATE users SET current_bal = '$current_bal' WHERE id = '$user_id'";
    $query1 = $conn->prepare($debit);
  }
  if ( $payment_account == 'savings' ) {
    if ( $payment_type == 'credit' ) {
      $savings_bal = $userRow['savings_bal'] + $amount;
    }else $savings_bal = $userRow['savings_bal'] - $amount;
    // SQL QUERY
    $debit = "UPDATE users SET savings_bal = '$savings_bal' WHERE id = '$user_id'";
    $query1 = $conn->prepare($debit);
  }

  // Update user balance
  $sql = "UPDATE users
    SET current_bal = '$current_bal',
    savings_bal = '$savings_bal'
  WHERE id = '$user_id'";
  $query2 = $conn->prepare($sql);

  // Add transaction
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, description, status, send_date)
  VALUES('$user_id', '$invoice', '$amount', '$payment_type', '$payment_account',
    '$payment_account', '$benef_name', '$description', 'completed', '$created_at'
  )";
  $query3 = $conn->prepare($transact);

  try {
    $query1->execute();
    $query2->execute();
    $query3->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Transaction completed successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// create transaction
if ( isset($_POST['create_transaction']) ) {
  $user_id = $_POST['user_id'];
  $amount = filter_var($_POST['amount'], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_account = filter_var($_POST["payment_account"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_type = filter_var($_POST["account_type"], FILTER_SANITIZE_SPECIAL_CHARS);
  $bank_name = filter_var($_POST["bank_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_name = filter_var($_POST["account_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_number = filter_var($_POST["account_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $bank_country = filter_var($_POST["bank_country"], FILTER_SANITIZE_SPECIAL_CHARS);
  $routine_number = filter_var($_POST["routine_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);
  $created_at = filter_var($_POST["created_at"], FILTER_SANITIZE_SPECIAL_CHARS);
  // get user info
  $getUser = $conn->prepare("SELECT * FROM users WHERE id = '$user_id'");
  $getUser->execute();
  $userRow = $getUser->fetch();
  // Generate 13 char invoice
  $invoice = "#".strtolower(generateUniqueId(13));
  // Set sender account
  $sending_account = $account_type.' ('.$account_number.')';

  // Add transaction
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, benef_bank,
    benef_routing, benef_country, description, status, send_date)
    VALUES('$user_id', '$invoice', '$amount', 'credit', '$sending_account',
    '$payment_account', '$account_name', '$bank_name',
    '$routine_number', '$bank_country', '$description', 'completed', '$created_at'
  )";
  $query1 = $conn->prepare($transact);

  // Add to activity
  $feed = 'You recieved $'.number_format($amount).'.00 from '.$account_name.'.';
  $add_activity = "INSERT INTO user_activity(user_id, type, feed, user_ip)
    VALUES('$user_id', 'fund', '$feed', '-')";
  $query2 = $conn->prepare($add_activity);

  try {
    $query1->execute();
    $query2->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Transaction completed successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// create local transaction
if ( isset($_POST['create_local_transaction']) ) {
  $user_id = $_POST['user_id'];
  $amount = filter_var($_POST['amount'], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_account = filter_var($_POST["payment_account"], FILTER_SANITIZE_SPECIAL_CHARS);
  $bank_name = filter_var($_POST["bank_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_name = filter_var($_POST["account_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_number = filter_var($_POST["account_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);
  $created_at = filter_var($_POST["created_at"], FILTER_SANITIZE_SPECIAL_CHARS);
  // get user info
  $getUser = $conn->prepare("SELECT * FROM users WHERE id = '$user_id'");
  $getUser->execute();
  $userRow = $getUser->fetch();
  // Generate 13 char invoice
  $invoice = "#".strtolower(generateUniqueId(13));
  // Set sender account
  $sending_account = $bank_name.' ('.$account_number.')';

  // Add transaction
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, benef_bank, description, status, send_date)
    VALUES('$user_id', '$invoice', '$amount', 'credit', '$sending_account',
    '$payment_account', '$account_name', '$bank_name', '$description', 'completed', '$created_at'
  )";
  $query1 = $conn->prepare($transact);

  // Add to activity
  $feed = 'You recieved $'.number_format($amount).'.00 from '.$account_name.'.';
  $add_activity = "INSERT INTO user_activity(user_id, type, feed, user_ip)
    VALUES('$user_id', 'fund', '$feed', '-')";
  $query2 = $conn->prepare($add_activity);
  // return false;
  try {
    $query1->execute();
    $query2->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Transaction completed successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// manage deposit
if ( isset($_GET['payment_status']) ) {
  $trx = $_GET['payment_status'];
  $status = $_GET['status'];
  $deposit_info = $Controller->singleTransaction($trx);
  $amount = $deposit_info['amount'];
  $invoice = $deposit_info['invoice'];
  $user_id = $deposit_info['user_id'];
  // User info
  $user_info = $Controller->singleUser($user_id);
  $new_balance = $user_info['wallet_bal'] + $amount;

  $approve_deposit = "UPDATE transactions
  SET status = '$status'
  WHERE id = '$trx'";

  $credit = "UPDATE users SET wallet_bal = '$new_balance'
  WHERE id = '$user_id'";

  $query1 = $conn->prepare($approve_deposit);
  $query2 = $conn->prepare($credit);

  try {
    $query1->execute();
    $query2->execute();
    echo 'Status changed to "'.$status.'"';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


// Add wallet
if ( isset($_POST['add_wallet']) ) {
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $wallet_address = filter_var($_POST['wallet_address'], FILTER_SANITIZE_SPECIAL_CHARS);

  if ( $_FILES['image']['size'] == 0 ) {
    echo "Please choose an image";
    return false;
  }

  // Check file
  $check_name = $_FILES['image']['name'];
  $file_ext = substr($check_name, (strlen($check_name)-4), 4);
  $save_name = 'wallet_'.generateUniqueId(10).$file_ext;
  $check_tmp_file = $_FILES["image"]["tmp_name"];
  $target_dir = "../../assets/coins/images/";
  $check_target_file = $target_dir . $save_name;

  // Upload icon
  if ( move_uploaded_file($check_tmp_file, $check_target_file) ) {
    $sql = "INSERT INTO crypto_wallets(name, icon, wallet_address)
    VALUES('$name', '$save_name', '$wallet_address')";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      echo "Wallet added successfully";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    echo "An error occured, check image and try again";
    return false;
  }
}
// Update
if ( isset($_POST['update_wallet']) ) {
  $wallet_id = $_POST['update_wallet'];
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $wallet_address = filter_var($_POST['wallet_address'], FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "UPDATE crypto_wallets
  SET name = '$name',
  wallet_address = '$wallet_address'
  WHERE id = '$wallet_id'";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    echo "Wallet successfully updated";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// delete wallet
if ( isset($_POST['delete_wallet']) ) {
  $wallet_id = $_POST['delete_wallet'];
  $sql = "DELETE FROM crypto_wallets  WHERE id = '$wallet_id'";
  $query = $conn->prepare($sql);
  header('Content-Type: application/json');
  try {
    $query->execute();
    $response = [
      'id' => $wallet_id,
      'message' => 'Wallet deleted successfully'
    ];
    echo json_encode($response);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}



// UPDATE PROFILE
if ( isset($_POST["update_admin"]) ) {
  $user_id = $_POST["update_admin"];

  $nick_name = filter_var($_POST["nick_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $usrname = filter_var($_POST["usrname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $login_pwd = filter_var($_POST["login_pwd"], FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "UPDATE admin_account
    SET nick_name = '$nick_name',
    usrname = '$usrname',
    login_pwd = '$login_pwd'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Details updated successfully
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Remove user account
if ( isset($_POST["remove_account"]) ) {
  $accnt_id = $_POST["remove_account"];

  $sql = "DELETE from user_account WHERE id='$accnt_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Account has been removed from record.
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

?>