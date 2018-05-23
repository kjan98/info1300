$(document).ready(function(){

  //validate form on submit
  $("#form").on("submit", function(){
    var formValid= true;

    var nameValid = $("#name").prop("validity").valid;
    if (nameValid){
      $("#nameError").hide();
    } else{
      $("#nameError").show();
      formValid=false;
    }

    emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
      $("#emailErrorTwo").hide();
    } else if($("#email").val()==''){
      $("#emailErrorTwo").hide();
      $("#emailError").show();
      formValid = false;
    } else {
      $("#emailError").hide();
      $("#emailErrorTwo").show();
      formValid = false;
    }



   return formValid;

  });
})
