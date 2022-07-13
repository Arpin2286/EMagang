<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/page/index');
    }

    public function create()
    {
        return view('admin/page/FormDataAdmin/Create');
    }

    public function show()
    {
        return view('admin/page/FormDataAdmin/Admin');
    }

    public function edit()
    {
        return view('admin/page/FormDataAdmin/Edit');
    }
}