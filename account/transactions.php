<?php
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transactions - Velloxa Wealth</title>
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
			<!-- Transaction List -->
			<div class="card mb-5">
				<div class="card-header d-flex justify-content-between align-items-center py-3">
					<h5 class="mb-0">Recent Transactions</h5>
				</div>
				<div class="card-body p-0">
					<!-- Transaction list -->
					<?php include 'inc/transaction-list.php'; ?>
				</div>
				<div class="card-footer p-0">
					<nav>
						<ul id="transactionPagination" class="pagination justify-content-center mb-0 p-3">
							<li class="page-item">
								<button type="button" class="page-link" tabindex="-1">Previous</button>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item">
								<button type="button" class="page-link">Next</button>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile Bottom Navigation -->
	<?php include 'inc/mobile-menu.php'; ?>

	<script src="assets/global/js/jquery.min.js"></script>
	<script>
		$(function() {

			const perPage = 15;
			const maxPages = 3;

			const items = $(".transaction-list .transaction-item");
			const totalItems = items.length;
			const totalPages = Math.ceil(totalItems / perPage);

			let currentPage = 1;

			function showPage(page) {

				currentPage = page;

				items.hide();

				const start = (page - 1) * perPage;
				const end = start + perPage;

				items.slice(start, end).show();

				renderPagination();
			}

			function renderPagination() {

				const pagination = $("#transactionPagination");
				pagination.empty();

				// Previous
				pagination.append(`
            <li class="page-item ${currentPage == 1 ? "disabled" : ""}">
                <button class="page-link prev">Previous</button>
            </li>
        `);

				let startPage = Math.max(1, currentPage - 2);
				let endPage = Math.min(totalPages, startPage + maxPages - 1);

				if (endPage - startPage < maxPages - 1) {
					startPage = Math.max(1, endPage - maxPages + 1);
				}

				for (let i = startPage; i <= endPage; i++) {
					pagination.append(`
                <li class="page-item ${i == currentPage ? "active" : ""}">
                    <button class="page-link page-number" data-page="${i}">
                        ${i}
                    </button>
                </li>
            `);
				}

				// Next
				pagination.append(`
            <li class="page-item ${currentPage == totalPages ? "disabled" : ""}">
                <button class="page-link next">Next</button>
            </li>
        `);

			}

			$(document).on("click", ".page-number", function() {
				showPage($(this).data("page"));
			});

			$(document).on("click", ".prev", function() {
				if (currentPage > 1) {
					showPage(currentPage - 1);
				}
			});

			$(document).on("click", ".next", function() {
				if (currentPage < totalPages) {
					showPage(currentPage + 1);
				}
			});

			if (totalPages > 1) {
				showPage(1);
			} else {
				items.show();
				$("#transactionPagination").hide();
			}

		});
	</script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>