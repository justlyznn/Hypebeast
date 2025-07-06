<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct(){
        helper('form');
    }

    public function generatepassword ()
    {
        echo password_hash('123',PASSWORD_DEFAULT);
    }

    public function login(){
    if ($this->request->getPost()) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = ['username' => 'april', 'password' => '$2y$10$2hul/eSl5SuXCFydTKowcOeLgcdS.D9jfdfauqlrLIeQLqYwxPGNi', 'role' => 'admin']; // passw 123

        if ($username == $dataUser['username']) {
            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'username' => $dataUser['username'],
                    'role' => $dataUser['role'],
                    'isLoggedIn' => TRUE
                ]);

                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('failed', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', 'Username Tidak Ditemukan');
            return redirect()->back();
        }
    } else {
        return view('v_login');
    }
    }
    
    public function logout(){
    session()->destroy();
    return redirect()->to('v_login');
    }
}
