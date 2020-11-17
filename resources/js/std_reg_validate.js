$(function(){

  var error= false;
  var arr = [10];
  var i=0;
  var numCheack =0;

  for(var k =0;k<10;k++){
    arr[k]=0;
  }

//  fetch_expertise();
  

    $('#std_name_error').hide();
    $('#std_institute_error').hide();
    $('#std_class_error').hide();
    $('#std_number_error').hide();
    $('#std_email_error').hide();
    $('#std_password_error').hide();
   

// student data validation

    $('#name').focusout(function()
    {
      arr[0]= 1;
        if($('#name').val().length==0)
        {
            $('#std_name_error').html("Name Field Is Required");
            $('#std_name_error').show();
            error= true;
        }
        else
        $('#std_name_error').hide();
        error= false;


    });

    $('#std_institute').focusout(function(){
      arr[1]= 1;

        if($('#std_institute').val().length==0)
        {
            $('#std_institute_error').html("Institute Name Is Required");
            $('#std_institute_error').show();
            error= true;

        }

        else
        $('#std_institute_error').hide();
        error= false;



    });


    $('#std_class').focusout(function()
    {
      arr[2]= 1;

        if($('#std_class').val().length==0)
        {
            $('#std_class_error').html("Class Field Is Required");
            $('#std_class_error').show();
            error= true;

        }
        else
        $('#std_class_error').hide();
             error= false;


    });


    $('#contact_number').focusout(function()
    {
      arr[3]= 1;
      var numValue=$('#contact_number').val();

      var numPattern=/^(0)(1)[0-9]*[]?[0-9]*$/;

        if($('#contact_number').val().length==0)
        {
            $('#std_number_error').html("Number Field Is Required");
            $('#std_number_error').show();
            error= true;

        }

        else if(!numPattern.test(numValue)){ 
            
          $("#std_number_error").html( "Phone number isn't valid");
          $("#std_number_error").show();
          error= true;
    
        }

        else if($('#contact_number').val().length!=11)
        {
            $('#std_number_error').html("Phone number must be 11");
            $('#std_number_error').show();
            error= true;
        }



        else

        {
          $('#std_number_error').hide();


          var contact_number = $("#contact_number").val();
                var formData = new FormData();
                formData.append('contact_number',contact_number);
                formData.append('number_check','number_check');
          
              $.ajax({
               processData:false,
               contentType:false,
               data:formData,
               type:"post",
               url:"number_check",
               success:function(data)
               {
                 var msg  = $.trim(data);
          
                //  alert(msg);
          
                 if(msg =='match')
                 {
                  error= true;
               $("#std_number_error").html("Contact Number Already Exist");
               $("#std_number_error").show();
                        

                 }
                 else
                 {
                    $("#std_number_error").hide();
                          error= false;
                          numCheack=5;

                 }
                 //alert('ok');
               }
           });
        }

    
    });




    $("#email").focusout(function()
    {
      arr[4]= 1;

     //alert("ok")

     if($("#email").val().length == 0)

      {
         $("#std_email_error").html("Email field is required");
          $("#std_email_error").show();
                      error= true;

     }

    else{
    // var email = $("#email").val();

     var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

       if(!pattern.test($("#email").val())) {
       
      $("#std_email_error").html("Invalid Email Address");
      $("#std_email_error").show();
      error = true;

      //return false;
    }
    else
    {
     $("#std_email_error").hide();
        
        var email = $("#email").val();
        var formData = new FormData();
        formData.append('email',email);
        formData.append('email_check','email_check');

      $.ajax({
       processData:false,
       contentType:false,
       data:formData,
       type:"post",
       url:"email_check",
       success:function(data)
       {
         var msg  = $.trim(data);

        //  alert(msg);

         if(msg =='match')
         {
       $("#std_email_error").html("Email Already Exist");
       $("#std_email_error").show();
             error= true;

         }
         else
         {
            $("#std_email_error").hide();
            error= false;

         }
         //alert('ok');
       }
   });

    }
  }

       
    });


     $("#password").focusout(function()
       {
        arr[5]= 1;

       if($("#password").val().length == 0)

      {
         $("#std_password_error").html("password field is required");
          $("#std_password_error").show();
          error= true;

     } 
     else
     {

      if( $("#password").val().length<8)
      {
        $("#std_password_error").html("Minimum 8 character required");
          $("#std_password_error").show();
          error= true;

        //$("#pass_error").hide();
      }
      else
      {
       var password_reg_ex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])");
       if(!password_reg_ex.test($("#password").val())) {
      $("#std_password_error").html("password should contain One Uppercase, One lowercase,one number,one special character");
      $("#std_password_error").show();
      error= true;

      //return false;
    }
    else{
       $("#std_password_error").hide();
       error= false;

     }

      }
     }

       });

       
       $('#cheackBox').focusout(function()
       {
         arr[6]= 1;
           error= false;
   
       });

 
  $("#registerstudent").on('click',function()
  {

    for(var j =0;j<7;j++){
      if(arr[j] == 1)
          i++;
    }


    if( i == 7 ) {

      if( numCheack == 5){
        if(error== false)

    {

    
    var name=$("#name").val();
    var std_institute= $("#std_institute").val();
    var std_class= $("#std_class").val();
    var contact_number=$("#contact_number").val();
    var email=$("#email").val();
    var password=$("#password").val();

  

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

   
  

  }

  else
    {
      alert("All Field is must be valid");
   window.location.reload();
    Event.stopPropagation();
  }

      }

      else{
        alert("All Field is must be valid with number");
        window.location.reload();
       Event.stopPropagation();
      }
       

}
else
       {alert("All Field Is Required");
     
       window.location.reload();
       Event.stopPropagation();}
  });


});