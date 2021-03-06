@extends('layouts.master')

@section('include-styles')
<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/datetimepicker/css/bootstrap-datetimepicker.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/datetimepicker/css/pmd-datetimepicker.css') }}" />
@endsection

@section('content')
<!--Datepicker -->
<div class="pmd-content pmd-content-custom" id="content"> 

	<div class="container-fluid"> 
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Datetimepicker</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Datetimepicker</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">The Datetimepicker widget allows the user to select a value from a calendar or a time drop-down list as well as direct input. You can find a wide variety of date and time pickers here.</p>
			<p class="lead">We have used Bootstrap Datetimepicker</a> as a reference which we have then customized based on our Propeller theme.</p>
			<p class="lead">For more options and documentation, visit : <a href="https://github.com/Eonasdan/bootstrap-datetimepicker" target="_blank">Bootstrap Datetimepicker</a></p>
		</div> <!--component header end -->
	
		<!-- Default datepicker -->
		<section class="row component-section">
			
			<!-- Default datepicker title and description -->
			<div class="col-md-3">
				<div id="default">
					<h2>Propeller Datetimepicker</h2>
					<p> This is the default date and time picker with Propeller theme. </p>
                    <p>Initialize datetimepicker plugin by calling <code>.datetimepicker()</code> function. 
				</div>
			</div> <!-- Default datepicker title and description end -->
			
			<!-- Default datepicker code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--default datepicker example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Date and Time</label>
								<input type="text" id="datetimepicker-default" class="form-control" />
							</div>
						</div>
					</div> <!--default datepicker example end -->
					
				</div>
			</div> <!-- Default datepicker code and example end -->
		</section> <!-- Default datepicker end -->
		
		<!-- Time Picker -->
		<section class="row component-section">
			
			<!-- Time Picker title and description -->
			<div class="col-md-3">
				<div id="time-picker">
					<h2>Time Picker</h2>
					<p> It is used when you only need to fetch just the time from the user. </p>
				</div>
			</div> <!-- Time Picker title and description end -->
			
			<!-- Time Picker code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
				
					<!--Time Picker example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Time</label>
								<input type="text" id="timepicker" class="form-control" />
							</div>
						</div>
					</div> <!--Time Picker example end -->
					
				</div>
			</div> <!-- Time Picker code and example end -->
		</section> <!-- Time Picker end --> 
		
		<!-- Linked pickers -->
		<section class="row component-section">
			
			<!-- Linked pickers title and description -->
			<div class="col-md-3">
				<div id="linked-pickers">
					<h2>Linked Picker</h2>
					<p> These are two individual date and time pickers, of which, one is used to select start date and time and the other is used to select end date and time. </p>
				</div>
			</div> <!-- Linked pickers title and description end -->
			
			<!-- Linked pickers code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--Linked pickers example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body">
							<div class="row">
								<div class="col-sm-6"> 
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">Start Date</label>
										<input type="text" id="datepicker-start" class="form-control" />
									</div>
								</div>
								<div class="col-sm-6"> 
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">End Date</label>
										<input type="text" id="datepicker-end" class="form-control" />
									</div>
								</div>
							</div>
						</div>
					</div> <!--Linked pickers example end -->
					
				</div>
			</div> <!-- Linked pickers code and example end -->
		</section> <!-- Linked pickers end --> 		
		
		<!-- View Mode -->
		<section class="row component-section">
			
			<!-- View mode title and description -->
			<div class="col-md-3">
				<div id="view-mode">
					<h2>View Mode</h2>
					<p> This one is used when you want the user to select a year and month. For example: This kind of picker is used for selecting expiry date of a card. </p>
				</div>
			</div> <!-- View mode title and description end -->
			
			<!-- View mode code and example -->
			<div class="col-md-9"> 
				<!-- View Mode section start -->
				<div class="component-box"> 
					
					<!-- view mode example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Year and Month</label>
								<input type="text" id="datepicker-view-mode" class="form-control" />
							</div>
						</div>
					</div> <!-- view mode example end -->
				</div>
			</div> <!-- View mode code and example end -->
		</section> <!-- View Mode end -->		 
		
		<!-- Disabled Datepicker -->
		<section class="row component-section">
			
			<!-- Disabled Datepicker title and description -->
			<div class="col-md-3">
				<div id="disabled-days">
					<h2>Disabled Days of the Month</h2>
					<p> This is a date and time picker which can be used when you want to show few days of the month as disabled. For exmaple: Here, saturdays and sundays are shown as disabled. </p>
				</div>
			</div> <!-- Disabled Datepicker title and description end -->
			
			<!-- Disabled Datepicker code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!-- disabled datepicker example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body"> 
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">Select Date and Time</label>
										<input type="text" id="datepicker-disabled-days" class="form-control" />
									</div>
								</div>
							</div>
						</div>
					</div> <!-- disabled datepicker example end -->
					
				</div>
			</div> <!-- Disabled Datepicker code and example end -->
		</section> <!-- Disabled Datepicker end -->		 
		
		<!-- Inline Datepicker -->
		<section class="row component-section">
			
			<!-- Inline Datepicker title and description -->
			<div class="col-md-3">
				<div id="inline-datepicker">
					<h2>Inline Datetimepicker</h2>
					<p> Such type of datetimepickers are by default displayed as visible. </p>
				</div>
			</div> <!-- Inline Datepicker title and description end-->
			
			<!-- Inline Datepicker code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--Inline Datepicker example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div id="datepicker-inline"></div>
						</div>
					</div> <!--Inline Datepicker example end -->
					
				</div>
			</div> <!-- Inline Datepicker code and example end -->
		</section> <!-- Inline Datepicker end --> 		
		
		<!-- Datepicker in popup -->
		<section class="row component-section">
			
			<!-- datepicker in popup title and description -->
			<div class="col-md-3">
				<div id="popup-datepicker">
					<h2>Datetimepicker in Modal</h2>
					<p> When you click to select the date and time in this case, a modal appears containing the datetimepicker. The modal also consists of <code>cancel</code> and <code>select</code> button in order to submit or cancel the date and time selected. </p>
				</div>
			</div> <!-- datepicker in popup title and description end -->
			
			<!-- datepicker in popup code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--Datepicke in popup example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Date and Time</label>
								<input type="text" data-datepicker-popup="true" data-datepicker="datepicker-popup-inline" class="form-control" data-target="#datepicker-dialog" data-toggle="modal" />
							</div>
							
							<div tabindex="-1" class="modal fade" id="datepicker-dialog" style="display: none;" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content"> 
										<div id="datepicker-popup-inline"></div>
										<div class="modal-footer">
											<button type="button" class="btn pmd-ripple-effect btn-default" aria-hidden="true" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn pmd-ripple-effect btn-primary">Select</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Dialog Simple datepicker--> 
							
						</div>
					</div> <!--Datepicker in popup example end -->
					
				</div>
			</div> <!-- datepicker in popup code and example end -->
		</section> <!-- Datepicke in popup end -->		 
		
		<!-- Datepicke with left header -->
		<section class="row component-section">
			
			<!-- Datepicke with left header title and description --> 
			<div class="col-md-3">
				<div id="header-datepicker">
					<h2>Datetimepicker with left header</h2>
					<p> In such type of date and time picker the header of the picker is displayed to the left. It displays current date significantly. </p>
				</div>
			</div> <!-- Datepicke with left header title and description end -->
			
			<!-- Datepicke with left header code and example -->  
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--Datepicker with left header example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Date and Time</label>
								<input type="text" id="datepicker-left-header" data-header-left="true" class="form-control" />
							</div>							
						</div>
					</div> <!--Datepicker with left header example end-->
				</div>
			</div> <!-- Datepicke with left header code and example end -->
		</section> <!-- Datepicke with left header end --> 
		
		
	</div>
</div>
<!--Datepicker end -->
@endsection

@section('include-scripts')
<script src="{{ asset('pmd/assets/js/jquery-1.12.2.min.js') }}"></script>
<script src="{{ asset('pmd/assets/js/bootstrap.min.js') }}"></script>
<!-- Javascript for Datepicker -->
<script type="text/javascript" language="javascript" src="{{ asset('pmd/components/datetimepicker/js/moment-with-locales.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ asset('pmd/components/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>

<script>
	// Default date and time picker
	$('#datetimepicker-default').datetimepicker();
	
	// View mode datepicker [shows only years and month]
	$('#datepicker-view-mode').datetimepicker({
		viewMode: 'years',
		format: 'MM/YYYY'
	});
	
	// Inline datepicker
	$('#datepicker-inline').datetimepicker({
		inline: true
	});
	
	// Time picker only
	$('#timepicker').datetimepicker({
		format: 'LT'
	});
	
	// Linked date and time picker 
	// start date date and time picker 
	$('#datepicker-start').datetimepicker();

	// End date date and time picker 
	$('#datepicker-end').datetimepicker({
		useCurrent: false 
	});
	
	// start date picke on chagne event [select minimun date for end date datepicker]
	$("#datepicker-start").on("dp.change", function (e) {
		$('#datepicker-end').data("DateTimePicker").minDate(e.date);
	});
	// Start date picke on chagne event [select maxmimum date for start date datepicker]
	$("#datepicker-end").on("dp.change", function (e) {
		$('#datepicker-start').data("DateTimePicker").maxDate(e.date);
	});
	
	// Disabled Days of the Week (Disable sunday and saturday) [ 0-Sunday, 1-Monday, 2-Tuesday   3-wednesday 4-Thusday 5-Friday 6-Saturday]
	$('#datepicker-disabled-days').datetimepicker({
		 daysOfWeekDisabled: [0, 6]
	});
	
	// Datepicker in popup
	$('#datepicker-popup-inline').datetimepicker({
		inline: true
	});
	
	$("[data-header-left='true']").parent().addClass("pmd-navbar-left");
	
	// Datepicker left header
	$('#datepicker-left-header').datetimepicker({
		'format' : "YYYY-MM-DD HH:mm:ss", // HH:mm:ss
	});
</script>
@endsection
