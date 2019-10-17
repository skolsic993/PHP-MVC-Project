<?php

namespace App\Models;

    use App\Core\Model;

    class ProductModel extends Model
    {
        public function getAllByUserId(int $userId): array
        {
            return $this->getAllByFieldName('users_id', $userId);
        }

        public function filterProducts()
        {
            $sql = "SELECT DISTINCT color FROM product";
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        public function respond($color_filter)
        {
            $sql = "SELECT * FROM product WHERE product.color = '" . $color_filter ."'";
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        public function respondCategory($category_filter)
        {
            $sql = "SELECT * FROM product RIGHT JOIN category ON product.category_id = category.category_id WHERE category.category_name = '" . $category_filter ."'";
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        public function filtered($category_filter, $color_filter)
        {
            $sql = "SELECT * FROM product RIGHT JOIN category ON product.category_id = category.category_id WHERE category.category_name = '" . $category_filter ."' AND product.color = '" . $color_filter ."'";
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        public function getAllBySearch($search)
        {
            $sql = "SELECT * FROM product WHERE title LIKE '%" . $search . "%'";
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if($res)
            {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }
    }
