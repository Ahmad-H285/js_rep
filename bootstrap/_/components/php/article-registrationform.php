<article class="registrationform">
	<h2>Registration form</h2>
	<p>We're not currently taking registrations for the Roux Academy Conference, but if you want to be placed into our mailing list for more information, please complete the form below.</p>

	<form class="registration form-horizontal" action="#">

	  <fieldset id="personalinfo">
	    <legend>Personal Info</legend>
			<section class="row">
				<label class="col col-lg-4 control-label" for="myname">Name</label>
				<div class="control">
					<input type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
				</div>

			</section>
				
				<label for="companyname">Company Name</label>
				<input type="text" name="companybname" id="companyname" />

				<label for="myemail">Email</label>
				<input type="email" name="myemail" id="myemail" required autocomplete="off" />

	  </fieldset><!-- personal info -->

	  <fieldset id="otherinfo">
			<legend>Other Info</legend>

		  	<label>Request Type</label>
					<label class="radio">
						<input type="radio" name="requesttype" value="question" /> Question
					</label>

					<label class="radio">
						<input type="radio" name="requesttype" value="comment" /> Comment
					</label>
				
		  	<label>Subscribe</label>
					<label class="checkbox">
						<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
						Would you like to subscribe to our e-mail list?
					</label>
			
		  	<label for="reference">How did you hear about the Roux Academy Conference?</label>
					<select   name="reference" id="reference">
						<option>Choose...</option>
						<option value="friend">A friend</option>
						<option value="facebook">Facebook</option>
						<option value="twitter">Twitter</option>
					</select>
			
	  </fieldset>
	  <button type="submit">Submit</button>
	</form>
</article>