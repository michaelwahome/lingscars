<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

class Home extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $subcategoryModel = new SubcategoryModel();

        $session = session();
        $_SESSION["categories"] = $categoryModel->selectFour();
        $_SESSION["subcategories"] = $subcategoryModel->selectAll();

        return view('landing-page');
    }
}
