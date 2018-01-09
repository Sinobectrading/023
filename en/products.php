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
			<li><a href="products.php">Products</a></li>
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
					<li><p><img src="../images/svg/50xal.png" alt=""></p>Aluminum raw material</li>
					<li><p><img src="../images/svg/65Xpl.png" alt=""></p>Aluminum mid material</li>
					<li><p><img src="../images/svg/65xst.png" alt=""></p>Stainless steel</li>
					<li><p><img src="../images/svg/65xsd.png" alt=""></p>Finished products</li>
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="col-md-6 tab-info-img">
							<img src="../images/509_285_001.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<h4>Billet and Ingot </h4>
							<p>Ingots are the raw material for aluminum plates and sheets.
								Billets are the raw material for aluminum extrusions.
								Sinobec works closely with their strategic partners in providing high quality billet and ingot for aluminum extrusion and plate manufacturers. Sinobec looks to be cost effective and while ensuring quality products.</p>
						</div>
						<div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">More Pictures »</a>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab2">

						<div class="col-md-6 tab-info">
							<h4>Coil, sheet, plate & extrusions </h4>
							<p><b><i>Looking for standard or customized extrusions? </i></b></p>
							<p><b><i>Sinobec can assist you. Need your customized extrusions fabricated, painted, anodized or bright dipped? </i></b>
							</p>
							<p>We stock a series of standard extrusions in our warehouses creating a just in time supply chain for our North America and Central American customers.
							 Some of the products we carry in stock include:
							</p>
							<p>
								 Some of the products we carry in stock Are:
								<li>Angles</li>
								<li>Bars (rectangular and square)</li>
								<li>Channels</li>
								<li>Tubes (round and square)</li>
								<li>Beams</li>
								<li>Pipes</li>
								<li>Rods</li>
 
							</p>
							<p>Sinobec also works closely with various mills to provide customized extrusions with reasonable lead time. We provide additional services, including die design, die making, logistics, customs clearance, storage and distribution.</p>
							</p>
							<div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="mid.php" role="button">More Pictures »</a>
							</div>
						</div>
						<div class="col-md-6 tab-info-img">
							<img src="../images/mid/509_450_raw.png" alt="img">
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab3">
						<div class="col-md-6 tab-info-img">
							<img src="../images/509_285_002.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<h4>Stainless steel</h4>
							<p>Sinobec distributes coils, sheets, plates, pipes & tubes in various alloys (200/300/400 series).</p>
							<p>Readily available stock includes a series of flat rolled products allowing our customers to have the products they need when they need them.</p>
							<p>
							Some of the products we carry in stock include: 
								<li>coils</li>
								<li>Sheets in 304 2B / 304 #4 / 316 2B / 316 #4 / 430 2B</li>
							</p>
						</div>
						<div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="steel.php" role="button">More Pictures »</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab4">

						<div class="col-md-6 tab-info">
							<h4>Finished products</h4>
							<p>We carry a complete line of railing supplies. Need a railing for a wraparound deck, a balcony, a stairway, or another feature at a home or business? Looking for the elegant look of wrought iron without the maintenance worries? We carry a complete line of railings and supplies. You will love the variety of styles available—and the peace of mind that railings provide.</p>
							<div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="finished.php" role="button">More Pictures »</a>
							</div>
						</div>

						<div class="col-md-6 tab-info-img">
							<img src="../images/509_285_003.jpg" alt="img">
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