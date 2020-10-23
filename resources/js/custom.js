
$(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 




  $("#registerinstructor").on('click',function()
  {
  
  
    var ins_name=$("#ins_name").val();
    var ins_number=$("#ins_contact_number").val();
    var ins_email=$("#ins_email").val();
    var ins_password=$("#ins_password").val();
    var ins_expertise=$("#expertise").val();
  
    // alert(ins_name+' '+ins_email+' '+expertise+' '+ins_password+' '+ins_name);
  
  
  var formdata= new FormData();
  formdata.append('ins_name',ins_name);
  formdata.append('ins_number',ins_number);
  formdata.append('ins_email',ins_email);
  formdata.append('ins_password',ins_password);
  formdata.append('ins_expertise',ins_expertise);
  
  
  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"insert_instructor_data",
    success:function(data)
    {
     alert("Instructor Registration Completed");
     window.location.href ="otp"
    }
  });
  
  
  
  
  });


  $("#registerstudent").on('click',function()
  {
    // alert("Student");
    var name=$("#name").val();
    var std_institute= $("#std_institute").val();
    var std_class= $("#std_class").val();
    var contact_number=$("#contact_number").val();
    var email=$("#email").val();
    var password=$("#password").val();
  
    // alert(std_number+' '+std_email+' '+std_password+' '+std_name+' '+std_institute);
    
    var formdata= new FormData();
    formdata.append('name',name);
    formdata.append('institute',std_institute);
    formdata.append('class',std_class);
    formdata.append('contact_number',contact_number);
    formdata.append('email',email);
    formdata.append('password',password);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"std_data_insert",
      success:function(data)
      {
       alert("Student Registration Completed");
     window.location.href ="otp"
      }
    });

  });
  
  $("#login").on('click',function()
  {

    var contact_number=$("#contact_number").val();
    var password=$("#password").val();
    var formdata= new FormData();
    formdata.append('contact_number',contact_number);
    formdata.append('password',password);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"login_check",
      success:function(data)
      {

        var msg= $.trim(data);
        if(msg=='student')
        {
          window.location.href ="student_home"
        }

        else if(msg=='instructor')
        {
          window.location.href ="instructor_home"
        }

        else 
        alert("Contact Number and Password Doesn't Matched")
      }
    });


  });


  $("#otp").on('click',function()
  {
    var user_otp=$("#user_otp").val();
        // alert(user_otp);

    var formdata= new FormData();
    formdata.append('user_otp',user_otp);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"match_otp",
      success:function(data)
      {

        var msg=$.trim(data);
        if(msg=='ok')
        {
          alert("OTP Matched");
         window.location.href ="login"

        }

        else{
          alert("OTP Doesn't Matched");
        }
        // window.location.href ="homepage"

      }
    });


    // alert("OTP");

  });

    $("#create_course").on('click',function()
    {

    var course_name=$("#course_name").val();
    var course_description=$("#course_description").val();
    var course_time_duration=$("#course_time_duration").val();
    var course_category=$("#course_category").val();
    // alert(course_name+' '+course_description+' '+course_time_duration+' '+course_category+' '+course_image);



    var formdata= new FormData();
    formdata.append('course_name',course_name);
    formdata.append('course_description',course_description);
    formdata.append('course_time_duration',course_time_duration);
    formdata.append('course_category',course_category);
    formdata.append('course_image',$('#course_image')[0].files[0]);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"create_course",
      success:function(data)
      {
        alert("Course Created");


      }
    });
   

    });

});

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {

      $('.insert_course_image').attr('src', e.target.result);

      $('.insert_course_image_label').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}


