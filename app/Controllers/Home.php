<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\VehicleModel;

class Home extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $subcategoryModel = new SubcategoryModel();
        $vehicleModel = new VehicleModel();

        $session = session();
        $_SESSION["categories"] = $categoryModel->selectFour();
        $_SESSION["subcategories"] = $subcategoryModel->selectAll();

        $data["top_products"] = $vehicleModel->selectThree();
        $data["offers"] = $vehicleModel->selectNextThree();

        return view('landing-page', $data);
    }
}
