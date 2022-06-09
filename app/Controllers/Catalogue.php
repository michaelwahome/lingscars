<?php

namespace App\Controllers;

class Catalogue extends BaseController
{
    public function index()
    {
        return view('overall_catalogue');
    }
    public function suv()
    {
        return view('suv_catalogue');
    }
    public function bike()
    {
        return view('bike_catalogue');
    }
    public function sedan()
    {
        return view('sedan_catalogue');
    }
    public function overall()
    {
        return view('overall_catalogue');
    }
}
