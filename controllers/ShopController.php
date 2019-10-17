<?php

namespace App\Controllers;

    use App\Models\ProductModel;
    use App\Models\CategoryModel;

    class ShopController extends \App\Core\Controller 
    {
        public function show() 
        {
            $productModel = new ProductModel($this->getDatabaseConnection());
            $products = $productModel->getAll();

            $this->set('products', $products);

            $items = $productModel->filterProducts();

            $this->set('items', $items);

            $categoryModel = new CategoryModel($this->getDatabaseConnection());
            $categories = $categoryModel->getCategories();

            $this->set('categories', $categories);


            
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);
        }

        public function ajaxRespond()
        {
            $productModel = new ProductModel($this->getDatabaseConnection());

            if(isset($_POST['color'])) {
                $color_filter = implode("','", (array)$_POST['color']);
                $items = $productModel->respond($color_filter);

            } else {
                $items = $productModel->getAll();
            }

            if(isset($_POST['category'])) {
                $category_filter = implode("','", (array)$_POST['category']);
                $items = $productModel->respondCategory($category_filter);
                
            } 

            if(isset($_POST['color']) && isset($_POST['category'])) 
            {
                $color_filter = implode("','", (array)$_POST['color']);
                $category_filter = implode("','", (array)$_POST['category']);

                $items = $productModel->filtered($category_filter, $color_filter);
            }

            if(isset($_POST['search']))
            {
                $search  = $_POST['search'];
                $items = $productModel->getAllBySearch($search);

                $this->set('items', $items);
            }

            $this->set('items', $items);



            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);
        }
    }