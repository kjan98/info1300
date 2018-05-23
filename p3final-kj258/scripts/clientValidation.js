//modified code from the lab11 solutions
 var TEST_PHP_FORM = false;
  $(document).ready(function () {

    if (!TEST_PHP_FORM){
    $("#mainForm").on("submit", function() {
      var formvalid = true;
      var validPost = $("#post").prop("validity").valid;
      var validFName = $("#firstName").prop("validity").valid;
      var validLName = $("#lastName").prop("validity").valid;


      if (validFName) {
        $("#errorMsgFName").hide();
      }
      else {
        $("#errorMsgFName").show();
        formvalid = false;
      }
      if (validPost) {
        $("#errorMsg").hide();
      }
      else {
        $("#errorMsg").show();
        formvalid = false;
      }

      return formvalid;

    });
  }
  });
