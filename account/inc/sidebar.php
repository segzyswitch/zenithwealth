<div class="side-nav">
	<div class="side-wallet-box default-wallet mb-0">
		<div class="user-balance-card">
			<div class="wallet-name">
				<div class="name">Account Balance</div>
				<div class="default">Wallet</div>
			</div>
			<div class="wallet-info">
				<div class="wallet-id"><i icon-name="wallet"></i>Main Wallet</div>
				<div class="balance">$<?php echo number_format($user_info['wallet_bal'],2) ?></div>
			</div>
			<div class="wallet-info">
				<div class="wallet-id"><i icon-name="landmark"></i>Profit Wallet</div>
				<div class="balance">$<?php echo number_format($user_info['trading_bal'],2) ?></div>
			</div>
		</div>
		<div class="actions">
			<a href="./deposit" class="user-sidebar-btn"><i
					class="anticon anticon-file-add"></i>Deposit</a>
			<a href="./schemas" class="user-sidebar-btn red-btn"><i
					class="anticon anticon-export"></i>Invest Now</a>
		</div>
	</div>
	<div class="side-nav-inside">
		<ul class="side-nav-menu">
			<li class="side-nav-item ">
				<a href="./dashboard"><i class="anticon anticon-appstore"></i><span>Dashboard</span></a>
			</li>

			<li class="side-nav-item ">
				<a href="./schemas"><i class="anticon anticon-check-square"></i><span>All Schema</span></a>
			</li>
			<li class="side-nav-item ">
				<a href="./invest-logs"><i class="anticon anticon-copy"></i><span>Schema Logs</span></a>
			</li>

			<li class="side-nav-item   ">
				<a href="./deposit"><i class="anticon anticon-file-add"></i><span>Add Money</span></a>
			</li>

			<li class="side-nav-item ">
					<a href="./transactions"><i class="anticon anticon-inbox"></i><span>All Transactions</span></a>
			</li>

			<li class="side-nav-item ">
				<a href="./wallet-exchange"><i class="anticon anticon-transaction"></i><span>Wallet Exchange</span></a>
			</li>

			<li class="side-nav-item   ">
				<a href="./withdraw"><i class="anticon anticon-bank"></i><span>Withdraw</span></a>
			</li>

			<li class="side-nav-item ">
				<a href="./settings"><i class="anticon anticon-setting"></i><span>Settings</span></a>
			</li>
			
			<!-- <li class="side-nav-item ">
				<a href="./ranking-badge"><i class="anticon anticon-star"></i><span>Ranking Badge</span></a>
			</li> -->

			<li class="side-nav-item ">
				<a href="./referral"><i class="anticon anticon-usergroup-add"></i><span>Referral</span></a>
			</li>

			<li class="side-nav-item ">
				<a href="./support-ticket"><i class="anticon anticon-tool"></i><span>Support Tickets</span></a>
			</li>

			<!-- <li class="side-nav-item ">
				<a href="./notification"><i class="anticon anticon-notification"></i><span>Notifications</span></a>
			</li> -->

			<li class="side-nav-item">
				<!-- Authentication -->
				<form method="POST" action="./logout">
					<input type="hidden" name="_token" value="kLYeQlkSAq2dsFWe25IBwTP1vig2I5JjNUWxZvUn"> <button
						type="submit" class="site-btn grad-btn w-100">
						<i class="anticon anticon-logout"></i><span>Logout</span>
					</button>
				</form>
			</li>
		</ul>
	</div>
</div>

<script>
  // Get current URL path
  const currentPage = window.location.pathname.split("/").pop();

  // Loop through links
  document.querySelectorAll(".side-nav-menu li a").forEach(link => {
    const href = link.getAttribute("href");
		// alert(currentPage)

    if (href === `./${currentPage}`) {
      link.parentElement.classList.add("active"); // add class to <li>
    }
  });
</script>