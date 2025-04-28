<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;

class UserController extends BaseController {
    public function index() {
        $title = 'Daftar User';
        $model = new User();
        $users = $model->findAll();
        return view('login', compact('users', 'title'));
    }
    public function login() {
        helper(['form']);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if (!$email) {
            return view('login', compact('email'));
        }
        $session = session();
        $model = new User();
        $login = $model->where('useremail', $email)->first();
        if ($login) {
            $pass = $login['userpassword'];
            if (password_verify($password, $pass)) {
                $login_data = [
                    'user_id' => $login['id'],
                    'user_name' => $login['username'],
                    'user_email' => $login['useremail'],
                    'logged_in' => TRUE,
                ];
                $session->set($login_data);
                return redirect('admin/articles');
            }
            else {
                $session->setFlashdata("flash_msg", "Password salah.");
                return redirect()->to('/admin');
            }
        } else {
            $session->setFlashdata("flash_msg", "email tidak terdaftar.");
            return redirect()->to('/admin');
        }
    }

    function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}