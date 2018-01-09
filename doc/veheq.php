<?php session_start();
	if ( isset($_SESSION["username"]) ) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/misc.php" class="back">Misc</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Vehicles & Equipments</h4>

<li class="col-lg-3"><a href="../doc/misc/Vehicles&Equipments/E-1_BMW_X5_Lease_Agreement.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>E-1 BMW_X5<br>Lease Agreement</a></li>
<li class="col-lg-3"><a href="../doc/misc/Vehicles&Equipments/DE-2_2015_Dodge_Grand_Caravan.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>E-2 2015 Dodge<br>Grand Caravan</a></li>
<li class="col-lg-3"><a href="../doc/misc/Vehicles&Equipments/E-3_2012_Dodge_Journey.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>E-3 2012<br>Dodge Journey</a></li>

<li class="col-lg-3"><a href="../doc/misc/Vehicles&Equipments/E-4_2015_Dodge_Grand_Caravan_(Toronto).pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>E-4 2015 Dodge<br>Grand Caravan (Toronto)</a></li>
<li class="col-lg-3"><a href="../doc/misc/Vehicles&Equipments/E-5_2015_Ford_Super_DutyF-XLT_With_Flatdeck.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>E-5 2015 Ford Super<br>Duty F-XLT With Flatdeck</a></li>

<li class="col-lg-3"><a href="../doc/misc/Vehicles&Equipments/E-6_Cadillac_Escalade_Lease_Agreement.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>E-6 Cadillac Escalade<br>Lease Agreement</a></li>
 
		 
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
 