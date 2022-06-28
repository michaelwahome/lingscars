<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Models\CartModel;
use App\Models\CartDetailModel;

class Users extends BaseController
{
    public function index()
    {
        $authModel = new AuthModel();
        $data['user']=$authModel->findAll();
        return view('admin/users/read', $data);
    }
    public function create()
    {
        return view('admin/users/create');
    }

    public function store()
    {
        $user = new AuthModel();
        $cartModel = new CartModel();

        $data = $this->getData();
        
        $user->save($data);

        $user_info = $user->login($data["email"], $data["password"]);
        $cartModel->addRecord($user_info["user_id"]);

        return redirect()->to('admin/users/read')->with('status', 'User saved');

    }

    public function edit ($id = null)
    {
        $user = new AuthModel();
        $data['user'] = $user->find($id);
        return view('/admin/users/edit', $data);
    }

    public function update ($id)
    {
        $user = new AuthModel();

        $data = $this->getData();
        $user->update($id, $data);
        return redirect()->to('admin/users/read')->with('status', 'User saved');
    }

    public function delete($id)
    {
        $user = new AuthModel();
        $cartModel = new CartModel();
        $cartDetailModel = new CartDetailModel();

        $cartDetailModel->deleteSome($id);
        $cartModel->deleteOne($id);
        $data['user'] = $user->delete($id);
        return redirect()->to('admin/users/read')->with('status', 'User deleted');
    }

    /**
     * @return array
     */
    public function getData (): array
    {
        return [
        'role_id' => $this->request->getPost('role_id'),
        'first_name' => $this->request->getPost('first_name'),
        'last_name' => $this->request->getPost('last_name'),
        'email' => $this->request->getPost('email'),
        'password' => $this->request->getPost('password'),
        'gender' => $this->request->getPost('gender'),
        ];
    }

}