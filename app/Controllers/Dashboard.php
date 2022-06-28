<?php

namespace App\Controllers;

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

        return view('admin/dashboard');
    }
}
