@extends('layouts.master')

@section('include-styles')
<!-- Range Slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/range-slider/css/nouislider.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/range-slider/css/range-slider.css') }}">
@endsection

@section('content')
<!-- Slider -->
<div class="pmd-content pmd-content-custom" id="content">
        
	<div class="container-fluid range-slider-container">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Range Slider</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Range Slider</li>
		</ol><!--breadcrum end-->
		
		<!-- component header-->
		<div class="componant-title-bg">
			<p class="lead">Range Slider let the user select a range of values by moving the slider thumb. The smallest value is to the left, the largest to the right.</p>
			<p class="lead">We have used noUISlider plugin as a reference which we have then customized based on our Propeller theme.</p>
			<p class="lead">For more options and documentation, visit : <a href="https://refreshless.com/nouislider/" target="_blank">noUISlider</a></p>
		</div><!-- end component header-->
        	
        <!-- horizontal single handler slider -->
        <section class="row component-section">
        
            <!-- horizontal single handler slider title and description -->
            <div class="col-md-3">
                <div id="horizontal">
                    <h2> Single Handle Horizontal Slider</h2>
                </div>
                <p>A handle snaps to a clicked location. It can immediatly be moved, without a mouseup + mousedown. There are many different types of single handler slider such as default slider, slider with steps, slider with visible tooltip, slider with bottom visible tooltip, slider which can be disabled and slider with input value. </p>
            </div><!-- end horizontal single handler slider title and description -->
            
            <div class="col-md-9">
                
                <!--Horizontal single handler slider code, example -->
                <div class="component-box">
                    
                    <!-- slider example -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider" class="pmd-range-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle slider : </strong>It allows user to select a value along a subjective range. It does not require a specific value to make adjustments, although it may, in some instances, offer an editable numeric value.</p><!-- slider example end -->
                        
                </div><!--Horizontal single handler slider code, example end-->

                <!--Horizontal Single Handle Slider with steps code,example -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-step" class="pmd-range-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle Slider with steps</strong></p><!-- slider example end-->
                    
                </div><!--Horizontal Single Handler Slider with steps code,example end -->
                
                <!-- Default Tooltip with single Handler -->
                <div class=" component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">

                            <!--Default Tooltip with single Slider card -->
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <!-- Horisontal Slider -->
                                    <div id="pmd-slider-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                                </div>
                            </div>
                            <!--Default Tooltip with single Slider card -->
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle slider with visible tooltip : </strong>Add <code>.pmd-range-tooltip</code> to make the slider tooltip visible by default.</p><!-- slider example end -->
                </div> <!-- end default tooltip with single Handler -->

                <!-- Horizontal single handler slider with bottom tooltip -->   
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-range-tooltip-bottom" class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle slider with visible tooltip (bottom direction) : </strong>Add <code>.pmd-range-tooltip-bottom</code> to make the slider tooltip visible in bottom direction by 
                    default.</p><!-- slider example end -->
                    
                </div> <!-- end horizontal single handler slider with bottom tooltip -->

                <!-- Single Handler slider which can be disabled -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="disable-single" class="pmd-range-slider"></div>
                                    <div class="slider-checkbox">
                                        <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" value="" id="single-checkbox">
                                            <span>Disable slider</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Single Handle Slider which can be disabled. </p><!-- slider example end -->
                        
                </div> <!-- end Single Handle slider which can be disabled -->
                
                <!-- Single Handle slider with value -->   
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-value-input" class="pmd-range-slider"></div>
                                    <div class="row">
                                        <div class="range-slider-input">
                                            <div class="col-sm-2">
                                                <div class="form-group pmd-textfield">
                                                    <label for="value-input" class="control-label">Input Value</label>
                                                    <input type="text" id="value-input" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Single Handle Slider which can be controlled by inputting values also.</p><!-- slider example end-->
                        
                </div> <!-- end Single Handle slider with value -->
                   
            </div>
       	</section><!--end horizontal single handler slider -->
            
           
        <!-- horizontal range slider -->
        <section class="row component-section">
        
        	<!-- horizontal range slider title and description -->
            <div class="col-md-3">
                <div id="horizontal-range">
                    <h2>Range Slider</h2>
                    <p>Range slider are the ones with two handler. We can have range sliders of various types such as default range slider, range slider with visible tooltip, range slider whose both handlers can be disabled and range slider with input value.</p>
                </div>
            </div><!-- horizontal range slider title and description end -->
            
            <div class="col-md-9">
                
                <!--Horizontal default range slider -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <!--Multiple Slider card -->
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    
                                    <!-- Horisontal Slider -->
                                    <div id="pmd-slider-range"  class="pmd-range-slider"></div>
                                </div>
                            </div>
                            <!--Multiple Slider card -->
                            
                        </div>
                    </div>
                    <p class="component-desc">Default range slider. Use <code>.pmd-range-slider</code> to create the slider.</p><!-- slider example end -->
                        
                </div><!--Horizontal default range slider end-->
                
                
                <!--Horizontal range slider with tooltip -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with visible tooltip. In order to make the tooltip visible, add <code>.pmd-range-tooltip</code> to the slider.</p><!-- slider exampleend  -->
                    
                </div><!--Horizontal range slider with tooltip end-->
                
                
                <!--Horizontal range slider with bottom tooltip -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip-bottom"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with visible tooltip at the bottom. You can show tooltip at the bottom using <code>.pmd-range-tooltip-bottom</code>.</p><!-- slider example end -->
                    
                </div><!--Horizontal range slider with bottom tooltip end -->
                
                
                <!--Horizontal range slider with lower bottom tooltip -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip-bottom-lower"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-left-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with lower tooltip at the bottom. You can show tooltip at the bottom using <code>.pmd-range-tooltip-left-bottom</code>.</p><!-- slider example end-->
                        
                </div><!--Horizontal range slider with lower bottom tooltip end -->
                
                <!--Horizontal range slider with upper bottom tooltip -->
                <div class="component-box">
                	
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip-bottom-upper"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-right-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with upper tooltip at the bottom. You can show tooltip at the bottom using <code>.pmd-range-tooltip-right-bottom</code>.</p><!-- slider example end -->
                        
                </div><!--Horizontal range slider with upper bottom tooltip end -->
                
                                                                            
                <!--Horizontal range slider with handler which can be disabled -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="disable-multiple" class="pmd-range-slider"></div>
                                    <div class="slider-checkbox">
                                        <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" value="" id="multiple-checkbox-left">
                                            <span>Disable left handle</span>
                                        </label>
                                        <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" value="" id="multiple-checkbox-right">
                                            <span>Disable Right handle</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Ranger slider each of which's handler can be disabled. </p><!-- slider example end -->
                    
                </div><!--Horizontal range slider with handler which can be disabled end-->
                
                <!--Horizontal range slider with value -->
                <div class="component-box">
                
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-value-range"  class="pmd-range-slider"></div>
                                    <div class="row">
                                        <div class="range-value col-sm-6">
                                            <span id="value-min"></span>
                                        </div>
                                        <div class="range-value col-sm-6 text-right">
                                            <span id="value-max"></span>
                                        </div>
                                    </div>	
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range Slider with value</p><!-- slider example end -->
                    
                </div><!--Horizontal range slider with value end -->
               
            </div>
        </section><!-- horizontal range slider end-->
            
            
            
        <!-- Verticle slider -->
        <section class="row component-section">
        
        	<!-- vertical slider title and description -->
            <div class="col-md-3">
                <div id="vertical">
                    <h2>Verticle Slider</h2>
                </div>
                <p> Instead of horizontal slider we can also show the slider vertically.  For vertical sliders also we can have slider with steps, slider with tooltip towards left or right. </p>
            </div><!-- vertical slider title and description end -->
            
            	
            <div class="col-md-9">
            
                <!-- Vertical single handler slider code,example -->                
                <div class="component-box">
                
                    <!-- slider example -->
                    <div class="row">
                    
                        <!-- default vertical single handler slider -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider" class="pmd-range-slider"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider.</p>
                        </div><!-- default vertical single handler slider end -->
                        
                        <!-- vertical single handler slider with steps -->
                        <div class="col-md-6 vertical-slider">                        	
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-step" class="pmd-range-slider"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider with steps</p>
                        </div><!-- vertical single handler slider with steps end -->
                        
                        <!-- vertical single handler slider with visible tooltip -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider with visible tooltip. Use <code>.pmd-range-tooltip</code> for slider with visible tooltip.</p>
                        </div><!-- vertical single handler slider with visible tooltip end -->
                        
                        <!-- vertical single handler slider with visible tooltip at right -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-tooltip-right"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-right"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider with visible tooltip at right. Add right tooltip using <code>.pmd-range-tooltip-right</code></p>
                        </div><!--end vertical single handler slider with visible tooltip at right -->
                        <div class="clearfix"></div>
                        
                    </div><!-- slider example end -->
                    
                </div><!-- Vertical single handler slider code,example end -->

            </div>
        </section><!-- Verticle slider end -->
         

        <!-- Verticle range slider -->
        <section class="row component-section">
        
        	<!-- Vertical range slider title and description -->
            <div class="col-md-3">
                <div id="vertical-range">
                    <h2>Verticle Range Slider</h2>
                    <p> Vertical range slider is a slider with two handlers. We can have default slider or slider with visible tooltip. We can also have a slider with both tooltips in opposite direction to each other.</p>
                </div>
            </div><!-- Vertical range slider title and description end -->
            
            <div class="col-md-9">

                <!--verticle range slider code,example -->
                <div class="component-box">
                    
                    <!-- slider example -->
                    <div class="row">
                    
                    	<!-- default vertical range slider -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range"  class="pmd-range-slider"></div>
                            </div>
                            <p class="component-desc">Default Vertical Range Slider</p>
                        </div><!-- default vertical range slider end -->
                        
                        <!-- vertical range slider with tooltip -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                            </div>
                            <p class="component-desc">Vertical range slider with visible tooltip on left</p>
                        </div><!-- vertical range slider with tooltip end -->
                        
                        <!-- vertical range slider with lower handler tooltip at right -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range-tooltip-lower-right"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom-right"></div>
                            </div>
                            <p class="component-desc">Vertical range slider with lower handler tooltip towards right and upper handler tooltip towards left. Use <code>.pmd-range-tooltip-bottom-right</code> to achieve this. </p>
                        </div><!--end vertical range slider with lower tooltip at right -->
                        
                        <!-- vertical range slider with upper handler tooltip at right -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range-tooltip-upper-right"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-top-right"></div>
                            </div>
                            <p class="component-desc">Vertical range slider with lower handler tooltip towards left and upper handler tooltip towards right. Use <code>.pmd-range-tooltip-top-right</code> for this.</p>
                        </div><!--end vertical range slider with upper handler tooltip at right -->
                        
                    </div><!-- slider example end-->

                </div><!--verticle range slider code,example end -->

            </div>
        </section><!-- Verticle range slider end --> 
    
  	</div><!--range slider container -->        

</div>
<!--Range slider constructor end -->
@endsection

@section('include-scripts')
<!-- Slider js -->
<script src="{{ asset('pmd/components/range-slider/js/wNumb.js') }}"></script>
<script src="{{ asset('pmd/components/range-slider/js/nouislider.js') }}"></script>
<script>
	// single range slider
	var pmdSlider = document.getElementById('pmd-slider');
	noUiSlider.create(pmdSlider, {
		start: [ 30 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});
	// single range slider with step
	var pmdSliderStep = document.getElementById('pmd-slider-step');
	noUiSlider.create(pmdSliderStep, {
		start: [ 30 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		step: 10,
		pips: { // Show a scale with the slider
			mode: 'steps',
			density: 10
		}

	});
	
	// single range slider with default tooltip open
	var pmdSliderTooltip = document.getElementById('pmd-slider-tooltip');
	noUiSlider.create(pmdSliderTooltip, {
		start: [ 25 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});
	
	// single handler slider with bottom tooltip open
	var pmdVerSliderTooltipBottom = document.getElementById('pmd-range-tooltip-bottom');
	noUiSlider.create(pmdVerSliderTooltipBottom, {
		start: [ 30 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});
	
	// enable $ desable range slider
	var disableSingle = document.getElementById('disable-single'),
		singleCheckbox = document.getElementById('single-checkbox');
	
	function toggle ( element ){
	
		// If the checkbox is checked, disabled the slider.
		// Otherwise, re-enable it.
		if ( this.checked ) {
			element.setAttribute('disabled', true);
		} else {
			element.removeAttribute('disabled');
		}
	}
	
	noUiSlider.create(disableSingle, {
		start: 47,
		tooltips: [wNumb({ decimals: 0 }) ],
		connect: 'lower',

		range: {
			min: 0,
			max: 100
		}
	});
	
	singleCheckbox.addEventListener('click', function(){
		toggle.call(this, disableSingle);
	});
	
	// single hendelr input value
	var pmdSliderValueInput = document.getElementById('pmd-slider-value-input');
	
	noUiSlider.create(pmdSliderValueInput, {
		start: [ 18 ], // Handle start position
		connect: 'lower', // Display a colored bar between the handles
		tooltips: [ wNumb({ decimals: 0 }) ],
		format: wNumb({
			decimals: 0,
		}),
		range: { // Slider can select '0' to '100'
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider
	var pmdSliderRange = document.getElementById('pmd-slider-range');
	noUiSlider.create(pmdSliderRange, {
		start: [30, 75],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		range: {
			'min': 0,
			'max': 100
		}
	});	
	
	// multiple range slider with default tooltip open
	var pmdSliderRangeTooltip = document.getElementById('pmd-slider-range-tooltip');
	noUiSlider.create(pmdSliderRangeTooltip, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdSliderRangeTooltipBottom = document.getElementById('pmd-slider-range-tooltip-bottom');
	noUiSlider.create(pmdSliderRangeTooltipBottom, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with lower tooltip at bottom
	var pmdSliderRangeTooltip = document.getElementById('pmd-slider-range-tooltip-bottom-lower');
	noUiSlider.create(pmdSliderRangeTooltip, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with upper tooltip at bottom
	var pmdSliderRangeTooltip = document.getElementById('pmd-slider-range-tooltip-bottom-upper');
	noUiSlider.create(pmdSliderRangeTooltip, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// enable $ desable range slider
	var disableMultiple = document.getElementById('disable-multiple'),
		multipleCheckboxLeft = document.getElementById('multiple-checkbox-left'),
		multipleCheckboxRight = document.getElementById('multiple-checkbox-right'),
		origins = disableMultiple.getElementsByClassName('noUi-origin');
	
	function toggle ( element ){
	
		// If the checkbox is checked, disabled the slider.
		// Otherwise, re-enable it.
		if ( this.checked ) {
			element.setAttribute('disabled', true);
		} else {
			element.removeAttribute('disabled');
		}
	}
	
	noUiSlider.create(disableMultiple, {
		start: [15, 90],
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		connect: true,
		range: {
			min: 0,
			max: 100
		}
	});
	
	multipleCheckboxLeft.addEventListener('click', function(){
		toggle.call(this, origins[0]);
	});
	
	multipleCheckboxRight.addEventListener('click', function(){
		toggle.call(this, origins[1]);
	}); 
	
	// multiple handled with value 
	var pmdSliderValueRange = document.getElementById('pmd-slider-value-range');
	
	noUiSlider.create(pmdSliderValueRange, {
		start: [ 20, 80 ], // Handle start position
		connect: true, // Display a colored bar between the handles
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		}),
		range: { // Slider can select '0' to '100'
			'min': 0,
			'max': 100
		}
	});
	
	var valueMax = document.getElementById('value-max'),
		valueMin = document.getElementById('value-min');
	
	// When the slider value changes, update the input and span
	pmdSliderValueRange.noUiSlider.on('update', function( values, handle ) {
		if ( handle ) {
			valueMax.innerHTML = values[handle];
		} else {
			valueMin.innerHTML = values[handle];
		}
	});	
	
	// single range slider
	var pmdVerticleSlider = document.getElementById('pmd-ver-slider');
	noUiSlider.create(pmdVerticleSlider, {
		start: [ 30 ],
		connect: 'lower',
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});

	// single range slider with step
	var pmdVerticleSliderStep = document.getElementById('pmd-ver-slider-step');
	noUiSlider.create(pmdVerticleSliderStep, {
		start: [ 30 ],
		connect: 'lower',
		direction: 'rtl', // Put '0' at the bottom of the slider
		tooltips: [wNumb({ decimals: 0 }) ],
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		step: 10,
		pips: { // Show a scale with the slider
			mode: 'steps',
			density: 10
		}

	});

	// single range slider with default tooltip open
	var pmdVerSliderTooltip = document.getElementById('pmd-ver-slider-tooltip');
	noUiSlider.create(pmdVerSliderTooltip, {
		start: [ 25 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});

	// multiple range slider with default tooltip open
	var pmdVerSliderTooltipRight = document.getElementById('pmd-ver-slider-tooltip-right');
	noUiSlider.create(pmdVerSliderTooltipRight, {
		start: [ 30 ],
		connect: 'lower',
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});	
	
	// multiple range slider
	var pmdVerticleSliderRange = document.getElementById('pmd-ver-slider-range');
	noUiSlider.create(pmdVerticleSliderRange, {
		start: [30, 75],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdVerSliderRangeTooltip = document.getElementById('pmd-ver-slider-range-tooltip');
	noUiSlider.create(pmdVerSliderRangeTooltip, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdVerSliderTooltipLowerRight = document.getElementById('pmd-ver-slider-range-tooltip-lower-right');
	noUiSlider.create(pmdVerSliderTooltipLowerRight, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdVerSliderTooltipUpperRight = document.getElementById('pmd-ver-slider-range-tooltip-upper-right');
	noUiSlider.create(pmdVerSliderTooltipUpperRight, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
</script>
@endsection
