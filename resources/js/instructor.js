// Instructor Course Delete


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



// Instructor Course Content Edit & Update


function editCourseModal(id){
  
  var formdata= new FormData;
  formdata.append('id',id);

  $.ajax({
    processData:false,
    contentType:false,
    data:formdata,
    type:"post",
    url:"viewCourseContentInfo",
    success:function(data)
    {
      a = JSON.parse(data)
      id = $("#edit-video-id").val(a.id);
      video_title = $("#edit-video-title").val(a.video_title);
      video_time_duration = $("#edit-video-time-description").val(a.video_time_duration);
      video_embed = $("#edit-video-embed").val(a.video_embed);
      video_description = $("#edit-video-description").val(a.video_description);

    }
  });

}


function updateCourseContentInfo() {

      var formdata= new FormData;
      formdata.append('id',$("#edit-video-id").val());
      formdata.append('video_title',$("#edit-video-title").val());
      formdata.append('video_description',$("#edit-video-description").val());
      formdata.append('video_time_duration',$("#edit-video-time-description").val());
      formdata.append('video_embed',$("#edit-video-embed").val());


      $.ajax({
        processData:false,
        contentType:false,
        data:formdata,
        type:"post",
        url:"updateCourseContentInfo",
        success:function(data)
        {
          location.reload();
        }
      });

    }


    function deleteCourseContentInfo(id){
  
      var id=id;
      
      var formdata= new FormData;
      formdata.append('id',id);
    
      $.ajax({
        processData:false,
        contentType:false,
        data:formdata,
        type:"post",
        url:"deleteCourseContentInfo",
        success:function(data)
        {
          window.location.href ="course_details"
          alert("Are You Sure You Want to Delete This Video?");
    
        }
      });

    
    }



// Instructor Profile Edit


function editInstructorProfileInfo(id){
  
    var formdata= new FormData;
    formdata.append('id',id);
  
    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"viewInstructorProfileInfo",
      success:function(data)
      {
        a = JSON.parse(data)
        id = $("#edit-instructor-id").val(a.id);
        name = $("#edit-instructor-name").val(a.name);
        email = $("#edit-instructor-email").val(a.email);
        contact_number = $("#edit-instructor-contact_number").val(a.contact_number);
        password = $("#edit-instructor-password").val(a.contact_number);
  
      }
    });
  
  }
  
  
  function updateInstructorProfileInfo() {
    var formdata= new FormData;
    formdata.append('id',$("#edit-instructor-id").val());
    formdata.append('name',$("#edit-instructor-name").val());
    formdata.append('email',$("#edit-instructor-email").val());
    formdata.append('contact_number',$("#edit-instructor-contact_number").val());
    formdata.append('password',$("#edit-instructor-password").val());
  
    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"updateInstructorProfileInfo",
      success:function(data)
      {
        location.reload();
      }
    });
  }
  
  
  
  function updateInstructorPasswordInfo(id) {
  
    var formdata= new FormData;
    var oldpassword=$("#edit-instructor-old-password").val();
      var newpassword=$("#edit-instructor-new-password").val();
     formdata.append('id',id);
     formdata.append('oldpassword',oldpassword);
     formdata.append('newpassword',newpassword);
  
    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"updateInstructorPasswordInfo",
      success:function(data)
      {
  
        var msg= $.trim(data);
          if(msg=='ok')
          {
            alert("Password Matched");
            location.reload();
          }
  
          else 
          alert("Old Password Doesn't Matched")
      }
    });
  }