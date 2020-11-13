@extends('instructor_home_layout')
@section('instructor_content')

<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
        
            
            <div class="col-md-12">
                <div class="_14d25">
                    <div class="row">
                       
                       @foreach($blogs as $blog)
                        <div class="col-lg-3 col-md-4">
                            <div class="fcrse_1 mb-30">
                                <a href="course_detail?course={{$blog->blog_id}}" class="fcrse_img">
                                    <img src="{{$blog->blog_image}}" alt="">
                                    <div class="course-overlay">
                                       
                                      
                                        
                                    </div>
                                </a>
                                <div class="fcrse_content">
                             
                                  
                                <a href="blog_details?blog={{$blog->blog_id}}" class="crse14s">{{$blog->blog_title}}</a></a>
                                    {{-- <a href="" class="crse-cate">{{$blog->blog_categories}}</a> --}}
                                    <div class="auth1lnkprce">
                                    <p class="cr1fot">Author : <a href="">{{$blog->instructor_name}}</a></p>
                                    </div>
                                </div>

                            
                            </div>	
                               {{-- //Modal Start --}}

                                



                                {{-- Modal Code End --}}										
                        </div>
                        @endforeach
                        

                    </div>				
                </div>				
            </div>				
        </div>
    </div>
</div>

{{-- OFK MAIN BODY END --}}
@endsection