<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerForm()
    {
        $session = \Config\Services::session();
        $validation = \Config\Services::validation();
        $userModel = new UsersModel();

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $validate = $validation->run($data, 'register');
            $errors = $validation->getErrors();

            if (!$errors) {
                $data = [
                    'user_name' => $this->request->getPost('name'),
                    'user_address' => $this->request->getPost('address'),
                    'user_phone_number' => $this->request->getPost('phoneNumber'),
                    'user_email' => $this->request->getPost('email'),
                    'user_password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                    'user_level' => 'User'
                ];

                dd($data);
            }

            $session->setFlashdata('errors', $errors);
        }
        return redirect()->to('/register');
    }

    public function loginForm()
    {
        $session = \Config\Services::session();
        $validation = \Config\Services::validation();
        $usersModel = new UsersModel();

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $validate = $validation->run($data, 'login');
            $errors = $validation->getErrors();

            if ($errors) {
                return redirect()->to('/login');
            }

            $data = [
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ];

            $user = $usersModel->where('email', $data['email'])->first();
        }
    }
}
