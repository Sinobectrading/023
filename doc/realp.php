<?php session_start();
	if ( isset($_SESSION["username"]) ) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/misc.php" class="back">Misc</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Real Property</h4>


<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4_9470_Henri-Bourassa_Chengdu-Sinobec.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4 9470 Henri-Bourassa<br>Chengdu Sinobec<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-1_9470_Henri_Bourassa,_Chengdu-Sinometal.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-1 9470 Henri_Bourassa<br>Chengdu Sinometal<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-2_#1305-100_Andre_Chengdu-Sinobec.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-2 #1305-100<br>Andre Chengdu Sinobec<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-3-1_#2802-80_Marine_Parade,_Chengdu-Sinobec.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-3- #2802-80 Marine Parade<br>Chengdu-Sinobec</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-3-2_#2802-80_Marine_Parade,_Chengdu-Sinometal.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-3-2 #2802-80 Marine Parade<br>Chengdu-Sinometal</a></li>

<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-5_4455_Rue_Cousens-Sinobec(20160901-20170630)-$45,000-old.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-5 4455 Rue Cousens<br>Sinobec(20160901-20170630) $45,000 old</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-5_4455_Rue_Cousens-Sinobec(20160901-20270630)-$45,000.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-5 4455 Rue Cousens-Sinobec<br>(20160901-20270630) $45,000</a></li>


<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-4-6_Sub-lease_of_3505_Griffith_Montreal.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-4-6 Sub-lease of<br>3505 Griffith Montreal<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-5_3505_Griffith_Lease_Agreement.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-5 3505 Griffith<br>Lease Agreement</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-5_9470_Henri-Bourassa_Lease_Agreement.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-5 9470 Henri-Bourassa<br>Lease Agreement</a></li>
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-5-1_18_Killaloe.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-5-1 18 Killaloe<br>&nbsp;</a></li>	 

<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-5-1_3501-3503_Griffith_Lease_Agreement.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-5-1 3501-3503<br>Griffith Lease Agreement</a></li>	 
<li class="col-lg-3"><a href="../doc/misc/Real_Property/D-5-2_29_Killaloe.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>D-5-2 29 Killaloe<br>&nbsp;</a></li>	 
		 
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
 