<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{

    public function index()
    {
        return view('mhs');
    }

    public function proses($p = 'kosong')
    {
        $output['nama'] = $_GET['nama'];
        $output['nim'] = $_GET['nim'];
        $output['status'] = $_GET['status'];
        return view('tampilmhs', $output);
    }
}
