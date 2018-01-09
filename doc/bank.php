<?php session_start();
	if ( isset($_SESSION["username"]) ) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/misc.php" class="back">Misc</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Bank Facilities</h4>


<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-1_2017_facility_letter_(include_parent_company).pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-1 2017 facility letter<br>(include parent company)</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-1-1_BDCloan_of_$35.5K_for_ISO_Certification_Mandat.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-1-1 BDCloan of $35.5K<br>for ISO Certification Mandat</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-1-2_BDC_loan_of_$75K_for_racking_and_forklift.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-1-2 BDC loan of $75K<br>for racking & forklift</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-1-3_BDC_loan_of_$84K_for_forklift.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-1-3 BDC loan of<br>$84K for forklift</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-1-4_BDC_loan_of_$130K_for_ERP.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-1-4 BDC loan of<br>$130K for ERP</a></li>

<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-2_Loan_for_Montreal_Office_Building.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-2 Loan for Montreal<br>Office Building</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-2-1_Loan_for_Montreal_9470_Henri_Bourassa_Offfice_Building.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-2-1 Loan for Montreal<br>9470 Henri Bourassa Offfice</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-2-2_Loan_for_Toronto_Office_Building.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-2-2 Loan for Toronto<br>Office Building</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-2-3_EDC_Gurantee_for_Equipment_Purchase_in_Foreign_Countries_$400k.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-2-3 EDC Gurantee for Equipment<br>Purchase in Foreign Countries $400k</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-2-4_EDC_Gurantee_for_Operation_Loan_$2.5M.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-2-4 ED Gurantee for<br>Operation Loan $2.5M</a></li>
<li class="col-lg-3"><a href="../doc/misc/Bank_Facilities/B-2-5_EDC_Gurantee_for_Operation_Loan_$1M.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>B-2-5 EDC Gurantee<br>for Operation Loan_$1M</a></li>	 
		 
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
 