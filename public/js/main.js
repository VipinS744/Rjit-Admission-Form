$(function(){    
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        stepsOrientation: "vertical",
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back Step',
            next : '<i class="zmdi zmdi-arrow-right"></i>',
            // finish : '<i class="zmdi zmdi-check"></i>',
            current : ''
        },
    })
});


// For Same Address Option 
function add_copy(a){
    if (a.same_address.checked==true) {
        a.pahouse_no.value = a.house_no.value;
        a.pastreet_name.value= a.street_name.value;
        a.palandmark.value = a.landmark.value;
        a.pacity.value=a.city.value;
        a.pastate.value=a.state.value;
        a.papincode.value=a.pincode.value;
    }
    else{
        a.pahouse_no.value = "";
        a.pastreet_name.value= "";
        a.palandmark.value = "";
        a.pacity.value="";
        a.pastate.value= "";
        a.papincode.value="";
    }
}


$('#Religion').on('change', function(){
    if( $(this).val() == 5 ){
        $('#other_religion').show();
    } else{
        $('#other_religion').hide();
    }
});


    // forms validation

function validate(){

    var fathername=document.getElementById("Father_name").value;
    var mothername=document.getElementById("Mother_name").value;
    var fatherphone=document.getElementById("Father_phone").value;
    var aadhar=document.getElementById("aadhar").value;
    var tenthschool=document.getElementById("ten_school").value;
    var tenthboard=document.getElementById("ten_board").value;
    var tenthsubjects=document.getElementById("ten_subjects").value;
    var tenthpassing=document.getElementById("ten_passing").value;
    var tenthpercentage=document.getElementById("ten_percentage").value;
    var twschool=document.getElementById("tw_school").value;
    var twboard=document.getElementById("tw_board").value;
    var twsubjects=document.getElementById("tw_subjects").value;
    var twpassing=document.getElementById("tw_passing").value;
    var twpercentage=document.getElementById("tw_percentage").value;
    var twrollno=document.getElementById("tw_rollno").value;
    var jeerollno=document.getElementById("jee_main_rollno").value;
    var nationality=document.getElementById("Nationality").value;
    var religion=document.getElementById("Religion").value;
    var category=document.getElementById("Category").value;
    var handicapped=document.getElementById("Handicapped").value;
    var jkresident=document.getElementById("jkresident").value;
    



    if(fathername==""){
          document.getElementById("father_name_msg").innerHTML="** Please fill Father Name";
          return false;
         }
         else{
            document.getElementById("father_name_msg").innerHTML="";
            }


    if(mothername==""){
          document.getElementById("mother_name_msg").innerHTML="** Please fill Mother Name";
          return false;
         }
         else{
            document.getElementById("mother_name_msg").innerHTML="";
            }


       if(fatherphone==""){
          document.getElementById("father_no_msg").innerHTML="** Please fill Father's Phone Number";
          return false;
         }
         else{
            document.getElementById("father_no_msg").innerHTML="";
            }


       if(isNaN(fatherphone)) {
          document.getElementById("father_no_msg").innerHTML="** alphabat not allowed ";
          return false; 
         }


         if(aadhar==""){
          document.getElementById("aadhar_msg").innerHTML="** Please fill Aadhar Number";
            return false;
         }
          else{
            document.getElementById("aadhar_msg").innerHTML="";
            }


         if(tenthschool==""){
          document.getElementById("ten_school_msg").innerHTML="** Please fill 10th School Name";
            return false;
         }
          else{
            document.getElementById("ten_school_msg").innerHTML="";
            }


         if(tenthboard==""){
          document.getElementById("ten_board_msg").innerHTML="** Please fill 10th Board Name";
            return false;
        }
          else{
            document.getElementById("teb_board_msg").innerHTML="";
            }


         if(tenthsubjects==""){
          document.getElementById("ten_subjects_msg").innerHTML="** Please fill 10th Subjects";
                return false;
            }

         if(tenthpassing==""){
          document.getElementById("ten_passing_msg").innerHTML="** Please fill 10th Passing year";
          return false;
         }

         if(tenthpercentage==""){
          document.getElementById("ten_percentage_msg").innerHTML="** Please fill 10th %";
          return false;
         }

         if(twschool==""){
          document.getElementById("tw_school_msg").innerHTML="** Please fill 12th School Name";
          return false;
         }

         if(twboard==""){
          document.getElementById("tw_board_msg").innerHTML="** Please fill 12th Board Name";
          return false;
         }

         if(twsubjects==""){
          document.getElementById("tw_subjects_msg").innerHTML="** Please fill 12th Subjects";
          return false;
         }

         if(twpassing==""){
          document.getElementById("tw_passing_msg").innerHTML="** Please fill 12th Passing year";
          return false;
         }

         if(twpercentage==""){
          document.getElementById("tw_percentage_msg").innerHTML="** Please fill 12th %";
          return false;
         }





















}


        // forms validation Ends


