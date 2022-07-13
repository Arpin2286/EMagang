<?php

namespace App\Controllers;

class Peserta extends BaseController
{
    // CRUD data users on admin
    public function show()
    {
        return view('admin/page/FormDataPeserta/Peserta');
    }

    public function create()
    {
        return view('admin/page/FormDataPeserta/Create');
    }

    public function edit()
    {
        return view('admin/page/FormDataPeserta/Edit');
    }

    //Enduser
    public function index()
    {
        return view('enduser/page/index');
    }

    public function absensi()
    {
        return view('enduser/page/absen/absen');
    }
}