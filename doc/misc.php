<?php session_start();
    if (isset($_SESSION["username"])) { 
?>   
<h4 class="ajaxtitle"><a href="../doc/main.html" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Miscellaneous</h4>

<li class="active col-lg-3"><a href="../doc/bank.php"><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Bank_Facilities<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/insurance.php"><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Insurance<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/intelpi.php"><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Intellectual_Property &<br> Information Technology</a></li>
<li class="col-lg-3"><a href="../doc/realp.php"><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Real Property<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/veheq.php"><i class="fa fa-folder-o fa-4x text-center" aria-hidden="true"></i>Vehicles & Equipments<br>&nbsp;</a></li>
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
$(".back").click(function(e){
	e.preventDefault();
	 $("#ajax-content").empty().html("<div id='loading'><img src='../images/lg.rotating-balls-spinner.gif' alt='Loading' /></div>");
	$.ajax({ 
    	url: this.href, 
    	success: function(html) {
        	$("#ajax-content").empty().html(html);
        }
	});
	return false;	 
});
$('a.pdf').click(function(){
    window.open(this.href);
    return false;
 });
</script>
<?php } ?>
 