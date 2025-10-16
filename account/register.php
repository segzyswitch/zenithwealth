<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register - Velloxa Wealth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../icon.png" type="image/png">
</head>

<body class="auth-page">
	<div class="container" style="background-image:url(../images/register-bg.png);background-size:cover;background-position:left;">
		<div class="row py-5">
			<div class="col-sm-7 p-2"></div>
			<div class="col-sm-5">
				<div class="text-center mb-4">
					<a href="../"><img src="../logo-new.png" height="70" class="mb-3" alt=""></a>
					<h4 class="text-color pt-3 pt-sm-0">Create an account</h4>
				</div>

				<div class="card shadow-sm">
					<div class="card-body p-4">
						<p class="mb-4">Enter the details below to create an account.</p>
						<form id="registerForm" action="#">
							<div class="mb-3">
								<label for="fullName" class="form-label">Full Name</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-person"></i></span>
									<input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-envelope"></i></span>
									<input type="email" class="form-control" id="email" placeholder="Enter your email" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="phone" class="form-label">Phone Number</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-telephone"></i></span>
									<input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-lock"></i></span>
									<input type="password" class="form-control" id="password" placeholder="Enter your password" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="confirmPassword" class="form-label">Confirm Password</label>
								<div class="input-group">
									<span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
									<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password"
										required>
								</div>
							</div>
							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="agreeTerms" required>
								<label class="form-check-label small" for="agreeTerms">
									I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#"
										class="text-decoration-none">Privacy Policy</a>
								</label>
							</div>
							<button type="submit" class="btn btn-warning submit-btn w-100 mb-3">Create Account</button>
						</form>
					</div>
				</div>

				<div class="text-center mt-3">
					<p class="text-muted small">Already have an account? <a href="login" class="text-decoration-none">Sign
							in</a></p>
				</div>

				<div class="text-center mt-3">
					<button class="btn btn-link" id="authThemeToggle">
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