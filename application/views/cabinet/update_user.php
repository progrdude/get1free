<div class="container">
    <div class="row">
        <div style="position: relative" id="progress-bar">
            <div class="step_info d-flex">

                <div class="col">
                    <div class="step_info_step active">
                        <img src="/assets/image/icon-3.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>enter<br> your order id</span>

                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step active">
                        <img src="/assets/image/icon-1.svg" style="width: 100px;">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>spin <br> to win</span>

                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step now">
                        <img src="/assets/image/icon.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>sumbit your delivery<br> information</span>
                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step ">
                        <img src="/assets/image/icon-4.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>share <br>your experience</span>
                    </div>
                </div>
                <div class="col">
                    <div class="step_info_step ">
                        <img src="/assets/image/icon-5.svg">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>get <br>your reward</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-7 col-lg-8 mx-auto my-5">

			<form class="needs-validation" novalidate="" action="/cabinet/update_user" method="post">
				<div class="row g-3">
					<div class="col-sm-6">
						<label for="firstName" class="form-label">First name</label>
						<input name="firstName" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>

					<div class="col-sm-6">
						<label for="lastName" class="form-label">Last name</label>
						<input name="lastName" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>



					<div class="col-12">
						<label for="phone" class="form-label">Phone</label>
						<input name="phone" type="text" class="form-control" id="phone" required="">
						<div class="invalid-feedback">
							Please enter a valid phone.
						</div>
					</div>

					<div class="col-12">
						<label for="address" class="form-label">Address</label>
						<input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
						<div class="invalid-feedback">
							Please enter your  address.
						</div>
					</div>


					<div class="col-md-5">
						<label for="city" class="form-label">City</label>
						<input name="city" type="text" class="form-control" id="city" placeholder="" required="">
						<div class="invalid-feedback">
							Zip code required.
						</div>
					</div>

					<div class="col-md-4">
						<label for="state" class="form-label">State</label>
						<select name="state" class="form-select" id="state" required="">
							<option value="">Choose...</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid state.
						</div>
					</div>

					<div class="col-md-3">
						<label for="zip" class="form-label">Zip</label>
						<input name="zip" type="text" class="form-control" id="zip" placeholder="" required="">
						<div class="invalid-feedback">
							Zip code required.
						</div>
					</div>
				</div>

				<button class="w-100 btn btn-primary btn-lg mt-5" type="submit">Continue</button>
			</form>
		</div>
	</div>
</div>
