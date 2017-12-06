<!DOCTYPE html>
<html lang="fr">

<head>
<?php include_once '../header.php'; ?>
<link href="/023/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
</head>

<body>
<?php include_once 'nav.php'; ?>
<div class="services-breadcrumb" id="service">
	<div class="agile_inner_breadcrumb">

		<ul class="w3_short">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Service</li>
		</ul>
	</div>
</div>
<div id="team" class="team featured_services">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header w3_agileits_header">Our <span>Service</span></h3>
		</div>
		<div class="agile_wthree_inner_grids">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li><i class="fa fa-search" aria-hidden="true"></i>Metal Processing & Fabrication</li>
					<li><i class="fa fa-pencil" aria-hidden="true"></i>Supply Chain</li>
					<li><i class="fa fa-line-chart" aria-hidden="true"></i>Consultant</li>
					<li><i class="fa fa-shield" aria-hidden="true"></i>Project and Turn Key solution</li>
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="col-md-6 tab-info-img">
							<img src="../images/g1.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<!-- <h4>Billet and Ingot </h4> -->
							<p>Sinobec provide not only metal merchandise but also metal fabrication services. We offer customized metal processing and fabrication service for our valuable customers in various industries, including Aerospace, IT, Land Transportation vehicle. With our precision equipment and professional team, we increase the dollar value for your products. Sinobec successfully launched several processing projects for National joint aerospace projects between USA-China and Canada-China. 2017, Sinobec Suzhou factory started to operate and serve customer in IT industry.</p>
						</div>
						<!-- <div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
						</div> -->
						<div class="clearfix"></div>
					</div>

					<div class="tab2">

						<div class="col-md-6 tab-info">
							<!-- <h4>Coil, sheet, plate & extrusions </h4> -->
							<p>Dedicated and tailored supply chain service to fit into your business. Diagnose your really need and solve your problem. Create value for customer with our internal SCM platform and external supply network. We provide pack of SCM service, including sourcing, purchasing, transportation, warehousing, VIM ( vendor inventory management, distribution.
							</p>
							<!-- <div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
							</div> -->
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
							<!-- <h4>Coils, sheets, plates, pipes & tubes </h4> -->
							<p>Professional elite technology and management team provide customers unique visions. Provide expertise; cutting edge; Guide customers to success.
							</p>
						</div>
						<!-- <div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
						</div> -->
						<div class="clearfix"></div>
					</div>
					<div class="tab4">

						<div class="col-md-6 tab-info">
							<!-- <h4>Lorem ipsum dolor sit amet</h4> -->
							<p>Integrate high quality material, high notch service and professional project management. Our Cross-functional team consists of sourcing; purchasing; Our inhouse experts will provide cutting edge technology and industrial expertise, the management team will lead your business or projects to the success.</p>
							<!-- <div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Read More »</a>
							</div> -->
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