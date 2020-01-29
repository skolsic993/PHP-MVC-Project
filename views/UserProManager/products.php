<?php require_once './views/includes/nav.php';?>

<div class="container-fluid" style="margin-bottom: 80px; margin-top: 100;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1-responsive font-weight-bold text-center" style="margin-top: 100px;">MY PROFILE</h1>
        </div>
    </div>
    <div class="row justify-content-md-center" style="margin-top: 30px;">
    <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="list-group" style="margin-bottom: 20px;">
                <div class="list-group" style="margin-bottom: 20px;">
                    <h3 class="shop_h3 text-center" style="margin-bottom: 50px;">ACCOUNT DETAILS</h3>
                    <div class="text-center" style="margin-bottom: 20px;"><img src="/lanaya/style/img/unknown.png" alt="" id="userpic"></div>
                    <div class="color_info"><i class="fas fa-signature fa_info"></i><div class="info_div"></i><span class="span_info">Name:</span> <?php echo $user->vorename; ?><br><span class="span_info">Surname:</span> <?php echo $user->surname; ?></div></div>
                    <hr class="info_hr">
                    <div class="color_info"><i class="far fa-user fa_info"></i><div class="info_div"><span class="span_info">Username:</span> <?php echo $user->username; ?></div></div>
                    <hr class="info_hr">
                    <div class="color_info"><i class="far fa-envelope fa_info"></i><div class="info_div"><span class="span_info">Email:</span> <?php echo $user->email; ?></div></div>
                </div>
            </div>
        </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 text-center"><h3 class="shop_h3 text-center" style="margin-bottom: 50px;">YOUR PRODUCTS</h3></div>
                </div>
        <div class="container">
            <div class="row">
            <a href="/lanaya/user/product/add" class="product_a"><div class="col-md-4 column"><div class="color-overlay"></div><img src="/lanaya/style/img/buy.jpg" class="img_thumb" alt=""><span id="addproduct" class="text-center">Click here and add a new product!</span></a></div>
                <?php foreach($products as $product): ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4col-md-4">
                        <div class="shadow p-4 height">
                            <a href="/lanaya/user/product/edit/<?php echo $product->id; ?>" class="left-anim"><span><?php echo $product->title; ?></span>
                            <img src="<?php echo $product->image ?>" alt="" class="img_thumb"></a>
                        </div>   
                    </div>
                <?php endforeach; ?>
            </div>
        <div class="col-md-1"></div>
    </div>
</div>       
            </div>
        </div>
    </div>
<?php require_once './views/includes/footer.php'; ?>