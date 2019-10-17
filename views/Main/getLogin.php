<?php require_once 'C:/xampp/htdocs/lanaya/views/includes/nav.php';?>
<div class="row" style="margin-bottom: 80px; margin-top: 80px;">
    <form action="/lanaya/user/login" method="POST" class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
        <div class="card fadeInDown">
            <div class="card-header text-center fadeIn first">
            <span style="font-weight: 600;">User Log In Form</span>
            </div>
            <div class="card-body">
                <div class="form-group fadeIn second">
                    <label for="input_username">Username: </label>
                    <input type="text" id="input_username" name="login_username" class="input fadeIn second" required placeholder="Username">
                </div>
                <div class="form-group fadeIn third">
                    <label for="input_password_1">Password: </label>
                    <input type="password" id="input_password_1" name="login_password" class="input fadeIn third" required placeholder="Password">
                </div>
                <div class="card-footer fadeIn forth">
                    <div class="text-center"><button type="submit" class="submit fadeIn fourth">Log In</button></div>
                </div>
                <div class="text-center" style="margin-top: 20px;"><span>Don's have an account?  <a href="/lanaya/user/register" style="font-weight: 500;">Sing Up</a></span></div>
            </div>
        </div>
        
    </form>
</div>
<?php require_once 'C:/xampp/htdocs/lanaya/views/includes/footer.php'; ?>

