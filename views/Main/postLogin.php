<?php require_once './views/includes/nav.php';?>
<div class="d-flex justify-content-center" style="margin-top: 80px; margin-bottom: 30px;">
    <form class="text-center border border-light p-2" action="/lanaya/user/login" method="POST" style="width: 270px;">
        <h1 class="h1-responsive font-weight-bold mb-4">Sign in</h1>

        <input type="text" id="input_username" name="login_username" class="form-control mb-4" required placeholder="Username">
        <input type="password" id="input_password_1" name="login_password" class="form-control mb-4" required placeholder="Password">
    
        <div class="text-center"><button type="submit" class="submit btn btn-info btn-load">Log In</button></div>
        <p>Not a member?
            <a href="/lanaya/user/register">Register</a>
        </p>
    </form>
</div>
    <div class="d-flex justify-content-center" style="margin-bottom: 40px;">
        <div class="danger-color text-white p-3" role="alert"><i class="fa fa-exclamation-triangle"></i> <?php echo $message; ?></div>
    </div>
<?php require_once 'C:/xampp/htdocs/lanaya/views/includes/footer.php'; ?>