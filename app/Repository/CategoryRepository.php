<?php
/**
 * User: nk_t
 * Date: 2019-07-25
 * Time: 21:34
 */

namespace App\Repository;


use App\Model\Category;

class CategoryRepository
{
    public function save($value)
    {
        $category = new Category();
        $category->name = $value['name'];
        $category->handle_name_template = $value['temp_name'];
        $category->save();

        return $category;
    }
}