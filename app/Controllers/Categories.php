<?php

namespace App\Controllers;
use App\Models\CategoryModel;

class Categories extends BaseController
{
    public function index()
    {
        $CategoryModel = new CategoryModel();
        $data['category']=$CategoryModel->findAll();
        return view('admin/categories/read', $data);
    }
    public function create()
    {
      return view('admin/categories/create');
    }

    public function store()
    {
      $category = new CategoryModel();

      $data = $this->getData();
      $category->save($data);
      return redirect()->to('admin/categories/read')->with('status', 'Category saved');

    }

    public function edit ($id = null)
    {
      $category = new CategoryModel();
      $data['category'] = $category->find($id);
      return view('/admin/categories/edit', $data);
    }

    public function update ($id)
    {
    $category = new CategoryModel();
      $data = $this->getData();
      $category->update($id, $data);
    return redirect()->to('admin/categories/read')->with('status', 'Category saved');
    }

    public function delete($id)
    {
      $category = new CategoryModel();
      $data['category'] = $category->delete($id);
      return redirect()->to('admin/categories/read')->with('status', 'Category deleted');
    }

  /**
   * @return array
   */
  public function getData (): array
  {
    if ( $imagefile = $this->request->getFiles() ) {
      foreach ( $imagefile[ 'images' ] as $img ) {
        if ( $img->isValid() && !$img->hasMoved() ) {
          $newName = $img->getRandomName();
          $img->move('public/uploads', $newName);
        }
      }
    }
    return [
      'category_name'        => $this->request->getPost('category_name'),
      'category_description' => $this->request->getPost('category_description'),
      'image'                => $newName
    ];
  }

}