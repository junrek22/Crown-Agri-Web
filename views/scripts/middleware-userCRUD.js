$(document).ready(function() {
  function clearForm() {
    $("#first-name").val('');
    $("#mid-name").val('');
    $("#last-name").val('');
    $("#username").val('');
    $("#password").val('');
    $("#conf-password").val('');
  }
  const table = $('#userTable').DataTable({
      dom: '<"dropdown-search"<"search-bar"f><"dropdown"l>>rt<"bottom"<"info"i><"paging"p>><"clear">',
      ordering: false
  });

   $('#userTable tbody').on('click', '.deleteButton', function () {
    let getRow = table.row($(this).parents('tr'));
    let dataRow = getRow.data();
    Swal.fire({
    title: "Do you want to delete this user?",
    text: "You won't be able to revert this user: " + dataRow[0],
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if(result.isConfirmed) {
        const userAuth = dataRow[0];
        $.ajax({
        type: "POST",
        url: "middleware/middleware-deleteUser.php",
        data: {userAuth: userAuth},
        success: function(response){
          const getData = JSON.parse(response);
          console.log(getData.status);
          try{
            if(getData.status == 200){
              getRow.remove().draw();
              Swal.fire({
              title: "Deleted!",
              text: "The user has been deleted.",
              icon: "success"
              });
            }else{
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: getData.message,
                footer: '<a href="#">Why do I have this issue?</a>'
              });
            }
          }catch(e){
            console.log(e);
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Invalid JSON response from server.",
              footer: '<a href="#">Why do I have this issue?</a>'
            });
          }
        },
        error: function(xhr, status, error) {
          alert("AJAX Error: " + error);
          }
        });
      }
    });
   
  });
  let fetchDataStored = [];
  $('#userTable tbody').on('click', '.UpdateButton', function () {
    let getRow = table.row($(this).parents('tr'));
    let dataRow = getRow.data();
    $('#update_first-name').val(dataRow[1]);
    $('#update_mid-name').val(dataRow[2]);
    $('#update_last-name').val(dataRow[3]);
    $('#update_user_modal').modal('show');
    fetchDataStored[0] = $('#update_first-name').val();
    fetchDataStored[1] = $('#update_mid-name').val();
    fetchDataStored[2] = $('#update_last-name').val();
  });
   $("#updatePost").submit(function(e) {
    e.preventDefault();

    let u_f_name = $('#update_first-name').val();
    let u_m_name = $('#update_mid-name').val();
    let u_l_name = $('#update_last-name').val();
    if(fetchDataStored[0] == u_f_name || 
      fetchDataStored[1] == u_m_name|| 
      fetchDataStored[2] == u_l_name) return alert("THE DATA IS STILL THE SAME");
    
    const updateUser = new FormData();
    updateUser.append("u_fname", u_f_name);
    updateUser.append("u_mname", u_m_name );
    updateUser.append("u_lname", u_l_name);

    $.ajax({
      type: 'POST',
      url :'',
      data:updateUser,
      processData: false,
      contentType: false,
      success:function(){

      }
    });

  
      
    
   });
  $("#signUpPost").submit(function(e) {
    e.preventDefault();
    
    let f_name = $("#first-name").val();
    let m_name = $("#mid-name").val();
    let l_name = $("#last-name").val();
    let username = $("#username").val();
    let password = $("#password").val();
    let passwordConfirm = $("#conf-password").val();

    if (passwordConfirm != password) return alert("Passwords do not match.");

    const newUser = new FormData();
    newUser.append("firstname", f_name);
    newUser.append("middlename", m_name);
    newUser.append("lastname", l_name);
    newUser.append("username", username);
    newUser.append("password", password);

    // const myModal = bootstrap.Modal.getInstance(document.getElementById('create_user_modal'));
    $('#create_user_modal').modal('hide');
    $.ajax({
      type: "POST",
      url: "middleware/middleware-Signup.php",
      data: newUser,
      processData: false,
      contentType: false,
      success: function(response) {
        try {
           const jsonResponse = JSON.parse(response);
           const getData = jsonResponse.data;
           const data = [getData.userAuth, getData.Firstname, getData.Middlename, getData.Lastname];
           table.row.add([
            data[0],
            data[1],
            data[2],
            data[3],
            `<a style="margin:0px 5px;" type="button" class="btn btn-success">Update</a><a style="margin:0px 5px;" type="button" class="btn btn-danger deleteButton">Delete</a>`
          ]).draw();

          Swal.fire({
              title: "User registration Success!",
              icon: "success",
              draggable: true
          });

        } catch (e) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Invalid JSON response from server.",
            footer: '<a href="#">Why do I have this issue?</a>'
          });
        }
      },
      error: function(xhr, status, error) {
        alert("AJAX Error: " + error);
      }
    });
     clearForm();
  });
});