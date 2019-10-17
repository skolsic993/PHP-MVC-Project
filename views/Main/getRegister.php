<?php require_once 'C:/xampp/htdocs/lanaya/views/includes/nav.php';?>
<div class="row" style="margin-bottom: 80px; margin-top: 80px;">
    <form action="/lanaya/user/register" method="POST" class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
    <div class="card fadeInDown">
        <div class="card-header text-center fadeIn first">
            <span style="font-weight: 600;">User Registration form</span>
        </div>
        <div class="card-body">
            <div class="form-group fadeIn second">
                <label for="input_email" class="label-txt">Email: </label>
                <input type="email" class="form-control input" id="input_email" name="reg_email" required placeholder="Enter you're Email!">
            </div> 
            <div class="form-group fadeIn third">
                <label for="input_forename">Forename: </label>
                <input type="text" class="form-control input" id="input_forename" name="reg_forename" required placeholder="Enter you're Name!">
            </div> 
            <div class="form-group fadeIn forth">
                <label for="input_surname">Surname: </label>
                <input type="text" class="form-control input" id="input_surname" name="reg_surname" required placeholder="Enter youre Surname">
            </div>
            <div class="form-group fadeIn fifth">
                <label for="input_username">Username: </label>
                <input type="text" class="form-control input" id="input_username" name="reg_username" required placeholder="Enter youre Username!">
            </div>  
            <div class="form-group fadeIn sixth">
                <label for="input_password_1">Password: </label>
                <input type="password" class="form-control input" id="input_password_1" name="reg_password_1" required placeholder="Enter youre Password!">
            </div>
            <div class="form-group fadeIn seventh">
                <label for="input_password_2">Repeat your Password: </label>
                <input type="password" class="form-control input" id="input_password_2" name="reg_password_2" required placeholder="Enter youre Password again!">
            </div>
        </div> 

        <div class="card-footer fadeIn eight">
            <div class="text-center"><button type="submit" class="submit">Register</button></div>
        </div>
        </div>
    </form>
</div>
<?php require_once 'C:/xampp/htdocs/lanaya/views/includes/footer.php'; ?>