<?php
 session_start();
?>
<?php
$Email=$Hashed_password=$Past_background=$Disability=$Passport_num=$Passport_exp_date=$Languages=$Preferred_job_occupation=$Preferred_economic_sector=$Driving_license=$CPE_result=$CPE_year=$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Student Job Portal</title>
<meta name="description" content="Student Job Portal is the no1 job portal in Mauritius where jobseekers can search for vacancies/jobs in Mauritius or abroad posted by registered employers.">

<link media="all" rel="stylesheet" type="text/css" href="css/reset.css"/>
<link media="all" rel="stylesheet" type="text/css" href="css/page1d75.css?1548684256"/>
<link media="all" rel="stylesheet" type="text/css" href="css/menu1d75.css?1548684256"/>
<script src="../code.jquery.com/jquery-1.9.1.js"></script>
<script src="../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../www.google-analytics.com/analytics.js','ga');ga('create','UA-50481647-1','');ga('send','pageview');</script>
<!-- <script language="JavaScript" type="text/javascript">if(navigator.appName=='Microsoft Internet Explorer'){function NOclickIE(e){if(event.button==2||event.button==3){return false;}return true;}document.onmousedown=NOclickIE;document.onmouseup=NOclickIE;window.onmousedown=NOclickIE;window.onmouseup=NOclickIE;} -->
</head>
<body>
<div id="header">
		<div id="banner">
			<<!-- img src="images/mauritius_flag.gif" id="mauritius_flag">
			<img src="images/govt.png">
			<img src="images/jobs_logo.png" id="jobs_logo"> -->
			<br>PLACEMENTS/JOBS IN MAURITIUS BY INDUSTRY SECTOR  
		</div>
	<div class="menu">
		<nav id="topNav">
			<ul>
				<li class="first"><a href="index.php" title="Home">Home</a></li>
				<li><a href="about/iom.html" title="About Us">About Us</a>
					  
				</li>
				
				<li>					<a href="jobseeker.php" title="Jobseeker">Jobseeker</a>
									        
				</li>
				<li>
									<a href="employer.html" title="Employer">Employer</a>
													</li>
				<li><a href="jobsearch.html" title="Jobs Search">Jobs Search</a></li>
				<li class="last"><a href="contact.html" title="Contact us ">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</div>
<header>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	
	<script>$(function(){$("#datepicker").datepicker({minDate:" +1D",maxDate:"+10Y",changeMonth:"true",changeYear:"true"});$("#datepicker").datepicker("option","dateFormat","yy-mm-dd");$("#datepicker").datepicker("option","showAnim","drop");$(".close-red").click(function(){$("#message-red").fadeOut("slow");});});</script>
</header>


	
		<div class="step-no-off">1</div>
		<div class="step-light-left" title="Basic Information"><a href="../registration">Basic</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no">2</div>
		<div class="step-dark-left" title="Confidential Information">Confidential</div>
		<div class="step-dark-right">&nbsp;</div>
		
		<div class="step-no-off">3</div>
		<div class="step-light-left" title="Preferred Job Information">Job</div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">4</div>
		<div class="step-light-left" title="Academic Qualification">Academic</div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">5</div>
		<div class="step-light-left" title="Work Experience">Experience</div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">6</div>
		<div class="step-light-left" title="Document Uploads">Uploads</div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">7</div>
		<div class="step-light-left" title="Jobseeker Agreement">Agreement</div>
		<div class="step-light-round">&nbsp;</div>
		<div class="clear"></div>
       </div>

	<table class="jobseeker_registration">
	
	<form id="registration" method="POST" action="job.php">

	<table class="jobseeker_registration">
	<tbody><tr>
	<td width="175"><label>Email</label> <span class="compulsory">*</span></td><td width="300"><input type="text" id="Email" name="jobseeker_email" value="" class="input-box" placeholder="Email Address">
			</td>
	<td width="350"><font color="red"><b><i>Your email address will be your username</i></b></font></td>

	<tr><td colspan="3" class="more_info"><span class="note">Note:</span> Please use a valid e-mail address in order to register. Otherwise you will not be able to login due to the e-mail validation process.</td></tr>
	<tr><td colspan="3"><hr class="more-info"></td></tr>
	<tr><td><label>Password</label> <span class="compulsory">*</span></td><td><input type="password" name="jobseeker_pass" id="Hashed_password" class="input-box" value="" placeholder="Password" aria-autocomplete="list"></td>
		
	<tr><td colspan="2" class="more_info"><span class="note">Note:</span> Provide a new password for this account</td></tr>
	<tr><td colspan="3"><hr class="more-info"></td></tr>
	
	<tr><td colspan="3"><label>Have you ever been arrested, fined, or convicted of an offense ? </label> <span class="compulsory">* </span>
	&nbsp;&nbsp;
	<label> Yes </label><input type="radio" name="jobseeker_morality" id="Past_background" value="1">
	
	<label> No </label><input type="radio" name="jobseeker_morality" id="Past_background" value="0" checked="">
	
	</td>
		</tr>
	
	<tr><td><label>Do you have any Disability ?</label></td>
	<td>
		<select name="jobseeker_disability" id="Disability" class="select-box">
			<option value="0">No</option>
							<option value="1">ABNORMAL MOVEMENT OF BODY PARTS</option>
							<option value="2">ALBINO</option>
							<option value="3">BLIND</option>
							<option value="4">CRIPPLED</option>
							<option value="5">DEAF</option>
							<option value="6">DEAF AND DUMB</option>
							<option value="7">DEFORMATION OF BODY PARTS SINCE BIRTH (eg. 1 arm or fingers missing etc.)</option>
							<option value="8">DISABLED THROUGH SURGICAL OPERATION OR ILLNESS</option>
							<option value="9">DISABLED: EYES, LEGS, ETC , DUE TO ACCIDENTS, ETC</option>
							<option value="10">DUMB</option>
							<option value="11">DWARF</option>
							<option value="12">EPILEPTIC</option>
							<option value="13">LAME</option>
							<option value="14">MENTAL ILLNESS</option>
							<option value="15">MENTALLY RETARDED</option>
							<option value="16">PARTLY BLIND</option>
							<option value="17">PARTLY DEAF</option>
							<option value="18">POLIO</option>
							<option value="19">STAMMER</option>
					</select>
	</td>
		</tr>

	<tr><td colspan="3"><hr class="more-info"></td></tr>
	<tr><td><label>Passport Holder Number</label></td><td><input type="text" name="jobseeker_passport" id="Passport_num"class="input-box" value="" placeholder="Applicable for International"></td>
		</tr>
	
	<tr><td><label>Passport Expiration Date</label></td><td><input type="date" id="datepicker" id="Passport_exp_date" name="jobseeker_expiry_date" class="input-box hasDatepicker" value="" placeholder="Passport Expiration Date"></td>
		</tr>
	
	<tr><td><label>Language Most Fluent</label> <span class="compulsory">*</span></td><td><select name="jobseeker_lang1"  id="Languages" class="select-box"><option value="0">Please select language</option>
			<option value="1">Arabic</option>
			<option value="2">Chinese</option>
			<option value="14">Creole</option>
			<option value="3">English</option>
			<option value="4">French</option>
			<option value="5">German</option>
			<option value="6">Hindi</option>
			<option value="7">Italian</option>
			<option value="8">Mandarin</option>
			<option value="9">Marathi</option>
			<option value="10">Spanish</option>
			<option value="11">Tamil</option>
			<option value="12">Telugu</option>
			<option value="13">Urdu</option>
		</select></td>
		</tr>
	

	
	<tr><td colspan="3" id="compulsory">Compulsory fields are marked with ( <span class="compulsory">*</span> )</td></tr>
	
	<tr><td colspan="3" align="center">
		<input type="button" value="Back" onclick="window.location.href='../registration'" class="submit-btn" title="Back">
		<input type="submit" value="Continue" class="submit-btn" name="basic_info" title="Continue"></td></tr>
	</tbody></table>
	</form></div>

<!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>

<div id="footer" style="height: 0%";>
	<div id="links">
		<a href="feedback.html" title="Feedback Form">Feedback Form</a>
		<a href="website_map.html" title="Website Map">Website Map</a>
		<a href="eic_locations.html" title="EIC Location">EIC Location</a>
		<a href="faq.html" title="FAQ">FAQ</a>
		<a href="legislations.html" title="Legislations">Legislations</a>
		<a href="downloads.html" title="Downloads">Downloads</a>
		<a href="publications.html" title="Publications">Publications</a>
		<a href="statistics.html" title="Statistics">Statistics</a>
		<a href="links.html" title="Links">Links</a>
		<a href="tips.html" title="Tips">Tips</a>
	</div>
	
	<div id="copyright">
		&copy; Copyright Student Job Portal. 2019. All rights reserved.
	</div>
	  
	<span id="browser">
		<span id="browser_txt">Compatible on latest </span>
		<img src="images/chrome.ico" width="20" style="width: 21px;position: relative;margin-top: 0px;height: 23px;top: 2px;" title="Google Chrome">
		<img src="images/firefox.ico" width="20" title="Mozilla Firefox"> 
		<img src="images/safari.ico" width="20" title="Safari">
	</span>
</div>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><select class="ui-datepicker-month" data-handler="selectMonth" data-event="change"><option value="0" selected="selected">Jan</option><option value="1">Feb</option><option value="2">Mar</option><option value="3">Apr</option><option value="4">May</option><option value="5">Jun</option><option value="6">Jul</option><option value="7">Aug</option><option value="8">Sep</option><option value="9">Oct</option><option value="10">Nov</option><option value="11">Dec</option></select><select class="ui-datepicker-year" data-handler="selectYear" data-event="change"><option value="2019" selected="selected">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">24</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">27</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">28</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">29</span></td><td class=" ui-datepicker-unselectable ui-state-disabled  ui-datepicker-today"><span class="ui-state-default">30</span></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default ui-state-active ui-state-hover" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></body><div class="abineContentPanel" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent !important; margin: 0px !important; padding: 0px !important; display: none; opacity: 1 !important; z-index: 2147483647 !important; position: absolute !important; top: 20px !important; right: 20px !important; overflow: hidden !important; border-width: 0px !important; visibility: visible !important;"><iframe class="abineContentFrame" width="310px" allowtransparency="true" frameborder="0" height="0px" scrolling="no" src="chrome-extension://caljgklbbfbcjjanaijlacgncafpegll/html/inlineForm.html?abine79838295doNotRemove" id="abine79838295doNotRemove" style="display:block !important;position:relative !important;background:transparent !important;border-width:0px !important;left:0px !important;top:0px !important;visibility:visible !important;opacity:1 !important;filter:alpha(opacity:100) !important;margin:0 !important;padding:0 !important;height:0px !important;width:310px"></iframe></div></html>