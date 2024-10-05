<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController{

    public function index(){
        $models = Category::all();
        include realpath(__DIR__ . "/..Views/categories/index.php");
    }

    public function test(){
        include realpath(__DIR__ . "/../Views/categories/test.php");
    }

}

?>