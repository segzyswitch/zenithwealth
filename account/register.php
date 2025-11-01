<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register - Velloxa Wealth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../icon.png" type="image/png">
</head>

<body class="auth-page">
	<div class="container" style="background-image:url(../images/register-bg.png);background-size:cover;background-position:left;">
		<div class="row py-5">
			<div class="col-sm-6 ms-auto">
				<div class="text-center mb-4">
					<a href="../" class="d-inline-block m-auto mb-4"><img src="../logo-new.png" height="70" alt=""></a>
					<h4 class="text-color pt-3 pt-sm-0">Create an account</h4>
				</div>

				<div class="card shadow-sm">
					<div class="card-body p-4">
						<p class="mb-4">Enter the details below to create an account.</p>
						<form id="registerForm" method="POST" action="#" class="row">
							<input type="hidden" name="register" value="TdjEgWMt6ufVBgAhEO3XzUJZXWJ1CZiyjEGUUxrN">
							<div class="col-sm-6 mb-4">
								<div class="single-field">
									<label class="form-label" for="fname">First Name<span class="required-field">*</span></label>
									<input class="form-control" type="text" name="fname" value="" required />
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="single-field">
									<label class="form-label" for="lname">Last Name<span class="required-field">*</span></label>
									<input class="form-control" type="text" name="lname" value="" required />
								</div>
							</div>
							<div class="col-12 mb-4">
								<div class="single-field">
									<label class="form-label" for="email">Email Address<span class="required-field">*</span></label>
									<input class="form-control" type="email" name="email" value="" required />
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="single-field">
									<label class="form-label" for="country">Select Country<span class="required-field">*</span></label>
									<select name="country" id="countrySelect" class="form-select">
										<option value="Afghanistan:+93">
											Afghanistan
										</option>
										<option value="Aland Islands:+358">
											Aland Islands
										</option>
										<option value="Albania:+355">
											Albania
										</option>
										<option value="Algeria:+213">
											Algeria
										</option>
										<option value="AmericanSamoa:+1684">
											AmericanSamoa
										</option>
										<option value="Andorra:+376">
											Andorra
										</option>
										<option value="Angola:+244">
											Angola
										</option>
										<option value="Anguilla:+1264">
											Anguilla
										</option>
										<option value="Antarctica:+672">
											Antarctica
										</option>
										<option value="Antigua and Barbuda:+1268">
											Antigua and Barbuda
										</option>
										<option value="Argentina:+54">
											Argentina
										</option>
										<option value="Armenia:+374">
											Armenia
										</option>
										<option value="Aruba:+297">
											Aruba
										</option>
										<option value="Australia:+61">
											Australia
										</option>
										<option value="Austria:+43">
											Austria
										</option>
										<option value="Azerbaijan:+994">
											Azerbaijan
										</option>
										<option value="Bahamas:+1242">
											Bahamas
										</option>
										<option value="Bahrain:+973">
											Bahrain
										</option>
										<option value="Bangladesh:+880">
											Bangladesh
										</option>
										<option value="Barbados:+1246">
											Barbados
										</option>
										<option value="Belarus:+375">
											Belarus
										</option>
										<option value="Belgium:+32">
											Belgium
										</option>
										<option value="Belize:+501">
											Belize
										</option>
										<option value="Benin:+229">
											Benin
										</option>
										<option value="Bermuda:+1441">
											Bermuda
										</option>
										<option value="Bhutan:+975">
											Bhutan
										</option>
										<option value="Bolivia, Plurinational State of:+591">
											Bolivia, Plurinational State of
										</option>
										<option value="Bosnia and Herzegovina:+387">
											Bosnia and Herzegovina
										</option>
										<option value="Botswana:+267">
											Botswana
										</option>
										<option value="Brazil:+55">
											Brazil
										</option>
										<option value="British Indian Ocean Territory:+246">
											British Indian Ocean Territory
										</option>
										<option value="Brunei Darussalam:+673">
											Brunei Darussalam
										</option>
										<option value="Bulgaria:+359">
											Bulgaria
										</option>
										<option value="Burkina Faso:+226">
											Burkina Faso
										</option>
										<option value="Burundi:+257">
											Burundi
										</option>
										<option value="Cambodia:+855">
											Cambodia
										</option>
										<option value="Cameroon:+237">
											Cameroon
										</option>
										<option value="Canada:+1">
											Canada
										</option>
										<option value="Cape Verde:+238">
											Cape Verde
										</option>
										<option value="Cayman Islands:+ 345">
											Cayman Islands
										</option>
										<option value="Central African Republic:+236">
											Central African Republic
										</option>
										<option value="Chad:+235">
											Chad
										</option>
										<option value="Chile:+56">
											Chile
										</option>
										<option value="China:+86">
											China
										</option>
										<option value="Christmas Island:+61">
											Christmas Island
										</option>
										<option value="Cocos (Keeling) Islands:+61">
											Cocos (Keeling) Islands
										</option>
										<option value="Colombia:+57">
											Colombia
										</option>
										<option value="Comoros:+269">
											Comoros
										</option>
										<option value="Congo:+242">
											Congo
										</option>
										<option value="The Democratic Republic of the Congo:+243">
											The Democratic Republic of the Congo
										</option>
										<option value="Cook Islands:+682">
											Cook Islands
										</option>
										<option value="Costa Rica:+506">
											Costa Rica
										</option>
										<option value="Cote d&#039;Ivoire:+225">
											Cote d&#039;Ivoire
										</option>
										<option value="Croatia:+385">
											Croatia
										</option>
										<option value="Cuba:+53">
											Cuba
										</option>
										<option value="Cyprus:+357">
											Cyprus
										</option>
										<option value="Czech Republic:+420">
											Czech Republic
										</option>
										<option value="Denmark:+45">
											Denmark
										</option>
										<option value="Djibouti:+253">
											Djibouti
										</option>
										<option value="Dominica:+1767">
											Dominica
										</option>
										<option value="Dominican Republic:+1849">
											Dominican Republic
										</option>
										<option value="Ecuador:+593">
											Ecuador
										</option>
										<option value="Egypt:+20">
											Egypt
										</option>
										<option value="El Salvador:+503">
											El Salvador
										</option>
										<option value="Equatorial Guinea:+240">
											Equatorial Guinea
										</option>
										<option value="Eritrea:+291">
											Eritrea
										</option>
										<option value="Estonia:+372">
											Estonia
										</option>
										<option value="Ethiopia:+251">
											Ethiopia
										</option>
										<option value="Falkland Islands (Malvinas):+500">
											Falkland Islands (Malvinas)
										</option>
										<option value="Faroe Islands:+298">
											Faroe Islands
										</option>
										<option value="Fiji:+679">
											Fiji
										</option>
										<option value="Finland:+358">
											Finland
										</option>
										<option value="France:+33">
											France
										</option>
										<option value="French Guiana:+594">
											French Guiana
										</option>
										<option value="French Polynesia:+689">
											French Polynesia
										</option>
										<option value="Gabon:+241">
											Gabon
										</option>
										<option value="Gambia:+220">
											Gambia
										</option>
										<option value="Georgia:+995">
											Georgia
										</option>
										<option value="Germany:+49">
											Germany
										</option>
										<option value="Ghana:+233">
											Ghana
										</option>
										<option value="Gibraltar:+350">
											Gibraltar
										</option>
										<option value="Greece:+30">
											Greece
										</option>
										<option value="Greenland:+299">
											Greenland
										</option>
										<option value="Grenada:+1473">
											Grenada
										</option>
										<option value="Guadeloupe:+590">
											Guadeloupe
										</option>
										<option value="Guam:+1671">
											Guam
										</option>
										<option value="Guatemala:+502">
											Guatemala
										</option>
										<option value="Guernsey:+44">
											Guernsey
										</option>
										<option value="Guinea:+224">
											Guinea
										</option>
										<option value="Guinea-Bissau:+245">
											Guinea-Bissau
										</option>
										<option value="Guyana:+595">
											Guyana
										</option>
										<option value="Haiti:+509">
											Haiti
										</option>
										<option value="Holy See (Vatican City State):+379">
											Holy See (Vatican City State)
										</option>
										<option value="Honduras:+504">
											Honduras
										</option>
										<option value="Hong Kong:+852">
											Hong Kong
										</option>
										<option value="Hungary:+36">
											Hungary
										</option>
										<option value="Iceland:+354">
											Iceland
										</option>
										<option value="India:+91">
											India
										</option>
										<option value="Indonesia:+62">
											Indonesia
										</option>
										<option value="Islamic Republic of Persian Gulf:+98">
											Islamic Republic of Persian Gulf
										</option>
										<option value="Iraq:+964">
											Iraq
										</option>
										<option value="Ireland:+353">
											Ireland
										</option>
										<option value="Isle of Man:+44">
											Isle of Man
										</option>
										<option value="Israel:+972">
											Israel
										</option>
										<option value="Italy:+39">
											Italy
										</option>
										<option value="Jamaica:+1876">
											Jamaica
										</option>
										<option value="Japan:+81">
											Japan
										</option>
										<option value="Jersey:+44">
											Jersey
										</option>
										<option value="Jordan:+962">
											Jordan
										</option>
										<option value="Kazakhstan:+77">
											Kazakhstan
										</option>
										<option value="Kenya:+254">
											Kenya
										</option>
										<option value="Kiribati:+686">
											Kiribati
										</option>
										<option value="Democratic People&#039;s Republic of Korea:+850">
											Democratic People&#039;s Republic of Korea
										</option>
										<option value="Republic of South Korea:+82">
											Republic of South Korea
										</option>
										<option value="Kuwait:+965">
											Kuwait
										</option>
										<option value="Kyrgyzstan:+996">
											Kyrgyzstan
										</option>
										<option value="Laos:+856">
											Laos
										</option>
										<option value="Latvia:+371">
											Latvia
										</option>
										<option value="Lebanon:+961">
											Lebanon
										</option>
										<option value="Lesotho:+266">
											Lesotho
										</option>
										<option value="Liberia:+231">
											Liberia
										</option>
										<option value="Libyan Arab Jamahiriya:+218">
											Libyan Arab Jamahiriya
										</option>
										<option value="Liechtenstein:+423">
											Liechtenstein
										</option>
										<option value="Lithuania:+370">
											Lithuania
										</option>
										<option value="Luxembourg:+352">
											Luxembourg
										</option>
										<option value="Macao:+853">
											Macao
										</option>
										<option value="Macedonia:+389">
											Macedonia
										</option>
										<option value="Madagascar:+261">
											Madagascar
										</option>
										<option value="Malawi:+265">
											Malawi
										</option>
										<option value="Malaysia:+60">
											Malaysia
										</option>
										<option value="Maldives:+960">
											Maldives
										</option>
										<option value="Mali:+223">
											Mali
										</option>
										<option value="Malta:+356">
											Malta
										</option>
										<option value="Marshall Islands:+692">
											Marshall Islands
										</option>
										<option value="Martinique:+596">
											Martinique
										</option>
										<option value="Mauritania:+222">
											Mauritania
										</option>
										<option value="Mauritius:+230">
											Mauritius
										</option>
										<option value="Mayotte:+262">
											Mayotte
										</option>
										<option value="Mexico:+52">
											Mexico
										</option>
										<option value="Federated States of Micronesia:+691">
											Federated States of Micronesia
										</option>
										<option value="Moldova:+373">
											Moldova
										</option>
										<option value="Monaco:+377">
											Monaco
										</option>
										<option value="Mongolia:+976">
											Mongolia
										</option>
										<option value="Montenegro:+382">
											Montenegro
										</option>
										<option value="Montserrat:+1664">
											Montserrat
										</option>
										<option value="Morocco:+212">
											Morocco
										</option>
										<option value="Mozambique:+258">
											Mozambique
										</option>
										<option value="Myanmar:+95">
											Myanmar
										</option>
										<option value="Namibia:+264">
											Namibia
										</option>
										<option value="Nauru:+674">
											Nauru
										</option>
										<option value="Nepal:+977">
											Nepal
										</option>
										<option value="Netherlands:+31">
											Netherlands
										</option>
										<option value="Netherlands Antilles:+599">
											Netherlands Antilles
										</option>
										<option value="New Caledonia:+687">
											New Caledonia
										</option>
										<option value="New Zealand:+64">
											New Zealand
										</option>
										<option value="Nicaragua:+505">
											Nicaragua
										</option>
										<option value="Niger:+227">
											Niger
										</option>
										<option value="Nigeria:+234">
											Nigeria
										</option>
										<option value="Niue:+683">
											Niue
										</option>
										<option value="Norfolk Island:+672">
											Norfolk Island
										</option>
										<option value="Northern Mariana Islands:+1670">
											Northern Mariana Islands
										</option>
										<option value="Norway:+47">
											Norway
										</option>
										<option value="Oman:+968">
											Oman
										</option>
										<option value="Pakistan:+92">
											Pakistan
										</option>
										<option value="Palau:+680">
											Palau
										</option>
										<option value="Palestinian Territory, Occupied:+970">
											Palestinian Territory, Occupied
										</option>
										<option value="Panama:+507">
											Panama
										</option>
										<option value="Papua New Guinea:+675">
											Papua New Guinea
										</option>
										<option value="Paraguay:+595">
											Paraguay
										</option>
										<option value="Peru:+51">
											Peru
										</option>
										<option value="Philippines:+63">
											Philippines
										</option>
										<option value="Pitcairn:+872">
											Pitcairn
										</option>
										<option value="Poland:+48">
											Poland
										</option>
										<option value="Portugal:+351">
											Portugal
										</option>
										<option value="Puerto Rico:+1939">
											Puerto Rico
										</option>
										<option value="Qatar:+974">
											Qatar
										</option>
										<option value="Romania:+40">
											Romania
										</option>
										<option value="Russia:+7">
											Russia
										</option>
										<option value="Rwanda:+250">
											Rwanda
										</option>
										<option value="Reunion:+262">
											Reunion
										</option>
										<option value="Saint Barthelemy:+590">
											Saint Barthelemy
										</option>
										<option value="Saint Helena, Ascension and Tristan Da Cunha:+290">
											Saint Helena, Ascension and Tristan Da Cunha
										</option>
										<option value="Saint Kitts and Nevis:+1869">
											Saint Kitts and Nevis
										</option>
										<option value="Saint Lucia:+1758">
											Saint Lucia
										</option>
										<option value="Saint Martin:+590">
											Saint Martin
										</option>
										<option value="Saint Pierre and Miquelon:+508">
											Saint Pierre and Miquelon
										</option>
										<option value="Saint Vincent and the Grenadines:+1784">
											Saint Vincent and the Grenadines
										</option>
										<option value="Samoa:+685">
											Samoa
										</option>
										<option value="San Marino:+378">
											San Marino
										</option>
										<option value="Sao Tome and Principe:+239">
											Sao Tome and Principe
										</option>
										<option value="Saudi Arabia:+966">
											Saudi Arabia
										</option>
										<option value="Senegal:+221">
											Senegal
										</option>
										<option value="Serbia:+381">
											Serbia
										</option>
										<option value="Seychelles:+248">
											Seychelles
										</option>
										<option value="Sierra Leone:+232">
											Sierra Leone
										</option>
										<option value="Singapore:+65">
											Singapore
										</option>
										<option value="Slovakia:+421">
											Slovakia
										</option>
										<option value="Slovenia:+386">
											Slovenia
										</option>
										<option value="Solomon Islands:+677">
											Solomon Islands
										</option>
										<option value="Somalia:+252">
											Somalia
										</option>
										<option value="South Africa:+27">
											South Africa
										</option>
										<option value="South Sudan:+211">
											South Sudan
										</option>
										<option value="South Georgia and the South Sandwich Islands:+500">
											South Georgia and the South Sandwich Islands
										</option>
										<option value="Spain:+34">
											Spain
										</option>
										<option value="Sri Lanka:+94">
											Sri Lanka
										</option>
										<option value="Sudan:+249">
											Sudan
										</option>
										<option value="Suriname:+597">
											Suriname
										</option>
										<option value="Svalbard and Jan Mayen:+47">
											Svalbard and Jan Mayen
										</option>
										<option value="Swaziland:+268">
											Swaziland
										</option>
										<option value="Sweden:+46">
											Sweden
										</option>
										<option value="Switzerland:+41">
											Switzerland
										</option>
										<option value="Syrian Arab Republic:+963">
											Syrian Arab Republic
										</option>
										<option value="Taiwan:+886">
											Taiwan
										</option>
										<option value="Tajikistan:+992">
											Tajikistan
										</option>
										<option value="United Republic of Tanzania:+255">
											United Republic of Tanzania
										</option>
										<option value="Thailand:+66">
											Thailand
										</option>
										<option value="Timor-Leste:+670">
											Timor-Leste
										</option>
										<option value="Togo:+228">
											Togo
										</option>
										<option value="Tokelau:+690">
											Tokelau
										</option>
										<option value="Tonga:+676">
											Tonga
										</option>
										<option value="Trinidad and Tobago:+1868">
											Trinidad and Tobago
										</option>
										<option value="Tunisia:+216">
											Tunisia
										</option>
										<option value="Turkey:+90">
											Turkey
										</option>
										<option value="Turkmenistan:+993">
											Turkmenistan
										</option>
										<option value="Turks and Caicos Islands:+1649">
											Turks and Caicos Islands
										</option>
										<option value="Tuvalu:+688">
											Tuvalu
										</option>
										<option value="Uganda:+256">
											Uganda
										</option>
										<option value="Ukraine:+380">
											Ukraine
										</option>
										<option value="United Arab Emirates:+971">
											United Arab Emirates
										</option>
										<option value="United Kingdom:+44">
											United Kingdom
										</option>
										<option selected value="United States:+1">
											United States
										</option>
										<option value="Uruguay:+598">
											Uruguay
										</option>
										<option value="Uzbekistan:+998">
											Uzbekistan
										</option>
										<option value="Vanuatu:+678">
											Vanuatu
										</option>
										<option value="Bolivarian Republic of Venezuela:+58">
											Bolivarian Republic of Venezuela
										</option>
										<option value="Vietnam:+84">
											Vietnam
										</option>
										<option value="Virgin Islands, British:+1284">
											Virgin Islands, British
										</option>
										<option value="Virgin Islands, U.S.:+1340">
											Virgin Islands, U.S.
										</option>
										<option value="Wallis and Futuna:+681">
											Wallis and Futuna
										</option>
										<option value="Yemen:+967">
											Yemen
										</option>
										<option value="Zambia:+260">
											Zambia
										</option>
										<option value="Zimbabwe:+263">
											Zimbabwe
										</option>

									</select>
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="single-field">
									<label class="form-label" for="invite">Referral Code</label>
									<input class="form-control" type="text" name="referral" value="" />
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="single-field">
									<label class="form-label" for="password">Password<span class="required-field">*</span></label>
									<div class="password">
										<input class="form-control" type="password" name="password" required />
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="single-field">
									<label class="form-label" for="password">Confirm Password<span
											class="required-field">*</span></label>
									<div class="password">
										<input class="form-control" type="password" name="confirm_password" required />
									</div>
								</div>
							</div>
							<div class="col-12 mb-4">
								<div class="d-flex align-items-center gap-2 form-check">
									<input class="form-check-input check-input mb-auto" type="checkbox" name="i_agree" value="yes"
										id="flexCheckDefault" required />
									<label class="form-check-label " for="flexCheckDefault">
										I agree with Velloxa Wealth
										<a href="../terms-and-conditions" class="text-decoration-none text-muted p-0">Terms &amp; Condition</a>
									</label>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn bg-primary w-100 submit-btn text-white">
									Create Account
								</button>
							</div>
						</form>
					</div>
				</div>

				<div class="text-center mt-3">
					<p class="text-muted small">Already have an account? <a href="login" class="btn p-0">Sign
							in</a></p>
				</div>

				<div class="text-center mt-3">
					<button class="btn" id="authThemeToggle">
						<i class="bi bi-sun-fill" id="authThemeIcon"></i>
						<span id="authThemeText">Light Mode</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'd57e83f0cd225ad264771ba0a3a539b07ded6f9f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>

</html>