$(document).ready(function() {
  $("#signUpPost").submit(function(e) {
    e.preventDefault();

    let f_name = $("#first-name").val();
    let l_name = $("#last-name").val();
    let username = $("#username").val();
    let password = $("#password").val();
    let passwordConfirm = $("#conf-password").val();
    let branch = $("#branch").val();

    const branch_list = ["Narra", "Kabankalan", "Bago", "Sagay"];
    const validBranch = branch_list.includes(branch);

    if (!validBranch) return alert("Invalid branch selected.");
    if (passwordConfirm != password) return alert("Passwords do not match.");

    const newUser = new FormData();
    newUser.append("firstname", f_name);
    newUser.append("lastname", l_name);
    newUser.append("username", username);
    newUser.append("password", password);
    newUser.append("branch", branch);
    $.ajax({
      type: "POST",
      url: "middleware/middleware-Signup.php",
      data: newUser,
      processData: false,
      contentType: false,
      success: function(response) {
        try {
          const jsonResponse = JSON.parse(response);
          alert("Response from server: " + jsonResponse.message);
        } catch (e) {
          alert("Invalid JSON response from server.");
        }
      },
      error: function(xhr, status, error) {
        alert("AJAX Error: " + error);
      }
    });
  });
});