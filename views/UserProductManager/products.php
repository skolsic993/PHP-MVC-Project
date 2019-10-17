<div>
    <div class="options">
        <a href="/lanaya/user/products/add">Add new Product</a>
    </div>

    <div class="products">
        <ul>
            <?php foreach($products as $product): ?>
                <li>
                    <a href="/lanaya/user/products/edit/<?php echo $product->id; ?>"><?php echo $product->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php require_once 'C:/xampp/htdocs/lanaya/views/includes/footer.php'; ?>