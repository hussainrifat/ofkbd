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
        student_class = $("#edit-student-student_class").val(a.class);
        contact_number = $("#edit-student-contact_number").val(a.contact_number);
        student_institute = $("#edit-student-student_institute").val(a.institute);

        alert(id);
      }


    });
  
  }
  
  
//   function updateInstructorProfileInfo() {
//     var formdata= new FormData;
//     formdata.append('id',$("#edit-instructor-id").val());
//     formdata.append('name',$("#edit-instructor-name").val());
//     formdata.append('email',$("#edit-instructor-email").val());
//     formdata.append('contact_number',$("#edit-instructor-contact_number").val());
//     formdata.append('password',$("#edit-instructor-password").val());
  
//     $.ajax({
//       processData:false,
//       contentType:false,
//       data:formdata,
//       type:"post",
//       url:"updateInstructorProfileInfo",
//       success:function(data)
//       {
//         location.reload();
//       }
//     });
//   }
  
  
  
//   function updateInstructorPasswordInfo(id) {
  
//     var formdata= new FormData;
//     var oldpassword=$("#edit-instructor-old-password").val();
//       var newpassword=$("#edit-instructor-new-password").val();
//      formdata.append('id',id);
//      formdata.append('oldpassword',oldpassword);
//      formdata.append('newpassword',newpassword);
  
//     $.ajax({
//       processData:false,
//       contentType:false,
//       data:formdata,
//       type:"post",
//       url:"updateInstructorPasswordInfo",
//       success:function(data)
//       {
  
//         var msg= $.trim(data);
//           if(msg=='ok')
//           {
//             alert("Password Matched");
//             location.reload();
//           }
  
//           else 
//           alert("Old Password Doesn't Matched")
//       }
//     });
//   }