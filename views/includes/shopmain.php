<div class="container" style="margin-bottom: 80px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="shop_h1 text-center">OUR COLLECTION</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <div class="list-group" style="margin-bottom: 20px;">
                    <h3 class="shop_h3">CATEGORY</h3>
                        <?php foreach($categories as $category): ?>
                            <div class="list-group-item checkbox">
                                <label class="label">
                                    <input type="checkbox" class="common_selector category .checkbox-primary" name="category" value="<?php echo $category->category_name ?>"><span style="margin-left: 5px;"><?php echo $category->category_name ?></span>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        <?php endforeach; ?>
                </div>
                <div class="list-group">
                    <h3 class="shop_h3">COLOR</h3>
                        <?php foreach($items as $item): ?>
                                <div class="list-group-item checkbox">
                                    <label class="label">
                                        <input type="checkbox" class="common_selector color .checkbox-primary" name="color" value="<?php echo $item->color; ?>"><span style="margin-left: 5px;"><?php echo $item->color; ?></span>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
            <div class="col-md-9">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-md-8"></div>
                    <div class="col-md-4 input-group">
                        <div class="input-group-prepend">
                            <input type="text" name="search" id="search" aria-describedby="basic-addon1" class="form-control" placeholder="Search for Product">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row filter_data" id="result">
                    <?php foreach($products as $product): ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <img src="<?php echo $product->image; ?>" alt="" class="img_thumb">
                            <p class="text-center"><span style="color: rgb(37, 45, 56);"><?php echo $product->title; ?></span></p>
                            <p class="list-price text-danger text-center">List Price: <s>$<?php echo $product->list_price; ?></s></p>
                            <p class="price text-center">Our Price: <span class="dollar">$<?php echo $product->price; ?></span></p>
                            <?php
                                if($auth)
                                {
                                    ?>
                                        <div class="text-center" style="margin-bottom: 10px; margin-top: 10px;"><a class="details" href="/lanaya/product/<?php echo $product->id; ?>" role="button">Details</a></div>
                                    <?php
                                }
                            ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
