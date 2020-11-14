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
                            <a href="blog_details?blog={{$blog->id}}"  class="fcrse_img">
                                    <img src="{{$blog->blog_image}}" alt="">
                                 
                                </a>
                                <div class="fcrse_content">
                                    <div class="eps_dots more_dropdown">
                                        <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                        <div class="dropdown-content">
                                            <span onclick="delete_blog({{$blog->id}})">Delete Blog</span>
                                         </div>																										
                                    </div>
                                  
                                <a href="blog_details?blog={{$blog->id}}"  class="crse14s">{{$blog->blog_title}}</a></a>
                                    <a href="" class="crse-cate">{{$blog->blog_categories}}</a>
                                    <div class="auth1lnkprce">
                                    <p class="cr1fot">Instructor Name: <a href="#">{{$user_name}}</a></p>
                                    </div>
                                </div>
                            </div>											
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