<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends model
{
  protected $table = 'vehicles';

  protected $primaryKey = 'vehicle_id';

  protected $allowedFields =
    [
      'subcategory_id',
      'vehicle_model',
      'unit_price',
      'available_quantity',
      'image',
      'vehicle_description',
      'manufacturer',
      'year_of_manufacture',
      'mileage',
      'registration',
      'vehicle_condition',
      'serial_number',
      'color',
    ];
}