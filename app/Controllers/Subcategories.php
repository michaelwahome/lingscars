<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

class Subcategories extends BaseController
{
    public function index()
    {
      $subcategoryModel = new SubcategoryModel();
      $data['subcategory'] = $subcategoryModel->findAll();
      return view('admin/subcategories/read', $data);
    }
    public function create()
    {
      return view('admin/subcategories/create');
    }

    public function store()
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
      $data['subcategories'] = $subcategoryModel->find($id);
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

    public function delete($id = null)
    {
      $subcategoryModel = new SubcategoryModel();
      $data['subcategory'] = $subcategoryModel->delete($id);
      return redirect()->to('admin/subcategories/read')->with('status', 'Subcategory deleted');
    }

}