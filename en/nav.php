<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">

		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1>
					<a class="navbar-brand" href="/023/en/index.php"><img src="../images/logo.png" alt=""></a>
				</h1>

			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li 
						<?php if (trim($_SERVER['PHP_SELF']) == "/023/en/index.php") {
                              echo 'class="active"';} ?>
						><a href="index.php" class="effect-3">Home</a></li>
						<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/023/en/about.php") {
                              echo 'class="active"';} ?>
						><a href="about.php" class="effect-3">About</a></li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Services <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="services.php">It Solutions</a></li>
								<li><a href="services1.php">Event Management</a></li>
							</ul>
						</li> -->
						<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/023/en/products.php") {
                              echo 'class="active"';} ?>
						><a href="products.php" class="effect-3">Products</a></li>
						
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="icons.php">Web Icons</a></li>
								<li><a href="typography.php">Typography</a></li>
							</ul>
						</li> -->
						 
						<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/023/en/contact.php") {
                              echo 'class="active"';} ?>
						><a href="contact.php" class="effect-3">Contact Us</a></li>
						<li class="language active">
							 <a  href="/023/en/<?php echo basename($_SERVER['PHP_SELF']); ?>">EN</a> 
							  
						</li>
						<li class="language">
							<a class="fr" href="/023/fr/<?php echo basename($_SERVER['PHP_SELF']); ?>">FR</a>
						</li>
					</ul>
				</nav>
			</div>
		</nav>
		<div class="clearfix"> </div>
	</div>
</div>