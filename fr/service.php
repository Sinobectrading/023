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
			<li><a href="index.php">Accueil</a><span>|</span></li>
			<li>Service</li>
		</ul>
	</div>
</div>
<div id="team" class="team featured_services">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header w3_agileits_header">Nos <span> Services</span></h3>
		</div>
		<div class="agile_wthree_inner_grids">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li><p><img src="../images/svg/65xmp.png" alt=""></p>Traitement et fabrication des métaux</li>
					<li><p><img src="../images/svg/65xcs.png" alt=""></p>Chaîne d'approvisionnement</li>
					<li><p><img src="../images/svg/65xcs.png" alt=""></p><br>Consultant</li>
					<li><p><img src="../images/svg/65xps.png" alt=""></p>Solution de projet et clé en main</li>
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="col-md-6 tab-info-img">
							<img src="../images/service/801_449_02.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<!-- <h4>Billet and Ingot </h4> -->
							<p>Sinobec fournit non seulement des marchandises en métal mais également des services de fabrication en métal. Nous offrons un service de traitement et de fabrication de métaux sur mesure pour nos précieux clients dans diverses industries, y compris l'aérospatiale, l'informatique, les véhicules de transport terrestre. Avec notre équipement de précision et notre équipe de professionnels, nous augmentons la valeur monétaire de vos produits. Sinobec a lancé avec succès plusieurs projets de traitement pour des projets aérospatiaux nationaux entre les États-Unis-Chine et le Canada-Chine. 2017, Sinobec Suzhou usine a commencé à fonctionner et servir les clients dans l'industrie des TI.</p>
						</div>
						<!-- <div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Lire la suite »</a>
						</div> -->
						<div class="clearfix"></div>
					</div>

					<div class="tab2">

						<div class="col-md-6 tab-info">
							<!-- <h4>Coil, sheet, plate & extrusions </h4> -->
							<p>Un service de chaîne d'approvisionnement dédié et adapté à votre entreprise. Diagnostiquez votre besoin et résolvez votre problème. Créez de la valeur pour le client avec notre plate-forme SCM interne et notre réseau d'approvisionnement externe. Nous fournissons un pack de service SCM, y compris l'approvisionnement, l'achat, le transport, l'entreposage, VIM (gestion des stocks des fournisseurs, distribution.
							</p>
							<!-- <div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Lire la suite »</a>
							</div> -->
						</div>
						<div class="col-md-6 tab-info-img">
							<img src="../images/service/801_449_01.jpg" alt="img">
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab3">
						<div class="col-md-6 tab-info-img">
							<img src="../images/service/801_449_04.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<!-- <h4>Coils, sheets, plates, pipes & tubes </h4> -->
							<p>La technologie professionnelle d'élite et l'équipe de gestion fournissent aux clients des visions uniques. Fournir de l'expertise en pointe; Guider les clients vers le succès
							</p>
						</div>
						<!-- <div class="agileits-button two">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Lire la suite »</a>
						</div> -->
						<div class="clearfix"></div>
					</div>
					<div class="tab4">

						<div class="col-md-6 tab-info">
							<!-- <h4>Lorem ipsum dolor sit amet</h4> -->
							<p>Intégrez du matériel de haute qualité, un service de haute qualité et une gestion de projet professionnelle. Notre équipe interfonctionnelle consiste en l'approvisionnement; achat; Nos experts internes fourniront une technologie de pointe et une expertise industrielle, l'équipe de direction mènera votre entreprise ou vos projets à la réussite.</p>
							<!-- <div class="agileits-button two">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="raw.php" role="button">Lire la suite »</a>
							</div> -->
						</div>

						<div class="col-md-6 tab-info-img">
							<img src="../images/service/801_449_03.jpg" alt="img">
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