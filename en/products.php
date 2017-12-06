<!DOCTYPE html>
<html lang="fr">

<head>
<?php include_once '../header.php'; ?>
<link href="/023/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
</head>

<body>
<?php include_once 'nav.php'; ?>
<div class="services-breadcrumb" id="product">
	<div class="agile_inner_breadcrumb">

		<ul class="w3_short">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Products</li>
		</ul>
	</div>
</div>
<div id="team" class="team featured_services">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header w3_agileits_header">What <span> We Have</span></h3>
		</div>
		<div class="agile_wthree_inner_grids">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li><i class="fa fa-search" aria-hidden="true"></i>Aluminum raw material</li>
					<li><i class="fa fa-pencil" aria-hidden="true"></i>Aluminum mid material</li>
					<li><i class="fa fa-line-chart" aria-hidden="true"></i>Stainless steel</li>
					<li><i class="fa fa-shield" aria-hidden="true"></i>Finished products</li>
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="col-md-6 tab-info-img">
							<img src="../images/g1.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<h4>Billet and Ingot </h4>
							<p>Billet and ingot: Ingots is the raw material for aluminum plates and sheets. Billets are the raw material for aluminum extrusions. Sinobec are working with their strategy partners providing high quality billet and ingot for aluminum extrusion and plates manufacturers. Hence Sinobec gain more control on cost and quality of mid and downstream products.</p>
						</div>
						<div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab2">

						<div class="col-md-6 tab-info">
							<h4>Coil, sheet, plate & extrusions </h4>
							<p>Sinobec provides both standard and customized extrusion (fabricated, painted, anodized & bright dipped). 
							We stock a series of standard extrusions in our warehouses. By keeping standard extrusions in inventory, we provide JIT supply to our North America and Central American customers.
							 Some of the products we carry in stock Are:
							</p>
							<p>
								 Some of the products we carry in stock Are:
								<li>Angles; Rectangular bar; Channels; Round tubes; Square Tubes; I-beams; Pipes; Square Bars; rods </li>
							</p>
							<p>Furthermore, Sinobec's mills in far-east provide customized extrusions with reasonable lead time. We provide package of service, including die design, die making, logistics, customs clearance, storage and distribution.</p>
							</p>
							<div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
							</div>
						</div>
						<div class="col-md-6 tab-info-img">
							<img src="../images/g2.jpg" alt="img">
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab3">
						<div class="col-md-6 tab-info-img">
							<img src="../images/g1.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<h4>Coils, sheets, plates, pipes & tubes </h4>
							<p>Sinobec distributes coils, sheets, plates, pipes & tubes in various alloys (200/300/400 series)</p>
							<p>We stock a series of flat rolled products in our warehouses. By keeping flat rolled inventory in our warehouses, we provide JIT supply to our North America and Central American customers.
							 Some of the products we carry in stock Are:  coils, sheets in 304 2B / 304 #4 / 316 2B / 316 #4 / 430 2B
							</p>
						</div>
						<div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab4">

						<div class="col-md-6 tab-info">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium
								dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet fusce eget erat nunc. Sed fringilla sem vitae
								mi interdum commodo.</p>
							<div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
							</div>
						</div>

						<div class="col-md-6 tab-info-img">
							<img src="../images/g2.jpg" alt="img">
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div>


 <?php include_once 'footer.php'; ?>	
<!-- script for responsive tabs -->
<script src="/023/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function (event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
	$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
	});
});
</script>
</body>
</html>