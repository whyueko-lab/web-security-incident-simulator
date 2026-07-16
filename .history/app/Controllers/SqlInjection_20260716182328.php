<?php

namespace App\Controllers;

class SqlInjection extends BaseController
{

    public function index()
    {
        return view('sql/index');
    }

    public function process()
    {
        helper('security');

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $mode     = $this->request->getPost('mode');

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $status = "Login Gagal";
        $message = "";
        $mitigation = "";

        if ($mode == "vulnerable") {

            // Simulasi edukasi
            if (strpos($password, "' OR ") !== false) {

                $status = "LOGIN BERHASIL (Simulasi)";
                $message = "Input yang dimasukkan menyerupai payload SQL Injection sehingga sistem yang rentan dapat melewati proses autentikasi.";
                $mitigation = "Gunakan Prepared Statement, validasi input, dan parameterized query.";

            } elseif ($username == "admin" && $password == "admin123") {

                $status = "LOGIN BERHASIL";
                $message = "Login normal menggunakan kredensial yang benar.";
                $mitigation = "-";

            } else {

                $message = "Username atau password salah.";

            }

        } else {

            // Mode aman
            if ($username == "admin" && $password == "admin123") {

                $status = "LOGIN BERHASIL";
                $message = "Prepared Statement aktif. Login berhasil dengan kredensial yang valid.";
                $mitigation = "Prepared Statement telah mencegah injeksi SQL.";

            } else {

                $status = "LOGIN GAGAL";
                $message = "Prepared Statement aktif. Input berbahaya diperlakukan sebagai data biasa, bukan sebagai perintah SQL.";
                $mitigation = "Sistem aman dari SQL Injection.";

            }

        }

        return view('sql/result', compact(
            'query',
            'status',
            'message',
            'mitigation',
            'mode'
        ));
        
    }

}