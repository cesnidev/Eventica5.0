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
		{!! Html::style('css/fileup/dropzone.css') !!}
		{!! Html::style('http://fonts.googleapis.com/css?family=PT+Sans:400,700') !!}
		{!! Html::style('css/foundation.css') !!}
		{!! Html::style('css/proyecto.form.css') !!}
		{!! Html::style('css/test/coming-soon-style.css') !!}
		{!! Html::style('css/foundation-icons.css') !!}
		{!! Html::script('js/modernizr.custom.34978.js') !!}
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
                    {!! Html::decode(Html::link('/',Html::image('img/logo2.png',null,array('style'=>'width:30%;margin-top:10px;')))) !!}
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
				<li class="">Profile</li>
				<li class="">Experience</li>
				<li class="">Availability</li>
				<li class="">Legal</li>

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
											 
						 <div class="large-6 columns">
						   <input type="text" id="tca_border_text" placeholder="First Name" name="first_name" required pattern="[a-zA-Z]+"/>
						   <small class="error">first name is required and must be a real name.</small>
						 </div>
						 <!--<div class="large-4 columns">
						   <input type="text" id="tca_border_text" placeholder="Middle Initial" name="midinit_name" required pattern="[a-zA-Z]+"/>
						   <small class="error">Middle Initial is required.</small>
						</div>-->
						<div class="large-6 columns">
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
									<input type="text" id="tca_border_text" name="nickname" required pattern="[a-zA-Z]+"/>
									<small class="error">nickname is required.</small>
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
								  <input name="email" id="tca_border_text" placeholder="email@tcaprep.com" type="email" required>
								</label>
								<small class="error">Email is required and must be like someone@somedomain.com .</small>
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
                                    	<option selected="selected" value="AL">AL</option>
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
									<input type="text" placeholder="(000)-000 0000" id="tca_border_text" name="phone" required pattern="number">
									
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
    								    <option selected="selected">State</option>
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
			    								<select name="emrgncyrelation">
			    								    <option >Relation</option>
			                                    	<option value="AL" selected="selected">AL</option>
			                                    	<option value="AK">AK</option>
			                                    	<option value="AZ">AZ</option>
			                                    	<option value="AR">AR</option>
			                                    	<option value="CA">CA</option>
			                                    	
			                                    	<option value="CO">CO</option>
			                                    	<option value="CT">CT</option>
			                                    	<option value="DE">DE</option>
			    								  
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
									<input type="text" id="tca_border_text" placeholder="Number , Street " name="emrgncyadress1" required pattern="[a-zA-Z]+"/>
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
                                    	<option value="AL" selected="selected">AL</option>
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
									<input type="text" placeholder="(000)-000 0000" id="tca_border_text" name="emrgncyphone" required pattern="number">
									
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
			<fieldset>
			<form id="profile" data-abide="ajax">
				<h2 class="fs-title">Gender</h2>
				
				<div class="row">
								<div class="large-2 columns">
										<div class="right">Male</div>
								</div>
								<div class="large-2 columns">
									<div class="switch round large">
									  <input id="gender" type="checkbox">
									  <label for="gender"></label>
									</div>
								</div>
								<div class="large-2 columns">
									Female
								</div>

								<div class="large-5 columns"></div>
				</div>
				<br><hr>
				<h2 class="fs-title">Characteristics (for Outfits, Costumes, Roles, Casting, Characters, etc)</h2>

				<div class="row">
								<div class="large-6 columns">
									<div class="row">
										<div class="large-6 columns">
											<div class="row collapse">
        									<label class="left">Height</label>
									        <div class="small-12 columns">
									          		<label>
    								<select name="state" required>
    								    <option selected="selected">--</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	 
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
									        </div>
									      </div>
										</div>
										<div class="large-6 columns">
											<div class="row collapse">
        									<label>Weight</label>
									        <div class="small-9 columns">
									          <input type="text" name="weight" />
									        </div>
									        <div class="small-3 columns">
									          <span class="postfix">Lbs</span>
									        </div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-6 columns"></div>
				</div>

				<div class="row">
								<div class="large-9 columns">
									<div class="row">
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Eye Color</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Hair Color</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Hair Length</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-9 columns">
									<div class="row">
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">T-Shirt Size</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Pants Shorts Size</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Shoe Size</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<br><hr>
				<h2 class="fs-title">Male Specific</h2>

				<div class="row">
								<div class="large-9 columns">
									<div class="row">
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Chest</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Jacket Size</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Waist</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				
				<br><hr>
				<h2 class="fs-title">Female Specific</h2>

				<div class="row">
								<div class="large-9 columns">
									<div class="row">
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Waist</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Hips</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
										<div class="large-4 columns">
											<div class="row collapse">
        									<label class="left">Dress Size</label>
									        <div class="small-12 columns">
									          	<label>
				    								<select name="state" required>
				    								    <option selected="selected">--</option>
				                                    	<option value="AL">AL</option>
				                                    	<option value="AK">AK</option>
				                                    	 
				    								  
				    								</select>
													<small class="error">State is required.</small>
				    							</label>
											</div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>

				<br><hr>
				<h2 class="fs-title">Language</h2>

				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-6 columns">
											<label class="inline"><font size="-1">Native/First Language:</font></label>
										</div>
										<div class="large-6 columns">
											<label>
    								<select name="state" required>
    								    <option selected="selected">--</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-6 columns">
											<label class="inline"><font size="-1">Second Language:</font></label>
										</div>
										<div class="large-6 columns">
											<label>
    								<select name="state" required>
    								    <option selected="selected">*optional</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Do you speak english with an acent?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="englishacent" type="checkbox">
											  <label for="englishacent"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Do you speak spanish fuently?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="englishfuently" type="checkbox">
											  <label for="englishfuently"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>

				<br><hr>
				<h2 class="fs-title">Piercings/Tattoos</h2>

				<div class="row">
								<div class="large-6 columns">
									<div class="row">
										<div class="large-5 columns">
											<div class="row collapse">
        										<label class="left">Do you have Tattoos?</label>
									        <div class="small-12 columns">
												<div class="switch">
												  <input id="tatoos" type="checkbox">
												  <label for="tatoos"></label>
												</div>
									        </div>
									      </div>
										</div>
										<div class="large-7 columns">
											<div class="row collapse">
        										<label class="left">Do you have Piercings?</label>
									        <div class="small-12 columns">
												<div class="switch">
												  <input id="piercings" type="checkbox">
												  <label for="piercings"></label>
												</div>
									        </div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-6 columns"></div>
				</div>


				<br><hr>
				<h2 class="fs-title">Photos</h2>
				
					<div action="{{ route('subir')}}" class="dropzone showx" >
						<input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>">
					</div>

				<input type="button" name="next" class="nextprofile action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="experience" data-abide="ajax">
				<div class="row">
					<div class="large-6 columns">
						<h2 class="fs-title">Brand Experience</h2><hr>
						<p class="left">Providing a list of brands you're familiar with through past events or personal experience.</p>
					</div>
					<div class="large-6 columns">
						<h2 class="fs-title">Job Experience</h2><hr>
						<p class="left">Providing a list of Jobs that you have worked in the past.</p>
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						<div class="row">
							<p class="left">Enter one brand per field.</p><br>
							<div class="row collapse" id="exp1">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Experience 1">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix">1</a>
						        </div>
						    </div>
						    <div class="row collapse " id="exp2">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Experience 2">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix">2</a>
						        </div>
						    </div>
						    <div class="row collapse " id="exp3">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Experience 3">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix">3</a>
						        </div>
						    </div>
						    <div class="row collapse " id="exp4">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Experience 4">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix">4</a>
						        </div>
						    </div>
						    <div class="row collapse " id="exp5">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Experience 5">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix">5</a>
						        </div>
						    </div>
						</div>
						<div class="row">
							<div class="large-4 columns"><button class="button radius" id="add_exp">+Add</button></div>
							<div class="large-4 columns"><button class="button radius" id="del_exp">Delete</button></div>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="row">
							<p class="left">Enter one job per field.</p><br>
							<div class="row collapse" id="brand1">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Job 1">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix" id="del_job_1">1</a>
						        </div>
						    </div>
						    <div class="row collapse" id="brand2">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Job 2">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix" id="del_job_2">2</a>
						        </div>
						    </div>
						    <div class="row collapse" id="brand3">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Job 3">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix" id="del_job_3">3</a>
						        </div>
						    </div>
						    <div class="row collapse" id="brand4">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Job 4">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix" id="del_job_4">4</a>
						        </div>
						    </div>
						    <div class="row collapse" id="brand5">
						        <div class="small-10 columns">
						          <input type="text" placeholder="Job 5">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="button postfix" id="del_job_5">5</a>
						        </div>
						    </div>
						</div>
						<div class="row">
							<div class="large-4 columns"><button class="button radius" id="add_brand">+Add</button></div>
							<div class="large-4 columns"><button class="button radius" id="del_job">Delete</button></div>
						</div>
					</div>
				</div>


				<br>
				<h2 class="fs-title">Event Experience</h2><hr>

				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-6 columns">
											<label class="inline"><font size="-1">How many events have you worked?</font></label>
										</div>
										<div class="large-6 columns">
											<label>
    								<select name="state" required>
    								    <option selected="selected">--</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-6 columns">
											<label class="inline"><font size="-1">How long have you been doing events:</font></label>
										</div>
										<div class="large-6 columns">
											<label>
    								<select name="state" required>
    								    <option selected="selected">--</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-6 columns">
											<label class="inline"><font size="-1">How many events have you activated?</font></label>
										</div>
										<div class="large-6 columns">
											<label>
    								<select name="state" required>
    								    <option selected="selected">--</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	
                                    	
                                    	<option value="WY">WY</option>
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-7 columns">
											<label class="inline"><font size="-1">Are you TABC Certified?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="tabcertified" type="checkbox">
											  <label for="tabcertified"></label>
											</div>
										</div>
										<div class="large-2 columns"></div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-7 columns">
											<label class="inline" disabled><font size="-1">If yes, please upload license/permit?</font></label>
										</div>
										<div class="large-5 columns">
											<button id="upload_tabc" class="button radius" style="background-color:gray;" disabled>Upload image</button>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>

				<h2 class="fs-title">Special Skills</h2><hr>
					<div class="row">
						<div class="large-9 columns">
							<div class="row">
								<p class="left">
									Special Skills (e.g. dancing, singing, performing, etc.)
								</p>
							</div>
							<div class="row">
								<textarea name="" id="" cols="30" rows="4"></textarea>
							</div>
						</div>
						<div class="large-3 columns"></div>
					</div>
					<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Do you have event technology experience?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="xptech" type="checkbox">
											  <label for="xptech"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
					</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Have you captured event info on a smartphone, tablet or other device?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="cap_info" type="checkbox">
											  <label for="cap_info"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<div class="row">
								<div class="large-7 large-offset-1 columns">
									<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Do you have experience with social media images, data and content, incluiding Facebook, Twitter and other Social Network?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="xpsocial" type="checkbox">
											  <label for="xpsocial"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="large-3 columns"></div>
				</div>
				<h2 class="fs-title">Education</h2><hr>

				<div class="row">
								<div class="large-6 columns">
									<div class="row">
										<div class="large-12 columns">
											<div class="row collapse">
        									<label class="left">What level of education have you completed?</label>
									        <div class="small-6 columns">
									          		<label>
    								<select name="state" required>
    								    <option selected="selected">--</option>
                                    	<option value="AL">AL</option>
                                    	<option value="AK">AK</option>
                                    	 
    								  
    								</select>
									<small class="error">State is required.</small>
    							</label>
									        </div>
									      </div>
										</div>
									</div>
								</div>
								<div class="large-6 columns"></div>
				</div>


				<div class="row">
					<div class="large-6 columns">
						<h2 class="fs-title">Interests</h2><hr>
						<p class="left">Please express the types of promotional industry opportunities you plan to solicit, and accept. (check all that apply)</p>
						<div class="row">
							<div class="large-7 columns">
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Event Modeling</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Flash Mob/Guerilla</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Tradeshow</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Sampling</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Indoor</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Driving</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Host/Hostess</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Promotions on Social Media Sites</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Tech Product Specialist</label>
									</div>
								</div>
							</div>
							<div class="large-5 columns">
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Street Team</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">In-Store Demostration</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">National Tours</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Liquor</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Outdoor</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Costume</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Set Up/Break-down</label>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Retail Sales</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="large-6 columns">
						<h2 class="fs-title">Roles</h2><hr>
						<p class="left">For which of the following types of roles would your existing skillset qualify you? (check all that apply)</p>
						<div class="large-6 columns">
							<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Brand Ambassador</label>
									</div>
							</div>
							<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Team Lead</label>
									</div>
							</div>
							<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Emcee</label>
									</div>
							</div>
						</div>
						<div class="large-6 columns">
							<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Model</label>
									</div>
							</div>
							<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Driver</label>
									</div>
							</div>
						</div>
						
					</div>
				</div><br>

				<input type="button" name="next" class="nextexperience action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="availability" data-abide="ajax">
				<h2 class="fs-title">Driving</h2><hr>
				<div class="row">
					<div class="large-6 columns">
						<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Do you have a valid driver's license?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="licensev" type="checkbox">
											  <label for="licensev"></label>
											</div>
										</div>
									
						</div>
						<div class="row center">
							<div class="row">
								<p >If yes, please provide an image of your driver's license</p>
							</div>
							<div class="row">
								<button id="upload_drivlic" class="button radius" style="background-color:gray;" disabled>Upload image</button>
							</div>
									
						</div>
						<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Do you have your own automobile?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="ownmb" type="checkbox">
											  <label for="ownmb"></label>
											</div>
										</div>
									
						</div>
						<div class="row">
										<div class="large-9 columns">
											<label class="inline"><font size="-1">Are you willing to receive event items to your home/apartment?</font></label>
										</div>
										<div class="large-3 columns">
											<div class="switch">
											  <input id="apitm" type="checkbox">
											  <label for="apitm"></label>
											</div>
										</div>
									
						</div>
					</div>
					<div class="large-6 columns"></div>
				</div>
				<h2 class="fs-title">Shifts</h2><hr>
				<div class="row left">
					<strong >Check all that apply</strong><br>
				</div>
				<br><br>
				<div class="row">
				<div class="large-9 columns">
				<div class="row">
					<div class="large-4 columns">
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">One-off/One-day</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Consecutive/Multiple Days</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Consecutive/Multiple Months</label>
									</div>
						</div>
						
					</div>
					<div class="large-4 columns">
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Short Shift(4 hours or less)</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Long Shift(8 hours or more)</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Morning Shift</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Afternoon Shift</label>
									</div>
						</div>
					</div>
					<div class="large-4 columns">
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Last-minute Shifts(24 Hours or less)</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Holiday Shifts</label>
									</div>
						</div>
						<div class="row">
									<div class="large-2 columns">
										<input id="checkbox1" type="checkbox" />
										
									</div>
									<div class="large-10 columns left" >
										<label for="checkbox1">Backup Shifts</label>
									</div>
						</div>
					</div>
				</div></div></div>

				<input type="submit" name="next" class="nextavailability action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="legal" data-abide="ajax">
				
				<h2 class="fs-title">Legal</h2><hr>

				<div class="row">
								<div class="large-10 columns">
									<p>Have you ever been convicted of a felony, or a misdemeanor involving any violent act, use or possession of a weapon or act of dishonesty for which the record has not been sealed or expunged?</p>
								</div>
								<div class="large-2 columns" style="margin-top:10px;">
									<div class="switch round large">
									  <input id="bad" type="checkbox">
									  <label for="bad"></label>
									</div>
								</div>
				</div>
							<div class="row">
								<div class="large-10 columns">
									<p>Are you currently out on bail, the subject of a current warrant for arrest or released on your own recognizance pending trial?</p>
								</div>
								<div class="large-2 columns" style="margin-top:10px;">
									<div class="switch round large">
									  <input id="ar" type="checkbox">
									  <label for="ar"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-10 columns">
									<p>Are you legally allowed to work in the US?</p>
								</div>
								<div class="large-2 columns" style="margin-top:10px;">
									<div class="switch round large">
									  <input id="legally" type="checkbox">
									  <label for="legally"></label>
									</div>
								</div>
							</div>
							<h2 class="fs-title">Social Security</h2><hr>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse prefix-radius">
								        <div class="small-3 columns">
								          <span class="prefix"><i class="step fi-lock size-24"></i></span>
								          <!--<span class="prefix"><i class="step .fi-lock size-18"></i></span>-->
								        </div>
								        <div class="small-9 columns">
								          <input type="text" placeholder="9999-9999-9999">
								        </div>
								     </div>
								     <div class="row">
										<p class="left">Please provide your Social Security Number</p>
									</div>
									<div class="row">
										<a href="#" data-reveal-id="vim_pop">why do we need this?</a>
										<div id="vim_pop" class="reveal-modal tiny" aria-hidden="true" role="dialog" data-reveal>
											<div class="row" align="center">
												<h2>Why need this</h2>
											</div>
											<div class="row" align="center">
											</div>
											<div class="row" align="left">
												<p>
												why need a security number</p>
											</div>
										    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									
								</div>
								<div class="large-4 columns"></div>
							</div>
							
							<div class="row">
								<input id="checkbox1" type="checkbox"><label for="checkbox1">Agree Terms of Service and Privacy Policies</label>
							</div>
							
							<br><br>
					<input type="submit" name="submit" class="nextlegal action-button" value="Submit" />
				
			</form>
			</fieldset>
		</div>
 </section>

		@include('assets.notify_footer')
		{!! Html::script("js/fileup/dropzone.js")!!}
		{!! Html::script("js/proyecto.form.js")!!}
		{!! Html::script("js/jquery.backstretch.min.js")!!}
		{!! Html::script('js/jquery.easing.1.3.js')!!}
		{!! Html::script("js/foundation.min.js")!!}
		<script src="js/foundation-datepicker.min.js"></script>
		
	    <script>
	      $(document).foundation();
	    </script>
	    

    </body>

</html>

