<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SqlInjection extends BaseController
{
    public function index()
    {
        return view('sql/index');
    }

    public function login()
    {

        $db = db_connect();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $mode = $this->request->getPost('mode');

        if($mode=="vulnerable")
        {
            // Simulasi query yang tidak aman
            $sql = "SELECT * FROM users
                    WHERE username='$username'
                    AND password='$password'";

            $query = $db->query($sql);

            $result = $query->getRow();

            return view('sql/result',[
                'mode'=>'Vulnerable',
                'sql'=>$sql,
                'result'=>$result
            ]);

        }else{

            // Versi aman (Prepared Query)
            $builder = $db->table('users');

            $builder->where('username',$username);
            $builder->where('password',$password);

            $result = $builder->get()->getRow();

            return view('sql/result',[
                'mode'=>'Secure',
                'sql'=>'Prepared Query (parameterized)',
                'result'=>$result
            ]);

        }

    }
}