<?php
session_start();
if (isset($_SESSION["moon_account_id"]) && isset($_SESSION["accnt_status"])) {
	header("Location: dashboard");
}
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Velloxa Wealth</title>
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
					<h4 class="text-color pt-2 pt-sm-0">👋 Welcome Back!</h4>
				</div>

				<div class="card sm-shadow-sm">
					<div class="card-body p-4">
						<p class="mb-4">Sign in to your account.</p>
						<form id="loginForm">
							<input type="hidden" name="user_login" value="TdjEgWMt6ufVBgAhEO3XzUJZXWJ1CZiyjEGUUxrN">
							<div class="mb-4">
								<label for="email" class="form-label">Email</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-envelope"></i></span>
									<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
								</div>
							</div>
							<div class="mb-4">
								<label for="password" class="form-label">Password</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-lock"></i></span>
									<input type="password" class="form-control" name="password" placeholder="Enter your password" required />
								</div>
							</div>
							<div class="mb-4 form-check">
								<input type="checkbox" class="form-check-input" id="rememberMe">
								<label class="form-check-label" for="rememberMe">Remember me</label>
							</div>
							<button type="submit" class="btn btn-warning submit-btn w-100 mb-4">Sign In</button>
							<div class="text-center">
								<a href="#" class="text-decoration-none small">Forgot password?</a>
							</div>
						</form>
					</div>
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
</body>

</html>