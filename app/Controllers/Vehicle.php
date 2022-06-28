<?php

namespace App\Controllers;

use App\Models\VehicleModel;

class Vehicle extends BaseController
{
  public function index()
    {
      $vehicleModel = new VehicleModel();
      $data['vehicles'] = $vehicleModel->selectAll();
      return view('admin/vehicles/read', $data); // Change this view
    }

    
    public function create()
    {
      return view('admin/vehicles/create');
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
            $img->move('public/uploads', $newName); /*TODO: Change the directory where images are moved to the public folder/images*/
          }
        }
      }
      $data = [
        /* TODO: other fields that are to be uploaded to the database. Not included in the admin side at all as of now.*/
        /*Functionality of the multiple image upload*/
        'subcategory_name'      => $this->request->getPost('subcategory_id'),
        'vehicle_model'       => $this->request->getPost('vehicle_model'),
        'vehicle_description' => $this->request->getPost('vehicle_description'),
        'unit_price'          => $this->request->getPost('unit_price'),
        'available_quantity'  => $this->request->getPost('available_quantity'),
        'manufacturer'        => $this->request->getPost('manufacturer'),
        'year_of_manufacture' => $this->request->getPost('year_of_manufacture'),
        'mileage'             => $this->request->getPost('mileage'),
        'registration'        => $this->request->getPost('registration'),
        'vehicle_condition'   => $this->request->getPost('vehicle_condition'),
        'serial_number'       => $this->request->getPost('serial_number'),
        'color'               => $this->request->getPost('color'),
        'image'               => $newName
      ];
      $vehicle->save($data);
      return redirect()->to('admin/vehicles')->with('status', 'Vehicle saved');

    }

  public function selectAll()
  {
    $query = $this->db->query("SELECT * FROM vehicles");

    foreach ($query->getResult() as $row)
    {
      $result[$row->vehicle_id] = array(
        'vehicle_id'          => $row->vehicle_id,
        'subcategory_id'      => $row->subcategory_id,
        'vehicle_model'       => $row->vehicle_model,
        'unit_price'          => $row->unit_price,
        'available_quantity'  => $row->available_quantity,
        'image'               => $row->image,
        'vehicle_description' => $row->vehicle_description,
        'manufacturer'        => $row->manufacturer,
        'year_of_manufacture' => $row->year_of_manufacture,
        'mileage'             => $row->mileage,
        'registration'        => $row->registration,
        'vehicle_condition'   => $row->vehicle_condition,
        'serial_number'       => $row->serial_number,
        'color'               => $row->color,
        'created_at'          => $row->created_at,
        'updated_at'          => $row->updated_at,
        'is_deleted'          => $row->is_deleted
      );
    }

    return $result;
  }

  public function edit ($id = null)
  {
    $vehicle = new VehicleModel();
    $data['vehicles'] = $vehicle->find($id);
    return view('/admin/vehicles/edit', $data);
  }

  public function update ($id = null)
  {
    $vehicle = new VehicleModel();
    /*
     * Multiple file uploads trial
     * */
    if ($imagefile = $this->request->getFiles()) {
      foreach ($imagefile['images'] as $img) {
        if ($img->isValid() && ! $img->hasMoved()) {
          $newName = $img->getRandomName();
          $img->move('public/uploads', $newName); /*TODO: Change the directory where images are moved to the public folder/images*/
        }
      }
    }
    $data = [
      'subcategory_id'      => $this->request->getPost('subcategory_id'),
      'vehicle_model'       => $this->request->getPost('vehicle_model'),
      'vehicle_description' => $this->request->getPost('vehicle_description'),
      'unit_price'          => $this->request->getPost('unit_price'),
      'available_quantity'  => $this->request->getPost('available_quantity'),
      'manufacturer'        => $this->request->getPost('manufacturer'),
      'year_of_manufacture' => $this->request->getPost('year_of_manufacture'),
      'mileage'             => $this->request->getPost('mileage'),
      'registration'        => $this->request->getPost('registration'),
      'vehicle_condition'   => $this->request->getPost('vehicle_condition'),
      'serial_number'       => $this->request->getPost('serial_number'),
      'color'               => $this->request->getPost('color'),
      'image'               => $newName
    ];
    $vehicle->update($id ,$data);
    return redirect()->to('admin/vehicles/read')->with('status', 'Vehicle saved');

  }

  public function delete ($id = null): \CodeIgniter\HTTP\RedirectResponse
  {
    $vehicle = new VehicleModel();
    $data['vehicles'] = $vehicle->delete($id);
    return redirect()->to('admin/vehicles/read')->with('status', 'Vehicle deleted');
  }

}
