<div class="w-100 d-flex gap-3 top-bar sticky-top" style="background-color:var(--surface-color);">
	<a href="../"><img src="../logo-new.png" class="me-auto d-sm-none" height="50" alt="VW"></a>
	
	<div class="ms-auto d-flex gap-3">
		<button class="btn p-0 px-1 nav-icons" id="themeToggle">
			<i class="bi bi-sun-fill" id="themeIcon"></i>
		</button>
		<div class="dropdown profile-drop my-auto d-none d-sm-block">
			<a href="./settings" class="btn p-0 nav-icons" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="bi bi-person-circle m-0 d-inline-block me-2" style="scale:1.4;"></i>
			</a>
			<!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul> -->
		</div>
		<button class="btn p-0 px-1 nav-icons d-sm-none" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav">
			<i class="bi bi-list d-inline-block" style="scale:1.4;"></i>
		</button>
	</div>
</div>

<div class="offcanvas offcanvas-start" style="width:85%" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
  <div class="offcanvas-header" style="background-color:var(--surface-color);">
		<h5 class="offcanvas-title" id="mobileNavLabel">
			<a href="../"><img src="../logo-new.png" height="50" alt="Velloxa" /></a>
		</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mobile-menu overflow-auto d-block" style="background-color:var(--surface-color);">
		<div class="card">
			<div class="card-body d-flex gap-2">
				<div class="me-auto" style="max-width: 70%;">
					<h5 class="mb-0 text-truncate"><?php echo $user_info['fname'].' '.$user_info['lname'] ?></h5>
					<small class="text-muted d-block"><?php echo $user_info['email'] ?></small>
				</div>
				<div class="ms-auto my-auto w-100">
					<a href="./settings" class="btn btn-outline-primary btn-sm">
						<i class="bi bi-person-circle"></i> Profile
					</a>
				</div>
			</div>
		</div>
		<?php include 'sidebar-links.php' ?>
  </div>
  <div class="offcanvas-footer mt-auto p-3" style="background-color:var(--surface-color);">
		<a href="./logout" class="btn btn-danger w-100">
			<i class="bi bi-box-arrow-right"></i> Logout
		</a>
  </div>
</div>


<script>
  // Get current URL path
  const mobileSidenav = window.location.pathname.split("/").pop();
	// alert(currentPage);

  // Loop through links
  document.querySelectorAll(".mobile-menu a").forEach(link => {
    const href = link.getAttribute("href");

    if (href === `./${mobileSidenav}`) {
      link.classList.add("active"); // add class to <li>
			// alert(href)
    }
  });
</script>