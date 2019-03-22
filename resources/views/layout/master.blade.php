<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admission Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{url('css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
</head>
<body>
	<div class="container"> <!-- Logo Container -->
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			<center><img src="../images/logo.png" class="img-fluid"></center>
		</div> <!-- RJIT Logo -->
	</div>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">

		        		@section("body")
		        		@show

		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{url('js/jquery.steps.js')}}"></script>
	<script src="{{url('js/main.js')}}"></script>
</body>
</html>