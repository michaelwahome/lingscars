<?php

namespace App\Controllers;

use App\Models\VehicleModel;

class Vehicle extends BaseController
{
    public function index()
    {
      return view('admin/vehicles/index'); // Change this view
    }

    
    public function create()
    {
      return view('admin/vehicles/create');
    }


    public function vehicle()
    {
      $vehicleModel = new VehicleModel();

      $vehicle_id = $this->request->getPost('vehicle_id');
      $data["vehicle"] = $vehicleModel->selectOne($vehicle_id);
      return view('vehicle', $data);
    }
    

  /**
   * @throws \ReflectionException
   */
  public function store()
    {
      $vehicle = new VehicleModel();
      /*
       * Multiple file uploads trial
       * */
      if ($imagefile = $this->request->getFiles()) {
        foreach ($imagefile['images'] as $img) {
          if ($img->isValid() && ! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(WRITEPATH . 'uploads', $newName);
          }
        }
      }
      $data = [
        /* TODO: other fields that are to be uploaded to the database. Not included in the admin side at all as of now.*/
        /*Functionality of the multiple image upload*/
        'subcategory_id' => $this->request->getPost('subcategory_id'),
        'vehicle_model' => $this->request->getPost('vehicle_model'),
        'vehicle_description' => $this->request->getPost('vehicle_description'),
        'unit_price' => $this->request->getPost('unit_price'),
        'available_quantity' => $this->request->getPost('available_quantity'),
        'manufacturer' => $this->request->getPost('manufacturer'),
        'year_of_manufacture' => $this->request->getPost('year_of_manufacture'),
        'mileage' => $this->request->getPost('mileage'),
        'registration' => $this->request->getPost('registration'),
        'vehicle_condition' => $this->request->getPost('vehicle_condition'),
        'serial_number' => $this->request->getPost('serial_number'),
        'color' => $this->request->getPost('color'),
        'image' => $newName
      ];
      $vehicle->save($data);
      return redirect()->to('admin/vehicles')->with('status', 'Vehicle saved');

    }

}
