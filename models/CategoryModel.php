<?php

namespace App\Models;

    use App\Core\Model;

    class CategoryModel extends Model
    {
        public function getCategories()
        {
            $sql = "SELECT DISTINCT category.category_name FROM category LEFT JOIN product ON category.category_id = product.category_id WHERE category.category_id != 1";
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