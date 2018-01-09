<?php session_start();
	if ( isset($_SESSION["username"]) ) { 
?>  
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;6031820 Canad INC.</h4>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/ca.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Certificates Articles<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/bl.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>By Laws<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/Declarations.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Declarations<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/ListOfDirectors.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Directors<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/mr.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Minutes Resolutions<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/noticeOfDirectors.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Notice Of Directors<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/noticeOfRegisteredOfficeAddress.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Notice Of Registered Office Address</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/SecuritiesRegister.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Securities Register<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/sc.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Share Certificates<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/ListOfShareholders.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Shareholders<br>&nbsp;</a></li>
<li class="col-lg-3"><a href="../doc/6031820CanadINC/registerOfTransfers.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Register Of Transfers<br>&nbsp;</a></li>	 
		 
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
 