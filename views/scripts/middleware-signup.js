$(document).ready(function(){
    $("#signUpPost").submit(function (e) {
    e.preventDefault(); // Prevent the default form submission
    $.ajax({
      type: "POST",
      url: "middleware/middleware-Signup.php", // your PHP file that will handle the POST
      data: {
        username: $("#username").val(),
        password: $("#password").val()
      },
      success: function(response) {
        // alert("Response from server: " + response);
        const jsonResponse = JSON.parse(response);
        alert("Response from server: " + jsonResponse.status);
      },
      error: function(xhr, status, error) {
        alert("AJAX Error: " + error);
      }
    })
  });
});