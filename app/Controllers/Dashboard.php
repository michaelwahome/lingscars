<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\VehicleModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        
        if(!isset($_SESSION["user_details"]))
        {
            return redirect()->to('/');
        }elseif($_SESSION["user_details"]["role_id"] == 1){
            return redirect()->to('/');
        }

        $authModel = new AuthModel();
        $categoryModel = new CategoryModel();
        $subcategoryModel = new SubcategoryModel();
        $vehicleModel = new VehicleModel();

        $data["count"]["users"] = $authModel->countUsers();
        $data["count"]["accounts"] = $authModel->countAll();
        $data["count"]["categories"] = $categoryModel->countAll();
        $data["count"]["subcategories"] = $subcategoryModel->countAll();
        $data["count"]["vehicles"] = $vehicleModel->countAll();

        return view('admin/dashboard', $data);
    }
}
