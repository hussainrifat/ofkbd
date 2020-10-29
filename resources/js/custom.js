
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
        alert("Your Course Created Succesfully");
        window.location.href ="instructor_courses"
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

function delete_course(id){

  var course_id=id;
  
  var formdata= new FormData;
  formdata.append('course_id',course_id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"delete_course",
    success:function(data)
    {
      window.location.href ="instructor_courses"
      alert("Are You Sure You Want to Delete This Course?");

    }
  });

}


// Admin Student Edit, Delete Funcion
  function editUserInfo(id){
  var formdata= new FormData;
  formdata.append('id',id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"editStudentInfo",
    success:function(data)
    {
      a = JSON.parse(data)
      id = $("#edit-student-id").val(a.id);
      name = $("#edit-student-name").val(a.name);
      email = $("#edit-student-email").val(a.email);
      student_class = $("#edit-student-student_class").val(a.class);
      contact_number = $("#edit-student-contact_number").val(a.contact_number);
      student_institute = $("#edit-student-student_institute").val(a.institute);
    }
  });

}

function updateUserInfo() {
  var formdata= new FormData;
  formdata.append('id',$("#edit-student-id").val());
  formdata.append('name',$("#edit-student-name").val());
  formdata.append('email',$("#edit-student-email").val());
  formdata.append('class',$("#edit-student-student_class").val());
  formdata.append('contact_number',$("#edit-student-contact_number").val());
  formdata.append('institute',$("#edit-student-student_institute").val());
  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"updateStudentInfo",
    success:function(data)
    {
      location.reload();
    }
  });
}


function deleteUserInfo(id){

  var user_id=id;
  
  var formdata= new FormData;
  formdata.append('user_id',user_id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"deleteStudentInfo",
    success:function(data)
    {
      window.location.href ="admin_all_students"
      alert("Are You Sure You Want to Delete This Course?");

    }
  });

}


// Admin Instructor Edit, Delete Funcion

function editInstructorInfo(id){

  var formdata= new FormData;
  formdata.append('id',id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"editInstructorInfo",
    success:function(data)
    {
      a = JSON.parse(data)
      id = $("#edit-instructor-id").val(a.id);
      name = $("#edit-instructor-name").val(a.name);
      email = $("#edit-instructor-email").val(a.email);
      contact_number = $("#edit-instructor-contact_number").val(a.contact_number);
    }
  });

}


function updateInstructorInfo() {
  var formdata= new FormData;
  formdata.append('id',$("#edit-instructor-id").val());
  formdata.append('name',$("#edit-instructor-name").val());
  formdata.append('email',$("#edit-instructor-email").val());
  formdata.append('contact_number',$("#edit-instructor-contact_number").val());
  
  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"updateInstructorInfo",
    success:function(data)
    {
      location.reload();
    }
  });
}


function deleteInstructorInfo(id){

  var user_id=id;
  
  var formdata= new FormData;
  formdata.append('user_id',user_id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"deleteInstructorInfo",
    success:function(data)
    {
      window.location.href ="admin_all_instructors"
      alert("Are You Sure You Want to Delete This Instructor Informatio?");

    }
  });

}



