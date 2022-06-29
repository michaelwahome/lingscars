<?php

  namespace App\Controllers;

  use App\Models\CategoryModel;
  use App\Models\SubcategoryModel;
  use App\Models\VehicleModel;

  class Subcategories extends BaseController
  {
    public function index ()
    {
      $subcategoryModel = new SubcategoryModel();
      $data[ 'subcategory' ] = $subcategoryModel->findAll();

      $categoryModel = new CategoryModel();
      $data["categories"] = $categoryModel->findAll();

      return view('admin/subcategories/read', $data);
    }

    public function create ()
    {
      $categoryModel = new CategoryModel();
      $data["categories"] = $categoryModel->findAll();

      return view('admin/subcategories/create', $data);
    }

    public function store ()
    {
      $subcategoryModel = new SubcategoryModel();

      $data = [
        'category_id'             => $this->request->getPost('category_id'),
        'subcategory_name'        => $this->request->getPost('subcategory_name'),
        'subcategory_description' => $this->request->getPost('subcategory_description'),
      ];
      $subcategoryModel->save($data);
      return redirect()->to('admin/subcategories/read')->with('status', 'Subcategory saved');

    }

    public function edit ($id = null)
    {
      $subcategoryModel = new SubcategoryModel();
      $data[ 'subcategories' ] = $subcategoryModel->find($id);

      $categoryModel = new CategoryModel();
      $data["categories"] = $categoryModel->findAll();
      
      return view('/admin/subcategories/edit', $data);
    }

    public function update ($id = null)
    {
      $subcategoryModel = new SubcategoryModel();
      $categoryModel = new CategoryModel();
      $category_id = $this->request->getPost('category_id');
      $data = [
        'category_id'             => $this->request->getPost('category_id'),
        'subcategory_name'        => $this->request->getPost('subcategory_name'),
        'subcategory_description' => $this->request->getPost('subcategory_description'),
        /*'category_names'          => $categoryModel->where('category_id', $category_id)->findColumn('category_name'),*/
      ];

      $subcategoryModel->update($id, $data);
      return redirect()->to('admin/subcategories/read')->with('status', 'Category saved');
    }

    public function delete ($id = null)
    {
      $subcategoryModel = new SubcategoryModel();
      $vehicleModel = new VehicleModel();

      $vehicleModel->deleteSomeSub($id);
      $data[ 'subcategory' ] = $subcategoryModel->delete($id);
      return redirect()->to('admin/subcategories/read')->with('status', 'Subcategory deleted');
    }

  }