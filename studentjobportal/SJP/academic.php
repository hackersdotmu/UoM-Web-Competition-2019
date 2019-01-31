<?php
 session_start();
?>
<?php
$CPE_result=$CPE_year=$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

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

<div class="main-content">

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
		
		<div class="step-no">4</div>
		<div class="step-dark-left" title="Academic Qualification">Academic</div>
		<div class="step-dark-right">&nbsp;</div>
		
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
	<form id="registration" method="POST" action="academicPart2.php"
	
	<tr><td>
	<span class="note"><label>PRIMARY</label></span>
	</td></tr>
	<tr>
	<td colspan="2">
		<table>
		<tbody><tr>
		<td colspan="2" class="academic_level">
			<label>CPE<br></label>		</td>
		</tr><tr><td class="academic_result">
			<input type="radio" name="jobseeker_cpe_result" value="P"><span class="pass">Pass</span>
			<input type="radio" name="jobseeker_cpe_result" value="F"><span class="fail">Fail</span>
			</td><td>
			YEAR :
			<select name="jobseeker_cpe_year" class="select-box-year"><option value="">Year</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1953">1953</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						</select>
		</td></tr>
		</tbody></table>
	</td>
	</tr>
	
	<tr><td colspan="4"><hr class="more-info"></td></tr>
	
	
	<tr><td colspan="4"><hr class="more-info"></td></tr>
	
	<tr><td><span class="note"><label>UPPER SECONDARY</label></span></td></tr>
	<tr><td colspan="2">
		<table>
		<tbody><tr><td class="academic_level" colspan="2">
		<label>SC/GCE O L/IGCSE<br></label>		
		
		YEAR :
		<select name="jobseeker_sc_year" class="select-box-year"><option value="">Year</option>
					<option value="1950">1950</option>
					<option value="1951">1951</option>
					<option value="1952">1952</option>
					<option value="1953">1953</option>
					<option value="1954">1954</option>
					<option value="1955">1955</option>
					<option value="1956">1956</option>
					<option value="1957">1957</option>
					<option value="1958">1958</option>
					<option value="1959">1959</option>
					<option value="1960">1960</option>
					<option value="1961">1961</option>
					<option value="1962">1962</option>
					<option value="1963">1963</option>
					<option value="1964">1964</option>
					<option value="1965">1965</option>
					<option value="1966">1966</option>
					<option value="1967">1967</option>
					<option value="1968">1968</option>
					<option value="1969">1969</option>
					<option value="1970">1970</option>
					<option value="1971">1971</option>
					<option value="1972">1972</option>
					<option value="1973">1973</option>
					<option value="1974">1974</option>
					<option value="1975">1975</option>
					<option value="1976">1976</option>
					<option value="1977">1977</option>
					<option value="1978">1978</option>
					<option value="1979">1979</option>
					<option value="1980">1980</option>
					<option value="1981">1981</option>
					<option value="1982">1982</option>
					<option value="1983">1983</option>
					<option value="1984">1984</option>
					<option value="1985">1985</option>
					<option value="1986">1986</option>
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
				</select>
	

		<table class="form"><tr>
					<td><label>Subject1:</label></td>
					<td><input type="text" name="Subject1" id="Subject1"></td>
					<td><label>Grade 1:</label></td>
					<td><input type="text" name="Grade1" id="Grade1"></td>
				
					<td><label>Subject2:</label></td>
					<td><input type="text" name="Subject2" id="Subject2"></td>
					<tr><td><label>Grade 2:</label></td>
					<td><input type="text" name="Grade2" id="Grade2"></td>
					<br></br>
					
					<td><label>Subject3:</label></td>
					<td><input type="text" name="Subject3" id="Subject3"></td>
					<tr><td><label>Grade 3:</label></td>
					<td><input type="text" name="Grade3" id="Grade3"></td>
					
					<td><label>Subject4:</label></td>
					<td><input type="text" name="Subject4" id="Subject4"></td>
					<tr><td><label>Grade 4:</label></td>
					<td><input type="text" name="Grade4" id="Grade4"></td>
					
					<td><label>Subject5:</label></td>
					<td><input type="text" name="Subject5" id="Subject5"></td>
					<tr><td><label>Grade 5:</label></td>
					<td><input type="text" name="Grade5" id="Grade5"></td>
					
					<td><label>Subject6:</label></td>
					<td><input type="text" name="Subject6" id="Subject6"></td>
					<tr><td><label>Grade 6:</label></td>
					<td><input type="text" name="Grade6" id="Grade6"></td>
					
					<td><label>Subject7:</label></td>
					<td><input type="text" name="Subject7" id="Subject7"></td>
					<tr><td><label>Grade 7:</label></td>
					<td><input type="text" name="Grade7" id="Grade7"></td>
					
					<td><label>Subject8:</label></td>
					<td><input type="text" name="Subject8" id="Subject8"></td>
					<tr><td><label>Grade 8:</label></td>
					<td><input type="text" name="Grade8" id="Grade8"></td>
					
					<td><label>Subject9:</label></td>
					<td><input type="text" name="Subject9" id="Subject9"></td>
					<tr><td><label>Grade 9:</label></td>
					<td><input type="text" name="Grade9" id="Grade9"></td>
					
					<td><label>Subject10:</label></td>
					<td><input type="text" name="Subject10" id="Subject10"></td>
					<tr><td><label>Grade 10:</label></td>
					<td><input type="text" name="Grade10" id="Grade10"></td>
					
				</table>
			</td>
			</td>
				</tr></tbody></table>
	</td></tr>
	
	<tr><td colspan="2" align="center">
	<input type="button" value="Back" onclick="window.location.href='job'" class="submit-btn" title="Back">
	<input type="submit" value="Proceed to Secondary Education" class="submit-btn" name="add_academic" title="Proceed to Secondary Education">
	</td></tr>
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


</body></html>