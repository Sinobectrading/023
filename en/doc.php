<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<?php include_once '../header.php'; ?>

<link href="/023/css/login.css" rel="stylesheet">
<style>
body {
/*	font-family: 'Montserrat', sans-serif;
*/	font-size: 100%;
	background: url(../images/document.jpg) no-repeat center top;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-ms-background-size: cover;
	background-attachment: fixed;
	text-align: center;
}


</style>
</head>

<body id="docpage">
<?php include_once 'nav.php'; ?>


<div id="documents">
	
	<div id="doccnt" class="clearfix">
		<?php if (isset($_SESSION["username"])) {
		?>
		<h3>Download Area</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked admin-menu">

						<li class="active"><a href="#" data-target-id="sgi">Sinobec Group Inc.</a></li>
						<li><a href="#" data-target-id="pages">Company</a></li>
						<li><a href="#" data-target-id="charts">Company</a></li>
						<li><a href="#" data-target-id="table">Company</a></li>
					</ul>
				</div>
				 
				<div class="col-md-9 well admin-content clearfix" id="sgi">
					<div class="col-md-4 col-xs-12 card">
						<div class="front">
							<a>Certificate and Articles</a>
						</div>
						<div class="back">
					    	 <a>
					    	 	<form method="get" action="../doc/sinogroup/CertificateofIncorporation.pdf">
								   <button class="btn" type="submit">Certificate of Amendment</button> 
								</form>
								<form method="get"  action="../doc/sinogroup/CertificateofIncorporation.pdf">
									<button  class="btn" type="submit">Certificate of Incorporation</button>
								</form>
								
							 </a>
					  	</div> 
					</div>
					 
					
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="">Certificate and Articles</a>
					</div>
				</div>
				<div class="col-md-9 well admin-content clearfix" id="pages">
					PagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPagesPages
				</div>
				<div class="col-md-9 well admin-content" id="charts">
					Charts
				</div>
				<div class="col-md-9 well admin-content" id="table">
					Table
				</div>
				 
			</div>
		</div>




 		<?php } else { ?>
	
 	
 		<h3>You are not login, please click <a href="login.php">Login</a></h3>
 		<?php } ?>
 	</div>
</div>
<?php include_once 'footer.php'; ?>	
<script src="/023/js/flip.js"></script>
<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<script>
$(document).ready(function(){
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});
</script>
<script>
$('#sgi .card').click(function(){
  	$(this).toggleClass('flipped');
  	$('.card').parent().children(":not(.card)").fadeToggle();
});
 
</script>
</body>
</html>