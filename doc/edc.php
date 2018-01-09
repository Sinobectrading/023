<?php session_start();
    if ( isset($_SESSION["username"]) ) { 
?>   
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/misc.php" class="back">Misc</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/insurance.php" class="back">Insurance</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/accountrins.php" class="back">Accounts Receivable Insurance</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;EDC</h4>

<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI__2017_policy.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>EDC-CMSCI<br>2017 policy</a></li>
<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI_2017_Country_Schedule.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>EDC-CMSCI 2017<br>Country Schedule</a></li>
<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI_2017_Coverage_Certificate.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>EDC-CMSCI 2017<br>Coverage Certificate</a></li>

<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-Sinometal_2017_Country_Schedule.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>EDC-Sinometal 2017<br>Country Schedule</a></li>
		 
<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-Sinometal_2017_Coverage_Certificate.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>EDC-Sinometal 2017<br>Coverage Certificate</a></li>
<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI__2017_policy.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>EDC-Sinometal<br>2017 policy</a></li>

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