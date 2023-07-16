<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('tamplate_admin/header');
        return view('tamplate_admin/sidebar');
        return view('tamplate_admin/footer');
        return view('admin/layout');
    }
}
