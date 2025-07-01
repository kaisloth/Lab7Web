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

    public function getUsers() {
        $model = new User;
        $users = $model->findAll();

        if(!empty($users)) {
            return response()->setJSON(['status'=>200, 'message'=>'Mendapatkan data users', 'data'=>$users]);
        }
        return response()->setJSON(['status'=>404, 'message'=>'Users tidak ditemukan!']);

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
                $loginData = [
                    'userid' => $login['id'],
                    'username' => $login['username'],
                    'useremail' => $login['useremail'],
                    'islogin' => TRUE,
                ];
                $session->set($loginData);
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

    public function register() {
        $model = new User();

        $username = $this->request->getPost('username');
        $useremail = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);

        $data = [
            'username'=>$username,
            'useremail'=>$useremail,
            'userpassword'=>$password,
        ];

        if($model->save($data)) {
            return redirect()->to('/admin');
        }
        return response()->setJSON(['status'=>401, 'message'=>'Register gagal!']);
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}