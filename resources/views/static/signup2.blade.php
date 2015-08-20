<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>VIM - Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        @include('assets.notify_header')
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		{!! Html::style('css/foundation-datepicker.min.css') !!}
		{!! Html::style('http://fonts.googleapis.com/css?family=PT+Sans:400,700') !!}
		{!! Html::style('css/foundation.css') !!}
		{!! Html::style('css/proyecto.form.css') !!}
    </head>

    <body style="border-top: 3px solid #fff;">
<div class='notifications top-right'></div>
<div class='notifications bottom-right'></div>
<div class='notifications top-left'></div>
<div class='notifications bottom-left'></div>
	
        <!-- Header -->
        <div class="container">
            <div class="header row" style="border-bottom: 3px solid #dc222b;" >
                <div class="large-4 columns">
                    {!! Html::decode(Html::link('/',Html::image('img/logo2.png',null,array('style'=>'width:15%;margin-top:10px;')))) !!}
                </div>
                <div class="tel-skype large-8 columns">
                    <p><i class="step fi-telephone size-72"></i> Phone: 0039 123 45 679 </p>
                </div>
            </div>
        </div>
<section>
        	
<div id="eventicaforms">

			<ul id="progressbar">
				<li class="active">Basic Info</li>
				<li class="cactive">Profile</li>
				<li class="cactive">Experience</li>
				<li class="cactive">Availability</li>
				<li class="cactive">Legal</li>
			</ul>

			<!-- fieldsets -->

			<fieldset>

			<form id="basicuser" data-abide="ajax">
				{!! Form::token() !!}
				<h2 class="fs-title">Sign Up / Basic Information</h2>

				<div class="row" style="height:200px; border:1px solid #404040;border-radius:8px;">
				</div><br>

				<div class="row">
					<div class="large-2 columns">
						<label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
						 <div class="large-4 columns">
						   <input type="text" id="tca_border_text" placeholder="First Name" name="first_name" required pattern="[a-zA-Z]+"/>
						   <small class="error">first name is required and must be a real name.</small>
						 </div>
						 <div class="large-4 columns">
						   <input type="text" id="tca_border_text" placeholder="Middle Initial" name="midinit_name" pattern="[a-zA-Z]+"/>
						</div>
						<div class="large-4 columns">
						   <input type="text" id="tca_border_text" placeholder="Last Name" name="last_name" required pattern="[a-zA-Z]+"/>
						   <small class="error">last name is required.</small>
						</div>
											
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Nickname:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="nickname" pattern="[a-zA-Z]+"/>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Date:</font></label>
								</div>
								<div class="large-6 columns">
									<div class="row">
										<div class="large-12 columns">
											<input type="text" class="span2" required pattern="(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)" data-date-format="mm/dd/yy" id="datepicker" name="date">
											   <small class="error">valid date is required.</small>
										</div>
									
									</div>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row ">
							  <div class="large-2 columns">
							     <label class="inline">Email: </label>
    						  </div>
    						  <div class="large-6 columns">
							   <div class="email-field">
								  <input name="email" id="email" placeholder="email@domain.com" type="email" required>
								</label>
								<small class="error" id="email_reg">Email is required and must be like someone@somedomain.com .</small>
							  </div>

    						  </div><div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Password:</font></label>
								</div>
								<div class="large-6 columns">
									<div class="password-field">
									      <input type="password" placeholder="Password" id="password" required pattern="[a-zA-Z]+">
									      <small class="error">Your password must match the requirements</small>
									  </div>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-6 large-offset-2 columns">
									  <div class="password-confirmation-field">
									      <input type="password" placeholder="Confirm password" required pattern="[a-zA-Z]+" data-equalto="password">
									      <small class="error">The password did not match</small>
									  </div>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Referred By:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="referred" required pattern="[a-zA-Z]+"/>
									<small class="error">referred is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div><br>

				<h2 class="fs-title">Contact Information</h2>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Address Line 1:</font></label>
								</div>
								<div class="large-6 columns"> 
									<input type="text" id="tca_border_text" name="address1" placeholder="Number, street" required pattern="[a-zA-Z]+"/>
									<small class="error">address is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Address Line 2:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="address2" placeholder="Apt#,Suite, etc.. " pattern="[a-zA-Z]+"/>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-6 large-offset-2 columns">
									<div class="row">
										<div class="large-6 columns">
			    							<input type="text" placeholder="City" id="tca_border_text" name="city" required pattern="[a-zA-Z]+"/>
											   <small class="error">City is required.</small>
										 </div>
										<div class="large-3 columns">
											<label>
    								<select name="state" required>
    									<option value="" disabled selected>State</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	<option value="AZ">AZ</option>
                                    	<option value="AR">AR</option>
                                    	<option value="CA">CA</option>
                                    	
                                    	<option value="CO">CO</option>
                                    	<option value="CT">CT</option>
                                    	<option value="DE">DE</option>
                                    	<option value="DC">DC</option>
                                    	<option value="FL">FL</option>
                                    	
                                    	<option value="GA">GA</option>
                                    	<option value="HI">HI</option>
                                    	<option value="ID">ID</option>
                                    	<option value="IL">IL</option>
                                    	<option value="IN">IN</option>
                                    	
                                    	<option value="IA">IA</option>
                                    	<option value="KS">KS</option>
                                    	<option value="KY">KY</option>
                                    	<option value="LA">LA</option>
                                    	<option value="ME">ME</option>
                                    	
                                    	<option value="MD">MD</option>
                                    	<option value="MA">MA</option>
                                    	<option value="MI">MI</option>
                                    	<option value="MN">MN</option>
                                    	<option value="MS">MS</option>
                                    	
                                    	<option value="MO">MO</option>
                                    	<option value="MT">MT</option>
                                    	<option value="NE">NE</option>
                                    	<option value="NV">NV</option>
                                    	<option value="NH">NH</option>
                                    	
                                    	<option value="NJ">NJ</option>
                                    	<option value="NM">NM</option>
                                    	<option value="NY">NY</option>
                                    	<option value="NC">NC</option>
                                    	<option value="ND">ND</option>
                                    	
                                    	<option value="OH">OH</option>
                                    	<option value="OK">OK</option>
                                    	<option value="OR">OR</option>
                                    	<option value="PA">PA</option>
                                    	<option value="RI">RI</option>
                                    	
                                    	<option value="SC">SC</option>
                                    	<option value="SD">SD</option>
                                    	<option value="TN">TN</option>
                                    	<option value="TX">TX</option>
                                    	<option value="UT">UT</option>
                                    	
                                    	<option value="VT">VT</option>
                                    	<option value="VA">VA</option>
                                    	<option value="WA">WA</option>
                                    	<option value="WV">WV</option>
                                    	<option value="WI">WI</option>
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
										<div class="large-3 columns">
												  <input type="text" placeholder="Zip" id="tca_border_text" name="zip" required pattern="number"/>
											<small class="error">Zip Code is required.</small>
										</div>
									
									</div>
								</div>
								<div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Phone:</font></label>
								</div>
								<div class="large-3 columns">
									<input type="text" placeholder="(000) 000-0000" id="phoneme" name="phone" required pattern="phonenumber" >
									
									<small class="error">Phone Number is required and must be numbers .</small>
								</div>
								<div class="large-7 columns"></div>
				</div>


				<h2 class="fs-title">Mailing Address</h2>

				<div class="row">
								<div class="large-2 large-offset-2 columns">
									<input id="same_as_home_mailing" type="checkbox" />
									
								</div>
								<div class="large-8 columns left" style="text-align:left;">
									<label for="same_as_home_mailing">Same as Home Address</label>
								</div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Address Line 1:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" placeholder="Number , Street " name="shipadress1" required pattern="[a-zA-Z]+"/>
									<small class="error">address is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Address Line 2:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" placeholder="Apt#,Suite, etc. " name="shipadress2" pattern="[a-zA-Z]+"/>
								</div>
								<div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-6 large-offset-2 columns">
									<div class="row">
										<div class="large-6 columns">
			    							<input type="text" placeholder="City" id="tca_border_text" name="shipcity" required pattern="[a-zA-Z]+"/>
											   <small class="error">City is required.</small>
										 </div>
										<div class="large-3 columns">
											<label>
    								<select name="shipstate" required>
    								    <option value="" disabled selected>State</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	<option value="AZ">AZ</option>
                                    	<option value="AR">AR</option>
                                    	<option value="CA">CA</option>
                                    	
                                    	<option value="CO">CO</option>
                                    	<option value="CT">CT</option>
                                    	<option value="DE">DE</option>
                                    	<option value="DC">DC</option>
                                    	<option value="FL">FL</option>
                                    	
                                    	<option value="GA">GA</option>
                                    	<option value="HI">HI</option>
                                    	<option value="ID">ID</option>
                                    	<option value="IL">IL</option>
                                    	<option value="IN">IN</option>
                                    	
                                    	<option value="IA">IA</option>
                                    	<option value="KS">KS</option>
                                    	<option value="KY">KY</option>
                                    	<option value="LA">LA</option>
                                    	<option value="ME">ME</option>
                                    	
                                    	<option value="MD">MD</option>
                                    	<option value="MA">MA</option>
                                    	<option value="MI">MI</option>
                                    	<option value="MN">MN</option>
                                    	<option value="MS">MS</option>
                                    	
                                    	<option value="MO">MO</option>
                                    	<option value="MT">MT</option>
                                    	<option value="NE">NE</option>
                                    	<option value="NV">NV</option>
                                    	<option value="NH">NH</option>
                                    	
                                    	<option value="NJ">NJ</option>
                                    	<option value="NM">NM</option>
                                    	<option value="NY">NY</option>
                                    	<option value="NC">NC</option>
                                    	<option value="ND">ND</option>
                                    	
                                    	<option value="OH">OH</option>
                                    	<option value="OK">OK</option>
                                    	<option value="OR">OR</option>
                                    	<option value="PA">PA</option>
                                    	<option value="RI">RI</option>
                                    	
                                    	<option value="SC">SC</option>
                                    	<option value="SD">SD</option>
                                    	<option value="TN">TN</option>
                                    	<option value="TX">TX</option>
                                    	<option value="UT">UT</option>
                                    	
                                    	<option value="VT">VT</option>
                                    	<option value="VA">VA</option>
                                    	<option value="WA">WA</option>
                                    	<option value="WV">WV</option>
                                    	<option value="WI">WI</option>
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
										<div class="large-3 columns">
												  <input type="text" placeholder="Zip" id="tca_border_text" name="shipzip" required pattern="number"/>
											<small class="error">Zip Code is required.</small>
										</div>
									
									</div>
								</div>
								<div class="large-4 columns"></div>
				</div>

				<h2 class="fs-title">Emergency Contact Information</h2>

				<div class="row">
					<div class="large-2 columns">
											   <label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="First Name" name="emrgncyfirst_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">first name is required and must be a real name.</small>
											 </div>
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="Last Name" name="emrgncylast_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">last name is required.</small>
											</div>
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-6 large-offset-2 columns">
									<div class="row">
										
										<div class="large-6 columns">
											<label>
			    								<select placeholder="relation" name="emrgncyrelation">
													<option value="" disabled selected>Relation</option>
			                                    	<option value="Mother" >Mother</option>
			                                    	<option value="Father">Father</option>
			                                    	<option value="Grand Parent">Grand Parent</option>
			                                    	<option value="Brother">Brother</option>
			                                    	<option value="Sister">Sister</option>
			                                    	<option value="Child">Child</option>
			                                    	<option value="Friend">Friend</option>
			                                    	<option value="Aunt">Aunt</option>
			                                    	<option value="Uncle">Uncle</option>
			                                    	<option value="Partner">Partner</option>
			    								  
			    								</select>
			    							</label>
										</div><div class="large-6 columns"></div>
									
									</div>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Address Line 1:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" placeholder="Number , Street " name="emrgncyadress1" required pattern="[a-zA-Z]+"/><small class="error">Address is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Address Line 2:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" placeholder="Apt#, Suite, etc." name="emrgncyadress2" pattern="[a-zA-Z]+"/>
								</div>
								<div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-6 large-offset-2 columns">
									<div class="row">
										<div class="large-6 columns">
			    							<input type="text" placeholder="City" id="tca_border_text" name="emrgncycity" required pattern="[a-zA-Z]+"/>
											   <small class="error">City is required.</small>
										 </div>
										<div class="large-3 columns">
											<label>
    								<select name="emrgncystate" required>
    									<option value="" disabled selected>State</option>
                                    	<option value="AL" >AL</option>
                                    	<option value="AK">AK</option>
                                    	<option value="AZ">AZ</option>
                                    	<option value="AR">AR</option>
                                    	<option value="CA">CA</option>
                                    	
                                    	<option value="CO">CO</option>
                                    	<option value="CT">CT</option>
                                    	<option value="DE">DE</option>
                                    	<option value="DC">DC</option>
                                    	<option value="FL">FL</option>
                                    	
                                    	<option value="GA">GA</option>
                                    	<option value="HI">HI</option>
                                    	<option value="ID">ID</option>
                                    	<option value="IL">IL</option>
                                    	<option value="IN">IN</option>
                                    	
                                    	<option value="IA">IA</option>
                                    	<option value="KS">KS</option>
                                    	<option value="KY">KY</option>
                                    	<option value="LA">LA</option>
                                    	<option value="ME">ME</option>
                                    	
                                    	<option value="MD">MD</option>
                                    	<option value="MA">MA</option>
                                    	<option value="MI">MI</option>
                                    	<option value="MN">MN</option>
                                    	<option value="MS">MS</option>
                                    	
                                    	<option value="MO">MO</option>
                                    	<option value="MT">MT</option>
                                    	<option value="NE">NE</option>
                                    	<option value="NV">NV</option>
                                    	<option value="NH">NH</option>
                                    	
                                    	<option value="NJ">NJ</option>
                                    	<option value="NM">NM</option>
                                    	<option value="NY">NY</option>
                                    	<option value="NC">NC</option>
                                    	<option value="ND">ND</option>
                                    	
                                    	<option value="OH">OH</option>
                                    	<option value="OK">OK</option>
                                    	<option value="OR">OR</option>
                                    	<option value="PA">PA</option>
                                    	<option value="RI">RI</option>
                                    	
                                    	<option value="SC">SC</option>
                                    	<option value="SD">SD</option>
                                    	<option value="TN">TN</option>
                                    	<option value="TX">TX</option>
                                    	<option value="UT">UT</option>
                                    	
                                    	<option value="VT">VT</option>
                                    	<option value="VA">VA</option>
                                    	<option value="WA">WA</option>
                                    	<option value="WV">WV</option>
                                    	<option value="WI">WI</option>
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
										<div class="large-3 columns">
												  <input type="text" placeholder="Zip" id="tca_border_text" name="emrgncyzip" required pattern="number"/>
											<small class="error">Zip Code is required.</small>
										</div>
									
									</div>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Phone:</font></label>
								</div>
								<div class="large-3 columns">
									<input type="text" placeholder="(000) 000-0000" id="emrgncyphone" name="emrgncyphone" required pattern="phonenumber">
									
									<small class="error">Phone Number is required and must be numbers .</small>
								</div>
								<div class="large-7 columns"></div>
				</div>
				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Please provide any information we should know in case of an emergency:</font></label>
								</div>
								<div class="large-6 columns">
									<textarea rows="6" type="text"  id="tca_border_text" name="emrgncyinfo"></textarea>
									
								</div>
								<div class="large-4 columns"></div>
				</div>


				<input type="submit"  class="nextbasic action-button" value="Next" />
			</form>
			</fieldset>
		</div>
 </section>

		@include('assets.notify_footer')
		{!! Html::script("js/form.fast.js")!!}
		{!! Html::script('js/jquery.easing.1.3.js')!!}
		{!! Html::script("js/foundation.min.js")!!}
		{!! Html::script("js/format/format.js")!!}
		{!! Html::script('js/foundation-datepicker.min.js') !!}
		
	    <script>
	      $(document).foundation({
			  abide : {
			    patterns : {
			      alpha: /^[a-zA-Z]+$/,
			      alpha_numeric : /^[a-zA-Z0-9]+$/,
			      integer: /^[-+]?\d+$/,
			      phonenumber:/^[(]?\b[0-9]{3}[)][ ]?\b[0-9]{3}-[0-9]{4}\b$/,
				  email : /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(yahoo|hotmail|gmail)\.com*$/,
			    }
			  }
			});
	    </script>
	    <script type="text/javascript">
			jQuery(function($) {
			      $('#phoneme').mask('(999) 999-9999',{placeholder:" "});
			      $('#emrgncyphone').mask('(999) 999-9999',{placeholder:" "});
			   });
		</script>
		<script>
		jQuery(document).ready(function($) {
			/*invocando error del input*/
			/*$("#email").attr('data-invalid','');
			$("#email").attr("aria-invalid", "true");
			$("#email").parent().addClass(' error');*/
		});
		</script>
	    

    </body>

</html>

