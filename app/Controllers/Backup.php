<?php

namespace App\Controllers;

class Backup extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $history = $db->table('backup_history')
                      ->orderBy('id','DESC')
                      ->get()
                      ->getResult();

        return view('backup/index',[
            'history'=>$history
        ]);
    }

    public function create()
    {
        helper('security');

        saveLog(
            'Backup',
            'Low',
            'Backup database berhasil dibuat.',
            'Success'
        );
        $db = db_connect();

        $name = "backup_" . date('Ymd_His') . ".sql";

        $db->table('backup_history')->insert([
            'backup_name'=>$name,
            'backup_date'=>date('Y-m-d H:i:s'),
            'backup_size'=>rand(150,300)." MB",
            'status'=>'Success'
        ]);

        session()->setFlashdata('success','Backup berhasil dibuat.');

        return redirect()->to('/backup');
    }

    public function restore()
    {
        session()->set([
            'server'=>'Running',
            'database'=>'Connected',
            'attack'=>false
        ]);

        session()->setFlashdata(
            'success',
            'Database berhasil dipulihkan dari backup.'
        );

        return redirect()->to('/backup');
    }
}