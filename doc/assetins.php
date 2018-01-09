<?php session_start();
    if ( isset($_SESSION["username"]) ) { 
?>   
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/misc.php" class="back">Misc</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/insurance.php" class="back">Insurance</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Asset Insurance</h4>

 <li class="col-lg-3"><a href="../doc/misc/Insurance/Asset_Insurance/Policy_-_6031820_Canada_inc.,_Sinobec_Trading_inc.,_ICON_Best_Shower-_Ja....pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Policy-6031820 Canada inc.<br>Sinobec Trading inc.<br>ICON Best Shower</a></li>
 
 <li class="col-lg-3"><a href="../doc/misc/Insurance/Asset_Insurance/Policy_-_6031820_Canada_inc.,_Sinobec_Trading_inc.,_ICON_Best_Shower-_Ja..._(1).pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Policy-6031820 Canada inc.<br>Sinobec Trading inc.<br>ICON Best Shower(1)</a></li>

 <li class="col-lg-3"><a href="../doc/misc/Insurance/Asset_Insurance/Sinobec.Primaco_#209340.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Sinobec Primaco<br>#209340<br>&nbsp;</a></li>

 <li class="col-lg-3"><a href="../doc/misc/Insurance/Asset_Insurance/Sinobec_Group_General_Liability_Insurance_Renewal.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Sinobec Group General<br>Liability Insurance Renewal<br>&nbsp;</a></li>

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
	 $("#ajax-content").empty().html("<div id='loading'><img src='../images/loading.gif' alt='Loading' /></div>");
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