$(document).ready(function(){
  $("#loginPost").submit(function (e) {
    e.preventDefault(); // Prevent the default form submission
    $.ajax({
      type: "POST",
      url: "middleware/middleware-loginAuth.php", // your PHP file that will handle the POST
      data: {
        username: $("#username").val(),
        password: $("#password").val()
      },
      success: function(response) {
        alert("Response from server: " + response);
        const jsonResponse = JSON.parse(response);
        // alert("Response from server: " + jsonResponse.status);
        if (jsonResponse.status === 200) {
          // Redirect to the dashboard or another page
          window.location.href = "dashboard"; // Change this to your desired URL
          $("#username").val("");
          $("#username").val("");
        } else {
          // Handle login failure
          alert("Login failed: " + jsonResponse.message);
        }
      },
      error: function(xhr, status, error) {
        alert("AJAX Error: " + error);
      }
    })
  });
})