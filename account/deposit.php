<?php
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deposit - Velloxa Wealth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../icon.png" type="image/png">
</head>

<body>
	<!-- Desktop Sidebar -->
	<?php include 'inc/sidebar.php'; ?>

	<!-- Main Content -->
	<div class="main-content">
		<!-- Top Bar -->
		<?php include 'inc/panel-header.php'; ?>
		<div class="content-body">
			<div class="row">
				<div class="col-lg-8">
					<!-- Deposit Methods
					<div class="card mb-4">
						<div class="card-header">
							<h5 class="mb-0">Choose Deposit Method</h5>
						</div>
						<div class="card-body">
							<div class="row g-3">
								<div class="col-md-6">
									<div class="deposit-method">
										<input type="radio" class="btn-check" name="depositMethod" id="crypto" checked>
										<label class="btn btn-outline-primary w-100 py-3" for="crypto">
											<i class="bi bi-currency-bitcoin fs-3 d-block mb-2"></i>
											<span class="fw-medium">Cryptocurrency</span>
											<small class="d-block text-muted">30-60 minutes</small>
										</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="deposit-method">
										<input type="radio" class="btn-check" name="depositMethod" id="bankTransfer">
										<label class="btn btn-outline-primary w-100 py-3" for="bankTransfer">
											<i class="bi bi-bank fs-3 d-block mb-2"></i>
											<span class="fw-medium">Bank Transfer</span>
											<small class="d-block text-muted">1-3 business days</small>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					-->

					<!-- Deposit Form -->
					<div class="card mb-4">
						<div class="card-header pt-3">
							<h5 class="">Deposit funds</h5>
							<small class="d-block text-muted">Deposit with crypto</small>
						</div>
						<div class="card-body mb-2">
							<form id="depositForm" method="POST" action="#">
								<input type="hidden" name="make_deposit" value="<?php echo str_shuffle(time().'asdfghjkl1234567890qwertyuiopzxcvbnm') ?>">
								<div class="mb-3">
									<label for="depositAccount" class="form-label">Wallet type</label>
									<select name="wallet_type" class="form-select" id="depositAccount" required>
										<option selected disabled value="">Select wallet</option>
										<?php
										foreach ($Controller->cryptoWallets() as $key => $value) {
											?>
											<option value="<?php echo $value['name'] ?>"
												data-address="<?php echo $value['wallet_address'] ?>"
												data-code="<?php echo $value['qrcode'] ?>">
												<?php echo $value['name'] ?> wallet
											</option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="col-sm-9 mx-auto mb-3 py-3" id="showWalletInfo" style="display:none;">
									<div id="img" class="col-9 col-sm-4 mx-auto p-2 rounded-3 overflow-hidden mb-3" style="background-color:var(--surface-hover);">
										<img src="" class="w-100" />
										<p class="text-muted m-0 small text-center pt-1">scan to send</p>
									</div>
									<div class="input-group">
										<input type="text" id="depositWallet" class="form-control text-muted" disabled />
										<button type="button" class="input-group-text" onclick="copyInput()">copy</button>
									</div>
									<small class="d-block text-muted text-center m-0 small pt-1" id="coinInfo"></small>
								</div>
								<div class="mb-3">
									<label for="depositAmount" class="form-label">Amount (USD)</label>
									<div class="input-group mb-1">
										<span class="input-group-text">$</span>
										<input type="number" name="amount" class="form-control" id="depositAmount" placeholder="0.00"
											min="100" required>
									</div>
									<small class="text-muted d-block"><i class="bi bi-dot"></i> Minimum deposit: $50.00</small>
									<small class="text-muted d-block"><i class="bi bi-dot"></i> Make sure you enter exact ammount sent to the above wallet</small>
								</div>
								<div class="mb-3">
									<label class="form-label">Upload reciept</label>
									<div class="input-group mb-1">
										<input type="file" name="image" accept="image/*" class="form-control" required />
									</div>
									<small class="text-muted d-block">Upload reciept/screenshot of your transaction to fasten transaction process</small>
								</div>

								<!-- <div class="mb-3">
									<label class="form-label">Quick Amounts</label>
									<div class="d-flex gap-2 flex-wrap">
										<button type="button" class="btn btn-outline-secondary quick-amount"
											data-amount="1000">$1,000</button>
										<button type="button" class="btn btn-outline-secondary quick-amount"
											data-amount="5000">$5,000</button>
										<button type="button" class="btn btn-outline-secondary quick-amount"
											data-amount="10000">$10,000</button>
										<button type="button" class="btn btn-outline-secondary quick-amount"
											data-amount="25000">$25,000</button>
										<button type="button" class="btn btn-outline-secondary quick-amount"
											data-amount="50000">$50,000</button>
									</div>
								</div> -->

								<div class="d-grid">
									<button type="submit" class="btn bg-primary submit-btn text-light btn-lg">
										<small><i class="bi bi-check-circle"></i> Continue to Payment</small>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Sidebar Info -->
				<div class="col-lg-4">
					<div class="card mb-4">
						<div class="card-header">
							<h6 class="mb-0">Deposit Information</h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Processing Time</small>
								<p class="mb-0">1-3 business days</p>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Transaction Fee</small>
								<p class="mb-0">Free for bank transfers</p>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Minimum Deposit</small>
								<p class="mb-0">$50.00</p>
							</div>
							<div>
								<small class="text-muted d-block mb-1">Daily Limit</small>
								<p class="mb-0">$100,000.00</p>
							</div>
						</div>
					</div>

					<?php if ( count($Controller->Deposits()) > 0 ) { ?>
					<div class="card">
						<div class="card-header">
							<h6 class="mb-0">Recent Deposits</h6>
						</div>
						<div class="card-body p-0">
							<div class="list-group list-group-flush">
								<?php
								foreach ($Controller->Deposits(5) as $key => $value) {
								?>
								<div class="list-group-item">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<div class="fw-medium">$<?php echo number_format($value['amount'], ) ?></div>
											<small class="text-muted"><?php echo date('M d, Y', strtotime($value['createdat'])) ?></small>
										</div>
										<?php
										switch ($value['status']) {
											case 'success':
												?><span class="badge bg-success-subtle text-success">Completed</span><?php
											break;
											case 'failed':
												?><span class="badge bg-danger-subtle text-danger">Failed</span><?php
											break;
											default:
												?><span class="badge bg-warning-subtle text-warning">Pending</span><?php
											break;
										}
										?>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<?php } ?>

					<div class="card border-primary mb-4">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2 mb-2">
								<i class="bi bi-info-circle-fill text-primary"></i>
								<h6 class="mb-0">Important Notice</h6>
							</div>
							<p class="small mb-0">All deposits are secured with bank-level encryption. Funds will be available for
								trading once the transaction is confirmed.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile Bottom Navigation -->
	<?php include 'inc/mobile-menu.php'; ?>

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>	<script>
		$(document).ready(function() {
			$('#depositAccount').on('change', function() {
				const selectedMethod = $("#depositAccount option:selected");
				const name = selectedMethod.val();
				const wallet_address = selectedMethod.data('address');
				const qrcode = selectedMethod.data('code');
				$('#showWalletInfo').show();
				if (qrcode) {
					$('#showWalletInfo #img').show();
					$("#showWalletInfo img").attr('src', `../uploads/${qrcode}`);
				}else {
					$('#showWalletInfo #img').hide();
				}
				$('#depositWallet').val(wallet_address);
				$("#coinInfo").html(`Send ${name} to this wallet, sending other crypto might cause delay!`)
			});
		});

		// Copy to clipboard function
		function copyInput() {
			const input = document.getElementById("depositWallet");
			input.select();
			input.setSelectionRange(0, 99999); // for mobile devices
			navigator.clipboard.writeText(input.value)
				.then(() => notifySuccess("Copied to clipboard"))
				.catch(err => console.error("Copy failed:", err));
		}
	</script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>