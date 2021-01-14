
$(function(){

 
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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

        else if(msg=='otp_error')
        {
          alert("Mobile Verification is Required");
          window.location.href ="resend_otp"

        }

        else 
        alert("Contact Number and Password Doesn't Matched")
      }
    });
  });



  $("#resend_otp").on('click',function()
  {

  

    var contact_number=$("#contact_number").val();
    
    var formdata= new FormData();
    formdata.append('contact_number',contact_number);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"resend_otp_check",
      success:function(data)
      {
        
        alert("A otp has been sent in your mobile.");
        window.location.href ="otp"

       
      }
    });
  });


  $("#admin_login").on('click',function()
  {

    var username=$("#username").val();
    var password=$("#password").val();
    var formdata= new FormData();
    formdata.append('username',username);
    formdata.append('password',password);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"admin_login_check",
      success:function(data)
      {

        var msg= $.trim(data);
        if(msg=='admin')
        {
          window.location.href ="admin_all_students"
        }

        else 
        alert("User Name and Password Doesn't Matched")
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
        alert("Your Course Created Succesfully & Waiting For Admin Approval");
        window.location.href ="instructor_courses"
      }
    });
   

    });


    $("#create_post").on('click',function()
    {


    var blog_title=$("#blog_title").val();
    var blog_description=$("#blog_description").val();
    var blog_category=$("#blog_category").val();
    



    var formdata= new FormData();
    formdata.append('blog_title',blog_title);
    formdata.append('blog_description',blog_description);
    formdata.append('blog_category',blog_category);
    formdata.append('blog_image',$('#blog_image')[0].files[0]);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"create_post",
      success:function(data)
      {
        alert("Your Blog Post Created Succesfully");
        window.location.href ="instructor_blog_view"
      }
    });
   

    });

    $("#add_content").on('click',function()
    {

    var course_id= $("#hidden_input").val();
    var video_name=$("#video_name").val();
    var video_link=$("#video_embed").val();
    var video_description=$("#video_description").val();
    var video_time_duration=$("#video_time_duration").val();
    // alert(course_id);

    var formdata= new FormData();
    formdata.append('video_name',video_name);
    formdata.append('video_link',video_link);
    formdata.append('video_description',video_description);
    formdata.append('video_time_duration',video_time_duration);
    formdata.append('course_id',course_id);


    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"insert_content",
      success:function(data)
      {
        alert("Your Content Added Succesfully");
      
        location.reload();
      }
    });
   

    });

});


function readPOST(input) {
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


function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(f) {

      $('.insert_blog_image').attr('src', f.target.result);

      $('.insert_blog_image_label').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}






function videoIMG(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {

      // $('.insert_course_image').attr('src', e.target.result);

      $('.insert_video_image_label').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}












