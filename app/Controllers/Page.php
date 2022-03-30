<?php namespace App\Controllers;

class Page extends BaseController 
{
    public function products()
    {
        return view('products');
    }

    public function profile()
    {
        return view('layout/non_catalog_layout');
    }

    public function aboutus()
    {
        return view('layout/non_catalog_layout');
    }

    public function contact()
    {
        return view('layout/non_catalog_layout');
    }
}
