$(document).ready(function() {
  var request;
  $("#submitPayment").submit(function(event) {
    var ajaxRequest;
    event.preventDefault();
    /* Clear result div*/
    $("#result").html("");

    // Abort any pending request
    if (request) {
      request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();
    console.log(serializedData);

    $inputs.prop("disabled", true);

    ajaxRequest = $.ajax({
      url: "../html/checkout.php",
      type: "post",
      data: serializedData
    });
    /*  Request can be aborted by ajaxRequest.abort() */

    ajaxRequest.done(function(response, textStatus, jqXHR) {
      // Show successfully for submit message
      console.log("success");
      window.location.href = "../html/confirmation_page.html";
    });

  
    ajaxRequest.fail(function() {
      
      console.log("fail");
    });
  });
});
