// Admin Instructor Edit, Delete Funcion




// Student Table in Admin Table Start Here
function editStudentProfileInfo(id){
  var formdata= new FormData;
  formdata.append('id',id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"editStudentProfileInfo",
    success:function(data)
    {
      a = JSON.parse(data)
      id = $("#edit-student-id").val(a.id);
      name = $("#edit-student-name").val(a.name);
      email = $("#edit-student-email").val(a.email);
      contact_number = $("#edit-student-contact_number").val(a.contact_number);
      student_class = $("#edit-student-student_class").val(a.class);
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
      confirm("Are You Sure You Want to Delete This Student Information?");

    }
  });

}
// Student Table in Admin Table Ends Here


// Instructor Table in Admin Start Here

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
      confirm("Are You Sure You Want to Delete This Instructor Information?");

    }
  });

}

  // Instructor Table in Admin End Here

  function editCourseInfo(id){
      var formdata= new FormData;
      formdata.append('id',id);


      $.ajax({
        processData:false,
        contentType:false,
        data:formdata,
        type:"post",
        url:"editAdminCourseInfo",
        success:function(data)
        {
          a = JSON.parse(data)
          id = $("#edit-course-id").val(a.id);
          course_name = $("#edit-course-name").val(a.course_name);
          course_category = $("#edit-course-category").val(a.course_category);
          course_time_duration = $("#edit-course-time-duration").val(a.course_time_duration);

        }
      });

    }



    function updateAdminCourseInfo() {
      var formdata= new FormData;
      formdata.append('id',$("#edit-course-id").val());
      formdata.append('course_name',$("#edit-course-name").val());
      formdata.append('course_category',$("#edit-course-category").val());
      formdata.append('course_time_duration',$("#edit-course-time-duration").val());

      $.ajax({
        processData:false,
        contentType:false,
        data:formdata,
        type:"post",
        url:"updateAdminCourseInfo",
        success:function(data)
        {
          location.reload();
        }
      });
    }








/// Course Delete Table in Admin Start Here


function deleteCourseInfo(course_id){

  var course_id=course_id;


  var formdata= new FormData;
  formdata.append('course_id',course_id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"deleteCourseInfo",
    success:function(data)
    {
      window.location.href ="admin_all_courses"
      alert("Are You Sure You Want to Delete This Course Information?");

    }
  });

}


function ViewCourseActiveStatus(course_id){
  var formdata= new FormData;
  formdata.append('course_id',course_id);
  formdata.append('edit-course-active-status',$("#edit-course-active-status").val());



  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"ViewCourseActiveStatus",
    success:function(data)
    {
      a = JSON.parse(data)
      id = $("#edit-course").val(a.id);
      course_active_status = $("#edit-course-active-status").val(a.course_active_status);


    }
  });

}


function updateCourseStatusInfo() {
  var formdata= new FormData;
  formdata.append('id',$("#edit-course").val());
  formdata.append('edit_course_active_status',$("#edit-course-active-status").val());



  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"updateCourseActiveStatus",
    success:function(data)
    {
      location.reload();
    }
  });
}



function deleteBlog(blog_id){

  var blog_id=blog_id;

  var formdata= new FormData;
  formdata.append('blog_id',blog_id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"deleteBlog",
    success:function(data)
    {
      window.location.href ="admin_all_blog"
      confirm("Are You Sure You Want to Delete This Blog?");

    }
  });

}