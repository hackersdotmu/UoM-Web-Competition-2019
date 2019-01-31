<?php
 session_start();
?>
<?php
$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

?>
  
<html lang="en" class=" canvas canvastext geolocation rgba hsla multiplebgs borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers no-applicationcache fontface"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mauritius Jobs</title>
<meta name="description" content="Mauritiusjobs is the no1 job portal in Mauritius where jobseekers can search for vacancies/jobs in Mauritius or abroad posted by registered employers.">
<link rel="icon" href="https://www.mauritiusjobs.mu/images/mauritius.ico" type="image/gif" sizes="16x16">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/reset.css">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/page.css?1548793034">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/menu.css?1548793034">
<script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="https://www.mauritiusjobs.mu/js/menu.js"></script><style>@font-face{font-family:testfont;src:url('data:font/ttf;base64,AAEAAAAMAIAAAwBAT1MvMliohmwAAADMAAAAVmNtYXCp5qrBAAABJAAAANhjdnQgACICiAAAAfwAAAAEZ2FzcP//AAMAAAIAAAAACGdseWYv5OZoAAACCAAAANxoZWFk69bnvwAAAuQAAAA2aGhlYQUJAt8AAAMcAAAAJGhtdHgGDgC4AAADQAAAABRsb2NhAIQAwgAAA1QAAAAMbWF4cABVANgAAANgAAAAIG5hbWUgXduAAAADgAAABPVwb3N03NkzmgAACHgAAAA4AAECBAEsAAUAAAKZAswAAACPApkCzAAAAesAMwEJAAACAAMDAAAAAAAAgAACbwAAAAoAAAAAAAAAAFBmRWQAAAAgqS8DM/8zAFwDMwDNAAAABQAAAAAAAAAAAAMAAAADAAAAHAABAAAAAABGAAMAAQAAAK4ABAAqAAAABgAEAAEAAgAuqQD//wAAAC6pAP///9ZXAwAAAAAAAAACAAAABgBoAAAAAAAvAAEAAAAAAAAAAAAAAAAAAAABAAIAAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAEACoAAAAGAAQAAQACAC6pAP//AAAALqkA////1lcDAAAAAAAAAAIAAAAiAogAAAAB//8AAgACACIAAAEyAqoAAwAHAC6xAQAvPLIHBADtMrEGBdw8sgMCAO0yALEDAC88sgUEAO0ysgcGAfw8sgECAO0yMxEhESczESMiARDuzMwCqv1WIgJmAAACAFUAAAIRAc0ADwAfAAATFRQWOwEyNj0BNCYrASIGARQGKwEiJj0BNDY7ATIWFX8aIvAiGhoi8CIaAZIoN/43KCg3/jcoAWD0JB4eJPQkHh7++EY2NkbVRjY2RgAAAAABAEH/+QCdAEEACQAANjQ2MzIWFAYjIkEeEA8fHw8QDxwWFhwWAAAAAQAAAAIAAIuYbWpfDzz1AAsEAAAAAADFn9IuAAAAAMWf0i797/8zA4gDMwAAAAgAAgAAAAAAAAABAAADM/8zAFwDx/3v/98DiAABAAAAAAAAAAAAAAAAAAAABQF2ACIAAAAAAVUAAAJmAFUA3QBBAAAAKgAqACoAWgBuAAEAAAAFAFAABwBUAAQAAgAAAAEAAQAAAEAALgADAAMAAAAQAMYAAQAAAAAAAACLAAAAAQAAAAAAAQAhAIsAAQAAAAAAAgAFAKwAAQAAAAAAAwBDALEAAQAAAAAABAAnAPQAAQAAAAAABQAKARsAAQAAAAAABgAmASUAAQAAAAAADgAaAUsAAwABBAkAAAEWAWUAAwABBAkAAQBCAnsAAwABBAkAAgAKAr0AAwABBAkAAwCGAscAAwABBAkABABOA00AAwABBAkABQAUA5sAAwABBAkABgBMA68AAwABBAkADgA0A/tDb3B5cmlnaHQgMjAwOSBieSBEYW5pZWwgSm9obnNvbi4gIFJlbGVhc2VkIHVuZGVyIHRoZSB0ZXJtcyBvZiB0aGUgT3BlbiBGb250IExpY2Vuc2UuIEtheWFoIExpIGdseXBocyBhcmUgcmVsZWFzZWQgdW5kZXIgdGhlIEdQTCB2ZXJzaW9uIDMuYmFlYzJhOTJiZmZlNTAzMiAtIHN1YnNldCBvZiBKdXJhTGlnaHRiYWVjMmE5MmJmZmU1MDMyIC0gc3Vic2V0IG9mIEZvbnRGb3JnZSAyLjAgOiBKdXJhIExpZ2h0IDogMjMtMS0yMDA5YmFlYzJhOTJiZmZlNTAzMiAtIHN1YnNldCBvZiBKdXJhIExpZ2h0VmVyc2lvbiAyIGJhZWMyYTkyYmZmZTUwMzIgLSBzdWJzZXQgb2YgSnVyYUxpZ2h0aHR0cDovL3NjcmlwdHMuc2lsLm9yZy9PRkwAQwBvAHAAeQByAGkAZwBoAHQAIAAyADAAMAA5ACAAYgB5ACAARABhAG4AaQBlAGwAIABKAG8AaABuAHMAbwBuAC4AIAAgAFIAZQBsAGUAYQBzAGUAZAAgAHUAbgBkAGUAcgAgAHQAaABlACAAdABlAHIAbQBzACAAbwBmACAAdABoAGUAIABPAHAAZQBuACAARgBvAG4AdAAgAEwAaQBjAGUAbgBzAGUALgAgAEsAYQB5AGEAaAAgAEwAaQAgAGcAbAB5AHAAaABzACAAYQByAGUAIAByAGUAbABlAGEAcwBlAGQAIAB1AG4AZABlAHIAIAB0AGgAZQAgAEcAUABMACAAdgBlAHIAcwBpAG8AbgAgADMALgBiAGEAZQBjADIAYQA5ADIAYgBmAGYAZQA1ADAAMwAyACAALQAgAHMAdQBiAHMAZQB0ACAAbwBmACAASgB1AHIAYQBMAGkAZwBoAHQAYgBhAGUAYwAyAGEAOQAyAGIAZgBmAGUANQAwADMAMgAgAC0AIABzAHUAYgBzAGUAdAAgAG8AZgAgAEYAbwBuAHQARgBvAHIAZwBlACAAMgAuADAAIAA6ACAASgB1AHIAYQAgAEwAaQBnAGgAdAAgADoAIAAyADMALQAxAC0AMgAwADAAOQBiAGEAZQBjADIAYQA5ADIAYgBmAGYAZQA1ADAAMwAyACAALQAgAHMAdQBiAHMAZQB0ACAAbwBmACAASgB1AHIAYQAgAEwAaQBnAGgAdABWAGUAcgBzAGkAbwBuACAAMgAgAGIAYQBlAGMAMgBhADkAMgBiAGYAZgBlADUAMAAzADIAIAAtACAAcwB1AGIAcwBlAHQAIABvAGYAIABKAHUAcgBhAEwAaQBnAGgAdABoAHQAdABwADoALwAvAHMAYwByAGkAcAB0AHMALgBzAGkAbAAuAG8AcgBnAC8ATwBGAEwAAAAAAgAAAAAAAP+BADMAAAAAAAAAAAAAAAAAAAAAAAAAAAAFAAAAAQACAQIAEQt6ZXJva2F5YWhsaQ==')}</style>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-50481647-1','mauritiusjobs.mu');ga('send','pageview');</script>
<script language="JavaScript" type="text/javascript">if(navigator.appName=='Microsoft Internet Explorer'){function NOclickIE(e){if(event.button==2||event.button==3){return false;}return true;}document.onmousedown=NOclickIE;document.onmouseup=NOclickIE;window.onmousedown=NOclickIE;window.onmouseup=NOclickIE;}
else{function NOclickNN(e){if(document.layers||document.getElementById&&!document.all){if(e.which==2||e.which==3){return false;}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=NOclickNN;}document.oncontextmenu=new Function("return false")}</script>
</head>
<body style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">
			<div id="header">
		<div id="banner">
			<script pagespeed_no_defer="" type="text/javascript">//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://www.mauritiusjobs.mu/jobseeker/registration/uploads','YddRYU7ik1',true,false,'f0TIAvnKumQ');
//]]></script><img src="https://www.mauritiusjobs.mu/images/mauritius_flag.gif" id="mauritius_flag" pagespeed_url_hash="2557509605" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<img src="https://www.mauritiusjobs.mu/images/govt.png" pagespeed_url_hash="2827431000" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<img src="https://www.mauritiusjobs.mu/images/jobs_logo.png" id="jobs_logo" pagespeed_url_hash="2679461340" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<br>Ministry of Labour, Industrial Relations, Employment and Training
		</div>
	<div class="menu">
		<nav id="topNav">
			<ul>
				<li class="first"><a href="https://www.mauritiusjobs.mu/" title="Home">Home</a></li>
				<li><a href="#" title="About Us">About Us<span>^</span></a>
					<ul>
						<li><a href="http://www.mauritiusjobs.mu/about/mlire" title="About MLIRE">Ministry of Labour, Industrial Relations, Employment and Training</a></li>
						<li><a href="http://www.mauritiusjobs.mu/about/iom" title="About IOM">International Organisation for Migration</a></li>
					</ul>
				</li>
				
				<li>					<a href="http://www.mauritiusjobs.mu/jobseeker" title="Jobseeker">Jobseeker</a>
									        
				</li>
				<li>
									<a href="http://www.mauritiusjobs.mu/employer" title="Employer">Employer</a>
													</li>
				<li><a href="https://www.mauritiusjobs.mu/jobsearch" title="Jobs Search">Jobs Search</a></li>
				<li class="last"><a href="http://www.mauritiusjobs.mu/contact" title="Contact us ">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</div>
<link rel="stylesheet" href="http://www.mauritiusjobs.mu/css/A.jobseeker.css.pagespeed.cf.u6fziZE49o.css">
	
	<div id="step-holder">
		<div class="step-no-off">1</div>
		<div class="step-light-left" title="Basic Information"><a href="../registration">Basic</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">2</div>
		<div class="step-light-left" title="Confidential Information"><a href="confidential">Confidential</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">3</div>
		<div class="step-light-left" title="Preferred Job Information"><a href="job">Job</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">4</div>
		<div class="step-light-left" title="Academic Qualification"><a href="academic">Academic</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">5</div>
		<div class="step-light-left" title="Work Experience"><a href="professional">Experience</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no">6</div>
		<div class="step-dark-left" title="Document Uploads">Uploads</div>
		<div class="step-dark-right">&nbsp;</div>
		
		<div class="step-no-off">7</div>
		<div class="step-light-left" title="Jobseeker Agreement">Agreement</div>
		<div class="step-light-round">&nbsp;</div>
		<div class="clear"></div>
	</div>

	<table class="jobseeker_registration">
	<form id="registration" method="POST" action="insert.php">

	<tbody><tr><td colspan="4">UPLOAD DOCUMENTS IF YOU WISH
	<br>(eg. CV, scanned ID card morality certificate)</td></tr>
	CV: <br/>
	<input type="file" name="CV" id="CV"><br/><br/><br/>
	Covering letter: <br/>
	<input type="file" name="covering_letter" id="covering_letter"><br/><br/><br/>
	ID card: <br/>
	<input type="file" name="scanned_id_card" id="scanned_id_card"><br/><br/><br/>
	Morality certificate: <br/>
	<input type="file" name="morality_certificate" id="morality_certificate"><br/><br/><br/>
		
	
	<script language="javascript">$("#doc1").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc1");$('#upload1').val(input.value);return true;}else{alert("File too large");$('#upload1').val('');return false;}});$("#doc2").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc2");$('#upload2').val(input.value);return true;}else{alert("File too large");$('#upload2').val('');return false;}});$("#doc3").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc3");$('#upload3').val(input.value);return true;}else{alert("File too large");$('#upload3').val('');return false;}});$("#doc4").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc4");$('#upload4').val(input.value);return true;}else{alert("File too large");$('#upload4').val('');return false;}});$("#doc5").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc5");$('#upload5').val(input.value);return true;}else{alert("File too large");$('#upload5').val('');return false;}});$("#doc6").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc6");$('#upload6').val(input.value);return true;}else{alert("File too large");$('#upload6').val('');return false;}});$("#doc7").change(function(){var totalBytes=this.files[0].size;var _size=Math.floor(totalBytes/1000);if(_size<1500){var input=document.getElementById("doc7");$('#upload7').val(input.value);return true;}else{alert("File too large");$('#upload7').val('');return false;}});</script>
	
	<tr><td colspan="4"><div class="more_info"><span class="note">Note: </span>
	The formats to be used are : .docx, .docxx, .doc, .pdf, .txt, .jpg, .png, .gif, .bmp, .jpeg, .xls and .xslx.
	Each document should not exceed 2MB<br>
	To upload your document, please follow the steps below:
	<ul class="circle">
		<li>Click on the Browse button, select the file you are uploading, and click on Open. The file name should appear in the textbox.</li>
		<li>Click on the green Upload button to start the upload process</li>
	</ul>
	</div></td></tr>
	
	<tr><td colspan="4" align="center">
	<input type="button" value="Back" onclick="window.location.href='professional'" class="submit-btn" title="Back">
	<input type="submit" value="I agree" class="submit-btn" name="agreement" title="Continue"></td></tr>
	</tbody></table>
</form></div>

<!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>

<div id="footer">
	<div id="links">
		<a href="http://www.mauritiusjobs.mu/feedback" title="Feedback Form">Feedback Form</a>
		<a href="http://www.mauritiusjobs.mu/website_map" title="Website Map">Website Map</a>
		<a href="http://www.mauritiusjobs.mu/eic_locations" title="EIC Location">EIC Location</a>
		<a href="http://www.mauritiusjobs.mu/faq" title="FAQ">FAQ</a>
		<a href="http://www.mauritiusjobs.mu/legislations" title="Legislations">Legislations</a>
		<a href="http://www.mauritiusjobs.mu/downloads" title="Downloads">Downloads</a>
		<a href="http://www.mauritiusjobs.mu/publications" title="Publications">Publications</a>
		<a href="http://www.mauritiusjobs.mu/statistics" title="Statistics">Statistics</a>
		<a href="http://www.mauritiusjobs.mu/links" title="Links">Links</a>
		<a href="http://www.mauritiusjobs.mu/tips" title="Tips">Tips</a>
	</div>
	<div id="logo">
		<div class="european_logo">
			<a href="http://www.eeas.europa.eu/delegations/mauritius/index_en.htm" target="blank"><img src="https://www.mauritiusjobs.mu/images/european.gif" width="75" height="50" title="European Union" pagespeed_url_hash="3480823204" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><br>
			This project is co-funded by the European Union
		</div>
		<div class="italian_logo">
			<a href="http://www.lavoro.gov.it" target="blank"><img src="https://www.mauritiusjobs.mu/images/italiana.png" width="65" height="55" title="Ministero Del Lavoro e Delle Politiche Sociali" pagespeed_url_hash="1380425307" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><br>
			Ministero Del Lavoro e Delle Politiche Sociali
		</div>
		<div class="iom_logo">
			<a href="http://www.iom.int" target="blank"><img src="https://www.mauritiusjobs.mu/images/iom-logo.png" width="56" height="55" title="International Organisation for Migration" pagespeed_url_hash="1879559771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><br>
			International Organisation for Migration (IOM)
		</div>
	</div>
	<div id="copyright">
		© Copyright Mauritius Jobs. 2019. All rights reserved.
	</div>
	<span id="developed_by_reefcube">Designed &amp; Developed by <a href="http://www.reefcube.mu" target="_blank">Reefcube Ltd</a></span>
	<span id="ssl"><img src="https://www.mauritiusjobs.mu/images/ssl.png" width="20" pagespeed_url_hash="3229039404" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span class="ssl_txt">SSL Certified</span></span>
	<span id="browser">
		<span id="browser_txt">Compatible on latest </span>
		<img src="https://www.mauritiusjobs.mu/images/chrome.ico" width="20" style="width: 21px;position: relative;margin-top: 0px;height: 23px;top: 2px;" title="Google Chrome" pagespeed_url_hash="89730296" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
		<img src="https://www.mauritiusjobs.mu/images/firefox.ico" width="20" title="Mozilla Firefox" pagespeed_url_hash="139850137" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 
		<img src="https://www.mauritiusjobs.mu/images/safari.ico" width="20" title="Safari" pagespeed_url_hash="1217210338" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
	</span>
</div>


</body>