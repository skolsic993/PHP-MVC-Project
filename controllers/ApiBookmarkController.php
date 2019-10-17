<?php

namespace App\Controllers;

    use App\Core\ApiController;
    use App\Models\ProductModel;

    class ApiBookmarkController extends ApiController
    {
        public function getBookmarks()
        {
            $bookmarks = $this->getSession()->get('bookmarks', []);

            $this->set('bookmarks', $bookmarks);
        }

        public function addBookmark($productId)
        {
            $productModel = new ProductModel($this->getDatabaseConnection());
            $product = $productModel->getById($productId);

            if(!$product)
            {
                $this->set('error', -1);
                return;
            }
            
            $bookmarks = $this->getSession()->get('bookmarks', []);

            foreach($bookmarks as $bookmark) 
            {
                if($bookmark->id == $productId)
                {
                    $this->set('error', -2);
                    return;
                }
            }

            $bookmarks[] = $product;
            $this->getSession()->put('bookmarks', $bookmarks);

            $this->set('error', 0);
        }

        public function clear()
        {
            $this->getSession()->put('bookmarks', []);
            $this->set('error', 0);
        }
    }