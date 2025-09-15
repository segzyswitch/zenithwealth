<?php
session_start();
require "../config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;
if ( isset($_SESSION["moon_account_id"]) ) {
  $user_info = $Controller->User();
  $user_id = $_SESSION["moon_account_id"];
  $wallet_bal = $user_info['wallet_bal'];
}

// GENERATE UNIQUE ID
function generateUniqueId($length = 10) {
  // Define the characters to be used in the ID
  $characters = time().'wertyupasdfghklcvbnm';
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}

// GENERATE ACCOUNT NUMBERS
function generateRandomNumber($length) {
  // Define the characters to be used in the ID
  $characters = time().time();
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  $generated_number = substr($shuffledCharacters, 0, $length);
  // Split the number into chunks of 4
  $chunks = str_split($generated_number, 4);
  // Combine chunks with spaces
  return implode(' ', $chunks);
}
// Generate EXP date for cards
function cardExpDate() {
  // Create a DateTime object for today
  $date = new DateTime();
  // Add four years to the current date
  $date->modify('+4 years');
  // Format the date as MM/YY
  return $date->format('m/y');
}


// ADD NEW USER ACCOUNT
if ( isset($_POST["register"]) ) {
  // $admin_key = 'MASTER_ADMIN';
  $fname = filter_var($_POST["fname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_var($_POST["lname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $referral = filter_var($_POST["referral"], FILTER_SANITIZE_SPECIAL_CHARS);
  $country = filter_var($_POST["country"], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  // GENERATE 4 RANDOM NUMBERS WITH LAST SIX OF TIME FUNCTION
  $generate_id = rand(1000,9999).substr(time(), strlen(time()) - 6);
  // PASSWOD HASHING
  $hashpwd = password_hash($password, PASSWORD_DEFAULT);
  $make_uuid = generateUniqueId(16);
  // generate uuid
  $uuid = substr($make_uuid, 0, 4) . '-' . 
  substr($make_uuid, 4, 4) . '-' . 
  substr($make_uuid, 8, 4) . '-' . 
  substr($make_uuid, 12, 4);

  if ( isset($_POST['referral']) ) $referral = $_POST['referral'];
  else $referral = NULL;

  // check if email exists
  $checkmail = $conn->prepare("SELECT * FROM users WHERE email='$email'");
  $checkmail->execute();

  if ( $checkmail->rowcount() > 0 ) {
    echo 'Sorry, Email already registered, check email and try again.';
    return false;
  }
  if ( $password !== $confirm_password ) {
    echo 'Passwords do not match, check and try again.';
    return false;
  }
  // validate password
  $sql = "INSERT INTO users(uuid, fname, lname, email, phone, password, alt_password, country, referral)
    VALUES('$uuid', '$fname', '$lname', '$email', '', '$hashpwd', '$password', '$country', '$referral')
  ";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    echo 'Registration successful! We sent you a verification link, please follow the link to verify your account.';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// USER LOGIN
if ( isset($_POST["user_login"]) ) {
  $usrname = filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS);
  $paswrd = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);

  $checkinfo = "SELECT password, id, status FROM users
    WHERE email='$usrname'";
  $confirminfo = $conn->prepare($checkinfo);
  $confirminfo->execute();

  // Get ClienntIP
  $client_ip = $_SERVER['REMOTE_ADDR'];

  if ( $confirminfo->rowcount() > 0 ) {
    $conf_row = $confirminfo->fetch();
    $user_id = $conf_row["id"];

    if ( password_verify($paswrd, $conf_row["password"]) ) {
      if ( $conf_row["status"] == 'pending' ) {
        echo "Account not verified!";
        return false;
      }else if ( $conf_row["status"] == 'locked' ) {
        echo 'Your account has been locked due to suspicious activities, contact <a href="tel:+19166108819">+19166108819</a> or send a mail to <a href="mailto:contact@aaveinvestment.com">contact@aaveinvestment.com</a>';
        return false;
      }else {
        // Add login activity
        $login_feed = "New login session.";
        $add_activity = $conn->prepare("INSERT INTO user_activity(user_id, type, feed, user_ip)
          VALUES('$user_id', 'login', '$login_feed', '$client_ip')");
        try {
          $add_activity->execute();
        } catch (PDOException $e) {
          echo $e->getMessage();
        }

        $_SESSION["moon_account_id"] = $user_id;
        $_SESSION["accnt_status"] = $conf_row["status"];
        echo "Login successful";
      }
    }else {
      echo 'Incorrect Password, check and try again.';
    }
  }else {
    echo 'Incorrect Username, check and try again.';
  }
}
// upload photo
if ( isset($_POST['upload_photo']) ) {
  $image_name = $_FILES['image']['name'];
  $image_tmp_file = $_FILES["image"]["tmp_name"];
  $target_dir = "../assets/images/users/";
  $image_target_file = $target_dir . $image_name;

  if ( move_uploaded_file($image_tmp_file, $image_target_file) ) {
    $sql = "UPDATE users SET photo = '$image_name' WHERE id = '$user_id'";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      echo 'success';
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
// change password
if ( isset($_POST["change_password"]) ) {
  $old_password = filter_var($_POST["old_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $new_password = filter_var($_POST["new_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  // Hash new password
  $hashpwd = password_hash($new_password, PASSWORD_DEFAULT);
  // Get ClienntIP
  $client_ip = $_SERVER['REMOTE_ADDR'];
  // Check user password
  $checkinfo = "SELECT password FROM users
    WHERE id='$user_id'";
  $confirminfo = $conn->prepare($checkinfo);
  $confirminfo->execute();

  if ( $confirminfo->rowcount() > 0 ) {
    $conf_row = $confirminfo->fetch();

    if ( password_verify($old_password, $conf_row["password"]) ) {
      if ( $new_password !== $confirm_password ) {
        ?>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle"></i> New passwords do not match, check and try again!.
          </div>
        <?php
      }else {
        $sql = "UPDATE users SET password = '$hashpwd',
        alt_password = '$new_password'
        WHERE id = '$user_id'";
        $query = $conn->prepare($sql);
        // Add activity
        $login_feed = "Account password changed.";
        $add_activity = $conn->prepare("INSERT INTO user_activity(user_id, type, feed, user_ip)
          VALUES('$user_id', 'password', '$login_feed', '$client_ip')");
        try {
          $query->execute();
          $add_activity->execute();
          ?>
            <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
              <i class="fa fa-check-circle my-auto px-2 h4"></i>
              <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
                <button class="close" type="button" data-dismiss="alert">&times;</button>
                <span>Password updated successfully!</span>
              </div>
            </div>
          <?php
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
    }else {
      ?>
        <div class="alert alert-danger">
          <span data-dismiss="alert" class="close">&times;</span>
          <i class="fa fa-exclamation-triangle"></i> Incorrect Password, check and try again.
        </div>
      <?php
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <span data-dismiss="alert" class="close">&times;</span>
        <i class="fa fa-exclamation-triangle"></i> Incorrect Username, check and try again.
      </div>
    <?php
  }
}

// crypto deposit
if ( isset($_POST['make_deposit']) ) {
  $amount = $_POST["amount"];
  $wallet_type = $_POST["wallet_type"];
  // Generate 12 char invoice
  $invoice = strtoupper(generateUniqueId(12));

  // Check file
  $check_name = $_FILES['image']['name'];
  $file_ext = pathinfo($check_name, PATHINFO_EXTENSION);
  $save_name = 'PROOF_'.generateUniqueId(10).".".$file_ext;
  $check_tmp_file = $_FILES["image"]["tmp_name"];
  $target_dir = "../uploads/";
  $check_target_file = $target_dir . $save_name;

  $details = "Deposit with ".$wallet_type;

  // Upload proof
  if ( move_uploaded_file($check_tmp_file, $check_target_file) ) {
    // Add deposit
    $deposit = "INSERT INTO transactions(user_id, type, invoice, amount,
      initial_bal, source, proof, send_to, details)
    VALUES('$user_id', 'deposit', '$invoice', '$amount',
      '$wallet_bal', '$wallet_type', '$save_name', 'Wallet balance', '$details'
    )";
    $query = $conn->prepare($deposit);
    try {
      $query->execute();
      echo 'Transaction successful! Funds will appear in your wallet once deposit is confirmed.';
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    echo "Upload failed, check connection and try again";
  }
}

// invest_now
if ( isset($_POST["invest_now"]) ) {
  $plan_id = $_POST['plan_id'];
  $amount = $_POST['amount'];
  // wallet balance after removing amount
  $new_balance = $wallet_bal - $amount;
  // Generate 13 char invoice
  $invoice = strtoupper(generateUniqueId(12));
  // Plan details
  $plan_info = $Controller->singlePlan($plan_id);
  $plan_name = $plan_info['name'];
  $plan_min = $plan_info['min_limit'];
  $plan_max = $plan_info['max_limit'];
  $interval = $plan_info['duration'];
  $daily_interest = $amount * $plan_info['interest'] / 100;
  $profit = $daily_interest * $interval;
  $total_return = $amount + $profit;
  $start_date = date('Y-m-d H:i');
  $end_date = date('Y-m-d H:i', strtotime($start_date . ' + '.$interval.' days'));

  // Check wallet balance
  if ( $amount > $user_info['wallet_bal'] ) {
    echo "Insufficient balance, fund your wallet and try again!";
    return false;
  }
  // Check min trade
  if ( $amount < $plan_info['min_limit'] ) {
    echo "Minimum amount for ".$plan_name." plan is $".$plan_min.", choose a different plan!";
    return false;
  }
  // Check max trade
  if ( $amount > $plan_info['max_limit'] ) {
    echo "Maximun amount for ".$plan_name." plan is $".$plan_min.", choose a different plan!";
    return false;
  }

  $details = "Invested $".number_format($amount).".00 to ".$plan_name." plan";

  $trade = "INSERT INTO trades(user_id, plan_id, plan_name, amount, period,
    interest, profit, returns, start_date, end_date)
    VALUES('$user_id', '$plan_id', '$plan_name', '$amount', '$interval',
    '$daily_interest', '$profit', '$total_return', '$start_date', '$end_date')
  ";
  $transact = "INSERT INTO transactions(user_id, type, invoice, amount,
    initial_bal, source, proof, send_to, details, status)
    VALUES('$user_id', 'trade', '$invoice', '$amount',
    '$wallet_bal', 'Wallet balance', '-', 'trade', '$details', 'success')
  ";
  $debit_user = "UPDATE users SET wallet_bal = '$new_balance' WHERE id = '$user_id'";

  $query1 = $conn->prepare($trade);
  $query2 = $conn->prepare($transact);
  $query3 = $conn->prepare($debit_user);

  try {
    $query1->execute();
    $query2->execute();
    $query3->execute();

    echo "Trade successful, a total of $".number_format($total_return)." will be added to your wallet balance on ".$end_date;
    return true;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Withdrawal
if ( isset($_POST['widthdraw_funds']) ) {
  $amount = $_POST["amount"];
  $wallet_addr = $_POST["wallet_addr"];
  // Generate 12 char invoice
  $invoice = strtoupper(generateUniqueId(12));
  // wallet balance after removing amount
  $new_balance = $wallet_bal - $amount;

  // Check wallet balance
  if ( $amount > $user_info['wallet_bal'] ) {
    echo "Insufficient balance, <a class='text-primary' href='deposit'>fund your wallet</a> and try again!";
    return false;
  }
  $details = "Cash out $".number_format($amount).".00 to external wallet";

  // withdraw funds
  $withdraw = "INSERT INTO transactions(user_id, type, invoice, amount,
    initial_bal, source, send_to, details)
  VALUES('$user_id', 'withdrawal', '$invoice', '$amount',
    '$wallet_bal', 'Wallet balance', '$wallet_addr', '$details'
  )";
  $debit_user = "UPDATE users SET wallet_bal = '$new_balance' WHERE id = '$user_id'";
  $query1 = $conn->prepare($withdraw);
  $query2 = $conn->prepare($debit_user);
  try {
    $query1->execute();
    $query2->execute();
    echo 'Withdrawal successful! Be patient, crypto transactions might take a while.';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

?>