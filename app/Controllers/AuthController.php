<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class AuthController extends BaseController
{

    public function index()
    {
        return view("auth/login");
    }

    public function loginProcess()
    {
        $post = $this->request->getPost(["username", "password"]);
        $users = new Users();
        $data = $users->getUserByUsernameAndPassword($post["username"], $post["password"]);

        if ($data == null) {
            return redirect()->to('/login');
        }

        session()->set('user', $data);

        switch ($data["role"]) {
            case 'mahasiswa':
                return redirect()->to('mahasiswa/dashboard');
            case 'dosen':
                return redirect()->to('dosen/dashboard');
            case 'staf':
                return redirect()->to('staf/dashboard');
            default:
                return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->set("user_data", null);
        return redirect()->to("/login");
    }

}
