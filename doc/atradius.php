<?php session_start();
    if ( isset($_SESSION["username"]) ) { 
?>   
<h4 class="ajaxtitle"><a href="../doc/main.php" class="back"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;All Companies</a>&nbsp;&nbsp;</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/misc.php" class="back">Misc</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/insurance.php" class="back">Insurance</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="../doc/accountrins.php" class="back">Accounts Receivable Insurance</a>&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;Atradius</h4>

<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Atradius/362957_Amended_Policy_dd_28-06-2017.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>362957 Amended Policy<br>dd 28-06-2017</a></li>

<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Atradius/362957_policy_Signed.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>362957 policy Signed<br>&nbsp;</a></li> 

<li class="col-lg-3"><a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Atradius/Atradius_Sino_Renewal__2017.pdf" class="pdf" ><i class="fa fa-file-pdf-o fa-4x text-center" aria-hidden="true"></i>Atradius Sino<br>Renewal (2017)</a></li>
		 
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