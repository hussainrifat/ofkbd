@extends('instructor_home_layout')
@section('instructor_content')


		

			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
						<div class="title125">						
							
						
						</div>
						<div class="title126">
                            <h2>{{$blog_details->blog_title}}</h2>
                            <h3> Author :  {{$instructor_name}} </h3>
                            <span> Category :  {{$blog_details->blog_categories}} </span>


						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="faq1256">
			<div class="container">
				<div class="row justify-content-md-center">					
					<div class="col-md-8">
						<div class="bg_blog2">
							<img src="{{$blog_details->blog_image}}" alt="">
						</div>
					
						<div class="vew120 mt-35 mb-30">			
							<p>{{$blog_details->blog_description}}</p>
						</div>
									
					</div>
				
				</div>
		
            @endsection
		
	