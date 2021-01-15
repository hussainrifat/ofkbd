@extends('student_layout')
@section('student_content')

<div class="sa4d25">
    <h1 style="text-align: center">Students Work Gallery</h1>

    <div class="container">			
        <div class="row">

            
            <div class="col-md-12">
                <div class="_14d25">
                    <div class="row">
                       
                       @foreach($files as $file)
                        <div class="col-lg-8 col-md-8" style="margin-left: 160px">
                            <div class="fcrse_1 mb-30">
                                <a href="" class="fcrse_img">
                                    <img src="{{$file->image}}" alt="">
                                    <div class="course-overlay">
                                       
                                      
                                        
                                    </div>
                                </a>
                                <div class="fcrse_content">
                             
                                  
                                <a href="" class="crse14s">Title: {{$file->title}}</a></a>
                                    <div class="auth1lnkprce">
                                    <p class="cr1fot">Student Name : <a href="">{{$file->getStudentData->name}}</a></p>
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