<?php

namespace App\Controllers;

    use App\Core\Role\UserRoleController;
    use App\Models\ProductModel;
    use App\Models\UserModel;

    use App\Models\CategoryModel;

    class UserProManagerController extends UserRoleController
    {
        public function products($id)
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);

            $userId = $this->getSession()->get('user_id');

            $productModel = new ProductModel($this->getDatabaseConnection());
            $products = $productModel->getAllByUserId($userId);

            $this->set('products', $products);

            $userModel = new UserModel($this->getDatabaseConnection());
            $user = $userModel->getByUserId($id);

            $this->set('user', $user);
        }

        public function getAdd()
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);

            $categoryModel = new CategoryModel($this->getDatabaseConnection());
            $categories = $categoryModel->getAll();

            $this->set('categories', $categories);
        }

        public function postAdd()
        {
            $addData = [
                'title' => \filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING),
                'description' => \filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING),
                'price' => sprintf("%.2f", \filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING)),
                'list_price' => sprintf("%.2f", \filter_input(INPUT_POST, 'list_price', FILTER_SANITIZE_STRING)),
                'category_id' => \filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT),
                'users_id' => $this->getSession()->get('user_id'),
                'image' => $this->imageUpload()
            ];

            $productModel = new ProductModel($this->getDatabaseConnection());

            $productId = $productModel->add($addData);

            if(!$productId)
            {
                $this->set('message', 'Product not added!!!');
                return;
            }

            $this->redirect('/lanaya/user/product');
        }

        public function getEdit($productId)
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);

            $productModel = new ProductModel($this->getDatabaseConnection());

            $product = $productModel->getById($productId);

            if(!$product)
            {
                $this->redirect('/lanaya/user/product');
                return;
            }

            if($product->users_id != $this->getSession()->get('user_id'))
            {
                $this->redirect('/lanaya/user/product');
                return;
            }

            $this->set('product', $product);

            $categoryModel = new CategoryModel($this->getDatabaseConnection());
            $categories = $categoryModel->getAll();

            $this->set('categories', $categories);
        }

        public function postEdit($productId)
        {
            $this->getEdit($productId);

            $editData = [
                'title' => \filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING),
                'description' => \filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING),
                'price' => sprintf("%.2f", \filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING)),
                'list_price' => sprintf("%.2f", \filter_input(INPUT_POST, 'list_price', FILTER_SANITIZE_STRING)),
                'category_id' => \filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT)
            ];

            if(isset($_FILES['image']) && $_FILES['image']['error'] == 0)
            {
                array_push($editData, $this->imageUpload());
            }


            $productModel = new ProductModel($this->getDatabaseConnection());

            $res = $productModel->editById($productId , $editData);

            if(!$res)
            {
                $this->set('message', 'The changes have not been adopted!!');
                return;
            }

            $this->redirect('/lanaya/user/product');
        }

        private function imageUpload()
        {
            if(isset($_FILES['image']))
            {
                $file = $_FILES['image'];

                $fileName = $file['name'];
                $fileTmp = $file['tmp_name'];
                $fileSize = $file['size'];
                $fileError = $file['error'];

                $fileExt = explode('.', $fileName);
                $fileExt = strtolower(end($fileExt));
                $allowed = array('jpg', 'jpeg', 'png');

                if(in_array($fileExt, $allowed))
                {
                    if($fileError === 0)
                    {
                        if($fileSize < 300000)
                        {
                            $fileNameNew = uniqid('', true) . '.' . $fileExt;
                            $fileDestination = '../lanaya/style/img/uploads/' . $fileNameNew;

                            move_uploaded_file($fileTmp, $fileDestination);

                            return substr($fileDestination, 2);
                        }
                    }
                }
            }
        }
    }
