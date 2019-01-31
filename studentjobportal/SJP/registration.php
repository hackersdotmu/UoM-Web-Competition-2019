<?php
 session_start();
?>
<?php
$Nic_num=$Surname=$First_name=$Maiden_name=$Marital_status=$Gender=$DOB=$Telephone_num=$Mobile_num=$Address=$Country=$District=$Town_Village=$Postal_code=$Email=$Hashed_password=$Past_background=$Disability=$Passport_num=$Passport_exp_date=$Languages=$Preferred_job_occupation=$Preferred_economic_sector=$Driving_license=$CPE_result=$CPE_year=$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

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
	
	
	<script>var str=0;$(function(){$("#datepicker").datepicker({minDate:" -75Y",maxDate:"-16Y",changeMonth:"true",changeYear:"true",yearRange:"1940:-16Y"});$("#datepicker").datepicker("option","dateFormat","yy-mm-dd");$("#datepicker").datepicker("option","showAnim","drop");$(".close-red").click(function(){$("#message-red").fadeOut("slow");});});function village(str,town){$.ajax({type:"POST",url:"jobseeker.php"+str+"/"+town,data:"",success:function(msg){document.getElementById('display_village').innerHTML=msg;}});return false;}
function check_country(country){if(country==137){document.getElementById('select_district').disabled=false;$('#showdistrict').show("slow");}else{document.getElementById("select_district").selectedIndex=0;document.getElementById('select_district').disabled=true;document.getElementById('selectTown').innerHTML="<option>Please select a district</option>";document.getElementById('selectTown').disabled=true;$('#showdistrict').hide("slow");}}
function villagetest(str,town)
{if(str){var xmlhttp;if(window.XMLHttpRequest)
{xmlhttp=new XMLHttpRequest();}
else
{xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');}
xmlhttp.onreadystatechange=function()
{if(xmlhttp.readyState==4&&xmlhttp.status==200)
{document.getElementById('display_village').innerHTML=xmlhttp.responseText;}}
xmlhttp.open('GET',"jobseeker.php"+str+"/"+town,true);xmlhttp.send();}}</script>
	
</header>



		<div class="step-no">1</div>
		<div class="step-dark-left" title="Basic Information">Basic</div>
		<div class="step-dark-right">&nbsp;</div>
		
		<div class="step-no-off">2</div>
		<div class="step-light-left" title="Confidential Information">Confidential</div>
		<div class="step-light-right">&nbsp;</div>
		
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
	
	<form id="registration" method="POST" action="confidential.php">
	
	<tr><td><label>NIC Number</label> <span class="compulsory">*</span></td><td><input type="text" name="jobseeker_idnumber" id="Nic_num" class="input-box upper" value="" maxlength="14" placeholder="NIC Number">
	</td><?php
?>
		</tr>
	
	<tr>
	<td colspan="3"><label>Surname</label> <span class="compulsory">* </span> <input type="text" name="jobseeker_surname" id="Surname" value="" class="input-box upper" placeholder="Surname">
		<label>First Name</label> <span class="compulsory">*</span> <input type="text" name="jobseeker_firstname" class="input-box upper" id="First_name" value="" placeholder="First Name">
		</td>
	</tr>
	
	<tr><td><label>Maiden Name</label></td><td><input type="text" name="jobseeker_maidename" class="input-box" value="" id="Maiden_name" placeholder="Maiden Name"></td>
		</tr>
	
	<tr><td><label>Marital Status</label> <span class="compulsory">*</span></td>
	<td>
		<select class="select-box" name="jobseeker_marital" id="Marital_status">
					<option value="4">Cohabitation only</option>
					<option value="5">Divorced and in Cohabitation</option>
					<option value="10">Divorced only</option>
					<option value="2">Married</option>
					<option value="3">Re-married</option>
					<option value="7">Separated and in Cohabitation</option>
					<option value="6">Separated only</option>
					<option value="1" selected="">Single</option>
					<option value="9">Widowed and in Cohabitation</option>
					<option value="11">Widowed and Re-married</option>
					<option value="8">Widowed only</option>
				</select>
	</td>
	</tr>
	
	
	
	<tr><td><label>Gender</label> <span class="compulsory">*</span></td><td><label>Male</label> <input type="radio" name="jobseeker_gender" id="Gender" value="M" checked=""> <label>Female</label><input type="radio" name="jobseeker_gender" value="F"></td>
		</tr>
	
	<tr><td><label>Date of Birth</label> <span class="compulsory">*</span></td><td>
	<input type="date"  id="DOB" name="jobseeker_dob"/></td>
		</tr>
	
	<tr><td colspan="4"><hr class="more-info"></td></tr>
	<tr><td><label>Phone Number</label></td><td>
	
	
	<input type="text" name="jobseeker_tel_second" value="" class="input-box tel-small" id="Telephone_num" placeholder="Phone Number">
	</td>
		</tr>
	
	<tr><td><label>Mobile Number(s)</label></td><td>
	
	<input type="text" name="jobseeker_mob_second" class="input-box tel-small" value="" id="Mobile_num" placeholder="Mobile Number">
	</td>
		</tr>
	
	
	
	
	<tr><td colspan="4"><hr class="more-info"></td></tr>
	
	<tr><td><label>Address</label> <span class="compulsory">*</span></td><td>
	<textarea name="jobseeker_add" id="Address" class="register-textarea upper" placeholder="Write your address in full"></textarea>
	</td>
		</tr>
	
	
	<tr><td><label>Country</label> <span class="compulsory">*</span></td><td><select name="jobseeker_country" id="Country" class="select-box" onchange="check_country(this.value)"><option value="0">Please select your country</option>
			<option value="1">Afghanistan</option>
			<option value="2">Aland Islands</option>
			<option value="3">Albania</option>
			<option value="4">Algeria</option>
			<option value="5">American Samoa</option>
			<option value="6">Andorra</option>
			<option value="7">Angola</option>
			<option value="8">Anguilla</option>
			<option value="9">Antarctica</option>
			<option value="10">Antigua And Barbuda</option>
			<option value="11">Argentina</option>
			<option value="12">Armenia</option>
			<option value="13">Aruba</option>
			<option value="14">Australia</option>
			<option value="15">Austria</option>
			<option value="16">Azerbaijan</option>
			<option value="17">Bahamas</option>
			<option value="18">Bahrain</option>
			<option value="19">Bangladesh</option>
			<option value="20">Barbados</option>
			<option value="21">Belarus</option>
			<option value="22">Belgium</option>
			<option value="23">Belize</option>
			<option value="24">Benin</option>
			<option value="25">Bermuda</option>
			<option value="26">Bhutan</option>
			<option value="27">Bolivia</option>
			<option value="28">Bosnia And Herzegovina</option>
			<option value="29">Botswana</option>
			<option value="30">Bouvet Island</option>
			<option value="31">Brazil</option>
			<option value="32">British Indian Ocean Territory</option>
			<option value="33">Brunei Darussalam</option>
			<option value="34">Bulgaria</option>
			<option value="35">Burkina Faso</option>
			<option value="36">Burundi</option>
			<option value="37">Cambodia</option>
			<option value="38">Cameroon</option>
			<option value="39">Canada</option>
			<option value="40">Cape Verde</option>
			<option value="41">Cayman Islands</option>
			<option value="42">Central African Republic</option>
			<option value="43">Chad</option>
			<option value="44">Chile</option>
			<option value="45">China</option>
			<option value="46">Christmas Island</option>
			<option value="47">Cocos Islands</option>
			<option value="48">Colombia</option>
			<option value="49">Comoros</option>
			<option value="50">Cook Islands</option>
			<option value="51">Costa Rica</option>
			<option value="52">Cote DIvoire</option>
			<option value="53">Croatia</option>
			<option value="54">Cuba</option>
			<option value="55">Cyprus</option>
			<option value="56">Czech Republic</option>
			<option value="57">Denmark</option>
			<option value="58">Djibouti</option>
			<option value="59">Dominica</option>
			<option value="60">Dominican Republic</option>
			<option value="61">Ecuador</option>
			<option value="62">Egypt</option>
			<option value="63">El Salvador</option>
			<option value="64">Equatorial Guinea</option>
			<option value="65">Eritrea</option>
			<option value="66">Estonia</option>
			<option value="67">Ethiopia</option>
			<option value="68">Falkland Islands</option>
			<option value="69">Faroe Islands</option>
			<option value="70">Fiji</option>
			<option value="71">Finland</option>
			<option value="72">France</option>
			<option value="73">French Guiana</option>
			<option value="74">French Polynesia</option>
			<option value="75">French Southern Territories</option>
			<option value="76">Gabon</option>
			<option value="77">Gambia</option>
			<option value="78">Georgia</option>
			<option value="79">Germany</option>
			<option value="80">Ghana</option>
			<option value="81">Gibraltar</option>
			<option value="82">Greece</option>
			<option value="83">Greenland</option>
			<option value="84">Grenada</option>
			<option value="85">Guadeloupe</option>
			<option value="86">Guam</option>
			<option value="87">Guatemala</option>
			<option value="88">Guernsey</option>
			<option value="89">Guinea</option>
			<option value="90">Guinea-Bissau</option>
			<option value="91">Guyana</option>
			<option value="92">Haiti</option>
			<option value="93">Heard Island And Mcdonald Islands</option>
			<option value="94">Holy See (Vatican City State)</option>
			<option value="95">Honduras</option>
			<option value="96">Hong Kong</option>
			<option value="97">Hungary</option>
			<option value="98">Iceland</option>
			<option value="99">India</option>
			<option value="100">Indonesia</option>
			<option value="101">Iran</option>
			<option value="102">Iraq</option>
			<option value="103">Ireland</option>
			<option value="235">Islands</option>
			<option value="104">Isle Of Man</option>
			<option value="105">Israel</option>
			<option value="106">Italy</option>
			<option value="107">Jamaica</option>
			<option value="108">Japan</option>
			<option value="109">Jersey</option>
			<option value="110">Jordan</option>
			<option value="111">Kazakhstan</option>
			<option value="112">Kenya</option>
			<option value="113">Kiribati</option>
			<option value="114">Korea</option>
			<option value="115">Kuwait</option>
			<option value="116">Kyrgyzstan</option>
			<option value="117">Lao PeopleS Democratic Republic</option>
			<option value="118">Latvia</option>
			<option value="119">Lebanon</option>
			<option value="120">Lesotho</option>
			<option value="121">Liberia</option>
			<option value="122">Libyan Arab Jamahiriya</option>
			<option value="123">Liechtenstein</option>
			<option value="124">Lithuania</option>
			<option value="125">Luxembourg</option>
			<option value="126">Macao</option>
			<option value="127">Macedonia</option>
			<option value="128">Madagascar</option>
			<option value="129">Malawi</option>
			<option value="130">Malaysia</option>
			<option value="131">Maldives</option>
			<option value="132">Mali</option>
			<option value="133">Malta</option>
			<option value="134">Marshall Islands</option>
			<option value="135">Martinique</option>
			<option value="136">Mauritania</option>
			<option value="137" selected="">Mauritius</option>
			<option value="138">Mayotte</option>
			<option value="139">Mexico</option>
			<option value="140">Micronesia</option>
			<option value="141">Moldova</option>
			<option value="142">Monaco</option>
			<option value="143">Mongolia</option>
			<option value="144">Montserrat</option>
			<option value="145">Morocco</option>
			<option value="146">Mozambique</option>
			<option value="147">Myanmar</option>
			<option value="148">Namibia</option>
			<option value="149">Nauru</option>
			<option value="150">Nepal</option>
			<option value="151">Netherlands</option>
			<option value="152">Netherlands Antilles</option>
			<option value="153">New Caledonia</option>
			<option value="154">New Zealand</option>
			<option value="155">Nicaragua</option>
			<option value="156">Niger</option>
			<option value="157">Nigeria</option>
			<option value="158">Niue</option>
			<option value="159">Norfolk Island</option>
			<option value="160">Northern Mariana Islands</option>
			<option value="161">Norway</option>
			<option value="162">Oman</option>
			<option value="163">Pakistan</option>
			<option value="164">Palau</option>
			<option value="165">Palestinian Territory</option>
			<option value="166">Panama</option>
			<option value="167">Papua New Guinea</option>
			<option value="168">Paraguay</option>
			<option value="169">Peru</option>
			<option value="170">Philippines</option>
			<option value="171">Pitcairn</option>
			<option value="172">Poland</option>
			<option value="173">Portugal</option>
			<option value="174">Puerto Rico</option>
			<option value="175">Qatar</option>
			<option value="242">Reunion</option>
			<option value="243">Rodrigues island</option>
			<option value="177">Romania</option>
			<option value="178">Russian Federation</option>
			<option value="179">Rwanda</option>
			<option value="180">Saint Helena</option>
			<option value="181">Saint Kitts And Nevis</option>
			<option value="182">Saint Lucia</option>
			<option value="183">Saint Pierre And Miquelon</option>
			<option value="184">Saint Vincent And The Grenadines</option>
			<option value="185">Samoa</option>
			<option value="186">San Marino</option>
			<option value="187">Sao Tome And Principe</option>
			<option value="188">Saudi Arabia</option>
			<option value="189">Senegal</option>
			<option value="190">Serbia And Montenegro</option>
			<option value="191">Seychelles</option>
			<option value="192">Sierra Leone</option>
			<option value="193">Singapore</option>
			<option value="194">Slovakia</option>
			<option value="195">Slovenia</option>
			<option value="196">Solomon Islands</option>
			<option value="197">Somalia</option>
			<option value="198">South Africa</option>
			<option value="199">South Georgia And The South Sandwich Islands</option>
			<option value="200">Spain</option>
			<option value="201">Sri Lanka</option>
			<option value="202">Sudan</option>
			<option value="203">Suriname</option>
			<option value="204">Svalbard And Jan Mayen</option>
			<option value="205">Swaziland</option>
			<option value="206">Sweden</option>
			<option value="207">Switzerland</option>
			<option value="208">Syrian Arab Republic</option>
			<option value="209">Taiwan</option>
			<option value="210">Tajikistan</option>
			<option value="211">Tanzania</option>
			<option value="212">Thailand</option>
			<option value="213">Timor Leste</option>
			<option value="214">Togo</option>
			<option value="215">Tokelau</option>
			<option value="216">Tonga</option>
			<option value="217">Trinidad And Tobago</option>
			<option value="218">Tunisia</option>
			<option value="219">Turkey</option>
			<option value="220">Turkmenistan</option>
			<option value="221">Turks And Caicos Islands</option>
			<option value="222">Tuvalu</option>
			<option value="223">Uganda</option>
			<option value="224">Ukraine</option>
			<option value="225">United Arab Emirates</option>
			<option value="226">United Kingdom</option>
			<option value="227">United States</option>
			<option value="228">United States Minor Outlying Islands</option>
			<option value="229">Uruguay</option>
			<option value="230">Uzbekistan</option>
			<option value="231">Vanuatu</option>
			<option value="232">Venezuela</option>
			<option value="233">Viet Nam</option>
			<option value="234">Virgin Islands</option>
			<option value="236">Wallis And Futuna</option>
			<option value="237">Western Sahara</option>
			<option value="238">Yemen</option>
			<option value="239">Zambia</option>
			<option value="240">Zimbabwe</option>
		</select></td>
		</tr>
	
<tr><td colspan="2">
<div id="showdistrict">
<table border="0" class="districts">
	<tbody><tr><td width="225"><label>District</label> <span class="compulsory">*</span></td><td width="325">
	<select class="select-box" onchange="village(this.value,0)" name="jobseeker_district" id="District">
	<option value="0">Please select a district</option>
			<option value="1">BLACK RIVER</option>
			<option value="2">FLACQ</option>
			<option value="3">GRAND PORT</option>
			<option value="4">MOKA</option>
			<option value="5">PAMPLEMOUSSES</option>
			<option value="6">PLAINE WILHEMS</option>
			<option value="7">PORT LOUIS</option>
			<option value="8">RIVIERE DU REMPART</option>
			<option value="9">RODRIGUES</option>
			<option value="10">SAVANNE</option>
		</select>
	</td>
	<td width="110"></td>	</tr>
	
	
	
</tbody></table>
</div></td></tr>
	
	

	<tr><td><label>Postal Code</label></td><td>
	<input type="text" name="jobseeker_postal" class="input-box" value="" id="Postal_code" placeholder="Postal Code">
	</td>
		</tr>
	
	<tr><td colspan="3" id="compulsory">Compulsory fields are marked with ( <span class="compulsory">*</span> )</td></tr>

	<tr><td colspan="4" align="center"></br><input type="submit" value="Continue" class="submit-btn" name="basic_info" title="Continue"></td></tr>

	
	</tbody></table>
</form></div>

<!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>


	
</div>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><select class="ui-datepicker-month" data-handler="selectMonth" data-event="change"><option value="0" selected="selected">Jan</option></select><select class="ui-datepicker-year" data-handler="selectYear" data-event="change"><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003" selected="selected">2003</option></select></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="0" data-year="2003"><a class="ui-state-default ui-state-active ui-state-hover" href="#">29</a></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">30</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">31</span></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></body><div class="abineContentPanel" style="background-color:transparent !important;margin:0 !important;padding:0 !important;display:none !important;opacity:1 !important;filter:alpha(opacity:100) !important;z-index:2147483647 !important;position:absolute !important;top:20px !important;right:20px !important;overflow:hidden !important;border-width:0px !important;visibility:visible !important;background:transparent"><iframe class="abineContentFrame" width="310px" allowtransparency="true" frameborder="0" height="0px" scrolling="no" src="chrome-extension://caljgklbbfbcjjanaijlacgncafpegll/html/inlineForm.html?abine59088778doNotRemove" id="abine59088778doNotRemove" style="display:block !important;position:relative !important;background:transparent !important;border-width:0px !important;left:0px !important;top:0px !important;visibility:visible !important;opacity:1 !important;filter:alpha(opacity:100) !important;margin:0 !important;padding:0 !important;height:0px !important;width:310px"></iframe></div></html>