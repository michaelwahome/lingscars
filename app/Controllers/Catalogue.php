<?php

namespace App\Controllers;

use App\Models\VehicleModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

class Catalogue extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $subcategoryModel = new SubcategoryModel();
        $vehicleModel = new VehicleModel();

        $session = session();
        $_SESSION["categories"] = $categoryModel->selectFour();
        $_SESSION["subcategories"] = $subcategoryModel->selectAll();
        
        $data['vehicles']=$vehicleModel->selectAll();
        return view('catalogue', $data);
    }

    public function categorycatalogue($category_id)
    {
        $categoryModel = new CategoryModel();
        $subcategoryModel = new SubcategoryModel();
        $vehicleModel = new VehicleModel();

        $session = session();
        $_SESSION["categories"] = $categoryModel->selectFour();
        $_SESSION["subcategories"] = $subcategoryModel->selectAll();

        $data["categories"] = $categoryModel->selectOne($category_id);
        $data['vehicles']=$vehicleModel->selectUsingCategoryId($category_id);
        return view('catalogue', $data);
    }

    public function subcategorycatalogue($subcategory_id)
    {
        $categoryModel = new CategoryModel();
        $subcategoryModel = new SubcategoryModel();
        $vehicleModel = new VehicleModel();

        $session = session();
        $_SESSION["categories"] = $categoryModel->selectFour();
        $_SESSION["subcategories"] = $subcategoryModel->selectAll();

        $data["categories"] = $subcategoryModel->selectOne($subcategory_id);
        $data['vehicles']=$vehicleModel->selectUsingSubcategoryId($subcategory_id);
        return view('catalogue', $data);
    }
}
