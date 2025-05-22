<link rel="stylesheet" href="plugins/assets/css/login.css">
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<div id="login-wrapper">
    <form id="loginPost" class="container" method="POST">
        <img src="plugins/assets/images/lg_logo.png" alt="Company Logo" class="login-logo">
        
        <section class="input-box">
            <input type="text" id="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </section>

        <section class="input-box">
            <input type="password" id="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </section>

        <section class="remember-forgot-box">
            <div class="remember-me">
                <input type="checkbox" name="remember-me" id="remember-me">
                <label for="remember-me">
                    <h5>Remember me</h5>
                </label>
            </div>
            <a class="forgot-password" href="#">Forgot password?</a>
        </section>

        <button class="login-button" type="submit">Login</button>

        <h5 class="dont-have-an-account">
            Don't have an account?
            <a href="register.php"><b>Register</b></a>
        </h5>
    </form>
</div>
<!-- <script>
    const placeholder = document.querySelectorAll('span');
    const inputForm = document.querySelectorAll('.input-field');
    inputForm[0].addEventListener('blur', function() {
        if(!(inputForm[0].value=="")) {
            placeholder[0].classList.add('placeholder-span');        
        }else{
            placeholder[0].classList.remove('placeholder-span');
        }
    });
    inputForm[1].addEventListener('blur', function() {
        if(!(inputForm[1].value=="")) {
            placeholder[1].classList.add('placeholder-span');        
        }else{
            placeholder[1].classList.remove('placeholder-span');
        }
    });

</script> -->

