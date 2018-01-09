<?php session_start();
	if (isset($_SESSION["username"])) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Marquis Metal Material Inc. </h4>

<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/cover.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Cover</a></li>
<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/articlesOfIncorparation.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Articles Of Incorparation</a></li>
<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/bylaws.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>By Laws</a></li>
<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/forms_Irs_Documents.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Forms Irs Documents</a></li>
 
<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/minutes.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Minutes</a></li>

<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/stock_certificates.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Stock Certificates</a></li>
 
<li class="col-lg-3"><a href="../doc/MarquisMetalMaterialInc/transfer_ledger.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Transfer Ledger</a></li>	 
		 
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
