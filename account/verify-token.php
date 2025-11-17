<?php
// inport config
// require_once '../config/config.php';
// require_once '../config/tokenManager.php';
// // Get secret key from env
// $secretKey = getenv('ENCRYPTION_KEY');

// $tokenManager = new TokenManager($secretKey);
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Verify Token - Velloxa Wealth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../icon.png" type="image/png">
</head>

<body class="auth-page">
	<div class="container">
		<div class="row justify-content-center align-items-center min-vh-100 pt-sm-5 pb-sm-4">
			<div class="col-md-5 col-lg-4">
				<div class="text-center mb-5 mb-sm-4">
					<a href="../"><img src="../icon.png" width="100" class="mb-4 mb-sm-3" alt="VW" /></a>
				</div>

				<div class="card sm-shadow-sm">
					<?php
					if (isset($_GET['token'])) {
					?>
					<div class="card-body p-4">
						<p class="mb-4">Set account logins</p>
						<form id="accountSetupForm">
							<?php
							?>
							<input type="hidden" name="set_logins" value="TdjEgWMt6ufVBgAhEO3XzUJZXWJ1CZiyjEGUUxrN">
							<input type="hidden" name="token" value="<?php echo $_GET['token'] ?>">
							<div class="mb-3">
								<label for="email" class="form-label">Email address</label>
								<div class="input-group">
									<input type="email" class="form-control" name="email" required />
								</div>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Enter password</label>
								<div class="input-group">
									<input type="password" class="form-control" name="password" required />
								</div>
							</div>
							<div class="mb-3">
								<label for="confirm_password" class="form-label">Retype password</label>
								<div class="input-group">
									<input type="password" class="form-control" name="confirm_password" required />
								</div>
							</div>
							<button type="submit" class="btn btn-warning submit-btn w-100 mb-4">Continue <i class="bi bi-arrow-right"></i></button>
							<div class="text-center">
								<a href="#" class="text-decoration-none small">I don't have a token?</a>
							</div>
						</form>
					</div>
					<?php
					} else {
					?>
					<div class="card-body p-4">
						<p class="mb-4">Verify account token.</p>
						<form id="tokenForm">
							<?php
							// $uuid = "8dky-cep7-58gf-7sl5";
							// // Encrypt
							// $token = $tokenManager->encrypt($uuid);
							// echo "Generated Token: {$token} \n";
							?>
							<input type="hidden" name="verify_token" value="TdjEgWMt6ufVBgAhEO3XzUJZXWJ1CZiyjEGUUxrN">
							<div class="mb-4">
								<label for="token" class="form-label">Enter token</label>
								<div class="input-group">
									<input type="text" class="form-control" name="token" required />
								</div>
							</div>
							<button type="submit" class="btn btn-warning submit-btn w-100 mb-4">Verify token <i class="bi bi-arrow-right"></i></button>
							<div class="text-center">
								<a href="#" class="text-decoration-none small">I don't have a token?</a>
							</div>
						</form>
					</div>
					<?php
					}
					?>
				</div>
				<div class="text-center mt-3">
					<p class="text-muted small">Don't have an account? <a href="register" class="text-decoration-none">Sign
							up</a></p>
				</div>

				<div class="text-center mt-3">
					<button class="btn" id="authThemeToggle">
						<i class="bi bi-sun-fill" id="authThemeIcon"></i>
						<span id="authThemeText">Light Mode</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'd57e83f0cd225ad264771ba0a3a539b07ded6f9f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>

</html>