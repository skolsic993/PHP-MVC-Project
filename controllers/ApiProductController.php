<?php

namespace App\Controllers;

    use App\Models\ProductModel;

    class ApiProductController extends \App\Core\ApiController 
    {
        public function show($id)
        {
            $productModel = new ProductModel($this->getDatabaseConnection());
            $product = $productModel->getById($id);

            $this->set('product', $product);
        }
    }