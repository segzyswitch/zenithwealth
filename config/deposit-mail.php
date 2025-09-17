<?php
// Set recipient email and subject
$to = $user_info['email']; // Replace with recipient email
$subject = 'Deposit Submitted - Pending Confirmation';

// Optional: replace with real dynamic values
$customerName = $user_info['fname'].' '.$user_info['lname'];
$source = $wallet_type;
$date = date('M d, Y');
$transactionId = $invoice;
$companyName = 'CrownStone Traders';
$companyLogo = '';
$supportUrl = 'https://yourdomain.com/support';
$year = '2025';

// Build the HTML content
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Deposit Transaction</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f6f8;">
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" style="padding: 40px 20px;">
        <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.05); overflow: hidden;">
          <tr>
            <td style="background-color: #001f3f; padding: 20px; text-align: center;">
              <h1 style="color: #ffffff; margin: 0; font-size: 24px;">
                <img alt='. $companyLogo .' alt='. $companyName .' />
                <span style="margin-right:5px;">'. $companyName .'</span>
              </h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 30px;">
              <p style="font-size: 16px; color: #333333; margin-bottom: 20px;">
                Hello <strong>' . htmlspecialchars($customerName) . '</strong>,
              </p>
              <p style="font-size: 16px; color: #333333; margin-bottom: 20px;">
                We\'ve received your deposit request and it\'s currently being processed. You will receive a confirmation once the funds have been successfully credited to your account.
              </p>
              <table width="100%" cellpadding="10" cellspacing="0" style="background-color: #f1f5f9; border-left: 4px solid #001f3f; margin: 20px 0; border-radius: 4px;">
                <tr>
                  <td style="font-size: 16px; color: #333;">
                    <p style="margin-top:0;"><strong>Amount:</strong> $' . $amount . '</p>
                    <p><strong>Source:</strong> ' . $source . '</p>
                    <p><strong>Date:</strong> ' . $date . '</p>
                    <p><strong>Reference ID:</strong> ' . $transactionId . '</p>
                  </td>
                </tr>
              </table>
              <p style="font-size: 16px; color: #333333;">
                If you have any questions regarding this transaction, feel free to contact our support team.
              </p>
              <p style="font-size: 16px; color: #333333; margin-top: 30px;">
                Thank you for choosing us.
              </p>
              <p style="font-size: 16px; color: #001f3f;"><strong>- ' . $companyName . ' Team</strong></p>
            </td>
          </tr>
          <tr>
            <td style="background-color: #eaeaea; padding: 20px; text-align: center; font-size: 13px; color: #666666;">
              Need help? <a href="' . $supportUrl . '" style="color: #001f3f; text-decoration: none;">Contact Support</a><br/>
              © ' . $year . ' ' . $companyName . ', All rights reserved.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
';

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $companyName . ' <noreply@mooninvests.com>' . "\r\n"; // Update with your domain

// Send the email
if (mail($to, $subject, $message, $headers)) {
  echo 'Email sent successfully to ' . $to;
} else {
  echo 'Failed to send email.';
}