<!-- CONTACTS -->
<section id="contacts">
</section><!-- //CONTACTS -->
<div class="footer">
	<div class="f-bg-w3l">
			<div class="col-md-3 w3layouts_footer_grid">
				<h2>Subscribe <span>Newsletter</span></h2>
				<p>By subscribing to our mailing list you will always get latest news from us.</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter your email..." required="">
					<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
				
			
			</div>
			<div class="col-md-4 w3layouts_footer_grid">
				<h3>Recent <span>Works</span></h3>
				 <ul class="con_inner_text midimg">
					<li><a href="#"><img src="../images/banner22.jpg" alt="" class="img-responsive" /></a></li>
				    <li><a href="#"><img src="../images/banner33.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#"><img src="../images/banner44.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#"><img src="../images/banner11.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#"><img src="../images/banner22.jpg" alt="" class="img-responsive" /></a></li>
				    <li><a href="#"><img src="../images/banner33.jpg" alt="" class="img-responsive" /></a></li>
					 <li><a href="#"><img src="../images/banner11.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#"><img src="../images/banner44.jpg" alt="" class="img-responsive" /></a></li>
			     </ul>
				
			</div>
			<div class="col-md-2 w3layouts_footer_grid">
				<h3>Our <span>Links</span> </h3>
				  <ul class="links">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="mail.php">Mail Us</a></li>
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
				<p class="copyright">© 2017 Sinobec Trading. All Rights Reserved | Design by <a href="https://#/" target="_blank">Sinobec</a></p>
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
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			manualControls: '#slider3-pager',
		});
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