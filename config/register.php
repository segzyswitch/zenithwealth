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

ini_set('SMTP', 'mooninvests.com');
ini_set('smtp_port', 465);

// ADD NEW USER ACCOUNT
if ( isset($_POST["register"]) ) {
  // $admin_key = 'MASTER_ADMIN';
  $fname = filter_var($_POST["fname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_var($_POST["lname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_SPECIAL_CHARS);
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
  $sql = "INSERT INTO users(uuid, fname, lname, email, phone, password, alt_password, referral)
    VALUES('$uuid', '$fname', '$lname', '$email', '$phone', '$hashpwd', '$password', '$referral')
  ";
  $query = $conn->prepare($sql);

  try {
    $message = "
    <html>
    <head>
      <title>Veloxa Wealth - Activate Your Account</title>
      <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap' rel='stylesheet'>
      <style>
        body {
          margin: 0;
          background-color: rgba(171, 88, 255, .1);
          padding: 15px;
          font-family: 'Roboto', Arial, sans-serif;
        }
        * {box-sizing:border-box;}
        .container {
          max-width: 500px;
          margin: auto;
        }
        .mail-body {
          padding: 20px;
          background-color: #FFF;
          color: #555;
        }
        .confirm-button {
          display: inline-block;
          padding: 15px 30px;
          background-color: #fe710d;
          color: #FFF;
          text-decoration: none;
        }
        .mail-footer {
          padding: 5px 15px;
          color: #777;
          font-size: .8em;
        }
        .mail-footer a {
          display: inline-block;
          padding-right: 10px;
          color: #777;
        }
      </style>
    </head>
    <body>
    <div class='container'>
      <div class='mail-body'>
        <p><img src='https://mooninvests.com/assets/images/logo_icon/logo.png' width='210' /></p>
        <h3>Hello, ".$fname." ".$lname."</h3>
        <p>Welcome to MoonInvests platform! We're excited to have you on board.</p>
        <p>To complete your registration and activate your account, please confirm your email address by clicking the link below:</p>
        <p><a href='https://mooninvests.com/activate-account?uuid=".$uuid."' class='confirm-button'>Confirm Account</a></p>
        <p>If the button above doesn’t work, please copy and paste the following link into your browser:</p>
        <p><a href='https://mooninvests.com/activate-account?uuid=".$uuid."'>https://mooninvests.com/activate-account?uuid=".$uuid."</a></p>
        <p>Thank you for choosing MoonInvests!</p>
      </div>
      <div class='mail-footer'>
        <p>For security reasons, this link will expire in 24 hours. If you did not sign up for an account with us, please ignore this email.</p>
        <p>If you have any questions or need help, feel free to contact our support team at contact@mooninvests.com</p>
        <hr style='color:#ccc;' />
        <p style='display:flex;'>
          <a href='https://mooninvests.com'>Home</a>
          <a href='https://mooninvests.com/plans'>Pricing</a>
          <a href='https://mooninvests.com/terms-of-service'>Terms & Conditions</a>
          <a href='https://mooninvests.com/contact'>Contact</a>
        </p>
        <p>© 2024 MoonInvests!</p>
      </div>
    </div>
    </body>
    </html>
    ";
    $subject = "Veloxa Wealth - Confirm Your Account";
    $headers = "From: MoonInvests <noreply@mooninvests.com>\r\n";
    $headers .= "Reply-To: MoonInvests <contact@mooninvests.com>\r\n";
    $headers .= "Return-Path: noreply@mooninvests.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if ( mail($email, $subject, $message, $headers) ) {
      $query->execute();
      ?>
      <div class="alert-success alert">
        <i class="bi bi-check"></i> Registration successful! We sent you a verification link, please follow the link to verify your account.
      </div>
      <?php
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


?>