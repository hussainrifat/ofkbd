@extends('layout')
@section('content')
    
<head> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


{{-- <script src="{asset('assets')}}/js\rejistrationjquery.min.js"></script>
<script src="{asset('assets')}}/js\registrationbootstrap.min.js"></script>
<script src="{asset('assets')}}/registrationbootstrap2.min.css"></script> --}}


<!------ Include the above in your HEAD tag ---------->
</head>



<body>
@csrf
<section class="bgregisterimage" style="background-image: url('{{ asset('assets/img/slider-bg-1.png')}}'">

{{-- <div class="container register"> --}}
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3 style="font-weight:700">Welcome To OFK</h3>
                <p style="font-weight: 500">You Are 30 Seconds away from creating your OFK Account!</p>
                {{-- <input type="submit" name="" value="Login"/><br/> --}}
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Instructor</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Student</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Enter Your Name</span>
                                    <input type="text" value="sample name" class="form-control" name="name" id="name" placeholder="Your Name" value="" />
                                    <span style="color: red" id="std_name_error"> </span>
                                </div>

                                <div class="form-group">
                                    <span>Enter Your Institute Name</span>
                                    <input type="text" value="sample school" class="form-control" name="std_institute" id="std_institute" placeholder="Your Institute Name" value="" />
                                    <span style="color: red" id="std_institute_error"> </span>

                                </div>
                                
                                <div class="form-group">
                                    <span>Enter Your Class</span>
                                    <input type="text" value="sample class" class="form-control" name="std_class" id="std_class" placeholder="Your Class" value="" />
                                    <span style="color: red" id="std_class_error"> </span>

                                </div>
                                
                                
                                
                            </div>
                            <div class="col-md-6">
                              
                                <div class="form-group">
                                    <span>Enter Your Contact Number</span>
                                    <input type="text" value="sample contact" minlength="10" maxlength="10" name="contact_number" id="contact_number" name="txtEmpPhone" class="form-control" placeholder="Your Mobile Number" value="" />
                                    <span style="color: red" id="std_number_error"> </span>

                                </div>
                                
                              
                                <div class="form-group">
                                    <span>Enter Your Email</span>
                                    <input type="email" value="sampleemail@gmail.com" class="form-control" name="email" id="email" placeholder="Your Email" value="" />
                                    <span style="color: red" id="std_email_error"> </span>

                                </div>
                                <div class="form-group">
                                    <span>Enter Your Password</span>
                                    <input type="password" value="aaAA12#$$dfsd" class="form-control" name="password" id="password" placeholder="Password" value="" />
                                    <span style="color: red" id="std_password_error"> </span>

                                </div>
                              
                             
                                <span>Already Registered? <a href="{{url('/login')}}"> Sign In </a> From Here</span>
                                <button id="registerstudent" class="btnRegister">Sign Up</button>

                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Apply as a Instructor</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Enter Your Name</span>
                                    <input type="text" class="form-control" id="ins_name"  placeholder="Your Name" value="" />
                                    <span style="color: red" id="ins_name_error"> </span>

                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <span>Enter Your Contact Number</span>
                                    <input type="text" minlength="10" maxlength="10" id="ins_contact_number"   class="form-control" placeholder="Your Mobile Number" value="" />
                                    <span style="color: red" id="ins_number_error"> </span>

                                </div>
                                <div class="form-group">
                                    <span>Enter Your Email</span>

                                    <input type="email" class="form-control" id="ins_email"   placeholder="Your Email" value="" />
                                    <span style="color: red" id="ins_email_error"> </span>

                                </div>
                          


                            </div>
                            <div class="col-md-6">

                    

                                <div class="form-group">
                                    <span>Enter Your Password</span>
                                    <input type="password" class="form-control" id="ins_password"   placeholder="Password" value="" />
                                    <span style="color: red" id="ins_password_error"> </span>

                                </div>
                               
                                
                                
                                <div class="form-group">
                                    <span>Please Select Your Expertise</span>
                                    <select class="form-control" id="expertise"  >
                                        
                                        <option class="hidden"  selected disabled>Please select your Expertise</option>
                                        <option>Art</option>
                                        <option>Craft</option>
                                        <option>Calligraphy</option>
                                        <option>Programming</option>
                                        <option>Robotics</option>

                                    </select>
                                    <span style="color: red" id="ins_expertise_error"> </span>

                                </div>
                              <span>Already Registered? <a href="{{url('/login')}}"> Sign In </a> From Here</span>
                                <button id="registerinstructor" class="btnRegister">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
  
    </div>

    
</section>

</body> 

@endsection