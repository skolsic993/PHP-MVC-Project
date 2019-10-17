<?php require_once './views/includes/nav.php';?>
<div class="container">
<div class="row">
    <div class="col-md-3">
        <div class="options nav-item" style="margin-top: 30px;">
            <a href="/lanaya/profile" style="font-size: 20px; text-decoration: none;"><i class="fas fa-long-arrow-alt-left"></i>Get back</a>
        </div>
    </div>
    <form class="product-form col-9 col-sm-10 col-md-8 col-lg-6 col-xl-6 " method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" required class="form-control" pattern=".*[^\s]{3,}.*">
        </div>
        <div class="form-group">
            <label for="list_price">List Price: </label>
            <input type="number" id="list_price" name="list_price" required class="form-control" min="5" step="0.01">
        </div>
        <div class="form-group">
            <label for="price">Price: </label>
            <input type="number" id="price" name="price" required class="form-control" min="5" step="0.01">
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea id="description" name="description" required class="form-control" pattern=".*[^\s]{3,}.*" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Product Category: </label>
            <select class="form-control" name="category_id" id="category_id">
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->category_id; ?>">
                        <?php echo $category->category_name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image: </label>
            <input type="file" id="image" name="image" required class="form-control">
        </div>

        <div class="form-group text-center">
            <button type="submit" name="upload" class="submit">Add product</button>
        </div>
    </form>
</div>
</div>