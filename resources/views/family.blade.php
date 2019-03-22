@extends("layout.master")
@section("body")
	
	<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Tell Us More,A Bit About Yourself</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Tell Us More,A Bit About Yourself</h3>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Father's Name</legend>
											<input type="text" name="Father_name" id="Father_name" class="form-control" placeholder="Enter Full Name" value="{{old('Father_name')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Mother's Name</legend>
											<input type="text" class="form-control" id="Mother_name" name="Mother_name" placeholder="Enter Full Name" value="{{old('Mother_name')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Father's Email</legend>
											<input type="text" name="Father_email" id="Father_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="{{old('Father_email')}}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Father's Contact Number</legend>
											<input type="text" class="form-control" id="Father_phone" name="Father_phone" placeholder="888-999-7777" value="{{old('Father_phone')}}" maxlength="10" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Aadhaar Number</legend>
											<input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="" maxlength="12" value="{{old('aadhar')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Identification Mark</legend>
											<input type="text" name="Identification" id="Identification" class="form-control" placeholder="Black Mole on Neck" value="{{old('Identification')}}" required>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>


@endsection