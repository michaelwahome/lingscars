<?php

namespace App\Controllers;
use App\Models\VehicleModel;

class Catalogue extends BaseController
{
    public function suv()
    {
        $vehicleModel = new VehicleModel();
        $data['images']=$vehicleModel->findAll();
        return view ('suv_catalogue', $data);
    }
    public function bike()
    {
        $vehicleModel = new VehicleModel();
        $data['images']=$vehicleModel->findAll();
        return view ('bike_catalogue', $data);
    }
    public function sedan()
    {
        $vehicleModel = new VehicleModel();
        $data['images']=$vehicleModel->findAll();
        return view ('sedan_catalogue', $data);
    }
    public function overall()
    {
        $vehicleModel = new VehicleModel();
        $data['images']=$vehicleModel->findAll();
        return view ('overall_catalogue', $data);
    }
    public function allInventory(){
        $vehicleModel = new VehicleModel();
        $data['images']=$vehicleModel->findAll();
        return view ('overall_catalogue', $data);
    }
}
