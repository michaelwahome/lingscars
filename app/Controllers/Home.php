<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing-page');
    }

    public function maintemplate()
    {
        return view ('templates/main_template');
    }
}
