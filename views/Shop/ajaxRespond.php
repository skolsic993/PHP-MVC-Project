<div class="row">
    <?php foreach($items as $product): ?>
        <div class="col-md-4">
            <img src="<?php echo $product->image; ?>" alt="" class="img_thumb">
            <p class="text-center"><span style="color: rgb(37, 45, 56);"><?php echo $product->title; ?></span></p>
            <p class="list-price text-danger text-center">List Price: <s>$<?php echo $product->list_price; ?></s></p>
            <p class="price text-center">Our Price: <span class="dollar">$<?php echo $product->price; ?></span></p>
            <?php 
                if($auth)
                {
                    ?>
                        <div class="text-center"><a class="btn details" href="/lanaya/product/<?php echo $product->id; ?>" role="button">Details</a></div>
                    <?php
                }
            ?>
        </div>
    <?php endforeach; ?>
</div>
