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

ini_set('SMTP', 'veloxawealth.com');
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
    <!doctype html>
      <html>
      <head>
        <meta charset='utf-8'>
        <title>Activate Your Account | Veloxa Wallet</title>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
        <style>
          /* Some clients ignore style tags — important styles are inline below.
            This is just a tiny safety fallback. */
          body { margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
          img { border:0; display:block; }
          a { color: inherit; text-decoration: none; }
        </style>
      </head>
      <body style='margin:0; padding:0; background:#0f0f10; font-family: Arial, Helvetica, sans-serif; color:#d7d7d7;'>
        <!-- Centering wrapper -->
        <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:#0f0f10; width:100%; min-width:100%;'>
          <tr>
            <td align='center' style='padding:24px 16px;'>
              <!-- Email container -->
              <table role='presentation' width='640' cellpadding='0' cellspacing='0' style='max-width:640px; width:100%; background:#181818; border-radius:8px; overflow:hidden;'>
                <!-- Top padding -->
                <tr>
                  <td style='padding:22px 22px 12px 22px;'>
                    <!-- Header: logo placeholder -->
                    <table role='presentation' width='100%' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td align='left' style='vertical-align:middle;'>
                          <!-- Replace src below with your logo URL; you said you'll add the logo yourself -->
                          <!-- Example: <img src='{{LOGO_URL}}' alt='Company logo' width='120' style='display:block;'> -->
                          <div style='width:140px; height:38px; background:#0f0f10; border-radius:4px; display:inline-block; padding:5px 7.5px;display:flex;'>
                            <!-- Logo placeholder - replace with <img> -->
                            <img src='https://veloxawealth.com/icon.png' width='30' />
                            <h4 style='margin:auto 0;'>Veloxa Wealth</h4>
                          </div>
                        </td>
                        <td align='right' style='vertical-align:middle; font-size:13px; color:#9b9b9b;'>
                          <!-- Subject/time (optional) -->
                          <span>".date('d m')."</span>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- Hero area / confirmation card -->
                <tr>
                  <td style='padding:0 22px 18px 22px;'>
                    <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:#111111; border-radius:6px; padding:18px;'>
                      <tr>
                        <td style='padding-bottom:12px;'>
                          <h1 style='font-size:18px; color:#ffffff; font-weight:700;'>Activate Your Account</h1>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4 style='color:#ccc; font-weight:700;'>Hello, ".$fname." ".$lname."</h4>
                          <p style='font-size:14px; line-height:20px; color:#d3d3d3;'>Welcome to Veloxa Wealth platform! We're excited to have you on board. To complete your registration and activate your account, please confirm your email address by clicking the link below:</p>
                        </td>
                      </tr>
                      <!-- Withdrawal details box -->
                      <tr>
                        <td style='padding:0 0 18px 0;'>
                          <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:transparent;'>
                            <!-- Dashboard button -->
                            <tr>
                              <td style='padding-top:6px;padding-bottom:15px;'>
                                <a href='https://veloxawealth.com/activate-account?uuid=".$uuid."' style='display:inline-block; padding:11px 18px; border-radius:6px; background:#b88b15; color:#0b0b0b; font-weight:700; font-size:14px;'>
                                  Activate account
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <p style='font-size:14px; line-height:20px; color:#9a9a9a;'>If the button above doesn't work, please copy and paste the following link into your browser:</p>
                                <p style='font-size:14px; line-height:20px; color:#efefef;'><a href='https://veloxawealth.com/activate-account?uuid=".$uuid."'>https://veloxawealth.com/activate-account?uuid=".$uuid."</a></p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <!-- Security note -->
                      <tr>
                        <td style='border-top:1px solid rgba(255,255,255,0.04); padding-top:14px;'>
                          <p style='margin:0; font-size:13px; color:#9a9a9a; line-height:19px;'>For security reasons, this link will expire in 24 hours. If you did not sign up for an account with us, please ignore this email.</p>
                          <p style='margin:10px 0 0 0; font-size:13px; color:#9a9a9a; line-height:19px;'>If you have any questions or need help, feel free to contact our support team at contact@veloxawealth.com</p>
                          <p style='margin:10px 0 0 0; font-size:12px; color:#777; font-style:italic;'>
                            This is an automated message, please do not reply.
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- Footer area -->
                <tr>
                  <td style='padding:0 22px;'>
                    <table role='presentation' width='100%' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td style='padding:16px 0 20px 0; font-size:11px; color:#6f6f6f; text-align:center;'>
                          © <span id='year'>2025</span> Veloxa Wealth. All rights reserved.
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!-- End container -->
            </td>
          </tr>
        </table>
      </body>
      </html>
    ";
    $subject = "Confirm Your Account - Veloxa Wealth";
    $headers = "From: Veloxa Wealth <support@veloxawealth.com>\r\n";
    $headers .= "Reply-To: Veloxa Wealth <support@veloxawealth.com>\r\n";
    $headers .= "Return-Path: support@veloxawealth.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if ( mail($email, $subject, $message, $headers) ) {
      $query->execute();
      echo "Registration successful! We sent you a verification link, please follow the link to verify your account.";
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


?>