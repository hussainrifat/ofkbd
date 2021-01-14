$(function(){

  var insError= false;
  var arr = [10];
  var i=0;
  var numCheack =0;
  var passCheack =0;

  for(var k =0;k<10;k++){
    arr[k]=0;
  }

  //  fetch_expertise();





   $('#ins_name_error').hide();
      $('#ins_institute_error').hide();
      $('#ins_number_error').hide();
      $('#ins_email_error').hide();
      $('#ins_password_error').hide();
      $('#ins_expertise_error').hide();






         // Instruction Data Validation

         $('#ins_name').focusout(function()
         {
          arr[0]= 1;

             if($('#ins_name').val().length==0)
             {
                 $('#ins_name_error').html("Name Field Is Required");
                 $('#ins_name_error').show();
                         insError= true;
             }
             else
             $('#ins_name_error').hide();
                       insError= false;

         });




         $("#ins_password").focusout(function()
         {
          arr[1]= 1;

         if($("#ins_password").val().length == 0)

        {
           $("#ins_password_error").html("password field is required");
            $("#ins_password_error").show();
                 insError= true;
       }
       else
       {

        if( $("#ins_password").val().length<8)
        {
          $("#ins_password_error").html("Minimum 8 character required");
            $("#ins_password_error").show();

                insError= true;
        }
        else
        {
         var password_reg_ex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])");
         if(!password_reg_ex.test($("#ins_password").val())) {
        $("#ins_password_error").html("password should contain One Uppercase, One lowercase,one number,one special character");
        $("#ins_password_error").show();
             insError= true;

      }
      else{
         $("#ins_password_error").hide();
         passCheack = 5;
         insError= false;

       }

        }
       }

         });



         $('#ins_contact_number').focusout(function()
      {
        arr[2]= 1;

         var numValue=$('#ins_contact_number').val();

         var numPattern=/^(0)(1)[0-9]*[]?[0-9]*$/;

          if($('#ins_contact_number').val().length==0)
          {
              $('#ins_number_error').html("Number Field Is Required");
              $('#ins_number_error').show();
              insError= true;
          }

          else if(!numPattern.test(numValue)){

            $("#ins_number_error").html( "Phone number isn't valid");
            $("#ins_number_error").show();
                 insError= true;

          }

          else if($('#ins_contact_number').val().length!=11)
          {
              $('#ins_number_error').html("Phone number must be 11");
              $('#ins_number_error').show();
              insError= true;
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
           insError= true;
             }
             else
             {
                $("#ins_number_error").hide();
                     insError= false;
                      numCheack=5;
             }
             //alert('ok');
           }
       });

          }

      });




      $("#ins_email").focusout(function()
      {
        arr[3]= 1;

       //alert("ok")

       if($("#ins_email").val().length == 0)

        {
           $("#ins_email_error").html("Email field is required");
            $("#ins_email_error").show();
            insError= true;
       }

      else{
      // var email = $("#email").val();

       var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

   if(!pattern.test($("#ins_email").val())) {
        $("#ins_email_error").html("Invalid Email Address");
        $("#ins_email_error").show();
        insError= true;

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
       insError= true;
         }
         else
         {
            $("#ins_email_error").hide();
            insError= false;
         }
       }
   });

      }
    }


      });

      $('#expertise').focusout(function()
    {
      arr[4]= 1;

        if($('#expertise').val().length==0)
        {
            $('#ins_expertise_error').html("Field Is Required");
            $('#ins_expertise_error').show();
            insError= true;

        }
        else
        {$('#ins_expertise_error').hide();
         insError= false;}



    });

    $("#ins_rePassword").focusout(function()
       {

        arr[5]= 1;


        if($("#ins_rePassword").val().length == 0)

         {
            $("#ins_rePassword_error").html("Password field is required");
             $("#ins_rePassword_error").show();
             error= true;
        }
        else
        {
          if($("#ins_password").val() != $("#ins_rePassword").val())
          {
           $("#ins_rePassword_error").html("Password not match");
             $("#ins_rePassword_error").show();
                 error= true;
          }
          else
          {
            $("#ins_rePassword_error").hide();
               error = false;
          }
        }

       });

      $("#registerinstructor").on('click',function()
      {

        for(var j =0;j<6;j++){
          if(arr[j] == 1)
              i++;
        }


        if( i == 6 ) {

          if( numCheack == passCheack){

            if(error== false){

              var ins_name=$("#ins_name").val();
        var ins_number=$("#ins_contact_number").val();
        var ins_email=$("#ins_email").val();
        var ins_password=$("#ins_password").val();
        var ins_expertise=$("#expertise").val();


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
