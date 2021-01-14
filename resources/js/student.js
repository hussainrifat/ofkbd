// Instructor Profile Edit



  function editStudentDashboardProfileInfo(id){
    var formdata= new FormData;
    formdata.append('id',id);
  
    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"viewStudentDashboardProfileInfo",
      success:function(data)
      {
        a = JSON.parse(data)
        id = $("#edit-student-id").val(a.id);
        name = $("#edit-student-name").val(a.name);
        email = $("#edit-student-email").val(a.email);
        contact_number = $("#edit-student-contact_number").val(a.contact_number);
        std_class = $("#edit-student-student_class").val(a.std_class);
        std_institute= $("#edit-student-student_institute").val(a.std_institute);

      }

    });
  
  }
  
  
  function updateStudentProfileInfo() {
    var formdata= new FormData;
    formdata.append('id',$("#edit-student-id").val());
    formdata.append('name',$("#edit-student-name").val());
    formdata.append('email',$("#edit-student-email").val());
    formdata.append('contact_number',$("#edit-student-contact_number").val());
    formdata.append('std_class',$("#edit-student-student_class").val());
    formdata.append('std_institute',$("#edit-student-student_institute").val());


    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"updateStudentProfileInfo",
      success:function(data)
      {
        location.reload();
      }
    });
  }


  function updateStudentParentsInfo() {

    var id=$("#id").val();
    var mother_name=$("#mother-name").val();
    var father_name=$("#father-name").val();
    var father_contact_number=$("#father-contact_number").val();
    var mother_contact_number=$("#mother-contact_number").val();
    var present_address=$("#present-address").val();



    var formdata= new FormData;
    formdata.append('id',$("#id").val());
    formdata.append('mother_name',$("#mother-name").val());
    formdata.append('father_name',$("#father-name").val());
    formdata.append('father_contact_number',$("#father-contact_number").val());
    formdata.append('mother_contact_number',$("#mother-contact_number").val());
    formdata.append('present_address',$("#present_address").val());


    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"updateStudentParentsInfo",
      success:function(data)
      {

        alert("Information Updated Successfully");
        location.reload();
      }
    });
  }
  
  
  
  function updatestudentPasswordInfo(id) {
  
    var formdata= new FormData;
    var oldpassword=$("#edit-student-old-password").val();
      var newpassword=$("#edit-student-new-password").val();
     formdata.append('id',id);
     formdata.append('oldpassword',oldpassword);
     formdata.append('newpassword',newpassword);
  
    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"updatestudentPasswordInfo",
      success:function(data)
      {
  
        var msg= $.trim(data);
          if(msg=='ok')
          {
            alert("Password Changed Successfully");
            location.reload();
          }
  
          else 
          alert("Old Password Doesn't Matched");
      }
    });
  }



  function StudentCourseEnrollment(id) {

    var confirmation = confirm("Are you sure you want to Enroll in this course?");
  
    if (confirmation)
    {
       var formdata= new FormData();
       formdata.append('id',id);
  
       $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"StudentCourseEnrollment",
          success:function(data)
          {
            // window.location.href='course_view?id='+id;
            window.location.href='student_courses';

            
          }
        });
  
    }
  }


  function SendReportToAdmin(course_id){

    var report_description=$("#report_description").val();

    var formdata= new FormData;
    formdata.append('course_id',course_id);
    formdata.append('report_description',report_description);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"ReportToAdmin",
      success:function(data)
      {
        alert("Dear Student, Thanks For Your Feedback. Your feedback helps our system learn when something isn't right. ");
        location.reload();


      }

    });
  
  }



  function add_review(id) {


    var student_rating=$("#student_rating").val();
    var student_review=$("#student_review").val();


    var formdata= new FormData;
    formdata.append('student_rating',student_rating);
    formdata.append('student_review',student_review);
    formdata.append('id',id);

    

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"add_review",
      success:function(data)
      {
        alert("Dear Student, Thanks For Your Feedback.  ");
        location.reload();


      }

    });


    

  
  }