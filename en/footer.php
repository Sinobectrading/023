<!-- CONTACTS -->
<section id="contacts">
</section><!-- //CONTACTS -->
<div class="footer">
	<div class="f-bg-w3l">
			<div class="col-md-3 w3layouts_footer_grid">
				<h2>Get <span>Brochuer</span></h2>
				<p>To get our product broucher, please enter your email address.</p>
				<form method="#" action="">
					<input type="email" name="Email" placeholder="Enter your email..." required="">
					<button class="btn1" id="fileRequest"><i class="fa fa-2x fa-arrow-circle-o-down" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
				
			
			</div>
			<div class="col-md-4 w3layouts_footer_grid">
				<h3>Our <span>Products</span></h3>
				 <ul class="con_inner_text midimg">
					<li><a href="products.php"><img src="../images/90x90/01.jpg" alt="" class="img-responsive" /></a></li>
				    <li><a href="products.php"><img src="../images/90x90/02.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/03.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/04.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/05.jpg" alt="" class="img-responsive" /></a></li>
				    <li><a href="products.php"><img src="../images/90x90/06.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/07.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/08.jpg" alt="" class="img-responsive" /></a></li>
			     </ul>
				
			</div>
			<div class="col-md-2 w3layouts_footer_grid">
				<h3>Product <span> Categories</span> </h3>
				  <ul class="links">
						<li><a href="products.php">Aluminum raw material</a></li>
						<li><a href="products.php">Aluminum mid material</a></li>
						<li><a href="products.php">Stainless steel</a></li>
						<li><a href="products.php">Finished products</a></li>
					</ul>
			</div>
			<div class="col-md-3 w3layouts_footer_grid">
				<h2>Contact <span>Us</span></h2>
				    <ul class="con_inner_text">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>4455 Rue Cousens, St-Laurent <label> QC, Canada, H4S 1X5</label></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@sinobectrading.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span> +1(514) 339 9333</li>
					</ul>

				<ul class="social_agileinfo">
					<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>


			<div class="clearfix"> </div>
				<p class="copyright">© 2017 Sinobec Trading. All Rights Reserved | Design by <a href="https://#/" target="_blank">Sinobec</a> | <?php if(isset($_SESSION["username"]) ) { ?> <a href="logout.php">Logout</a> <?php } if(!isset($_SESSION["username"]) ) { ?> <a href="login.php">Login</a> <?php } ?> | <a href="privacy.php">Privacy</a></p>
		</div>
</div>
<!-- //footer -->

<!-- js -->
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.countup.js"></script>
<script src="../js/responsiveslides.min.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/modernizr-2.6.2.min.js"></script>
<script src="../js/jquery.chocolat.js "></script>
<script src="../js/bootstrap-3.1.1.min.js"></script>


<link rel="stylesheet " href="/023/css/chocolat.css " type="text/css" media="all" />
 
<script>
	$('.counter').countUp();
</script>

<script>
window.downloadFile = function(sUrl) {
 
    //If in Chrome or Safari - download via virtual link click
    if (window.downloadFile.isChrome || window.downloadFile.isSafari) {
        //Creating new link node.
        var link = document.createElement('a');
        link.href = "../SinoBec_Book_1.pdf";
 
        if (link.download !== undefined){
            //Set HTML5 download attribute. This will prevent file from opening if supported.
            var fileName = sUrl.substring(sUrl.lastIndexOf('/') + 1, sUrl.length);
            link.download = fileName;
        }
 
        //Dispatching click event.
        if (document.createEvent) {
            var e = document.createEvent('MouseEvents');
            e.initEvent('click' ,true ,true);
            link.dispatchEvent(e);
            return true;
        }
    }
 
    // Force file download (whether supported by server).
    var query = '?download';
 
    window.open(sUrl + query);
}
 
 

$("#fileRequest").click(function() {
    // // hope the server sets Content-Disposition: attachment!
    downloadFile('../SinoBec_Book_1.pdf');
});
</script>

<!-- /nav -->
<!-- requried-jsfiles-for owl -->

<script>
$(document).ready(function () {
	$("#owl-demo2").owlCarousel({
		items: 1,
		lazyLoad: false,
		autoPlay: true,
		navigation: false,
		navigationText: false,
		pagination: true,
	});
});
</script>
<!-- //requried-jsfiles-for owl -->


<!--light-box-files -->
<script type="text/javascript ">
	$(function () {
		$('.portfolio-grids a').Chocolat();
	});
</script>
<!-- /js for portfolio lightbox -->
<script>
$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.agileits_w3layouts_banner_nav').addClass('shrink');
        }
        else {
            $('.agileits_w3layouts_banner_nav').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
</script>

<script>
(function($) {
  $.fn.timeline = function() {
    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img"
    };
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" +
        selectors.item
          .first()
          .find(selectors.img)
          .attr("src") +
        ")"
    );
    var itemLength = selectors.item.length;
    $(window).scroll(function() {
      var max, min;
      var pos = $(this).scrollTop();
      selectors.item.each(function(i) {
        min = $(this).offset().top;
        max = $(this).height() + $(this).offset().top;
        var that = $(this);
        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
          selectors.item.removeClass(selectors.activeClass);
          selectors.id.css(
            "background-image",
            "url(" +
              selectors.item
                .last()
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.last().addClass(selectors.activeClass);
        } else if (pos <= max - 40 && pos >= min) {
          selectors.id.css(
            "background-image",
            "url(" +
              $(this)
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          $(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

$("#timeline-1").timeline();

</script>