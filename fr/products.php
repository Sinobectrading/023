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
			<li><a href="index.php">Accueil</a><span>|</span></li>
			<li>Produts</li>
		</ul>
	</div>
</div>
<div id="team" class="team featured_services">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header w3_agileits_header">Ce Que <span> Nous Avons</span></h3>
		</div>
		<div class="agile_wthree_inner_grids">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li><p><img src="../images/svg/50xal.png" alt=""></p>Matière première d'aluminium</li>
					<li><p><img src="../images/svg/65Xpl.png" alt=""></p>Matériau intermédiaire en aluminium</li>
					<li><p><img src="../images/svg/65xst.png" alt=""></p>Acier inoxydable</li>
					<li><p><img src="../images/svg/65xsd.png" alt=""></p>Produits finis</li>
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="col-md-6 tab-info-img">
							<img src="../images/509_285_001.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<h4>Billette et lingot</h4>
							<p>Billette et lingot: Les lingots sont la matière première pour les plaques et les plaques d'aluminium. Les billettes sont la matière première pour les extrusions d'aluminium. Sinobec travaille avec ses partenaires stratégiques pour fournir des billettes et des lingots de haute qualité aux fabricants d'extrusions d'aluminium et de plaques. Par conséquent, Sinobec contrôle davantage le coût et la qualité des produits intermédiaires et en aval.</p>
						</div>
						<div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Lire la suite »</a>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab2">

						<div class="col-md-6 tab-info">
							<h4>Bobine, feuille, plaque et extrusions </h4>
							<p>Sinobec fournit une extrusion standard et personnalisée (fabriquée, peinte, anodisée et trempée brillante).
							Nous stockons une série d'extrusions standard dans nos entrepôts. En conservant les extrusions standard dans les stocks, nous fournissons des fournitures JIT à nos clients d'Amérique du Nord et d'Amérique centrale.</p>
							<p>
							Certains des produits que nous transportons en stock sont:
								<li>Angles; Rectangular bar; Channels; Round tubes; Square Tubes; I-beams; Pipes; Square Bars; rods </li>
							</p>
							<p>De plus, les usines de Sinobec en Extrême-Orient fournissent des extrusions personnalisées avec un délai raisonnable. Nous fournissons le paquet de service, y compris la conception de matrice, la fabrication de matrice, la logistique, le dédouanement, le stockage et la distribution.</p>
							</p>
							<div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="mid.php" role="button">Lire la suite »</a>
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
							<h4>CoiBobines, feuilles, plaques, tuyaux et tubesls, sheets, plates, pipes & tubes</h4>
							<p>Sinobec distribue des bobines, des feuilles, des plaques, des tuyaux et des tubes dans divers alliages (série 200/300/400)</p>
							<p>Nous stockons une série de produits laminés plats dans nos entrepôts. En conservant des stocks laminés à plat dans nos entrepôts, nous fournissons des fournitures JIT à nos clients d'Amérique du Nord et d'Amérique centrale.
							Certains des produits que nous transportons en stock Sont: bobines, feuilles en 304 2B / 304 # 4/316 2B / 316 # 4/430 2B
							</p>
						</div>
						<div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="steel.php" role="button">Lire la suite »</a>
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
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="finished.php" role="button">Lire la suite »</a>
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