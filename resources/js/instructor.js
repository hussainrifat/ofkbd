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