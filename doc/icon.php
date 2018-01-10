<?php session_start();
	if (isset($_SESSION["username"])) { 
?>   
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Icon Best</h4>
<li class="col-lg-3"><a href="../doc/Iconbest/Articles_Certificates.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Certificates Articles</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/By_Laws.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>By Laws</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/Declarations.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Declarations</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/Directors.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Directors</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/Resolutions_Minutes.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Minutes Resolutions</a></li>
 
<li class="col-lg-3"><a href="../doc/Iconbest/Officers.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Officers</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/Securities.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Securities</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/ShareCertificates.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Share Certificates</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/Shareholders.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Shareholders</a></li>
<li class="col-lg-3"><a href="../doc/Iconbest/Transfers.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Transfers</a></li>	 
		 
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
 