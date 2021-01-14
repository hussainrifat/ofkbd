@extends('student_layout')
@section('student_content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<div class="faq1256">
    <div class="container">
        <div class="row">	
            
    
      
            <div class="col-lg-7 col-md-6">
                <div class="certi_form">
                    <div class="all_ques_lest">
                        <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Robotics Quiz : R0101</h2>


                        <div class="ques_item">
                            <div class="ques_title">
                                <span>প্রশ্ন ১:-</span>
                                রোবটের ব্রেইন কোন ধরনের সিগন্যালের মাধ্যমে তার কার্যকলাপ নিয়ন্ত্রণ করে?

                            </div>
                            <div class="ui form">
                                <div class="grouped fields">										
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="hidden" id="course_id" value="{{$course_id}}">
                                            <input type="radio" name="q1" value="op1"  tabindex="0" class="hidden">
                                            <label>লাইট সিগন্যাল
                                            </label>
                                          </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q1" value="op2" tabindex="0" class="hidden">
                                            <label>সাউন্ড সিগন্যাল
                                            </label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q1" value="op3" tabindex="0" class="hidden">
                                            <label> ইলেক্ট্রিক সিগন্যাল
                                            </label>
                                        </div>
                                    </div>
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q1" value="op4" tabindex="0" class="hidden">
                                            <label> নিউম্যাটিক সিগন্যাল
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       <div class="ques_item">
                            <div class="ques_title">
                                <span>প্রশ্ন ২:-</span>
                                প্রযুক্তির যে শাখা রোবোটিক ডিজাইন সংগঠন নিয়ন্ত্রন এবং পরিচালনায় সংযুক্ত তাকে কী বলে?
                            </div>
                            <div class="ui form">
                                <div class="grouped fields">										
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q2" value="op1"  tabindex="0" class="hidden">
                                            <label>রোবোটিকস</label>
                                          </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q2" value="op2" tabindex="0" class="hidden">
                                            <label>বায়োমেট্রিক্স</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q2" value="op3" tabindex="0" class="hidden">
                                            <label>  ইনফরমেটিক্স</label>
                                        </div>
                                    </div>
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q2" value="op4" tabindex="0" class="hidden">
                                            <label>বিহেভিয়ার</label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div> 


                      <div class="ques_item">
                            <div class="ques_title">
                                <span>প্রশ্ন ৩ :-</span>
                                রোবটিক্স শব্দটি এসেছে
                            </div>
                            <div class="ui form">
                                <div class="grouped fields">										
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q3" value="op1"  tabindex="0" class="hidden">
                                            <label>ইংরেজি</label>
                                          </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q3" value="op2" tabindex="0" class="hidden">
                                            <label> ল্যাটিন </label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q3" value="op3" tabindex="0" class="hidden">
                                            <label>গ্রিক </label>
                                        </div>
                                    </div>
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q3" value="op4" tabindex="0" class="hidden">
                                            <label>ফার্সী</label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

{{-- 
                        <div class="ques_item">
                            <div class="ques_title">
                                <span>Ques 4 :-</span>
                                The following is true for a Robot and NC Machine                            </div>
                            <div class="ui form">
                                <div class="grouped fields">										
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q4" value="op1"  tabindex="0" class="hidden">
                                            <label>Similar power drive technology is used in both</label>
                                          </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q4" value="op2" tabindex="0" class="hidden">
                                            <label> Different feedback systems are used in both</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q4" value="op3" tabindex="0" class="hidden">
                                            <label>Programming is same for both</label>
                                        </div>
                                    </div>
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="q4" value="op4" tabindex="0" class="hidden">
                                            <label>All of the above</label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     --}}
                       
                     
                   
                        
                        
                    </div>
                    <button class="test_submit_btn" id="art_quiz" type="button">Submit Test</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('resources')}}/js\art_quiz.js?{{time()}}"></script>


@endsection