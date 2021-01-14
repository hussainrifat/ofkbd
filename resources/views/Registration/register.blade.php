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
                                    <input type="text" value="" class="form-control" name="name" id="name" placeholder="Your Name" value="" />
                                    <span style="color: red" id="std_name_error"> </span>
                                </div>

                                <div class="form-group">
                                    <span>Enter Your Institute Name</span>
                                    <input type="text" value="" class="form-control" name="std_institute" id="std_institute" placeholder="Your Institute Name" value="" />
                                    <span style="color: red" id="std_institute_error"> </span>

                                </div>

                                {{-- <div class="form-group">
                                    <span>Enter Your Class</span>
                                    <input type="text" value="" class="form-control" name="std_class" id="std_class" placeholder="Your Class" value="" />
                                    <span style="color: red" id="std_class_error"> </span>

                                </div> --}}

                                <div class="form-group">
                                    <span>Please Select Your Class</span>
                                    <select class="form-control" id="std_class"  >

                                        <option class="hidden"  selected disabled>Please select your Class</option>
                                        <option>Class 1</option>
                                        <option>Class 2</option>
                                        <option>Class 3</option>
                                        <option>Class 4</option>
                                        <option>Class 5</option>
                                        <option>Class 6</option>
                                        <option>Class 7</option>
                                        <option>Class 8</option>
                                        <option>Class 9</option>
                                        <option>Class 10</option>
                                        <option>Class 11</option>
                                        <option>Class 12</option>

                                    </select>
                                    <span style="color: red" id="std_class_error"> </span>

                                </div>







                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <span>Enter Your Contact Number</span>
                                    <input type="text" value="" minlength="11" maxlength="11" name="contact_number" id="contact_number" name="txtEmpPhone" class="form-control" placeholder="Your Mobile Number" value="" />
                                    <span style="color: red" id="std_number_error"> </span>

                                </div>


                                <div class="form-group">
                                    <span>Enter Your Email</span>
                                    <input type="email" value="" class="form-control" name="email" id="email" placeholder="Your Email" value="" />
                                    <span style="color: red" id="std_email_error"> </span>

                                </div>
                                <div class="form-group">
                                    <span>Enter Your Password</span>
                                    <input type="password" value="" class="form-control" id="password" placeholder="Password" value="" />
                                    <span style="color: red" id="std_password_error"> </span>

                                </div>

                                <div class="form-group">
                                    <span>Retype Your Password</span>
                                    <input type="password" value="" class="form-control" id="rePassword" placeholder="Password" value="" />
                                    <span style="color: red" id="std_rePassword_error"> </span>

                                </div>


                                <span>Already Registered? <a href="{{url('/login')}}"> Sign In </a> From Here</span>
                                <button id="registerstudent" class="btnRegister">Sign Up</button>

                            </div>
                        </div>
                    </div>



                    {{-- Instructor Reg --}}


                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Apply as a Instructor</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Enter Your Name</span>
                                    <input type="text"  class="form-control" id="ins_name"  placeholder="Your Name" value="" />
                                    <span style="color: red" id="ins_name_error"> </span>

                                </div>



                                <div class="form-group">
                                    <span>Enter Your Contact Number</span>
                                    <input  type="text" minlength="11" maxlength="11" id="ins_contact_number"   class="form-control" placeholder="Your Mobile Number" value="" />
                                    <span style="color: red" id="ins_number_error"> </span>

                                </div>
                                <div class="form-group">
                                    <span>Enter Your Email</span>

                                    <input type="email"  class="form-control" id="ins_email"   placeholder="Your Email" value="" />
                                    <span style="color: red" id="ins_email_error"> </span>

                                </div>



                            </div>
                            <div class="col-md-6">



                                <div class="form-group">
                                    <span>Enter Your Password</span>
                                    <input type="password"  class="form-control" id="ins_password"   placeholder="Password" value="" />
                                    <span style="color: red" id="ins_password_error"> </span>

                                </div>

                                <div class="form-group">
                                    <span>Retype Your Password</span>
                                    <input type="password" value="" class="form-control" id="ins_rePassword" placeholder="Password" value="" />
                                    <span style="color: red" id="ins_rePassword_error"> </span>

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
                                        <option>Web Design</option>
                                        <option>Case Solving</option>
                                        <option>Rubiks Cube Solving</option>


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

<script src="resources\js\std_reg_validate.js?{{time()}}"></script>
<script src="resources\js\ins_reg_validate.js?{{time()}}"></script>

@endsection
