<aside class="sidebar" id="sidebar">
	<div class="sidebar-top mb-4">
		<div class="site-logo">
			<a href="../admin/dashboard">
				<img src="../logo.png" width="70" class="mx-auto" alt="White Logo">
			</a>
		</div>
	</div>

	<div class="sidebar-menu-container" data-simplebar>
		<ul class="sidebar-menu">
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link" href="dashboard">
					<span><i class="las la-cog"></i></span>
					<p>Dashboard</p>
				</a>
			</li>

			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed" href="users">
					<span><i class="las la-users-cog"></i></span>
					<p>Manage Users</p>
				</a>
			</li>

			<li class="sidebar-menu-item">
        <a class="sidebar-menu-link collapsed" data-bs-toggle="collapse" href="#collapseDepositControl"
           role="button" aria-expanded="true" aria-controls="collapseDepositControl">
          <span><i class="las la-wallet"></i></span>
          <p>Manage Deposits <small><i class="las la-angle-down"></i></small></p>
        </a>
        <div class="side-menu-dropdown collapse"  id="collapseDepositControl">
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a class="sidebar-menu-link" href="deposits">
                <p>All deposits</p>
              </a>
            </li>

            <li class="sub-menu-item">
              <a class="sidebar-menu-link" href="pending-deposits">
                <p>Pending deposit</p>
              </a>
            </li>
          </ul>
        </div>
      </li>

			<!--
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseManageAgent" role="button"
					aria-expanded="true" aria-controls="collapseManageAgent">
					<span><i class="las la-user-tie"></i></span>
					<p>Manage Agent <small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseManageAgent">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/agents">
								<p>Agents</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/agents/transactions">
								<p>Transactions</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/agents/withdraws">
								<p>Withdraws</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="../admin/investments/rewards">
					<span><i class="las la-medal"></i></span>
					<p>User Reward</p>
				</a>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="../admin/investments-setting">
					<span><i class="las la-cog"></i></span>
					<p>Investment Setting</p>
				</a>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseMatrixLogs" role="button"
					aria-expanded="true" aria-controls="collapseMatrixLogs">
					<span><i class="las la-paper-plane"></i></span>
					<p>Matrix Scheme <small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseMatrixLogs">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/matrix">
								<p>Scheme</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/matrix/enrolled">
								<p>Enrolled</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/matrix/level-commissions">
								<p>Level Commission</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/matrix/referral-commissions">
								<p>Referral Commission</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			-->

			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed" href="#collapseInvControl" data-bs-toggle="collapse">
					<span><i class="las la-plane-departure"></i></span>
					<p>Investments <small><i class="las la-angle-down"></i></small></p>
				</a>
        <div class="side-menu-dropdown collapse"  id="collapseInvControl">
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a class="sidebar-menu-link" href="running-investments">
                <p>Running investments</p>
              </a>
            </li>
            <li class="sub-menu-item">
              <a class="sidebar-menu-link" href="investments">
                <p>All investments</p>
              </a>
            </li>
          </ul>
        </div>
			</li>

			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed" href="transactions">
					<span><i class="las la-list"></i></span>
					<p>Transactions</p>
				</a>
			</li>

			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed" href="investments-plans">
					<span><i class="las la-shekel-sign"></i></span>
					<p>Manage plans</p>
				</a>
			</li>

			<!--
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseTradeLogs" role="button"
					aria-expanded="true" aria-controls="collapseTradeLogs">
					<span><i class="las la-coins"></i></span>
					<p>Trade Activity <small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseTradeLogs">
					<ul class="sub-menu">

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/trades/crypto-currencies">
								<p>Crypto Currencies</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/trades/parameters">
								<p>Parameter</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/trades">
								<p>History</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/trades/practices">
								<p>Practice</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-title" data-text="Settings &amp; Others">Transaction Services</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapsePaymentProcessor"
					role="button" aria-expanded="true" aria-controls="collapsePaymentProcessor">
					<span><i class="las la-credit-card"></i></span>
					<p>Payment Processor <small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapsePaymentProcessor">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/automatic-gateways">
								<p>Automated</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/traditional-gateways">
								<p>Traditional</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="../admin/investments/referrals">
					<span><i class="las la-sync"></i></span>
					<p>Referral Setting</p>
				</a>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseWithdraw" role="button"
					aria-expanded="true" aria-controls="collapseWithdraw">
					<span><i class="las la-money-bill"></i></span>
					<p>Manage Withdraw<small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseWithdraw">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/withdraw-gateways">
								<p>Gateway</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/withdraws">
								<p>History</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="../admin/pin-generate">
					<span><i class="las la-key"></i></span>
					<p>Manage Pins</p>
				</a>
			</li>
			-->

      <li class="sidebar-menu-item">
        <a class="sidebar-menu-link collapsed" href="payment-methods">
          <span><i class="las la-credit-card"></i></span>
          <p>Payment Methods</p>
        </a>
      </li>

			<li class="sidebar-menu-title" data-text="SETTINGS &amp; OTHERS">Settings &amp; Others</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="profile">
					<span><i class="las la-cogs"></i></span>
					<p>Settings</p>
				</a>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="logout">
					<span><i class="las la-sign-in-alt"></i></span>
					<p>Logout</p>
				</a>
			</li>

			<!--
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseSecurity" role="button"
					aria-expanded="true" aria-controls="collapseWithdraw">
					<span><i class="las la-lock"></i></span>
					<p>Security Firewall <small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseSecurity">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/system-security">
								<p>Setting</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/system-security/blocked-ip">
								<p>Blocked IP</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/system-security/firewall-logs">
								<p>Firewall Logs</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseNotification" role="button"
					aria-expanded="true" aria-controls="collapseWithdraw">
					<span><i class="las la-bell"></i></span>
					<p>Notification Setting<small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseNotification">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/notifications">
								<p>Global Template</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/notifications/templates">
								<p>Templates</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/mail-gateway">
								<p>Mail Gateway</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/sms-gateway/index">
								<p>SMS Gateway</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link " href="../admin/pages">
					<span><i class="las la-map-marked-alt"></i></span>
					<p>Page</p>
				</a>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseFrontend" role="button"
					aria-expanded="true" aria-controls="collapseFrontend">
					<span><i class="las la-globe-americas"></i></span>
					<p>Manage Appearance <small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse  " id="collapseFrontend">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/about">
								<p>About Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/advertise">
								<p>Advertise Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/banner">
								<p>Banner Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/blog">
								<p>Blog Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/choose_us">
								<p>Choose Us</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/contact">
								<p>Contact</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/cookie">
								<p>Cookie</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/crypto_coin">
								<p>Crypto Coin</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/crypto_pairs">
								<p>Crypto Pairs</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/currency_exchange">
								<p>Currency Exchange</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/faq">
								<p>FAQ Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/feature">
								<p>Feature</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/footer">
								<p>Footer Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/investment-profit-calculation">
								<p>investment Profit</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/matrix_plan">
								<p>Matrix Plan</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/page">
								<p>Page</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/pricing_plan">
								<p>Investment Plan</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/process">
								<p>Process Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/service">
								<p>Service Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/sign_in">
								<p>Sign In</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/sign_up">
								<p>Sign Up</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/social">
								<p>Social Section</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/staking-investment">
								<p>Staking Investment</p>
							</a>
						</li>
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/frontend-sections/testimonial">
								<p>Testimonial Section</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link collapsed " data-bs-toggle="collapse" href="#collapseSubscriber" role="button"
					aria-expanded="true" aria-controls="collapseSubscriber">
					<span><i class="las la-marker"></i></span>
					<p>Contact Management<small><i class="las la-angle-down"></i></small></p>
				</a>

				<div class="side-menu-dropdown collapse " id="collapseSubscriber">
					<ul class="sub-menu">
						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/subscribers">
								<p>Subscribers</p>
							</a>
						</li>

						<li class="sub-menu-item">
							<a class="sidebar-menu-link " href="../admin/subscribers/contacts">
								<p>Contacts</p>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-link" href="../admin/settings/cache/clear">
					<span><i class="las la-broom"></i></span>
					<p>Cache Clear</p>
				</a>
			</li>
			-->
		</ul>
	</div>
</aside>


<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, strlen(basename($_SERVER['PHP_SELF']))-4);
// echo $page;
?>
<script>
document.querySelector('.sidebar-menu-link[href="<?php echo $page; ?>"]').classList.add('active');
</script>