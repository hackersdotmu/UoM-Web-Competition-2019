<?php
 session_start();

$first_num = rand(1, 10); 
$second_num = rand(1, 10); 
$operators = array("+", "-", "*"); 
$operator = rand(0, count($operators) - 1); 
$operator = $operators[$operator]; 
$answer = 0; 
switch($operator) { 
case "+": 
$answer = $first_num + $second_num; 
break; 
case "-": 
$answer = $first_num - $second_num;
break; 
case "*": 
$answer = $first_num * $second_num; 
break; 
} 
$_SESSION["answer"] = $answer; 
?> 
?>
<?php
$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

?>
  
<html lang="en" class=" canvas canvastext geolocation rgba hsla multiplebgs borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers no-applicationcache fontface"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mauritius Jobs</title>

<script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-50481647-1','index.php');ga('send','pageview');</script>
<script language="JavaScript" type="text/javascript">if(navigator.appName=='Microsoft Internet Explorer'){function NOclickIE(e){if(event.button==2||event.button==3){return false;}return true;}document.onmousedown=NOclickIE;document.onmouseup=NOclickIE;window.onmousedown=NOclickIE;window.onmouseup=NOclickIE;}
else{function NOclickNN(e){if(document.layers||document.getElementById&&!document.all){if(e.which==2||e.which==3){return false;}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=NOclickNN;}document.oncontextmenu=new Function("return false")}</script>
</head>
<body style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">
			<div id="header">
		<div id="banner">
			<script pagespeed_no_defer="" type="text/javascript">//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','','YddRYU7ik1',true,false,'f0TIAvnKumQ');
//]]>
	<div class="menu">
		<nav id="topNav">
			<ul>
				<li class="first"><a  title="Home">Home</a></li>
				<li><a href="#" title="About Us">About Us<span>^</span></a>
					<ul>
					
					</ul>
				</li>
				
				<li>					<a title="Jobseeker">Jobseeker</a>
									        
				</li>
				<li>
									<a  title="Employer">Employer</a>
													</li>
				<li><a title="Jobs Search">Jobs Search</a></li>
				<li class="last"><a  title="Contact us ">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</div>

	
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
	<?php 
echo $first_num . " " . $operator . " " . $second_num . " = " ; ?>
<input type="text" name="answer" />
	<input type="button" value="Back" onclick="window.location.href='professional'" class="submit-btn" title="Back">
	<input type="submit" value="I agree" class="submit-btn" name="agreement" title="Continue"></td></tr>
	</tbody></table>
</form></div>

<!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>




</body>