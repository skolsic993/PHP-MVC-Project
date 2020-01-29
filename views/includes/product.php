<div class="container" style="margin-top: 80px;">
    <div class="row" style="margin-bottom: 40px;">
        <div class="col-lg-7 col-xl-7">
            <img src="<?php echo $product->image ?>" alt="" class="img_size">  
        </div>
        <div class="col-lg-5 col-xl-4 mt">
            <div class="s_product_text">
                <h1 class="h1-responsive"><?php echo $product->title; ?></h1>
                <h2>$<?php echo $product->price; ?></h2>
                <ul class="list">
                    <li>
                        <span>Availibility</span> : In Stock</a>
                    </li>
                </ul>
                <p><?php echo $product->description; ?></p>
                <div class="card_area d-flex justify-content-between align-items-center">
                    <div class="text-center"><a href="#" onclick="addBookmark(<?php echo $product->id; ?>);"><button class="btn add_btn btn-info"><i class="fas fa-plus place"></i>Add to Card</button></a></div>
                    <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                </div>
            </div>      
        </div>
    </div>
</div>