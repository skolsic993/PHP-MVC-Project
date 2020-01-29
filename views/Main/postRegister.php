<?php require_once './views/includes/nav.php';?>
    <div class="d-flex justify-content-center" style="margin-top: 80px; margin-bottom: 30px;">
        <form class="text-center border border-light p-2" action="/lanaya/user/register" method="POST" style="width: 270px;">
            <h1 class="h1-responsive font-weight-bold mb-4">Register</h1>

            <input type="email" class="form-control input" id="input_email" name="reg_email" required placeholder="Enter email">
            <input type="text" class="form-control input" id="input_forename" name="reg_forename" required placeholder="Enter name">
            <input type="text" class="form-control input" id="input_surname" name="reg_surname" required placeholder="Enter surname">
            <input type="text" class="form-control input" id="input_username" name="reg_username" required placeholder="Enter username">
            <input type="password" class="form-control input" id="input_password_1" name="reg_password_1" required placeholder="Enter password">
            <input type="password" class="form-control input" id="input_password_2" name="reg_password_2" required placeholder="Repeat password">

            <div class="text-center"><button type="submit" class="submit btn btn-info btn-load">Register</button></div>
        </form>
    </div>

    <div class="d-flex justify-content-center" style="margin-bottom: 40px;">
        <div class="danger-color text-white p-3" role="alert"><i class="fa fa-exclamation-triangle"></i> <?php echo $message; ?></div>
    </div>
<?php require './views/includes/footer.php';?>