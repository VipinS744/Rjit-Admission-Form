@extends("layout.master")
@section("body")
	
	<!-- Section 4 -->
			            <h2>
			            	<p class="step-icon"><span>04</span></p>
			            	<span class="step-text">Academic Qualifications(12th)</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">12th/Diploma Details</h3>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>School/College Name</legend>
											<input type="text" name="12th_school" id="12th_school" class="form-control" value="{{old('12th_school')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Board</legend>
											<input type="text" class="form-control" id="12th_board" name="12th_board" value="{{old('12th_board')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Subjects</legend>
											<input type="text" class="form-control" id="12th_subjects" name="12th_subjects" value="{{old('12th_subjects')}}" placeholder="" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Year Of Passing</legend>
											<input type="text" name="12th_passing" id="12th_passing" class="form-control" value="{{old('12th_passing')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Percentage</legend>
											<input type="text" name="12th_percentage" id="12th_percentage" class="form-control" value="" value="{{old('12th_percentage')}}" required>
										</fieldset>
									</div>
								</div>
								</div>
			            </section>


@endsection