<?php
 session_start();
?>
<?php
$Preferred_job_occupation=$Preferred_economic_sector=$Driving_license=$CPE_result=$CPE_year=$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

?>
<html lang="en" class=" canvas canvastext geolocation rgba hsla multiplebgs borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers no-applicationcache fontface"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mauritius Jobs</title>
<meta name="description" content="Mauritiusjobs is the no1 job portal in Mauritius where jobseekers can search for vacancies/jobs in Mauritius or abroad posted by registered employers.">
<link rel="icon" href="https://www.mauritiusjobs.mu/images/mauritius.ico" type="image/gif" sizes="16x16">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/reset.css">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/page.css?1548792828">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/menu.css?1548792828">
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
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://www.mauritiusjobs.mu/jobseeker/registration/job','YddRYU7ik1',true,false,'zystXgw71Lc');
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
					<ul style="display: none;">
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
<link rel="stylesheet" href="http://www.mauritiusjobs.mu/css/A.jobseeker.css+dropdown.css,Mcc.G5q1PHdwFs.css.pagespeed.cf.UozS1iMcpJ.css">

<script src="http://www.mauritiusjobs.mu/js/dropdown.js.pagespeed.jm.HbulUHWegE.js"></script>

	
		<div class="step-no-off">1</div>
		<div class="step-light-left" title="Basic Information"><a href="../registration">Basic</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">2</div>
		<div class="step-light-left" title="Confidential Information"><a href="confidential">Confidential</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no">3</div>
		<div class="step-dark-left" title="Preferred Job Information">Job</div>
		<div class="step-dark-right">&nbsp;</div>
		
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

	<table class="jobseeker_job">
	<form id="registration" method="POST" action="academic.php">
	<tbody><tr>
	<td width="250"><label>Preferred Job Occupation</label> <span class="compulsory">*</span></td>
	<td width="325">
		<select name="jobseeker_job_occupation_1" id="Preferred_job_occupation" class="select-box-occupation">
			<option value="">Please select your preferred job occupation</option>
							<option value="657">3D Animation Artist</option>
							<option value="744">Academic Coordinator</option>
							<option value="1">Accountant</option>
							<option value="226">Accounting &amp; Fund Administrator</option>
							<option value="2">Accounting Technician</option>
							<option value="188">Accounting/Finance Manager</option>
							<option value="3">Accounts clerk</option>
							<option value="595">Accounts Clerk Trainee</option>
							<option value="776">Accounts Preparation Analyst</option>
							<option value="777">Accounts Preparation Team Lead</option>
							<option value="241">Acquisition Editor</option>
							<option value="363">Acrylic Bender Operator</option>
							<option value="4">Actuarial Clerk</option>
							<option value="5">Actuary</option>
							<option value="686">Acupuncture Therapist</option>
							<option value="6">Administration Assistant</option>
							<option value="7">Administration Manager</option>
							<option value="9">Administration Supervisor</option>
							<option value="236">Administrative and HR Executive</option>
							<option value="474">Administrative Associate</option>
							<option value="8">Administrative Secretary</option>
							<option value="237">Admissions, Examinations and Student Affairs Executive</option>
							<option value="10">Advertisement Clerk</option>
							<option value="11">Advertising Manager</option>
							<option value="12">Agent de Service Client</option>
							<option value="437">Agri/Fishing-Tourism Entrepreneur-Placement &amp; Training</option>
							<option value="614">Agronomy Technician, Bio Farming</option>
							<option value="258">Air Conditioner Installer</option>
							<option value="665">Air Conditioning &amp; Refrigeration Technician</option>
							<option value="668">Airport Operative</option>
							<option value="13">Alarm Security Technician</option>
							<option value="752">Aluminium Assembler</option>
							<option value="14">Aluminium Fabricator</option>
							<option value="514">Animal Carer</option>
							<option value="15">Animateur de Chat - Short Message Services (SMS)</option>
							<option value="16">Animateur, Hotel</option>
							<option value="17">Animateur, Sports Nautiques</option>
							<option value="831">Animation Supervisor</option>
							<option value="468">Application Support Analyst</option>
							<option value="736">Apprentice Baker </option>
							<option value="404">Aquaculture Farmer-Placement &amp; Training</option>
							<option value="18">Architectural Draughtsperson</option>
							<option value="19">Assembler, Aluminium Products</option>
							<option value="20">Assembler, Computer</option>
							<option value="22">Assembler, Electrical and Electronic Equipment</option>
							<option value="21">Assembler, Electrical Machinery</option>
							<option value="844">Assembler, Ophthalmological Products</option>
							<option value="23">Assembler, Solar Water Heater</option>
							<option value="24">Assembler, Watch  and  Clock</option>
							<option value="393">Assembly Worker</option>
							<option value="264">Asset and Fleet Officer</option>
							<option value="25">Assistant Accountant</option>
							<option value="354">Assistant Accountant</option>
							<option value="315">Assistant Bar Manager</option>
							<option value="344">Assistant Business Manager</option>
							<option value="331">Assistant Chief Engineer</option>
							<option value="765">Assistant Cook</option>
							<option value="349">Assistant Equipment Manager</option>
							<option value="761">Assistant Human Resource Coordinator</option>
							<option value="351">Assistant Materials Manager</option>
							<option value="319">Assistant Pastry Chef</option>
							<option value="538">Assistant Production Manager</option>
							<option value="478">Assistant Service Delivery Manager</option>
							<option value="600">Assistant Spa Manager</option>
							<option value="624">Assistant Supervisor, Sewing Machine Operations</option>
							<option value="469">Associate Systems Implementer</option>
							<option value="564">Audiologist</option>
							<option value="773">Audit Analyst</option>
							<option value="26">Audit Clerk</option>
							<option value="775">Audit Manager</option>
							<option value="774">Audit Senior</option>
							<option value="27">Auditor</option>
							<option value="669">Autobody Panel Beater/ Spray Painter</option>
							<option value="284">Autocad Operator</option>
							<option value="623">Autocutter Operator, Garment Cutting</option>
							<option value="840">Automobile Mechanic, Diesel</option>
							<option value="28">Automobile Mechanic, Petrol and Diesel</option>
							<option value="707">Automobile Paint Mixer</option>
							<option value="435">Automobile Painter</option>
							<option value="708">Automobile Panel Beater</option>
							<option value="845">Automotive Paint Colour Matcher</option>
							<option value="910">Automotive Radiator Repairer</option>
							<option value="641">Awning Operator</option>
							<option value="337">Ayurvedic Therapist</option>
							<option value="29">Baby Sitter</option>
							<option value="176">Baker</option>
							<option value="619">Bakery Operator</option>
							<option value="644">Band Knife Operator</option>
							<option value="30">Bar Bender/Ferrailleur</option>
							<option value="31">Bar Manager</option>
							<option value="32">Bar Supervisor</option>
							<option value="33">Bar Waiter/Bar Waitress</option>
							<option value="923">Barbeque Tandoor Operator</option>
							<option value="34">Barman/Barmaid</option>
							<option value="170">Beach Attendant</option>
							<option value="35">Beauty Therapist</option>
							<option value="328">Bell Boy</option>
							<option value="397">Bike Rider-Advertising</option>
							<option value="526">Billboard Fixer</option>
							<option value="881">Biomedical Technician</option>
							<option value="531">Blacksmith</option>
							<option value="913">Blade Operator</option>
							<option value="660">Blinds Maker</option>
							<option value="36">Boat Driver/Skipper</option>
							<option value="37">Boathouse Manager</option>
							<option value="136">Bobcat Driver</option>
							<option value="793">Body and Paint Manager</option>
							<option value="296">Boiler Operator</option>
							<option value="683">Boilermaker</option>
							<option value="240">Book Editor</option>
							<option value="38">Bookbinder, Hand</option>
							<option value="873">Bosun (Deck Master)</option>
							<option value="39">Bread Maker</option>
							<option value="806">Briyani Cook/Operator</option>
							<option value="187">Budget Officer</option>
							<option value="40">Building Construction Labourer/Mason Helper</option>
							<option value="41">Building Electrician</option>
							<option value="638">Building Inspector</option>
							<option value="42">Building Maintenance Handyman</option>
							<option value="43">Building Painter</option>
							<option value="281">Bull Handler</option>
							<option value="44">Bulldozer Operator</option>
							<option value="45">Bus Conductor/Bus Receiver</option>
							<option value="214">Business Analyst</option>
							<option value="693">Business Development and Project-Lead</option>
							<option value="362">Business Development Officer</option>
							<option value="343">Business Manager</option>
							<option value="46">Butcher</option>
							<option value="325">Butler</option>
							<option value="246">Button Fixer</option>
							<option value="47">Cabinet Maker/Ebeniste</option>
							<option value="396">Cable Splicing Expert</option>
							<option value="386">Cable Splicing Supervisor</option>
							<option value="48">Call Centre Manager</option>
							<option value="49">Call Centre Operator/Teleagent</option>
							<option value="339">Capacity Building Officer</option>
							<option value="924">Captain, Ship</option>
							<option value="606">Car Washer</option>
							<option value="548">Caravan Officer</option>
							<option value="576">Caravan Outreach Officer</option>
							<option value="427">Carding Machine Operator</option>
							<option value="304">Cardiologist/Cardiac Surgeon</option>
							<option value="50">Carer, Home</option>
							<option value="51">Carpenter</option>
							<option value="52">Cashier</option>
							<option value="53">Cashier, Bar</option>
							<option value="792">CCTV Technician</option>
							<option value="838">Chainman</option>
							<option value="338">Chargé de Plaidoyer</option>
							<option value="574">Chargehand</option>
							<option value="124">Checker/Quality Controller, Textiles</option>
							<option value="320">Chef de Partie</option>
							<option value="839">Chemical Engineer</option>
							<option value="648">Chemist, Paint</option>
							<option value="352">Chief Accountant</option>
							<option value="330">Chief Engineer</option>
							<option value="689">Chief Engineer, Fishing Vessel</option>
							<option value="871">Chief Engineer, Marine</option>
							<option value="559">Chief Medical Officer</option>
							<option value="457">Chief Security Officer</option>
							<option value="458">Chief Security Officer</option>
							<option value="740">Child Carer</option>
							<option value="550">Chinese Chef</option>
							<option value="322">Chinese Cook</option>
							<option value="492">Choreographer</option>
							<option value="746">Circular Saw Operator-Sawmill</option>
							<option value="293">Civil Engineer</option>
							<option value="915">Cladding Technician</option>
							<option value="54">Cleaner</option>
							<option value="158">Clerk, Office</option>
							<option value="523">Clinical Psychologist</option>
							<option value="889">CNC Milling and Lathe Machine Operator</option>
							<option value="890">CNC Waterjet and Plasma Machine Operator</option>
							<option value="542">Coach Builder</option>
							<option value="395">Coach Painter</option>
							<option value="308">Coconut Plucker</option>
							<option value="715">Cold Room Attendant</option>
							<option value="896">Cold Room Attendant</option>
							<option value="520">Cold Room Supervisor</option>
							<option value="647">Colour Mixer, Paint</option>
							<option value="275">Communication Officer</option>
							<option value="581">Community Service Manager</option>
							<option value="584">Community Services Manager</option>
							<option value="55">Company Secretary</option>
							<option value="384">Compliance Officer</option>
							<option value="634">Compliance Support Officer</option>
							<option value="833">Computer Operator</option>
							<option value="56">Computer Programmer</option>
							<option value="57">Computer Support Technician</option>
							<option value="607">Concrete Mixer Operator</option>
							<option value="58">Concrete Shutterer</option>
							<option value="807">Concrete Technician</option>
							<option value="63">Conseiller Client</option>
							<option value="480">Conseiller Clients Mobile</option>
							<option value="481">Conseiller Clients Mobile</option>
							<option value="510">Conseiller Commercial</option>
							<option value="430">Conservation Officer</option>
							<option value="431">Conservation Volunteer</option>
							<option value="772">Construction Carpenter</option>
							<option value="703">Construction Manager</option>
							<option value="59">Construction Supervisor</option>
							<option value="557">Consultant</option>
							<option value="682">Control Room Technician</option>
							<option value="401">Cook (Italian Cuisine and Pastry)-Placement &amp; Training</option>
							<option value="874">Cook Vessel</option>
							<option value="756">Cook, Arabian Cuisine</option>
							<option value="422">Cook, Chinese Cuisine</option>
							<option value="438">Cook, General</option>
							<option value="60">Cook, Hotel/Restaurant</option>
							<option value="678">Cook, Indian Cuisine</option>
							<option value="879">Cook, Malagasy Cuisine</option>
							<option value="745">Cook, Sichuan</option>
							<option value="717">Cook, Thai Cuisine</option>
							<option value="400">Coordinator, Sida Info</option>
							<option value="394">Cornis/Fibre Product Fixer &amp; Installer</option>
							<option value="212">Corporate Social Responsibility Analyst</option>
							<option value="189">Cost Controller</option>
							<option value="399">Counsellor</option>
							<option value="714">Counter Salesperson (Motor Vehicle Spare Parts)</option>
							<option value="412">Couturier et Tapissier evenementiel</option>
							<option value="61">Crane Operator</option>
							<option value="568">Critical Care Nurse</option>
							<option value="544">Custom Clerk</option>
							<option value="62">Customer Relations Officer</option>
							<option value="814">Customer Service Coordinator</option>
							<option value="64">Customer Service Manager</option>
							<option value="747">Cut Off Saw Operator-Sawmill</option>
							<option value="224">Cutting Supervisor</option>
							<option value="491">Dancer, Bollywood</option>
							<option value="778">Data Analytics Analyst</option>
							<option value="779">Data Analytics Senior</option>
							<option value="470">Data Conversion Analyst</option>
							<option value="829">Data Entry Controller</option>
							<option value="65">Data-Entry Clerk</option>
							<option value="529">Dealer</option>
							<option value="66">Debt Collector</option>
							<option value="415">Decor Assistants</option>
							<option value="411">Decorator</option>
							<option value="67">Decorator, Interior</option>
							<option value="200">Delivery Boy</option>
							<option value="706">Delivery Officer</option>
							<option value="321">Demi-Chef de Partie</option>
							<option value="267">Demolition Man</option>
							<option value="163">Dental Assistant</option>
							<option value="555">Dental Prosthesis Maker and Repairer</option>
							<option value="766">Dentist</option>
							<option value="342">Deputy General Manager, Construction</option>
							<option value="646">Die Cut Operator</option>
							<option value="499">Dietitian</option>
							<option value="860">Diver</option>
							<option value="848">Dosa Cook</option>
							<option value="811">Drainage Pump Station Operator</option>
							<option value="270">Draughtsperson</option>
							<option value="733">Dressmaker</option>
							<option value="68">Driver, Bus</option>
							<option value="69">Driver, Private Car</option>
							<option value="911">Driver, Towing Vehicle</option>
							<option value="883">Driver, Truck/Goods Vehicle</option>
							<option value="70">Driver, Van, Light and Local Transport</option>
							<option value="461">Driver-Salesperson</option>
							<option value="759">Driver/Commercial Traveller </option>
							<option value="893">Ductman</option>
							<option value="572">E-learning Analyst</option>
							<option value="797">Earth Moving Mechanics</option>
							<option value="489">Eco Tourist Guide</option>
							<option value="554">Edge Banding Machine Operator,Panel</option>
							<option value="242">Editor,Newspaper and Periodicals</option>
							<option value="265">Education Officer</option>
							<option value="71">Electric Arc Welder</option>
							<option value="72">Electrical Engineering Technician</option>
							<option value="713">Electrical Technician</option>
							<option value="802">Electrical Transpallet Operator</option>
							<option value="73">Electrician</option>
							<option value="796">Electrician Hydraulics</option>
							<option value="74">Electrician, Motor Vehicle</option>
							<option value="754">Electro-technician</option>
							<option value="75">Electronics Engineer</option>
							<option value="76">Electronics Mechanic</option>
							<option value="254">Electronics Technician</option>
							<option value="615">Electroplater</option>
							<option value="705">Employé des rayons/Shelves Worker</option>
							<option value="78">Engineer, Automotive/Automobile</option>
							<option value="79">Engineer, Building Construction</option>
							<option value="80">Engineer, Electrical</option>
							<option value="348">Equipment Manager</option>
							<option value="448">ERP Functional Consultant</option>
							<option value="81">Estimator,Engineering</option>
							<option value="282">Examination Officer</option>
							<option value="721">Excavator Loader on P Tyres</option>
							<option value="285">Excavator Operator</option>
							<option value="466">Executive Assistant</option>
							<option value="316">Executive Chef</option>
							<option value="82">Executive Housekeeper</option>
							<option value="83">Executive Pastry Chef</option>
							<option value="317">Executive Sous Chef</option>
							<option value="209">Fabricator</option>
							<option value="786">Fabricator-Pipeline Works</option>
							<option value="230">Facilities Operation and Maintenance Manager</option>
							<option value="767">Factory Attendant</option>
							<option value="234">Factory Manager</option>
							<option value="360">Factory Operator, Seasoning and Grinding</option>
							<option value="311">Factory Operator,Meat Processing</option>
							<option value="905">Factory Worker</option>
							<option value="738">False Ceiling Maker and Fixer</option>
							<option value="861">Farm Worker</option>
							<option value="862">Farm Worker</option>
							<option value="679">Farm Worker, Livestock</option>
							<option value="196">Fashion Designer</option>
							<option value="84">Fast Food Operator</option>
							<option value="863">Feeder</option>
							<option value="424">Fencing Machine Operator</option>
							<option value="85">Fibre Glass Worker</option>
							<option value="456">Fibre Optic Slicer</option>
							<option value="671">Field Maintenance Operator</option>
							<option value="590">Field Supervisor, Horticulture</option>
							<option value="235">Finance Executive</option>
							<option value="260">Finance Officer</option>
							<option value="353">Finance Supervisor</option>
							<option value="161">Finishing Operator</option>
							<option value="825">First Aider</option>
							<option value="897">Fish Cleaner</option>
							<option value="846">Fish Monger</option>
							<option value="898">Fish Packer</option>
							<option value="442">Fisherman</option>
							<option value="690">Fishing Master</option>
							<option value="869">Fishing Master</option>
							<option value="787">Fitter-Pipeline Works</option>
							<option value="753">Fleet Sales Specialist</option>
							<option value="579">Floor Coodinator</option>
							<option value="168">Food and Beverage Manager</option>
							<option value="724">Food Processing Operator</option>
							<option value="302">Food Quality Controller/Inspector</option>
							<option value="86">Footwear Maker</option>
							<option value="891">Foreman Electrician</option>
							<option value="892">Foreman Plumbing</option>
							<option value="87">Fork-Lift Truck Operator</option>
							<option value="459">Frigorist</option>
							<option value="758">Frogorist </option>
							<option value="156">Front Office Manager</option>
							<option value="518">Fruit and Vegetable Grader</option>
							<option value="519">Fruit and Vegetable Packing Operator</option>
							<option value="517">Fruit and Vegetable Processing Operator</option>
							<option value="465">Fundraiser</option>
							<option value="859">Furnaceman</option>
							<option value="589">Furniture Fitter Assembler</option>
							<option value="616">Galvaniser</option>
							<option value="299">Garage Supervisor</option>
							<option value="221">Garden Irrigation Specialist</option>
							<option value="88">Gardener</option>
							<option value="89">Garment Cutter</option>
							<option value="434">Gem Setter</option>
							<option value="763">General Manager</option>
							<option value="341">General Manager, Construction</option>
							<option value="490">Glass Cutter</option>
							<option value="751">Glazier, Aluminium </option>
							<option value="359">Granite Cutter and Polisher</option>
							<option value="537">Granite Technician</option>
							<option value="383">Grant Making/Fund Raising Officer</option>
							<option value="382">Grant Management Officer</option>
							<option value="381">Grant Manager</option>
							<option value="179">Graphic Designer</option>
							<option value="914">Graphic Designer Drauthsman</option>
							<option value="366">Graphic Designer-Junior</option>
							<option value="367">Graphic Designer-Senior</option>
							<option value="365">Graphic Designer-web</option>
							<option value="530">Green House and Budding Operator</option>
							<option value="378">Green House Technician</option>
							<option value="454">Greenhouse Attendant</option>
							<option value="625">Guide, Marine Mammals</option>
							<option value="91">Hair Stylist/Hairdresser</option>
							<option value="525">Hand Embroider</option>
							<option value="178">Handyman, Building Maintenance</option>
							<option value="92">Head Cook</option>
							<option value="369">Head Developer-Web</option>
							<option value="698">Head Merchandiser</option>
							<option value="405">Head of Production</option>
							<option value="93">Head Waiter</option>
							<option value="447">Health and Safety Officer</option>
							<option value="577">Health Care Assistant</option>
							<option value="835">Heavy Steel Coil Manufacturer</option>
							<option value="894">Heavy Vehicle Back Loader Mechanic</option>
							<option value="259">Help Desk Operator</option>
							<option value="94">Helper</option>
							<option value="834">High Carbon Roller Manufacturer</option>
							<option value="261">High Precision Mechanic</option>
							<option value="594">Horse Riding Instructor</option>
							<option value="377">Horticultural Technician</option>
							<option value="194">Hostess</option>
							<option value="169">Hotel Manager</option>
							<option value="417">Hotel Manager -Placement &amp; Training</option>
							<option value="95">Hotel Receptionist</option>
							<option value="203">Hotliner</option>
							<option value="324">Housekeeping Supervisor</option>
							<option value="547">Housemaid</option>
							<option value="882">Human Resource Assistant</option>
							<option value="768">Human Resource Support Officer-Interpreter</option>
							<option value="283">Human Resources Manager</option>
							<option value="217">Human Resources Officer</option>
							<option value="297">Hybrid car mechanic</option>
							<option value="621">Hydroponic Farmer</option>
							<option value="379">Hydroponics Technician/Hydroponic Unit Operator</option>
							<option value="872">Ice Master Ship</option>
							<option value="907">Imam</option>
							<option value="471">Implementation Associate</option>
							<option value="472">Implementation Associate</option>
							<option value="552">India Investor Relations and Analyst</option>
							<option value="849">Indian Jain Cook</option>
							<option value="549">Indian Sweets Maker</option>
							<option value="651">Industrial Maintenance Engineer</option>
							<option value="96">Industrial Painter &amp; Coater</option>
							<option value="818">Industrial/Textile Engineer</option>
							<option value="192">Information Technology Security Officer</option>
							<option value="205">Information Technology Training Officer/ Formateur</option>
							<option value="791">Instrument and Control System Technician</option>
							<option value="97">Insurance Clerk</option>
							<option value="866">Interior Designer</option>
							<option value="441">International Primary Coordinator</option>
							<option value="865">Internet Sales Representative</option>
							<option value="153">Interpreter</option>
							<option value="231">Ironer/Presser</option>
							<option value="731">IT Assistant</option>
							<option value="249">IT Consultant</option>
							<option value="253">IT Executive</option>
							<option value="901">IT Manager</option>
							<option value="223">IT Officer</option>
							<option value="250">IT Technician</option>
							<option value="732">IT Trainee</option>
							<option value="444">JAVA Developer</option>
							<option value="858">JCB on P Tyre Operator</option>
							<option value="98">Jeweller</option>
							<option value="433">Jewellery Designer</option>
							<option value="210">Journalist</option>
							<option value="364">Kebab Specialist</option>
							<option value="334">Kids Club Hostess</option>
							<option value="335">Kids Club Supervisor</option>
							<option value="799">Kitchen Controller </option>
							<option value="423">Kitchen Helper</option>
							<option value="916">Kitchen Steward</option>
							<option value="272">Kite Maker/Repairer</option>
							<option value="493">Knitter</option>
							<option value="99">Knitting Machine Operator, Garment</option>
							<option value="280">Laboratory Assistant</option>
							<option value="167">Laboratory Technician</option>
							<option value="455">Labourer</option>
							<option value="629">Laminating Operator</option>
							<option value="245">Land Surveyor</option>
							<option value="909">Landscape Planter</option>
							<option value="728">Landscapers</option>
							<option value="443">Language Specialist</option>
							<option value="497">Language Specialist</option>
							<option value="543">Lathe Machine Operator</option>
							<option value="918">Laundry Machine Operators</option>
							<option value="917">Laundry Machine Technician</option>
							<option value="326">Laundry Maid</option>
							<option value="100">Laundry Pressing Machine Operator</option>
							<option value="919">Laundry Worker</option>
							<option value="222">Lawn Mover Operator</option>
							<option value="551">Lawyer</option>
							<option value="830">Lay out Artist</option>
							<option value="633">Lead Blade System Integrator</option>
							<option value="101">Leather Goods Maker</option>
							<option value="239">Lecturer </option>
							<option value="238">Lecturer - Interior Design/Fashion</option>
							<option value="610">Lecturer, Information Technology</option>
							<option value="388">Legal Adviser</option>
							<option value="273">Legal Assistant</option>
							<option value="164">Legal Attorney</option>
							<option value="410">Light Technician</option>
							<option value="485">Logistic Manager</option>
							<option value="347">Logistic Officer</option>
							<option value="875">Long Line Fisherman</option>
							<option value="494">Looper,Knitting</option>
							<option value="202">Lorry Attendant/Helper</option>
							<option value="102">Lorry Driver, Heavy</option>
							<option value="867">M &amp; E Coordinator</option>
							<option value="426">Machine Extruder Operator</option>
							<option value="428">Machine Operator, Bakery products</option>
							<option value="103">Machine Operator, Book Binding</option>
							<option value="906">Machine Operator, Bottle Washing</option>
							<option value="656">Machine Operator, Cereal Processing</option>
							<option value="680">Machine Operator, Detergents Manufacturing</option>
							<option value="160">Machine Operator, Dyeing</option>
							<option value="104">Machine Operator, Embroidery</option>
							<option value="723">Machine Operator, Food Processor/Cook</option>
							<option value="106">Machine Operator, Footwear Production</option>
							<option value="225">Machine Operator, Garment Cutting</option>
							<option value="622">Machine Operator, Garment Cutting</option>
							<option value="467">Machine Operator, Jewellery Polishing</option>
							<option value="727">Machine Operator, Jewellery Welding</option>
							<option value="421">Machine Operator, Jumping Castle</option>
							<option value="655">Machine Operator, Milk Packing</option>
							<option value="821">Machine Operator, Oven </option>
							<option value="288">Machine Operator, Paint Manufacturing</option>
							<option value="667">Machine Operator, Paper Products</option>
							<option value="749">Machine Operator, Polishing</option>
							<option value="612">Machine Operator, Poultry Processing</option>
							<option value="107">Machine Operator, Printing</option>
							<option value="391">Machine Operator, Profilage and corrugated Iron Sheet</option>
							<option value="822">Machine Operator, Retreading Tyre</option>
							<option value="716">Machine Operator, Sea food processing</option>
							<option value="105">Machine Operator, Seafood Processing</option>
							<option value="108">Machine Operator, Sewing</option>
							<option value="837">Machine Operator, Soap Manufacturing</option>
							<option value="711">Machine Operator, Tape-Edge Sewing</option>
							<option value="608">Machine Operator, Tiles Manufacturing</option>
							<option value="842">Machine Operator, Tissue Paper</option>
							<option value="162">Machine Operator, Toiletry Products</option>
							<option value="820">Machine Operator, Wafer/biscuit making</option>
							<option value="199">Machine Operator, Warping</option>
							<option value="627">Machine Operator, Weaving</option>
							<option value="198">Machine Operator, Winding</option>
							<option value="742">Machine Operator, Zipper</option>
							<option value="301">Machine Operator,Noodle Production</option>
							<option value="309">Machine Operator,Wood Products</option>
							<option value="760">Machine Operators </option>
							<option value="220">Maid</option>
							<option value="836">Maintenance Electrician</option>
							<option value="483">Maintenance Officer</option>
							<option value="505">Maintenance Supervisor</option>
							<option value="534">Maintenance Technician</option>
							<option value="166">Maintenance Worker, Industrial Machine</option>
							<option value="536">Maitre Reiki</option>
							<option value="216">Make-up Artist</option>
							<option value="800">Manager</option>
							<option value="663">Manager Operation, Optical </option>
							<option value="599">Manager, Architecture</option>
							<option value="305">Manager/Assistant Manager, Retail Trade</option>
							<option value="790">Managerial,Engineering and Support staff</option>
							<option value="416">Managing Director</option>
							<option value="709">Marine Science project Coordinator</option>
							<option value="346">Marketing Executive</option>
							<option value="183">Marketing Manager</option>
							<option value="182">Marketing Officer/Assistant</option>
							<option value="580">Marquese Assembler</option>
							<option value="109">Mason</option>
							<option value="482">Massage Therapist</option>
							<option value="645">Matching Operator, Garment Making</option>
							<option value="687">Mate</option>
							<option value="350">Materials Manager</option>
							<option value="710">Mattress Assembler/ Maker</option>
							<option value="251">Meat Cutter</option>
							<option value="586">Mechanic , Industrial Machinery</option>
							<option value="110">Mechanic Forklift</option>
							<option value="111">Mechanic Tractor/Trailer</option>
							<option value="112">Mechanic, Agricultural Machinery and Equipment</option>
							<option value="232">Mechanic, Bus</option>
							<option value="113">Mechanic, Heavy Vehicle</option>
							<option value="856">Mechanic, Hydraulic and Diesel</option>
							<option value="925">Mechanic, Marine</option>
							<option value="609">Mechanic, Motor Vehicle</option>
							<option value="233">Mechanic, Truck and Trailer</option>
							<option value="361">Mechanic,Motor Cycle</option>
							<option value="227">Mechanical Engineer</option>
							<option value="583">Mechanical Precision Machine Operator</option>
							<option value="562">Medical Officer</option>
							<option value="566">Medical Propsthetist and Orthotist</option>
							<option value="558">Medical Specialist</option>
							<option value="496">Mender</option>
							<option value="413">Menuisier evenementiel</option>
							<option value="114">Merchandising Officer</option>
							<option value="115">Messenger, Office</option>
							<option value="764">Metal Fencing Fabricator</option>
							<option value="718">Metal Melting Furnaceman</option>
							<option value="278">Microbiologist</option>
							<option value="390">Midwife</option>
							<option value="912">Milling Operator</option>
							<option value="116">Mobile - Crane Operator</option>
							<option value="175">Mobile Phone Technician</option>
							<option value="488">Model, Advertising</option>
							<option value="487">Model, Artist</option>
							<option value="486">Model, Fashion</option>
							<option value="211">Moderator</option>
							<option value="385">Monitoring and Evaluation Officer</option>
							<option value="414">Moquettiste/Parquettiste evenementiel</option>
							<option value="460">Music and Youth Coach</option>
							<option value="598">Muslim Priest/Hafiz</option>
							<option value="602">Nail Technician</option>
							<option value="922">Nan Tandoor Operator</option>
							<option value="828">Nature Guide</option>
							<option value="597">Needle Checker</option>
							<option value="571">Neo Natal Nurse</option>
							<option value="886">Neon Bender</option>
							<option value="445">Net Developer</option>
							<option value="206">Network Administrator</option>
							<option value="570">Nurse Anaesthetist</option>
							<option value="712">Nursery Worker</option>
							<option value="154">Nursing Officer</option>
							<option value="300">Occupational Safety and Health Manager</option>
							<option value="498">Occupational Therapist</option>
							<option value="563">Occupational Therapist</option>
							<option value="649">Offset Press Operator</option>
							<option value="639">Operations Clerk</option>
							<option value="719">Operator, Earth-Moving Equipment</option>
							<option value="545">Ophthalmic Technician</option>
							<option value="762">Optical Quality Control Manager</option>
							<option value="801">Optical Sales Technician</option>
							<option value="841">Optical Salesperson</option>
							<option value="661">Optometrist</option>
							<option value="569">Orthopedic Nurse</option>
							<option value="565">Orthopedic Technologist</option>
							<option value="620">Orthoptist</option>
							<option value="743">Other</option>
							<option value="885">Oven Quality Control</option>
							<option value="737">Packer, Fresh Fruits</option>
							<option value="252">Packer, Hand</option>
							<option value="895">Packing and labelling Operator</option>
							<option value="117">Packing Machine Operator</option>
							<option value="118">Painter</option>
							<option value="588">Painter Varnisher</option>
							<option value="587">Panel Saw Machine Operator</option>
							<option value="853">Parquetry Layer</option>
							<option value="208">Parts Service Supervisor</option>
							<option value="318">Pastry Chef</option>
							<option value="119">Pastry Maker</option>
							<option value="662">Patients Co-ordinator</option>
							<option value="120">Pattern Maker, Garment</option>
							<option value="504">Paver Operator</option>
							<option value="780">Payroll Analyst</option>
							<option value="784">Payroll Assistant Manager</option>
							<option value="473">Payroll Associate</option>
							<option value="783">Payroll Manager</option>
							<option value="781">Payroll Senior</option>
							<option value="782">Payroll Supervisor</option>
							<option value="729">Pest Control Operators</option>
							<option value="632">Pharmacist, General</option>
							<option value="847">Pharmacy Dispenser</option>
							<option value="826">Photographer</option>
							<option value="809">Pipe Layer</option>
							<option value="173">Pizza Maker</option>
							<option value="585">Planning Coordinator</option>
							<option value="528">Planning Machine Operator</option>
							<option value="286">Plasterer</option>
							<option value="479">Plastic Injection Machine Operator</option>
							<option value="794">Plucker, Pine Apple</option>
							<option value="121">Plumber and Pipe Fitter</option>
							<option value="795">Pole Technician</option>
							<option value="921">Pool Operator</option>
							<option value="920">Pool Operators</option>
							<option value="122">Porter, Luggage</option>
							<option value="420">Portfolio Officer</option>
							<option value="650">Post -Press Operator</option>
							<option value="631">Pouching Machine Operator</option>
							<option value="380">Poultry Farm Worker</option>
							<option value="739">Preprimary School Teacher</option>
							<option value="180">Press Operator, Lithographic Printing</option>
							<option value="904">Presser</option>
							<option value="440">Prevention and Hotline officer</option>
							<option value="908">Primary School Teacher</option>
							<option value="560">Principal Medical Officer</option>
							<option value="123">Printer</option>
							<option value="864">Process Operator</option>
							<option value="704">Procurement and Logistics Manager</option>
							<option value="177">Procurement/Purchasing Officer</option>
							<option value="269">Production Engineer</option>
							<option value="539">Production Operator</option>
							<option value="312">Production Supervisor, Food Products</option>
							<option value="546">Project Assistant</option>
							<option value="171">Project Manager/Leader</option>
							<option value="274">Proof Reader</option>
							<option value="501">Psychiotherapist</option>
							<option value="291">Psychologist/Counsellor</option>
							<option value="725">Public Area Attendant</option>
							<option value="155">Public Relations Officer</option>
							<option value="770">Puff Panel Insulating Refrigeration Worker</option>
							<option value="219">Pump Attendant</option>
							<option value="880">Punching Machine Operator</option>
							<option value="702">Purchasing Clerk</option>
							<option value="902">PVC Plastic Machine Operator</option>
							<option value="884">Qualicoat Quality Controller</option>
							<option value="185">Quality Assurance Manager</option>
							<option value="186">Quality Assurance Officer</option>
							<option value="532">Quality Assurance Technician</option>
							<option value="184">Quality Controller</option>
							<option value="521">Quality Inspector, Food Products</option>
							<option value="398">Quality Trainer</option>
							<option value="244">Quantity Surveyor</option>
							<option value="789">Radiography Inspectors</option>
							<option value="854">Rain Water System Mould Technician</option>
							<option value="578">Reception Animator</option>
							<option value="125">Receptionist</option>
							<option value="735">Reefer Container Technician</option>
							<option value="771">Refrigeration Technician</option>
							<option value="484">Regleur CNC</option>
							<option value="611">Relationship Manager</option>
							<option value="243">Reporter</option>
							<option value="508">Research Analyst</option>
							<option value="193">Research Officer</option>
							<option value="126">Reservation Officer</option>
							<option value="213">Responder</option>
							<option value="675">Responsable Social et Digital Marketing</option>
							<option value="798">Restaurant Manager </option>
							<option value="127">Restaurant Supervisor</option>
							<option value="268">Rewinder, Electric Motor</option>
							<option value="172">Rider</option>
							<option value="788">Rigger-Pipeline Works</option>
							<option value="877">Road Grader and Scraper Driver</option>
							<option value="327">Room/Public Area Attendant</option>
							<option value="429">Round Island Warden</option>
							<option value="174">Safety and Health Officer</option>
							<option value="636">Sail and Awning Maker</option>
							<option value="813">Sailing Instructor</option>
							<option value="463">Sales  Clerk</option>
							<option value="345">Sales and Marketing Manager</option>
							<option value="887">Sales Assistant</option>
							<option value="453">Sales Demonstrator</option>
							<option value="197">Sales Executive</option>
							<option value="522">Sales Executive/Dealer</option>
							<option value="128">Sales Representative</option>
							<option value="664">Sales Representative, Optical</option>
							<option value="129">Sales Supervisor, Retail Trade</option>
							<option value="130">Salesperson</option>
							<option value="368">Sample Maker-Textile</option>
							<option value="605">Sauce and Food Manufacturing Operator</option>
							<option value="553">Sawing Machine Operator,Panel </option>
							<option value="439">Scaffolder</option>
							<option value="257">Sculptor/Sculpteur</option>
							<option value="870">Sea Captain</option>
							<option value="462">Sea Export Freight Coordinator</option>
							<option value="375">Search Engine Optimisation Manager</option>
							<option value="376">Search Engine Optimisation Operator</option>
							<option value="688">Second Engineer , Fishing Vessel</option>
							<option value="131">Secretary</option>
							<option value="132">Security Control Room Operator</option>
							<option value="133">Security Guard</option>
							<option value="389">Senior Cable Splicing Expert</option>
							<option value="556">Senior Consultant</option>
							<option value="561">Senior Medical Officer</option>
							<option value="340">Senior Monitoring and Evaluation officer</option>
							<option value="477">Service Delivery Manager</option>
							<option value="332">Sewage Treatment Plant Operator</option>
							<option value="134">Sheet-Metal Worker</option>
							<option value="750">Sheltered Farming Scheme Worker</option>
							<option value="658">Shift Supervisor</option>
							<option value="691">Ship Crew Worker</option>
							<option value="218">Shipping Clerk</option>
							<option value="502">Shoe Repairer</option>
							<option value="195">Shop Assistant</option>
							<option value="852">Shop Fitter</option>
							<option value="511">Showroom Sales Agent</option>
							<option value="513">Showroom Supervisor</option>
							<option value="135">Site Agent/Technician</option>
							<option value="355">Site Engineer</option>
							<option value="591">Site Manager</option>
							<option value="676">Site Supervisor</option>
							<option value="808">Skilled Hydroponic Worker</option>
							<option value="673">Skilled Worker, False Ceiling/Partitioning</option>
							<option value="819">Skimmer, Plastering Works</option>
							<option value="403">Skipper (Deep Sea Fishing/ Recreational Fishing)-Placement &amp; Training</option>
							<option value="436">Skipper/Boat Driver</option>
							<option value="630">Slitting Machine Operator</option>
							<option value="642">Snack Machine Operator</option>
							<option value="741">Social Carer</option>
							<option value="191">Software Engineer</option>
							<option value="451">Software Engineer Analyst</option>
							<option value="450">Software Engineer Associate</option>
							<option value="452">Software Engineer Team Lead</option>
							<option value="843">Solar Film, Glass Worker</option>
							<option value="314">Sommelier (Wine Tasters)-Placement &amp; Training</option>
							<option value="228">Sorter</option>
							<option value="336">Sound and Light Technician</option>
							<option value="408">Sound Technician</option>
							<option value="137">Sous Chef</option>
							<option value="601">Spa Receptionist</option>
							<option value="138">Spa Therapist</option>
							<option value="500">Speech and Language Therapist</option>
							<option value="626">Splicer, Optic cable</option>
							<option value="666">Sports and Exercise Scientist/Rehabilitator</option>
							<option value="333">Sports Organiser</option>
							<option value="139">Spray Painter, Metal</option>
							<option value="643">Spreader</option>
							<option value="832">Stage Decorator</option>
							<option value="159">Statistician </option>
							<option value="271">Steel Fixer</option>
							<option value="495">Stitcher</option>
							<option value="303">Stock Controller</option>
							<option value="582">Stone Crusher Machine Operator</option>
							<option value="722">Stone Mason</option>
							<option value="613">Storage Systems Specialist</option>
							<option value="533">Store Administrator</option>
							<option value="535">Store Manager</option>
							<option value="140">Storekeeper</option>
							<option value="769">Structural Steel Work Specialist</option>
							<option value="356">Supervisor Paper Recycling</option>
							<option value="823">Supervisor, Agriculture</option>
							<option value="204">Supervisor, Call Centre/Team Leader </option>
							<option value="593">Supervisor, Dyeing Operations</option>
							<option value="888">Supervisor, Metal Processor</option>
							<option value="730">Supervisor, Plumbing and Pipe Fitting</option>
							<option value="276">Supervisor, Sandblasting/Industrial Painting Operations</option>
							<option value="748">Supervisor, Sapphire Polishinng</option>
							<option value="157">Supervisor, Sewing Machine Operations</option>
							<option value="899">Supervisor, Soap Manufacturing</option>
							<option value="726">Supervisor, Tent Erector</option>
							<option value="684">Supervisor, Welding</option>
							<option value="295">Supervisor,Telecommunications Service</option>
							<option value="294">Supervisor/Technician , Masonry Trade</option>
							<option value="592">Supervisor/Technician ,Carpentry Trade</option>
							<option value="541">Supply Chain Junior Manager</option>
							<option value="540">Supply Chain Manager</option>
							<option value="810">Sweet Maker</option>
							<option value="207">Systems Administrator</option>
							<option value="181">Systems Analyst</option>
							<option value="527">Tailor, Shirt</option>
							<option value="215">Tailor, Shirt &amp; Trouser</option>
							<option value="850">Tandoor Cook</option>
							<option value="306">Tea Blender</option>
							<option value="670">Tea Plucking Machine Operator</option>
							<option value="672">Tea Seed Garden Helper</option>
							<option value="903">Tea Specialist</option>
							<option value="266">Teacher, Primary School</option>
							<option value="475">Team Leader</option>
							<option value="476">Team Leader - IT</option>
							<option value="374">Technical Development Manager</option>
							<option value="407">Technical Lead- Light</option>
							<option value="406">Technical Lead-Video</option>
							<option value="263">Technical Officer</option>
							<option value="277">Technical Operator, Garments</option>
							<option value="255">Technical Sales Representative</option>
							<option value="512">Technical Supervisor</option>
							<option value="677">Technician Tint</option>
							<option value="824">Technician, Electronics Apparatus</option>
							<option value="817">Technician, Home Appliances</option>
							<option value="816">Technician, Laptop Repairs</option>
							<option value="815">Technician, Mobile Phone Repairs</option>
							<option value="653">Technician,Paper bags Machine</option>
							<option value="507">Technician/Helper Technician</option>
							<option value="387">Telecommunication Lineman</option>
							<option value="77">Telecommunications Engineer</option>
							<option value="290">Telecommunications Technician</option>
							<option value="659">Telehandler Operator</option>
							<option value="141">Telephonist</option>
							<option value="876">Tent Decorator</option>
							<option value="262">Tent Erector</option>
							<option value="449">Tester</option>
							<option value="323">Thai Cook</option>
							<option value="567">Theatre Nurse</option>
							<option value="142">Tile Setter/Marble Layer</option>
							<option value="418">Timekeeper</option>
							<option value="287">Tint and Dye Technologist</option>
							<option value="803">Tofu Machine Operator</option>
							<option value="805">Tofu Machine Operator</option>
							<option value="298">Tour Planning Officer</option>
							<option value="516">Tourist Guide</option>
							<option value="143">Tower - Crane Operator</option>
							<option value="654">Track Tractor Driver</option>
							<option value="515">Trainee Administrative/Project Assistant</option>
							<option value="247">Trainee Bus Driver</option>
							<option value="464">Trainee Customer Service Assistant</option>
							<option value="635">Trainee Engineer</option>
							<option value="637">Trainee Engineer (Training)</option>
							<option value="900">Trainee Human Resource</option>
							<option value="509">Trainee Research Analyst</option>
							<option value="506">Trainee Waiter</option>
							<option value="419">Trainer, Automotive Sector</option>
							<option value="289">Trainer, ICT</option>
							<option value="446">Transaction Processing Associate</option>
							<option value="652">Translator</option>
							<option value="432">Translator-Indonesian language</option>
							<option value="851">Transpallet Operator</option>
							<option value="681">Transport Officer</option>
							<option value="144">Travel Agent/Clerk</option>
							<option value="229">Travel Consultant</option>
							<option value="145">Travel Guide</option>
							<option value="720">Trench-Digging Machine Operator</option>
							<option value="146">Truck Driver, Heavy</option>
							<option value="147">Turner/Fitter</option>
							<option value="201">Tyreman/ Attendant</option>
							<option value="855">Underground Rain Water Harvesting Techncian</option>
							<option value="190">Underwriter,Insurance</option>
							<option value="148">Upholsterer/Garnisseur</option>
							<option value="685">Vaccum Foaming Machine Technician</option>
							<option value="149">Valet/Chambermaid, Hotel</option>
							<option value="674">Varnish Technician, Optical Frame</option>
							<option value="310">Varnisher, Furniture</option>
							<option value="618">Varnisher, Furniture</option>
							<option value="640">Vegetable Farm Skilled Worker</option>
							<option value="757">Vehicle Assistant </option>
							<option value="313">Vehicle Loader</option>
							<option value="150">Vehicle Sheet Metal Worker/Coach Body Maker/Panel Beater</option>
							<option value="279">Veterinarian</option>
							<option value="812">Veterinary Assistant</option>
							<option value="868">VFX Artist/COMP Artist</option>
							<option value="409">Video Technician</option>
							<option value="827">Videographer</option>
							<option value="857">Volvo Track Chain Operator</option>
							<option value="596">Wages Clerk</option>
							<option value="151">Waiter/Waitress</option>
							<option value="734">Warehouse Assistant</option>
							<option value="165">Washing Operator</option>
							<option value="575">Watchman</option>
							<option value="755">Waterproofing applicator</option>
							<option value="292">Web Designer</option>
							<option value="248">Web Developer</option>
							<option value="371">Web Developer-Back end</option>
							<option value="370">Web Developer-Front end</option>
							<option value="372">Web Developer-Junior</option>
							<option value="373">Web Developer-Senior</option>
							<option value="90">Welder, Gas and Electric</option>
							<option value="878">Welder, Tig</option>
							<option value="425">Welder,Mig</option>
							<option value="785">Welder-Pipeline Works</option>
							<option value="604">Wellness Coordinator</option>
							<option value="628">Wheel Balancer and Aligner</option>
							<option value="392">Wide Format Flat Bed Operator</option>
							<option value="603">Women's Hairdresser</option>
							<option value="617">Wood Carver</option>
							<option value="256">Wood Polisher/Polisseur</option>
							<option value="152">Word Processor</option>
							<option value="307">Yoga Instructor</option>
					</select>
	</td>
		</tr>
	
	
	<tr><td colspan="3"><hr class="more-info"></td></tr>
	<tr>
	<td><label>Preferred Economic Sector</label> <span class="compulsory">*</span></td>
	<td>
		<select name="jobseeker_sector" id="Preferred_economic_sector" class="select-box-occupation">
			<option value="0">Please select your preferred economic sector</option>
							<option value="1">Administration</option>
							<option value="2">Advertising</option>
							<option value="3">Agriculture</option>
							<option value="39">Banking</option>
							<option value="4">Cleaning Services</option>
							<option value="5">Construction</option>
							<option value="6">Education</option>
							<option value="7">Electricity,Gas &amp; Water supply</option>
							<option value="32">Events, Media and Communication</option>
							<option value="8">Financial Intermediation</option>
							<option value="38">Fisheries</option>
							<option value="31">Global Finance</option>
							<option value="9">Health and Medical</option>
							<option value="10">Hotel &amp; Restaurant</option>
							<option value="11">ICT/BPO</option>
							<option value="35">Legal Services</option>
							<option value="12">Maintenance &amp; Repairs</option>
							<option value="40">Manufacturing - Fibre Glass Products</option>
							<option value="13">Manufacturing - Food Products &amp; Beverages</option>
							<option value="20">Manufacturing -Others</option>
							<option value="19">Manufacturing-Electronics &amp; Electrical Products</option>
							<option value="16">Manufacturing-Furniture</option>
							<option value="17">Manufacturing-Jewellery</option>
							<option value="15">Manufacturing-Leather products</option>
							<option value="18">Manufacturing-Metal products</option>
							<option value="14">Manufacturing-Textiles &amp;Wearing Apparel</option>
							<option value="33">Other services</option>
							<option value="22">Printing</option>
							<option value="23">Private Household</option>
							<option value="24">Real Estate</option>
							<option value="25">Sea Food Hub</option>
							<option value="26">Security services</option>
							<option value="27">Social Service</option>
							<option value="36">Telecommunications</option>
							<option value="37">Tourism</option>
							<option value="28">Trade</option>
							<option value="29">Transport, Storage and Communications</option>
							<option value="30">Travel &amp; Tours</option>
							<option value="21">Wellness &amp; Beauty Care</option>
					</select>
	</td>
	
	<tr><td colspan="3"><hr class="more-info"></td></tr>
	
		
		<td width="175"><label>Driving Licence</label></td><td width="300"><input type="text" id="Driving_license" name="Driving_license" value="" class="input-box" placeholder="Driving license">
			</td>
	
	
	<tr><td align="center" colspan="3">
	<input type="button" value="Back" onclick="window.location.href='confidential'" class="submit-btn" title="Back">
	<input type="submit" value="Continue" class="submit-btn" name="basic_info" title="Continue">
	</td></tr>
	</tbody></table>
	
	<script>$('#driving_select').multipleSelect();</script>
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


</body></html>