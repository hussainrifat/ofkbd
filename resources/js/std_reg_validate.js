$(function(){

//  fetch_expertise();
  

    $('#std_name_error').hide();
    $('#std_institute_error').hide();
    $('#std_class_error').hide();
    $('#std_number_error').hide();
    $('#std_email_error').hide();
    $('#std_password_error').hide();
   

 $('#ins_name_error').hide();
    $('#ins_institute_error').hide();
    $('#ins_number_error').hide();
    $('#ins_email_error').hide();
    $('#ins_password_error').hide();
    $('#ins_expertise_error').hide();





// student data validation

    $('#name').focusout(function()
    {
        if($('#name').val().length==0)
        {
            $('#std_name_error').html("Name Field Is Required");
            $('#std_name_error').show();
        }
        else
        $('#std_name_error').hide();

    });

    $('#std_institute').focusout(function(){

        if($('#std_institute').val().length==0)
        {
            $('#std_institute_error').html("Institute Name Is Required");
            $('#std_institute_error').show();
        }

        else
        $('#std_institute_error').hide();


    });


    $('#std_class').focusout(function()
    {
        if($('#std_class').val().length==0)
        {
            $('#std_class_error').html("Class Field Is Required");
            $('#std_class_error').show();
        }
        else
        $('#std_class_error').hide();

    });


    $('#contact_number').focusout(function()
    {
        if($('#contact_number').val().length==0)
        {
            $('#std_number_error').html("Number Field Is Required");
            $('#std_number_error').show();
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
               $("#std_number_error").html("Contact Number Already Exist");
               $("#std_number_error").show();
                 }
                 else
                 {
                    $("#std_number_error").hide();
                 }
                 //alert('ok');
               }
           });
        }

    
    });




    $("#email").focusout(function()
    {

     //alert("ok")

     if($("#email").val().length == 0)

      {
         $("#std_email_error").html("Email field is required");
          $("#std_email_error").show();
     }

    else{
    // var email = $("#email").val();

     var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

 if(!pattern.test($("#email").val())) {
      $("#std_email_error").html("Invalid Email Address");
      $("#std_email_error").show();
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
         }
         else
         {
            $("#std_email_error").hide();
         }
         //alert('ok');
       }
   });

    }
  }

       
    });


     $("#password").focusout(function()
       {

       if($("#password").val().length == 0)

      {
         $("#std_password_error").html("password field is required");
          $("#std_password_error").show();
     } 
     else
     {

      if( $("#password").val().length<8)
      {
        $("#std_password_error").html("Minimum 8 character required");
          $("#std_password_error").show();
        //$("#pass_error").hide();
      }
      else
      {
       var password_reg_ex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])");
       if(!password_reg_ex.test($("#password").val())) {
      $("#std_password_error").html("password should contain One Uppercase, One lowercase,one number,one special character");
      $("#std_password_error").show();
      //return false;
    }
    else{
       $("#std_password_error").hide();
     }

      }
     }

       });



       // Instruction Data Validation

       $('#ins_name').focusout(function()
       {

           if($('#ins_name').val().length==0)
           {
               $('#ins_name_error').html("Name Field Is Required");
               $('#ins_name_error').show();
           }
           else
           $('#ins_name_error').hide();
   
       });



    
       $("#ins_password").focusout(function()
       {

       if($("#ins_password").val().length == 0)

      {
         $("#ins_password_error").html("password field is required");
          $("#ins_password_error").show();
     } 
     else
     {

      if( $("#ins_password").val().length<8)
      {
        $("#ins_password_error").html("Minimum 8 character required");
          $("#ins_password_error").show();
        //$("#pass_error").hide();
      }
      else
      {
       var password_reg_ex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])");
       if(!password_reg_ex.test($("#ins_password").val())) {
      $("#ins_password_error").html("password should contain One Uppercase, One lowercase,one number,one special character");
      $("#ins_password_error").show();
      //return false;
    }
    else{
       $("#ins_password_error").hide();
     }

      }
     }

       });



       $('#ins_contact_number').focusout(function()
    {
        if($('#ins_contact_number').val().length==0)
        {
            $('#ins_number_error').html("Number Field Is Required");
            $('#ins_number_error').show();
        }
        else
        {
    
          $("#ins_number_error").hide();
            
          var contact_number = $("#ins_contact_number").val();
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
         $("#ins_number_error").html("Contact Number Already Exist");
         $("#ins_number_error").show();
           }
           else
           {
              $("#ins_number_error").hide();
           }
           //alert('ok');
         }
     });
    
        }

    });




    $("#ins_email").focusout(function()
    {

     //alert("ok")

     if($("#ins_email").val().length == 0)

      {
         $("#ins_email_error").html("Email field is required");
          $("#ins_email_error").show();
     }

    else{
    // var email = $("#email").val();

     var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

 if(!pattern.test($("#ins_email").val())) {
      $("#ins_email_error").html("Invalid Email Address");
      $("#ins_email_error").show();
      //return false;
    }
    else
    {
    
      $("#ins_email_error").hide();
        
      var email = $("#ins_email").val();
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
     $("#ins_email_error").html("Email Already Exist");
     $("#ins_email_error").show();
       }
       else
       {
          $("#ins_email_error").hide();
       }
       //alert('ok');
     }
 });

    }
  }

       
    });










});