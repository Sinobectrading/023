<?php session_start();
	if (isset($_SESSION["username"])) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Sinobec Group Inc. </h4>

<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=By-Laws.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>By Laws</a></li>

<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=CertificateofAmendment.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Certificate of Amendment</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=CertificateofIncorporation.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Certificate of Incorporation</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=Declaration.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Declaration</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=Director.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Director</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=MinutesAndResolution.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Minutes & Resolution</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=Notices.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Notices</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=Securities.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Securities</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=ShareCertificates.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>ShareCertificates</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=Shareholders.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Shareholders</a></li>
<li class="col-lg-3"><a href="../doc/sinogroup/dl.php?download_file=Transfers.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Transfers</a></li>	 
		 
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