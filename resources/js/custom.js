
$(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 




  $("#registerinstructor").on('click',function()
  {
  
    // alert("Helloo");
  
    var ins_name=$("#ins_name").val();
    var ins_institute= $("#ins_institute").val();
    var ins_number=$("#ins_number").val();
    var ins_email=$("#ins_email").val();
    var ins_password=$("#ins_password").val();
    var ins_expertise=$("#ins_expertise").val();
  
    // alert(ins_number+' '+ins_email+' '+ins_expertise+' '+ins_password+' '+ins_name+' '+ins_institute);
  
  
  var formdata= new FormData();
  formdata.append('ins_name',ins_name);
  formdata.append('ins_institute',ins_institute);
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
    }
  });
  
  
  
  
  });


  $("#registerstudent").on('click',function()
  {
    // alert("Student");
    var std_name=$("#std_name").val();
    var std_institute= $("#std_institute").val();
    var std_class= $("#std_class").val();
    var std_number=$("#std_number").val();
    var std_email=$("#std_email").val();
    var std_password=$("#std_password").val();
  
    // alert(std_number+' '+std_email+' '+std_password+' '+std_name+' '+std_institute);
    
    var formdata= new FormData();
    formdata.append('std_name',std_name);
    formdata.append('std_institute',std_institute);
    formdata.append('std_class',std_class);
    formdata.append('std_number',std_number);
    formdata.append('std_email',std_email);
    formdata.append('std_password',std_password);

    $.ajax({
      processData:false,
      contentType:false,
      data:formdata,
      type:"post",
      url:"std_data_insert",
      success:function(data)
      {
       alert("Student Registration Completed");
      }
    });
  

  });
  
  
});

