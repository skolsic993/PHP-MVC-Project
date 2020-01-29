<div class="row">
    <?php foreach($items as $product): ?>
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
                <p class="text-center"><span style="color: rgb(37, 45, 56);"><?php echo $product->title; ?></span></p>
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
