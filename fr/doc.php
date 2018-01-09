<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once '../header.php'; ?>

<link href="/023/css/login.css" rel="stylesheet">
<style>
body {
/*	font-family: 'Montserrat', sans-serif;
*/	font-size: 100%;
	background: url(../images/document.jpg) no-repeat center top;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-ms-background-size: cover;
	background-attachment: fixed;
	text-align: center;
}
.next {
	cursor: pointer;
}
.page2 {
	display: none;
}
#only-one {
	text-align: left;
 }
#only-one section li {
	background: rgba(200,200,200,.3);
	padding: 10px 15px;
	cursor: pointer;
	color: #fff;
}
 
#documents #only-one li.active a:hover {
	color: #337ab7;
}
#documents #only-one li.active {
	background: #337ab7;
	
}
#documents #only-one section li:hover,
#documents #only-one section li:focus,
#documents #only-one section li:hover a {
	background: #fff;
	color: #337ab7;
}
#only-one section li a {
	background: transparent;
}
#only-one .seclv {
	padding-left: 30px
}
#only-one .tirlv {
	padding-left: 45px
}
</style>
</head>

<body>
<?php include_once 'nav.php'; ?>


<div id="documents">
	
	<div id="doccnt" class="clearfix">
		<?php 
		 if ( isset($_SESSION["username"]) ) {
			// $now = time();  
   //      	if ($now > $_SESSION['expire']) {
   //          	session_unset(); 
   //          	header('Location: relogin.php');
   //      	}  else {
		?>
		<h3>Download Area</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-3 leftmenu">
					<ul class="nav nav-pills nav-stacked admin-menu first">
						<?php  if ( $_SESSION["username"]  == "boc") {
						 ?> 
						<li class="active"><a href="#" data-target-id="sgi">Sinobec Group Inc.</a></li>
						<?php } else {
						 ?> 
						<li class="active"><a href="#" data-target-id="sgi">Sinobec Group Inc.</a></li>
						<li><a href="#" data-target-id="srl">Sinobec Resources LLC</a></li>
						<li><a href="#" data-target-id="sbtb">Sinobectrading</br>Before amalgmation</a></li>
						<li><a href="#" data-target-id="sbtp">Sinobectrading</br>Post amalgmation</a></li>
						<li><a href="#" data-target-id="sim">Sinometal</a></li>
						<li><a href="#" data-target-id="cms">Canadian Metal Service</a></li>
						<li><a href="#" data-target-id="icb">Icon Best</a></li>
						<li><a href="#" data-target-id="603ci">6031820CanadINC</a></li>
						<li><a href="#" data-target-id="917ci">9179771CanadaINC</a></li>
						<li><a href="#" data-target-id="918ci">9184872CanadaINC</a></li>
						<li><a href="#" data-target-id="mmmi">Marquis Metal Material Inc</a></li>
						<li><a id="next1" class="next">Misc>></a></li> 

						<?php } ?>
						
					</ul>
					<ul class="nav nav-pills nav-stacked admin-menu second">
						<li class="active"><a href="#" data-target-id="bankfa">Bank Facilities</a></li>
						<li> 
							<section id="only-one" data-accordion-group>
							     <section data-accordion>
							          <li data-control> Insurance </li>
							          <div data-content>
							               <article data-accordion>
							                    <li class="seclv" data-control>Accounts_Receivable<br>Insurance</li>
							                    <div data-content>
							                         <li class="tirlv"><a href="#" data-target-id="atra">Atradius</a></li>
							                         <li class="tirlv"><a href="#" data-target-id="edc">EDC</a></li>
							                         <li class="tirlv"><a href="#" data-target-id="euler">Euler</a></li>
							                    </div>
							               </article>
							               <li  class="seclv"><a href="#" data-target-id="assetin">Asset Insurance</a></li>  
							               <li  class="seclv"><a href="#" data-target-id="carin">Car Insurance</a></li> 
							               <article data-accordion>
							                    <li class="seclv" data-control>Transportation<br>Insurance</li>
							                    <div data-content>
							                         <li class="tirlv"><a href="#" data-target-id="cna">CNA</a></li>
							                         <li class="tirlv"><a href="#" data-target-id="huat">HuaTai</a></li>
							                         <li class="tirlv"><a href="#" data-target-id="picc">PICC</a></li>
							                    </div>
							               </article>
							                
							          </div>
							     </section>
							</section>
						</li>

						<li><a href="#" data-target-id="ipit">Intellectual_Property<br>&Information_Technology</a></li>
						<li><a href="#" data-target-id="realp">Real_Property</a></li>
						<li><a href="#" data-target-id="vehe">Vehicles & Equipments</a></li>
						 
						<li><a id="next2" class="next">Go Back >></a></li>
					</ul>
				</div>
				
				<div class="col-md-9 well admin-content clearfix page" id="sgi">
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/CertificateofIncorporation.pdf" class="pdf">Certificate of Amendment</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/CertificateofIncorporation.pdf" class="pdf">Certificate of Incorporation</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/By-Laws.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/Declaration.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/Director.pdf" class="pdf">Director</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/MinutesAndResolution.pdf" class="pdf">Minutes & Resolution</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/notices.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/Securities.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/ShareCertificates.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/Shareholders.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinogroup/Transfers.pdf" class="pdf">Transfers</a>
					</div>
				</div>
				<?php  if ( $_SESSION["username"]  != "boc") {
					# code...
				 ?> 
				<div class="col-md-9 well admin-content clearfix" id="srl">
					<div class="col-md-4 col-xs-12"><li>
						<a href="../doc/llc/ElectronicArticlesOfOrganization.pdf" class="pdf">Electronic Articles Of Organization</a>
					</div> 
				</div>


				<!-- ============================= Added PART -->
				<div class="col-md-9 well admin-content clearfix" id="vehe">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Vehicles&Equipments/E-1_BMW_X5_Lease_Agreement.pdf" class="pdf">E-1_BMW_X5_Lease_Agreement </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Vehicles&Equipments/E-2_2015_Dodge_Grand_Caravan.pdf" class="pdf">E-2_2015_Dodge_Grand_Caravan </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Vehicles&Equipments/E-3_2012_Dodge_Journey.pdf" class="pdf">E-3_2012_Dodge_Journey </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Vehicles&Equipments/E-4_2015_Dodge_Grand_Caravan_(Toronto).pdf" class="pdf">E-4_2015_Dodge_Grand_Caravan_(Toronto) </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Vehicles&Equipments/E-5_2015_Ford_Super_DutyF-XLT_With_Flatdeck.pdf" class="pdf">E-5_2015_Ford_Super_DutyF-XLT_With_Flatdeck </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Vehicles&Equipments/E-6_Cadillac_Escalade_Lease_Agreement.pdf" class="pdf">E-6_Cadillac_Escalade_Lease_Agreement </a>
 					</div>
 				</div>

				<div class="col-md-9 well admin-content clearfix" id="realp">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4_9470_Henri-Bourassa_Chengdu-Sinobec.pdf" class="pdf">D-4 9470 Henri-Bourassa Chengdu Sinobec</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-1_9470_Henri_Bourassa,_Chengdu-Sinometal.pdf" class="pdf">D-4-1_9470_Henri_Bourassa,_Chengdu-Sinometal</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-2_#1305-100_Andre_Chengdu-Sinobec.pdf" class="pdf">D-4-2_#1305-100_Andre_Chengdu-Sinobec</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-3-1_#2802-80_Marine_Parade,_Chengdu-Sinobec.pdf" class="pdf">D-4-3-1_#2802-80_Marine_Parade,_Chengdu-Sinobec</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-3-2_#2802-80_Marine_Parade,_Chengdu-Sinometal.pdf" class="pdf">D-4-3-2_#2802-80_Marine_Parade,_Chengdu-Sinometal</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-5_4455_Rue_Cousens-Sinobec(20160901-20170630)-$45,000-old.pdf" class="pdf">D-4-5_4455_Rue_Cousens-Sinobec(20160901-20170630)-$45,000-old </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-5-1_3501-3503_Griffith_Lease_Agreement.pdf" class="pdf">D-5-1_3501-3503_Griffith_Lease_Agreement </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-5_4455_Rue_Cousens-Sinobec(20160901-20270630)-$45,000.pdf" class="pdf">D-4-5_4455_Rue_Cousens-Sinobec(20160901-20270630)-$45,000</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-4-6_Sub-lease_of_3505_Griffith_Montreal.pdf" class="pdf">D-4-6_Sub-lease_of_3505_Griffith_Montreal </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-5_3505_Griffith_Lease_Agreement.pdf" class="pdf">D-5_3505_Griffith_Lease_Agreement </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-5_9470_Henri-Bourassa_Lease_Agreement.pdf" class="pdf"> D-5_9470_Henri-Bourassa_Lease_Agreement</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-5-1_18_Killaloe.pdf" class="pdf">D-5-1_18_Killaloe </a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Real_Property/D-5-2_29_Killaloe.pdf" class="pdf">D-5-2_29_Killaloe</a>
 					</div>
 				</div>

				<div class="col-md-9 well admin-content clearfix" id="ipit">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Intellectual_Property&Information_Technology/Sinobec__Group_Inc_software.docx" class="pdf">Sinobec Group Inc software</a>
 					</div>
 				</div>

				<div class="col-md-9 well admin-content clearfix" id="picc">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Transportation_Insurance/PICC/2017 SIGNED(2017.09.11~2018.09.10).pdf" class="pdf">POLICY 2017_SIGNED</a>
 					</div>
 				</div>

				<div class="col-md-9 well admin-content clearfix" id="huat">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Transportation_Insurance/HuaTai/2017_SIGNED(2017.09.11~2018.09.10).pdf" class="pdf">POLICY 2017_SIGNED</a>
 					</div>
 				</div>
	
				<div class="col-md-9 well admin-content clearfix" id="cna">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Transportation_Insurance/CNA/POLICY_MARINE_CARGO_JULY_7,_2017-2018_TERM.pdf" class="pdf">POLICY MARINE CARGO JULY 7, 2017-2018 TERM</a>
 					</div>
 				</div>


				<div class="col-md-9 well admin-content clearfix" id="atra">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Atradius/362957_Amended_Policy_dd_28-06-2017.pdf" class="pdf">362957 Amended Policy</a>
 					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Atradius/362957_policy_Signed.pdf" class="pdf">362957 policy Signed</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Atradius/Atradius_Sino_Renewal__2017.pdf" class="pdf">Atradius Sino Renewal</a>
 					</div>
 				</div>




 				<div class="col-md-9 well admin-content clearfix" id="edc">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI__2017_policy.pdf" class="pdf">EDC-CMSCI 2017 policy</a>
 					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI_2017_Country_Schedule.pdf" class="pdf">EDC-CMSCI 2017 Country Schedule</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-CMSCI_2017_Coverage_Certificate.pdf" class="pdf">EDC-CMSCI 2017 Coverage Certificate</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-Sinometal_2017_Country_Schedule.pdf" class="pdf">EDC-Sinometal 2017 Country Schedule</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-Sinometal_2017_Coverage_Certificate.pdf" class="pdf">EDC-Sinometal 2017 Coverage Certificate</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/EDC/EDC-Sinometal_2017_policy.pdf" class="pdf">EDC-Sinometal 2017 policy</a>
 					</div>
 				</div>



				<div class="col-md-9 well admin-content clearfix" id="euler">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Euler/Euler_certificate_2018.pdf" class="pdf">Euler certificate_2018</a>
 					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Euler/Euler_Coverage_Summary_2018.pdf" class="pdf">Euler Coverage Summary 2018</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Euler/Euler_policy_2018.pdf" class="pdf">Euler policy 2018</a>
 					</div>
 				</div>


				<div class="col-md-9 well admin-content clearfix" id="assetin">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Asset_Insurance/Policy_-_6031820_Canada_inc.,_Sinobec_Trading_inc.,_ICON_Best_Shower-_Ja....pdf" class="pdf">Policy 6031820 Canada inc., Sinobec Trading inc., ICON Best Shower</a>
 					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Asset_Insurance/Policy_-_6031820_Canada_inc.,_Sinobec_Trading_inc.,_ICON_Best_Shower-_Ja..._(1).pdf" class="pdf">Policy 6031820 Canada inc., Sinobec Trading inc., ICON Best Shower(1)</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Asset_Insurance/Sinobec.Primaco_#209340.pdf" class="pdf">Sinobec Primaco#209340</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Asset_Insurance/Sinobec_Group_General_Liability_Insurance_Renewal.pdf" class="pdf">Sinobec Group General Liability Insurance Renewal</a>
 					</div>
 				</div>

 				<div class="col-md-9 well admin-content clearfix" id="carin">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Car_Insurance/Cardelac_insurance_2017-2018.pdf" class="pdf">Cardelac insurance 2017-2018</a>
 					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Car_Insurance/Montreal_Vehicle_insurance_2017-2018.pdf" class="pdf">Montreal Vehicle insurance 2017-2018</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Car_Insurance/Toronto_Truck_insurance_2017-2018.pdf" class="pdf">Toronto Truck insurance 2017-2018</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Insurance/Accounts_Receivable_Insurance/Car_Insurance/Toronto_Vehicle_insurance_2017-2018.pdf" class="pdf">Toronto Vehicle insurance 2017-2018</a>
 					</div>
 				</div>



































				
				<div class="col-md-9 well admin-content clearfix page2" id="bankfa">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-1_2017_facility_letter_(include_parent_company).pdf" class="pdf">B-1 2017 facility letter</a>
 					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-1-1_BDCloan_of_$35.5K_for_ISO_Certification_Mandat.pdf" class="pdf">B-1-1 _BDCloan of $35.5K for ISO Certification Mandat</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-1-2_BDC_loan_of_$75K_for_racking_and_forklift.pdf" class="pdf">B-1-2 BDC loan of $75K for racking & forklift</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-1-3_BDC_loan_of_$84K_for_forklift.pdf" class="pdf">B-1-3 BDC loan of $84K for forklift</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-1-4_BDC_loan_of_$130K_for_ERP.pdf" class="pdf">B-1-4 BDC loan of $130K for ERP</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-2_Loan_for_Montreal_Office_Building.pdf" class="pdf">B-2 Loan for Montreal Office Building</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-2-1_Loan_for_Montreal_9470_Henri_Bourassa_Offfice_Building.pdf" class="pdf">B-2-1 Loan for Montreal 9470 Henri Bourassa Offfice Building</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-2-2_Loan_for_Toronto_Office_Building.pdf" class="pdf">B-2-2 Loan for Toronto Office Building</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-2-3_EDC_Gurantee_for_Equipment_Purchase_in_Foreign_Countries_$400k.pdf" class="pdf">B-2-3 EDC Gurantee for Equipment Purchase in Foreign Countries $400k</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-2-4_EDC_Gurantee_for_Operation_Loan_$2.5M.pdf" class="pdf">B-2-4 EDC Gurantee for Operation Loan $2.5M</a>
 					</div>
 					<div class="col-md-4 col-xs-12">
 							<a href="../doc/misc/Bank_Facilities/B-2-5_EDC_Gurantee_for_Operation_Loan_$1M.pdf" class="pdf">B-2-5 EDC Gurantee for Operation Loan $1M</a>
 					</div>
				</div>


				<div class="col-md-9 well admin-content clearfix" id="sbtb">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/sinobectrading/Before_amalgmation/Certificates_Articles.pdf" class="pdf">Certificate and Articles</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/By_Laws.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Declarations.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Directors.pdf" class="pdf">Director</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Minutes_Resolutions.pdf" class="pdf">Minutes & Resolution</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Notices.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Securities.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Share_Certificates.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Shareholders.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Before_amalgmation/Transfers.pdf" class="pdf">Transfers</a>
					</div>
				</div>

				<div class="col-md-9 well admin-content clearfix" id="sbtp">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/sinobectrading/Post_amalgmation/Certificates_Articles.pdf" class="pdf">Certificate and Articles</a>
 					</div>
					 
					 
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Post_amalgmation/Directors.pdf" class="pdf">Director</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Post_amalgmation/Minutes_Resolutions.pdf" class="pdf">Minutes & Resolution</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Post_amalgmation/Notices.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Post_amalgmation/Securities.pdf" class="pdf">Securities</a>
					</div>
					 
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Post_amalgmation/Shareholders.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinobectrading/Post_amalgmation/Transfers.pdf" class="pdf">Transfers</a>
					</div>
				</div>

				<div class="col-md-9 well admin-content clearfix" id="sim">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/sinometal/Certificates_Articles.pdf" class="pdf">Certificate and Articles</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/By_Laws.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Declarations.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Directors.pdf" class="pdf">Directors</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Minutes_Resolutions.pdf" class="pdf">Minutes & Resolutions</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Notices.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Securities.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Share_Certificates.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Shareholders.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/sinometal/Transfers.pdf" class="pdf">Transfers</a>
					</div>
				</div>
				
				<div class="col-md-9 well admin-content clearfix page" id="cms">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/CanadianMetalService/Articles_Certificates.pdf" class="pdf">Articles & Certificates</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/By_Laws.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Declarations.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Directors.pdf" class="pdf">Directors</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Resolutions_Minutes.pdf" class="pdf">Minutes & Resolutions</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Notices.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Officers.pdf" class="pdf">Officers</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Securities.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/ShareCertificates.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/CanadianMetalService/Shareholders.pdf" class="pdf">Shareholders</a>
					</div>
				</div>

				<div class="col-md-9 well admin-content clearfix" id="icb">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/Iconbest/Articles_Certificates.pdf" class="pdf">Articles & Certificates</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/By-Laws.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Declarations.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Directors.pdf" class="pdf">Directors</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Officers.pdf" class="pdf">Officers</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Resolutions_Minutes.pdf" class="pdf">Resolutions & Minutes</a>
					</div>
					<!-- <div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Notices.pdf" class="pdf">Notices</a>
					</div> -->
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Securities.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/ShareCertificates.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Shareholders.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/Iconbest/Transfers.pdf" class="pdf">Transfers</a>
					</div>
				</div>


				<div class="col-md-9 well admin-content clearfix" id="603ci">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/6031820CanadINC/ca.pdf" class="pdf">Certificate and Articles</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/bl.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/Declarations.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/ListOfDirectors.pdf" class="pdf">List Of Directors</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/ListOfShareholders.pdf" class="pdf">List Of Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/mr.pdf" class="pdf">Minuted & Resolutions</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/noticeOfDirectors.pdf" class="pdf">Notice Of Directors</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/noticeOfRegisteredOfficeAddress.pdf" class="pdf">Notice Of Registered Office Address</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/registerOfTransfers.pdf" class="pdf">Register Of Transfers</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/sc.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/6031820CanadINC/SecuritiesRegister.pdf" class="pdf">Securities Register</a>
					</div>
				</div>


				<div class="col-md-9 well admin-content clearfix" id="917ci">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/9179771CanadaINC/ac.pdf" class="pdf">Certificate and Articles</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/bl.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/dec.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/dir.pdf" class="pdf">Director</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/rm.pdf" class="pdf">Minutes & Resolution</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/nt.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/off.pdf" class="pdf">Officers</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/sec.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/sc.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/sh.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9179771CanadaINC/trs.pdf" class="pdf">Transfers</a>
					</div>
				</div>


				<div class="col-md-9 well admin-content clearfix" id="918ci">
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/9184872CanadaINC/ac.pdf" class="pdf">Certificate and Articles</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/bl.pdf" class="pdf">By-Laws</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/dec.pdf" class="pdf">Declarations</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/dir.pdf" class="pdf">Director</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/rmin.pdf" class="pdf">Minutes & Resolution</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/nt.pdf" class="pdf">Notices</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/off.pdf" class="pdf">Officers</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/sec.pdf" class="pdf">Securities</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/sc.pdf" class="pdf">Share Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/sh.pdf" class="pdf">Shareholders</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/9184872CanadaINC/trs.pdf" class="pdf">Transfers</a>
					</div>
				</div>
				<div class="col-md-9 well admin-content clearfix" id="mmmi">
					<div class="col-md-4 col-xs-12">
						<a href="../doc/MarquisMetalMaterialInc/cover.pdf" class="pdf">Cover</a>
					</div>
					<div class="col-md-4 col-xs-12">
 							<a href="../doc/MarquisMetalMaterialInc/articlesOfIncorparation.pdf" class="pdf">Articles Of Incorparation</a>
 					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/MarquisMetalMaterialInc/bylaws.pdf" class="pdf">By Laws</a>
					</div>
					
					<div class="col-md-4 col-xs-12">
						<a href="../doc/MarquisMetalMaterialInc/forms_Irs_Documents.pdf" class="pdf">Forms Irs Documents</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/MarquisMetalMaterialInc/minutes.pdf" class="pdf">Minutes</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/MarquisMetalMaterialInc/stock_certificates.pdf" class="pdf">Stock Certificates</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="../doc/MarquisMetalMaterialInc/transfer_ledger.pdf" class="pdf">Transfer Ledger</a>
					</div>
				</div>






			</div>
		</div>
 		<?php 
 			}
   		} 
  		if (!isset($_SESSION["username"])) { ?>
 			<h3>You are not login, please click <a href="login.php">Login</a></h3>
 		<?php } ?>
 	</div>
</div>
<?php include_once 'footer.php'; ?>	
<script src="/023/js/jquery.accordion.js"></script>
 <script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<script>
$(document).ready(function(){
    var navItems = $('.admin-menu li > a:not(.next)');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});
</script>
<script>
$('.next').click(function(){
  	$('.first').fadeToggle(500);
  	$('.second').fadeToggle(500);
  	$('.page').fadeToggle(600);
  	$('.page2').fadeToggle(600);
}); 

(function(seconds) {
    var refresh,       
        intvrefresh = function() {
            clearInterval(refresh);
            refresh = setTimeout(function() {
               location.href = 'relogin.php';
            }, seconds * 1000);
        };

    $(document).on('keypress click mousemove mousedown', function() { intvrefresh() });
    intvrefresh();

}(1800));  

$(document).ready(function(){
  $('a.pdf').click(function(){
    window.open(this.href);
    return false;
  });
 
});
</script>
<script type="text/javascript">
$(document).ready(function() {
 $('#only-one [data-accordion]').accordion({
	transitionSpeed: 300,
	transitionEasing: 'ease',
	controlElement: '[data-control]',
	contentElement: '[data-content]',
	groupElement: '[data-accordion-group]'
	});
});
</script>
</body>
</html>