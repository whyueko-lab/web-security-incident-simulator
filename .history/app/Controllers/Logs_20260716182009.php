<?php

namespace App\Controllers;

class Logs extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $logs = $db->table('attack_logs')
                   ->orderBy('id', 'DESC')
                   ->get()
                   ->getResult();

        return view('logs/index', [
            'logs' => $log
        ]);
    }
}