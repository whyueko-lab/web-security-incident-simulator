<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
 public function index()
{
    $db = db_connect();

    $totalLogs = $db->table('attack_logs')->countAll();

    $critical = $db->table('attack_logs')
                   ->where('severity','Critical')
                   ->countAllResults();

    return view('dashboard',[
        'totalLogs'=>$totalLogs,
        'critical'=>$critical
    ]);
}
}
