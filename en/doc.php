<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
	overflow-x: hidden;
}
</style>
</head>
<body>
<?php include_once 'nav.php'; ?>
<div id="doccnt" class="clearfix">
	<?php 
	if ( isset($_SESSION["username"]) ) { 
	?> 
	<h3>Download Area</h3>
	<div class="container">
		<div class="row">
			<ul class="nav nav-pills nav-stacked admin-menu" id="ajax-content">
				<h4 class="ajaxtitle"><i class="fa fa-folder-o " aria-hidden="true"></i>&nbsp;&nbsp;All Companies</h4>
				<li class="active col-lg-3"><a href="../doc/sgroup.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Sinobec Group Inc.<br>&nbsp;</a></li>
				<?php  if ( $_SESSION["username"]  != "boc") {
				?> 
				<li class="col-lg-3"><a href="../doc/llc.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Sinobec Resources LLC<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/sinobefore.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Sinobectrading</br>Before amalgmation</a></li>
				<li class="col-lg-3"><a href="../doc/sinoafter.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Sinobectrading</br>Post amalgmation</a></li>
				<li class="col-lg-3"><a href="../doc/sinometal.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Sinometal<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/cmsci.php"  ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Canadian Metal Service<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/icon.php"  ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Icon Best<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/6031820.php"  ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>6031820CanadINC<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/9179771.php"  ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>9179771CanadaINC<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/9184872.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>9184872CanadaINC<br>&nbsp;</a></li>
				<li class="col-lg-3"><a href="../doc/marquis.php"  ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Marquis Metal Material Inc<br>&nbsp;</a></li>
				 <?php } ?>
				<li class="col-lg-3"><a href="../doc/misc.php" ><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Misc&nbsp;&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true" style="display: inline-block;"></i><br>&nbsp;</a></li>
			</ul>
		</div>
	</div>	
	<?php 
 	} 
	if (!isset($_SESSION["username"])) { ?>
		<h3>You are not login, please click <a href="login.php">Login</a></h3>
	<?php } ?>
</div>
 
<?php include_once 'footer.php'; ?>	
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
    var navItems = $('.admin-menu li > a:not(.next)');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
 
    navItems.click(function(e){
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');

        $("#ajax-content").empty().html("<div id='loading'><img src='../images/loading.gif' alt='Loading' /></div>");
        // $("#nav li a").removeClass('current');
        // $(this).addClass('current');
 
        $.ajax({ 
        	url: this.href, 
        	success: function(html) {
        		$(".none").toggle();
            	$("#ajax-content").empty().html(html);
            }
    	});
    return false;
    });

    
});
</script>

<script>
(function(seconds) {
    var refresh,       
        intvrefresh = function() {
            clearInterval(refresh);
            refresh = setTimeout(function() {
               location.href = 'relogin.php';
            }, seconds * 1000);
        };

    $(document).on('keypress click mousemove mousedown', function() { intvrefresh() });
    intvrefresh();

}(1800));  

$(document).ready(function(){
  $('a.pdf').click(function(){
    window.open(this.href);
    return false;
  });
 
});
</script>
</body>
</html>