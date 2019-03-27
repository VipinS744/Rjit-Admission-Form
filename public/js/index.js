function address_copy(){
    console.log("hi");
    if(document.registration.same_Address[0].checked){
        document.registration.pahouse_no.value = document.registration.house_no.value;
        document.registration.pastreet_name.value = document.registration.street_name.value;
        document.registration.palandmark.value = document.registration.landmark.value;
        document.registration.pacity.value = document.registration.city.value;
        document.registration.pastate.value = document.registration.state.value;
        document.registration.papincode.value = document.registration.pincode.value;
    }
}