<div class="transaction-list">
	<?php
	if ( count($Controller->Transactions(10)) <= 0 ) {
		echo '<p class="p-4 m-0">No data found</p>';
	}
	foreach ($Controller->Transactions(10) as $key => $value) {
		?>
	<!-- Transaction Item -->
	<a href="./transaction?trx=<?php echo $value['invoice'] ?>" class="btn text-start transaction-item">
		<div class="d-flex align-items-center gap-3 flex-grow-1">
			<?php
			switch ($value['type']) {
				case 'deposit':
					?>
					<div class="transaction-icon bg-success-subtle text-success">
						<i class="bi bi-arrow-down-circle-fill"></i>
					</div>
					<?php
				break;
				case 'withdrawal':
					?>
					<div class="transaction-icon bg-danger-subtle text-danger">
						<i class="bi bi-arrow-up-circle-fill"></i>
					</div>
					<?php
				break;
				case 'trade':
					?>
					<div class="transaction-icon bg-info-subtle text-info">
						<i class="bi bi-arrow-right-circle-fill"></i>
					</div>
					<?php
				break;
				default:
					?>
					<div class="transaction-icon bg-secondary-subtle text-secondary">
						<i class="bi bi-arrow-up-right-circle-fill"></i>
					</div>
					<?php
				break;
			}
			?>
			<div class="flex-grow-1">
				<div class="fw-medium"><?php echo $value['details']; ?></div>
				<small class="text-muted"><?php echo date('M d, Y', strtotime($value['createdat'])) ?></small>
			</div>
		</div>
		<div class="text-end small">
			<div class="fw-medium text-color">+$<?php echo number_format($value['amount'], 2) ?></div>
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
	</a>
	<?php
	}
	?>
</div>