@extends('layouts.master')

@section('include-styles')
@endsection

@section('content')
<!--content area start-->
<div id="content" class="pmd-content inner-page">

	<!--tab start-->
	<div class="container-fluid full-width-container notifications">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Notifications</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Notifications</li>
		</ol><!--breadcrum end-->
	
		<div class="section section-custom" id="notifications"> 
						
				<!-- section content start-->
				<div class="section-inner">
					<div class="row">
						<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 custom-col-12">
                			<div class="page-content notifications">
            					<ul class="list-group pmd-list-twoline">
									<li class="list-group-item unread new-day pmd-z-depth" data-date="Today, Oct. 18, 2016">
										<div class="media-left"> 
									 		<a href="tml.html" class="avatar-list-img40x40"> 
									   			<img alt="Prathit" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-1.png') }}" data-holder-rendered="true"> 
									  		</a>
										</div>
										<div class="media-body">
                                            <span class="list-group-item-heading"><span>Prathit</span> posted a new challanegs</span>
                                            <span class="list-group-item-date">5 Minutes ago</span>
                                        </div>
								  	</li>
              						<li class="list-group-item pmd-z-depth">
                						<div class="media-left">
                                            <span class="avatar-list-img40x40">
                                                <img alt="Keel" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-2.png') }}" data-holder-rendered="true">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <span class="list-group-item-heading"><span>Keel</span> Cloned 2 challenges.</span>
                                            <span class="list-group-item-date">15 Minutes ago</span>
                                        </div>
             					 	</li>
              						<li class="list-group-item unread pmd-z-depth">
                						<div class="media-left">
                                            <span class="avatar-list-img40x40">
                                                <img alt="John" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-3.png') }}" data-holder-rendered="true">
                                            </span>
                                        </div>
                                    
                                        <div class="media-body">
                                            <span class="list-group-item-heading"><span>John</span> posted new collection.</span>
                                            <span class="list-group-item-date">25 Minutes ago</span>
                                        </div>
              						</li>
              						<li class="list-group-item unread pmd-z-depth">
                						<div class="media-left">
                                            <span class="avatar-list-img40x40">
                                                <img alt="Valerii" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-4.png') }}" data-holder-rendered="true">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <span class="list-group-item-heading"><span>Valerii</span> Shared 5 collection.</span>
                                            <span class="list-group-item-date">30 Minutes ago</span>
                                        </div>
              						</li>
                                    <li class="list-group-item unread new-day pmd-z-depth" data-date="Yesterday, Oct. 17, 2016">
										<div class="media-left"> 
									 		<a href="tml.html" class="avatar-list-img40x40"> 
									   			<img alt="Prathit" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-1.png') }}" data-holder-rendered="true"> 
									  		</a>
										</div>
										<div class="media-body">
                                            <span class="list-group-item-heading"><span>Prathit</span> posted a new challanegs</span>
                                            <span class="list-group-item-date">5 Minutes ago</span>
                                        </div>
								  	</li>
              						<li class="list-group-item pmd-z-depth">
                						<div class="media-left">
                                            <span class="avatar-list-img40x40">
                                                <img alt="Keel" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-2.png') }}" data-holder-rendered="true">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <span class="list-group-item-heading"><span>Keel</span> Cloned 2 challenges.</span>
                                            <span class="list-group-item-date">15 Minutes ago</span>
                                        </div>
             					 	</li>
              						<li class="list-group-item unread pmd-z-depth">
                						<div class="media-left">
                                            <span class="avatar-list-img40x40">
                                                <img alt="John" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-3.png') }}" data-holder-rendered="true">
                                            </span>
                                        </div>
                                    
                                        <div class="media-body">
                                            <span class="list-group-item-heading"><span>John</span> posted new collection.</span>
                                            <span class="list-group-item-date">25 Minutes ago</span>
                                        </div>
              						</li>
              						<li class="list-group-item unread pmd-z-depth">
                						<div class="media-left">
                                            <span class="avatar-list-img40x40">
                                                <img alt="Valerii" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('pmd/themes/images/profile-4.png') }}" data-holder-rendered="true">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <span class="list-group-item-heading"><span>Valerii</span> Shared 5 collection.</span>
                                            <span class="list-group-item-date">30 Minutes ago</span>
                                        </div>
              						</li>
            					</ul>
        					</div> 
            			</div>
					</div>
				</div> <!-- section content end -->  
			</div>
	</div><!-- tab end -->
</div>
<!-- content area end -->
@endsection

@section('include-scripts')
@endsection
