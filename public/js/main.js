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




