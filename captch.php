<?php
session_start();

// Your Cloudflare Turnstile keys
$site_key = '0x4AAAAAAB7AwON2unE3ffLB';
$secret_key = '0x4AAAAAAB7AwJWFYcAOHnRIb8q45lT_uQI';

// If user already verified in this session, skip captcha
if (!empty($_SESSION['turnstile_verified'])) {
  return; // allow page to continue loading
}

// If form was submitted, verify
if (isset($_POST['verify'])) {
  $response = $_POST['cf-turnstile-response'] ?? '';
  $remoteip = $_SERVER['REMOTE_ADDR'] ?? null;

  if ($response) {
    // Verify with Cloudflare
    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = http_build_query([
      'secret' => $secret_key,
      'response' => $response,
      'remoteip' => $remoteip
    ]);

    $opts = [
      'http' => [
        'method' => 'POST',
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'content' => $data
      ]
    ];
    $context = stream_context_create($opts);
    $result = @file_get_contents($url, false, $context);
    $json = json_decode($result, true);

    if (!empty($json['success'])) {
      $_SESSION['turnstile_verified'] = true;
      // reload current page after success
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit;
    }
  }
}

// If not verified yet, show only the captcha gate and exit
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Verify you're human</title>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 60px;
    }

    .wrapper {
      display: inline-block;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <h2>Please verify you're human</h2>
    <form method="post">
      <div class="cf-turnstile" data-sitekey="<?= htmlspecialchars($site_key) ?>"></div>
      <br>
      <button type="submit" name="verify">Continue</button>
    </form>
  </div>
</body>

</html>
<?php
exit; // stop rest of page from rendering until verified
?>