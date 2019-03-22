@extends("layout.master")
@section("body")
	
	<!-- Section 6 -->
			             <h2>
			            	<p class="step-icon"><span>06</span></p>
			            	<span class="step-text">Communication Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Communication Details</h3>
								</div>

								<div class="form-row">
									<select class="form-control" name="organisation" value="{{old('organisation')}}" id="organisation" required>
										<option disabled selected>Organisation</option>
										<option value="bsf">BSF</option>
										<option value="capfs">CAPFs</option>
									</select>
								</div>
								<br>
								<label class="special-label">Correspondence Address</label>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>House No.</legend>
											<input type="text" class="form-control" id="house_no" name="house_no" value="{{old('house_no')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Street Name</legend>
											<input type="text" class="form-control" id="street_name" name="street_name" value="{{old('street_name')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Landmark</legend>
											<input type="text" class="form-control" id="landmark" name="landmark" value="{{old('landmark')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>City</legend>
											<input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>State</legend>
											<input type="text" class="form-control" id="state" name="state" value="{{old('state')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>PIN CODE</legend>
											<input type="text" class="form-control" id="pincode" name="pincode" value="{{old('pincode')}}" maxlength="6" required>
										</fieldset>
									</div>
								</div>
								<br>
								<label class="special-label">Permanent Address</label>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>House No.</legend>
											<input type="text" class="form-control" id="pahouse_no" name="pahouse_no" value="{{old('pahouse_no')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Street Name</legend>
											<input type="text" class="form-control" id="pastreet_name" name="pastreet_name" value="{{old('pastreet_name')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Landmark</legend>
											<input type="text" class="form-control" id="palandmark" name="palandmark" value="{{old('palandmark')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>City</legend>
											<input type="text" class="form-control" id="pacity" name="pacity" value="{{old('pacity')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>State</legend>
											<input type="text" class="form-control" id="pastate" name="pastate" value="{{old('pastate')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>PIN CODE</legend>
											<input type="text" class="form-control" id="papincode" name="papincode" value="{{old('papincode')}}" maxlength="6" required>
										</fieldset>
									</div>
								</div>
								</div>
			            </section>


@endsection