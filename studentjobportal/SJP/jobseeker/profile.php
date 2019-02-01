<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Student Job Portal</title>
<meta name="description" content="Student Job Portal is the no1 job portal in Mauritius where jobseekers can search for vacancies/jobs in Mauritius or abroad posted by registered employers.">

<link media="all" rel="stylesheet" type="text/css" href="https://www.mauuritiusjobs.mu.mu/css/reset.css"/>
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauuritiusjobs.mu.mu/css/page.css?1548829026"/>
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauuritiusjobs.mu.mu/css/menu.css?1548829026"/>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="https://www.mauuritiusjobs.mu.mu/js/menu.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-50481647-1','mauuritiusjobs.mu.mu');ga('send','pageview');</script>
<script language="JavaScript" type="text/javascript">if(navigator.appName=='Microsoft Internet Explorer'){function NOclickIE(e){if(event.button==2||event.button==3){return false;}return true;}document.onmousedown=NOclickIE;document.onmouseup=NOclickIE;window.onmousedown=NOclickIE;window.onmouseup=NOclickIE;}
else{function NOclickNN(e){if(document.layers||document.getElementById&&!document.all){if(e.which==2||e.which==3){return false;}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=NOclickNN;}document.oncontextmenu=new Function("return false")}</script>
 	</head>
<body style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">
				<?php 
			 if (isset($_SESSION['email'])){
			  echo '"YOU ARE LOGGED IN"';
				echo '<div id="user_menu">
			You are logged in
			<a href="../logOut.php" class="logout" title="Sign Out">Log Out</a>
		</div>';
	}
		?>
		<div id="user_top"></div>
		<div id="header">
		<div id="banner">
			
		</div>
	<div class="menu">
		<nav id="topNav">
			<ul>
				<li class="first"><a href="../index.php" title="Home">Home</a></li>
				<li><a href="../about/iom.html" title="About Us">About Us</a>
					<!-- <ul>
						<li><a href="http://www.mauuritiusjobs.mu.mu/about/mlire" title="About MLIRE">Ministry of Labour, Industrial Relations, Employment and Training</a></li>
						<li><a href="http://www.mauuritiusjobs.mu.mu/about/iom" title="About IOM">International Organisation for Migration</a></li>
					</ul> -->
				</li>
				
				<li>					<a href="jobseeker/profile.php" title="Jobseeker Profile">Jobseeker</a>
														<!-- <ul>
						<li><a href="https://www.mauuritiusjobs.mu.mu/jobseeker/edit/profile" title="Edit Profile">Edit Profile</a></li>
						<li><a href="https://www.mauuritiusjobs.mu.mu/jobseeker/documents" title="Upload CV and other documents">Upload CV and other documents</a></li>
						<li><a href="https://www.mauuritiusjobs.mu.mu/jobseeker/application_status" title="View status of my applications">View status of my applications</a></li>
						<li><a href="https://www.mauuritiusjobs.mu.mu/jobsearch" title="Jobs Search">Jobs Search</a></li>
												<li><a href="http://www.mauuritiusjobs.mu.mu/jobseeker/faqs" title="FAQs">FAQs</a></li>
						<li><a href="http://www.mauuritiusjobs.mu.mu/tips" title="Tips">Tips</a></li>
						<li class="unsubscribe"><a href="http://www.mauuritiusjobs.mu.mu/jobseeker/unsubscribe" title="Unsubscribe">Unsubscribe</a></li>
					</ul> -->
					        
				</li>
				<li>
									<a href="employer.hmtl" title="Employer">Employer</a>
													</li>
				<li><a href="jobsearch.html" title="Jobs Search">Jobs Search</a></li>
				<li class="last"><a href="contact.html" title="Contact us ">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</div>
<link media="all" rel="stylesheet" type="text/css" href="css/jobseeker.css"/>
	
<div class="main-content">
		<h1>Jobseeker Profile</h1>
		
	<table class="myprofile">
		<tr><td><input type="button" value="EDIT PROFILE" class="prof-btn" id="edit_profile" title="EDIT PROFILE"></td></tr>
		<tr><td><input type="button" value="UPLOAD CV AND OTHER DOCUMENTS" class="prof-btn" id="uploads" title="UPLOAD CV AND OTHER DOCUMENTS"></td></tr>
		<tr><td><input type="button" value="VIEW STATUS OF MY APPLICATIONS" class="prof-btn" id="application_status" title="VIEW STATUS OF MY APPLICATIONS"></td></tr>
		<tr><td><input type="button" value="JOB SEARCH" class="prof-btn" id="job_search" title="JOB SEARCH"></td></tr>
				<tr><td><input type="button" value="FAQs" class="prof-btn" id="faqs" title="FAQs"></td></tr>
		<tr><td><input type="button" value="TIPS" class="prof-btn" id="tips" title="Tips"></td></tr>
		<tr><td><input type="button" value="UNSUBSCRIBE" class="prof-red-btn" id="unsubscribe" title="UNSUBSCRIBE"></td></tr>
	</table>
		
<script language="javascript">document.getElementById('application_status').onclick=function()
{window.location.href='jobseeker/application_status';}
document.getElementById('edit_profile').onclick=function()
{window.location.href='/jobseeker/edit/profile';}
document.getElementById('uploads').onclick=function()
{window.location.href='jobseeker/documents';}
document.getElementById('job_search').onclick=function()
{window.location.href='../jobsearch.html';}
document.getElementById('faqs').onclick=function()
{window.location.href='jobseeker/faqs';}
document.getElementById('unsubscribe').onclick=function()
{window.location.href='jobseeker/unsubscribe';}
document.getElementById('tips').onclick=function()
{window.location.href='/tips.html';}</script>

</div>
<!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>

<div id="footer">
	<div id="links">
		<a href="#" title="Feedback Form">Feedback Form</a>
		<a href="#" title="Website Map">Website Map</a>
		<a href="#" title="EIC Location">EIC Location</a>
		<a href="#" title="FAQ">FAQ</a>
		<a href="#" title="Legislations">Legislations</a>
		<a href="#" title="Downloads">Downloads</a>
		<a href="#" title="Publications">Publications</a>
		<a href="#" title="Statistics">Statistics</a>
		<a href="#" title="Links">Links</a>
		<a href="#" title="Tips">Tips</a>
	</div>
	
	<div id="copyright">
		&copy; Copyright mauuritiusjobs.mu. 2019. All rights reserved.
	</div>
	
	<span id="browser">
		<span id="browser_txt">Compatible on latest </span>
		<img src="https://www.mauritiusjobs.mu/images/chrome.ico" width="20" style="width: 21px;position: relative;margin-top: 0px;height: 23px;top: 2px;" title="Google Chrome">
		<img src="https://www.mauritiusjobs.mu/images/firefox.ico" width="20" title="Mozilla Firefox"> 
		<img src="https://www.mauritiusjobs.mu/images/safari.ico" width="20" title="Safari">
	</span>
</div>

</body>
</html>
