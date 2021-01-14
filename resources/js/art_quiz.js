 $(document).ready(function(){

      $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });


     $("#art_quiz").on("click", function () 
    {
        var j =0;
        
         var q1 = document.getElementsByName('q1'); 
         for(i = 0; i < q1.length; i++) { 
             if(q1[i].checked) {
                    if(q1[i].value=="op2"){
                          j++;
                    }
               }
         }


         var q2 = document.getElementsByName('q2'); 
         for(i = 0; i < q2.length; i++) { 
             if(q2[i].checked) {
                    if(q2[i].value=="op1"){
                          j++;
                    }
               }
         }


         var q3 = document.getElementsByName('q3'); 
         for(i = 0; i < q3.length; i++) { 
             if(q3[i].checked) {
                    if(q3[i].value=="op4"){
                          j++;
                    }
               }
         }


         var q4 = document.getElementsByName('q4'); 
         for(i = 0; i < q4.length; i++) { 
             if(q4[i].checked) {
                    if(q4[i].value=="op4"){
                          j++;
                    }
               }
         }

         alert("Your Test Mark Is " +j+ " Number");


         var formdata= new FormData();
         var test=j;
         var id=$("#course_id").val();
         formdata.append('test',test);
         formdata.append('id',id);

         $.ajax({
            processData:false,
            contentType:false,
            data:formdata,
            type:"POST",
            url:"test_insert",
            success:function(data)
            {
      
             alert("Test Completed");
           window.location.href ="student_courses"
            }
      
          });

    });
});










