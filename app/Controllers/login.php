<?php

namespace App\Controllers;

use App\Models\loginModel;
use App\Models\AsistenModel;

class Login extends BaseController
{
    protected $model, $modelAsisten;

    public function __construct()
    {
        $this->model = new loginModel();
        $this->modelAsisten = new AsistenModel();
    }

    public function index()
    {

        $data = [
            'login' => $this->model->findAll(),
            'asisten' => $this->modelAsisten->findAll(),
        ];

        return view('login/loginpage', $data);
    }

    public function home()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'admin') {
                return view('login/home');
            } else {
                return view('login/loginpage');
            }
        } else {
            return view('login/loginpage');
        }
    }

    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $cek = $this->model->cek($post);
        if ($cek > 0) { // untuk mengecek apakah username dan password sesuai yg diinginkan
            $session = session();
            $session->set('pengguna', $post['usr']);
            return redirect()->to(base_url('asisten'));
        } else {
            return view('login/fail');
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/loginpage');
    }
}
