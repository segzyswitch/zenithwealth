<?php
$companyName = "Velloxa Wealth";
$companyLogo = "https://velloxawealth.com/logo.png";
?>

<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Deposit Submitted - ".$companyName."</title>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <style>
    body { margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    img { border:0; display:block; }
    a { color: inherit; text-decoration: none; }
  </style>
</head>
<body style='margin:0; padding:0; background:#0f0f10; font-family: Arial, Helvetica, sans-serif; color:#d7d7d7;'>
  <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:#0f0f10; width:100%; min-width:100%;'>
    <tr>
      <td align='center' style='padding:24px 16px;'>
        <table role='presentation' width='640' cellpadding='0' cellspacing='0' style='max-width:640px; width:100%; background:#181818; border-radius:8px; overflow:hidden;'>
          <tr>
            <td style='padding:22px 22px 12px 22px;'>
              <table role='presentation' width='100%' cellpadding='0' cellspacing='0'>
                <tr>
                  <td align='left' style='vertical-align:middle;'>
                    <img src='$companyLogo' alt='$companyName' width='70' style='display:block;'>
                  </td>
                  <td align='right' style='vertical-align:middle; font-size:13px; color:#9b9b9b;'>
                    <span>".date('d m')."</span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style='padding:0 22px 18px 22px;'>
              <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:#111111; border-radius:6px; padding:18px;'>
                <tr>
                  <td style='padding-bottom:12px;'>
                    <h1 style='margin:0; font-size:18px; color:#ffffff; font-weight:700;'>Deposit recieved, pending confirmation</h1>
                  </td>
                </tr>
                <tr>
                  <td style='padding-bottom:14px;'>
                    <p style='margin:0; font-size:14px; line-height:20px; color:#d3d3d3;'>
                      Your deposit of <strong style='color:#ffffff;'>$2,500</strong> has been recieved and being processed, funds will be available once transaction is confirmed.
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style='padding:10px 0 18px 0;'>
                    <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:transparent;'>
                      <tr>
                        <td style='font-size:13px; color:#bdbdbd; padding-bottom:8px;'>
                          <strong style='color:#ffffff;'>Withdrawal Address :</strong>
                        </td>
                      </tr>
                      <tr>
                        <td style='font-size:13px; color:#cfcfcf; word-break:break-all; padding-bottom:12px;'>
                          1DhYH5u97n3NEAN6FzWs8Ch9ih6MUwJQrx
                        </td>
                      </tr>

                      <tr>
                        <td style='font-size:13px; color:#bdbdbd; padding-bottom:8px;'>
                          <strong style='color:#ffffff;'>Transaction ID :</strong>
                        </td>
                      </tr>
                      <tr>
                        <td style='font-size:13px; color:#cfcfcf; word-break:break-all; padding-bottom:14px;'>
                          j16CcPXfXQjWgh44a3fbpDPYFTU4ok
                        </td>
                      </tr>

                      <tr>
                        <td style='padding-top:6px;'>
                          <a href='#' style='display:inline-block; padding:11px 18px; border-radius:6px; background:#b88b15; color:#0b0b0b; font-weight:700; font-size:14px;'>
                            Visit Your Dashboard
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style='border-top:1px solid rgba(255,255,255,0.04); padding-top:14px;'>
                    <p style='margin:0; font-size:13px; color:#9a9a9a; line-height:19px;'>
                      Don't recognize this activity? Please reset your password and contact customer support immediately.
                    </p>
                    <p style='margin:10px 0 0 0; font-size:13px; color:#9a9a9a; line-height:19px;'>
                      Please check with the receiving platform or wallet as the transaction is already confirmed on the blockchain explorer.
                    </p>
                    <p style='margin:10px 0 0 0; font-size:12px; color:#777; font-style:italic;'>
                      This is an automated message, please do not reply.
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style='padding:14px 22px;'>
              <table role='presentation' width='100%' cellpadding='0' cellspacing='0'>
                <tr>
                  <td style='font-size:13px; color:#c9c9c9; padding-bottom:14px;'>
                    <div style='font-weight:700; color:#d3a83a; margin-bottom:8px;'>Stay connected!</div>
                    <p style='font-size:12px; color:#8f8f8f;'>
                      To stay secure, setup your phishing code <a href='#' style='color:#b88b15; font-weight:600;'>here</a>.
                    </p>

                    <p style='margin:0 0 8px 0;'>
                      <strong style='color:#dcdcdc;'>Risk warning:</strong>
                      Cryptocurrency trading is subject to high market risk. $company_name will make the best efforts to choose high-quality coins, but will not be responsible for your trading losses. Please trade with caution.
                    </p>

                    <p style='margin:0 0 0 0; color:#7f7f7f;'>
                      Kindly note: Please be aware of phishing sites and always make sure you are visiting the official $company_name website when entering sensitive data.
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style='padding:16px 0 20px 0; font-size:11px; color:#6f6f6f; text-align:center;'>
                    © <span id='year'>2025</span> $company_name. All rights reserved.
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>