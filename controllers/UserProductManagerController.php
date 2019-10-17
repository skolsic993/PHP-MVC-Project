<?php

namespace App\Controllers;

    use App\Core\Role\UserRoleController;
    use App\Models\ProductModel;

    class UserProductManagerController extends UserRoleController
    {
        public function products()
        {
            $productModel = new ProductModel($this->getDatabaseConnection());
            $products = $productModel->getAll();

            $this->set('products', $products);
        }

        public function getEdit($productId) 
        {
            $productModel = new ProductModel($this->getDatabaseConnection());
            $product = $productModel->getById($productId);

            if(!$product)
            {
                $this->redirect('/lanaya/user/products');
            }

            $this->set('product', $product);

            return $productModel;
        }

        public function postEdit($productId)
        {
            $productModel = $this->getEdit($productId);

            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);

            $productModel->editById($productId, [
                'title' => $title
            ]);

            $this->redirect('/lanaya/user/products');
        }

        public function getAdd() 
        {

        }

        public function postAdd() 
        {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $productModel = new ProductModel($this->getDatabaseConnection());

            $productId = $productModel->add([
                'title' => $title
            ]);

            if($productId)
            {
                $this->redirect('/lanaya/user/products');
            }
            $this->set('message', 'Mistake has been made in adding new product!');
        }
    }
