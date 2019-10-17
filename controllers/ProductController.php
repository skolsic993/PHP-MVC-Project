<?php

namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController extends \App\Core\Controller 
    {
        public function show($id) 
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);

            
            if($this->getSession()->get('user_id') !== NULL){
                $productModel = new ProductModel($this->getDatabaseConnection());
                $product = $productModel->getById($id);

                if(!$product) 
                {
                    header('Location: /shop');
                    exit;
                }

                $this->set('product', $product);
            }

            else{
                header('Location: /shop');
                exit;
            }

        
        }
    }