<div style="margin-bottom: 80px;">
<div class="container">
<div class="row">
    <div class="col-md-3">
        <div class="options nav-item" style="margin-top: 30px;">
            <a href="/lanaya/profile" style="font-size: 20px; text-decoration: none;"><i class="fas fa-long-arrow-alt-left"></i>Get back</a>
        </div>
    </div>
    <form class="product-form col-9 col-sm-10 col-md-8 col-lg-6 col-xl-6" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(); ">
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" required class="form-control" value="<?php echo $product->title; ?>">
        </div>
        <div class="form-group">
            <label for="list_price">List Price: </label>
            <input type="number" id="list_price" name="list_price" required class="form-control" min="5" step="0.01" value="<?php echo $product->list_price; ?>">
        </div>
        <div class="form-group">
            <label for="price">Price: </label>
            <input type="number" id="price" name="price" required class="form-control" min="5" step="0.01" value="<?php echo $product->price; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea id="description" name="description" required class="form-control" rows="10"><?php echo $product->description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Product Category: </label>
            <select class="form-control" name="category_id" id="category_id">
                <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->category_id; ?>"<?php if($product->category_id == $category->category_id): ?>selected<?php endif; ?>>
                        <?php echo $category->category_name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image: </label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="form-group text-center">
            <button type="submit" name="upload" class="submit">Edit Product</button>
            <div class="alert alert-warning d-none" id="error_message"></div>
        </div>
    </form>
</div>
    <script>
        function validateForm() {
            
            document.querySelector('#error_message').classList.add('d-none');
            document.querySelector('#error_message').innerHTML = '';
            const title = document.querySelector('#title').value;
            if(!title.match(/.*[^\s]{3,}.*/))
            {
                document.querySelector('#error_message').innerHTML += 'The title must contain at least three visibility caracters<br>';
                document.querySelector('#error_message').classList.remove('d-none');
                return false;
            }

            const description = document.querySelector('#description').value;
            if(!description.match(/.*[^\s]{7,}.*/))
            {
                document.querySelector('#error_message').innerHTML += 'The description must contain at least seven visibility caracters<br>';
                document.querySelector('#error_message').classList.remove('d-none');
                return false;
            }


            return true;
        }
    </script>
</div>