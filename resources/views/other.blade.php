@extends("layout.master")
@section("body")

	<!-- Section 5 -->
			            <h2>
			            	<p class="step-icon"><span>05</span></p>
			            	<span class="step-text">Other Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Other Details</h3>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>12th Exam Roll Number</legend>
											<input type="text" class="form-control" id="12th_rollno" name="12th_rollno" value="{{old('12th_rollno')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>JEE MAIN Roll Number</legend>
											<input type="text" class="form-control" id="jee_main_rollno" name="jee_main_rollno" value="{{old('jee_main_rollno')}}" maxlength="8" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<select class="form-control" name="Nationality" value="{{old('Nationality')}}" id="Nationality" required>
										<option disabled selected>Nationality</option>
										<option value="Indian">Indian</option>
										<option value="NRI">NRI</option>
									</select>
								</div>
								<div class="form-row">
									<select class="form-control" name="Religion" id="Religion" value="{{old('Religion')}}" required>
										<option disabled selected>Religion</option>
										<option value="Hindu">Hindu</option>
										<option value="Muslim">Muslim</option>
										<option value="Sikh">Sikh</option>
										<option value="Christian">Christian</option>
										<option value="Others">Others</option>
									</select>
								</div>
								<div class="form-row">
									<select class="form-control" name="Category" id="Category" value="{{old('Category')}}" required>
										<option disabled selected>Category</option>
										<option value="GEN">GEN</option>
										<option value="OBC">OBC</option>
										<option value="SC">SC</option>
										<option value="ST">ST</option>
									</select>
								</div>
								<div class="form-row">
									<select class="form-control" name="Handicapped" id="Handicapped" value="{{old('Handicapped')}}" required>
										<option disabled selected>If Physical Handicapped</option>
										<option value="Yes">YES</option>
										<option value="no">NO</option>
									</select>
								</div>
								<div class="form-row">
									<select class="form-control" name="j&kresident" id="j&kresident" value="{{old('j&kresident')}}" required>
										<option disabled selected>Are You A Resident Of J & K?</option>
										<option value="Yes">YES</option>
										<option value="no">NO</option>
									</select>
								</div>
								</div>
			            </section>


@endsection