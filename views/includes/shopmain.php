<div class="container" style="margin-bottom: 80px; margin-top: 100px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1-responsive font-weight-bold text-center">OUR COLLECTION</h1>
        </div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="col-md-3" style="margin-bottom: 30px;">
            <div class="list-group">
                <div class="list-group" style="margin-bottom: 20px;">
                    <h3 class="shop_h3">CATEGORY</h3>
                        <?php foreach($categories as $category): ?>
                            <div class="list-group-item checkbox">
                                <label class="checkbox-label">
                                    <input type="checkbox" class="common_selector category styled-checkbox" name="category" value="<?php echo $category->category_name ?>"><span style="margin-left: 30px;"><?php echo $category->category_name ?></span>
                                    <span class="checkbox-custom rectangular"></span>
                                </label>
                            </div>
                        <?php endforeach; ?>
                </div>
                <div class="list-group">
                    <h3 class="shop_h3">COLOR</h3>
                        <?php foreach($items as $item): ?>
                            <div class="list-group-item checkbox">
                                <label class="checkbox-label">
                                    <input type="checkbox" class="common_selector color .checkbox-primary" name="color" value="<?php echo $item->color; ?>"><span style="margin-left: 30px;"><?php echo $item->color; ?></span>
                                    <span class="checkbox-custom rectangular"></span>
                                </label>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
            <div class="col-md-9">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-2 col-sm-3 col-md-7"></div>
                <div class="col-10 col-sm-9 col-md-5 input-group">
                    <span class="input-group-text" style="position: relative; top: 8px; left: -6px;"><i class="fas fa-search"></i></span>
                        <div class="input-group-prepend">
                            <input type="text" aria-label="Search" name="search" id="search" aria-describedby="basic-addon1" class="form-control" placeholder="Search for Product">
                        </div>
                    </div>
                </div>
                <div class="row filter_data" id="result">
                    <?php foreach($products as $product): ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="shadow p-4 height" style="margin-bottom: 20px;">
                                <?php 
                                    if($auth)
                                    {
                                        ?>
                                <a href="/lanaya/product/<?php echo $product->id; ?>">
                                <?php
                                    }
                                ?>
                                <img src="<?php echo $product->image; ?>" alt="" class="img_thumb">
                                <?php 
                                    if($auth)
                                    {
                                        ?>
                                    </a>
                                <?php
                                    }
                                ?>
                                <p class="text-center product-h"><span style="color: rgb(37, 45, 56);"><?php echo $product->title; ?></span></p>
                                <p class="list-price left-anim" style="color: #CC0000;">List Price: <s>$<?php echo $product->list_price; ?></s></p>
                                <p class="price left-right" style="color: #00C851;">Our Price: <span class="dollar">$<?php echo $product->price; ?></span></p>
                                <?php 
                                    if($auth)
                                    {
                                        ?>
                                        <a class="btn details" href="/lanaya/product/<?php echo $product->id; ?>" role="button">Details</a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
