<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $db = db_connect();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $db->table('users')
            ->where('username', $username)
            ->where('password', $password)
            ->get()
            ->getRow();

        if ($user) {

            session()->set([
                'id' => $user->id,
                'username' => $user->username,
                'role' => $user->role,
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}