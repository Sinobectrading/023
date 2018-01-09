<?php session_start();
	if ( isset($_SESSION["username"]) ) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;9179771 Canada INC.</h4>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/ac.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Certificates Articles</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/bl.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>By Laws</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/dec.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Declarations</a></li>
 
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/rm.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Minutes Resolutions</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/dir.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Directors</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/nt.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Notices</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/off.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Officers</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/sec.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Securities Register</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/sc.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Share Certificates</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/sh.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Shareholders</a></li>
<li class="col-lg-3"><a href="../doc/9179771CanadaINC/trs.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Register Of Transfers</a></li>	 
		 
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