<?php session_start();
	if (isset($_SESSION["username"])) { 
?>   
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Sinobectrading&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Post Amalgmation </h4>

<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Certificates_Articles.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Certificates Articles</a></li>
 
<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Directors.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Directors</a></li>
<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Minutes_Resolutions.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Minutes Resolutions</a></li>
<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Notices.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Notices</a></li>
<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Securities.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Securities</a></li>
 
<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Shareholders.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Shareholders</a></li>
<li class="col-lg-3"><a href="../doc/sinobectrading/Post_amalgamation/Transfers.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Transfers</a></li>	 
		 
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