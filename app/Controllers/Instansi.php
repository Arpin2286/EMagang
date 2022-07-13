<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Instansi extends BaseController
{
    public function index()
    {
        return view('admin/page/FormDataInstansi/Instansi');
    }

    public function create()
    {
        return view('admin/page/FormDataInstansi/Create');
    }

    public function edit()
    {
        return view('admin/page/FormDataInstansi/Edit');
    }
}