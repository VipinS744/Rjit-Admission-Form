@extends("layout.master")
@section("body")

	<!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Academic Qualifications(10th)</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">10th Details</h3>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>School/College Name</legend>
											<input type="text" name="10th_school" id="10th_school" class="form-control" value="{{old('10th_school')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Board</legend>
											<input type="text" class="form-control" value="{{old('10th_board')}}" id="10th_board" name="10th_board" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Subjects</legend>
											<input type="text" class="form-control" id="10th_subjects" name="10th_subjects" placeholder="" value="{{old('10th_subjects')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Year Of Passing</legend>
											<input type="text" name="10th_passing" id="10th_passing" class="form-control" value="{{old('10th_passing')}}" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Percentage</legend>
											<input type="text" name="10th_percentage" value="{{old('10th_percentage')}}" id="10th_percentage" class="form-control" required>
										</fieldset>
									</div>
								</div>
								</div>
			            </section>

@endsection