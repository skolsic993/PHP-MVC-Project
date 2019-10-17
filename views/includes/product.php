<div class="container" style="margin-top: 60px;">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $product->image ?>" alt="" class="img_size">  
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h1 class="product_h1"><?php echo $product->title; ?></h1>
            <p class="product_sku">SKU: 123456789</p>
            <hr class="product_hr">
            <p class="product_price">Price: <span style="color: #85bb65;">$<?php echo $product->price; ?></p>
            <hr class="product_hr">
            <p class="product_description"><?php echo $product->description; ?></p>
            <p class="product_color">Color: <?php echo $product->color; ?></p>
            <div class="text-center"><a href="#" onclick="addBookmark(<?php echo $product->id; ?>);"><button class="btn details add_btn"><i class="fas fa-plus place"></i>Add to Card</button></a></div>
        </div>
    </div>
</div>