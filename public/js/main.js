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


function validate(){
    var fathername=document.getElementById("Father_name").value;

    if(fathername==""){
          document.getElementById("father_name_msg").innerHTML="** Please fill Father Name";
          return false;
         }
}


function validatefields(){

    var fathername=document.getElementById("Father_name").value;
       var mothername=document.getElementById("Mother_name").value;
       var fatherphone=document.getElementById("Father_phone").value;
       var aadhar=document.getElementById("aadhar").value;
       var tenthschool=document.getElementById("ten_school").value;

       if(fathername==""){
          document.getElementById("father_name_msg").innerHTML="** Please fill Father Name";
          return false;
         }

       if(mothername==""){
          document.getElementById("mother_name_msg").innerHTML="** Please fill Mother Name";
          return false;
         }


       if(fatherphone==""){
          document.getElementById("father_phone_msg").innerHTML="** Please fill Father's Phone Number";
          return false;
         }


       if(mobile=="") {
          document.getElementById("mobilemsg").innerHTML="** Please fill Mobile Field";
          return false;
         }

       if(isNaN(mobile)) {
          document.getElementById("mobilemsg").innerHTML="** alphabat not allowed ";
          return false;
         }
}


