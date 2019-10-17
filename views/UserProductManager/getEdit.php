<div>
    <div class="options">
        <a href="/lanaya/user/products">List all Products</a>
        <a href="/lanaya/user/products/add">Add new product</a>
    </div>
    <form class="product-form" method="POST">
        <div>
            <label for="title">Name: </label>
            <input type="text" id="title" name="title" value="<?php echo $product->title; ?>">
        </div>

        <div>
            <button type="submit">Edit Product</button>
        </div>
    </form>
</div>