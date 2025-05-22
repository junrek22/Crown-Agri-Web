<div id="login-wrapper">
    <div id="login-form">
        <h2>CROWN AGRI TRADING CORP.</h2>
        
        <form id="loginPost" method="POST">
            <h3>LOGIN</h3>
            <div class="login-input">
                
                <input id="username" type="text" name="username" required class="input-field"/>
                <span>Username</span>
            </div>
            <div class="login-input">
                
                <input id="password" type="password" name="password" required class="input-field"/>
                <span>Password</span>
            </div>
            
            <button type="submit" id="login-btn">Login</button>      
        </form>
        <div id="login-footer">
            <p>Didn't know your password? <a href="">Forgot password</a></p>
            <p>Don't have account? <a href="">Sign here</a></p>
        </div>
        
    </div>
</div>
<script>
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

</script>

