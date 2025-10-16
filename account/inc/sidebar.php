<!-- Desktop Sidebar -->
<div class="sidebar d-none d-lg-flex flex-column">
	<div class="w-100 mb-4 text-center">
		<a href="../"><img src="../logo-new.png" height="55" alt="Velloxa" /></a>
		 <!-- <div class="mx-auto d-flex rounded-circle" style="width:50px;height:50px;background:rgba(82, 37, 0, 1);">
				<img src="../icon-0.png" class="m-auto" width="45" width="45" alt="VW">
			</div> -->
	</div>
	<nav class="sidebar-nav pt-2" style="overflow-y:auto;">
		<?php include 'sidebar-links.php' ?>
	</nav>
	<div class="sidebar-footer">
		<!-- <button class="btn btn-outline-secondary w-100 mb-3" id="themeToggle">
			<i class="bi bi-sun-fill" id="themeIcon"></i>
			<span id="themeText">Light Mode</span>
		</button> -->
		<a href="./logout" class="btn btn-danger w-100">
			<i class="bi bi-box-arrow-right"></i> Logout
		</a>
	</div>
</div>

<script>
  // Get current URL path
  const currentPage = window.location.pathname.split("/").pop();
	// alert(currentPage);

  // Loop through links
  document.querySelectorAll(".sidebar-nav a").forEach(link => {
    const href = link.getAttribute("href");

    if (href === `./${currentPage}`) {
      link.classList.add("active"); // add class to <li>
			// alert(href)
    }
  });
</script>