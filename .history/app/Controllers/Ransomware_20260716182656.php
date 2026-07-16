<?php

namespace App\Controllers;

class Ransomware extends BaseController
{

    public function index()
    {

        if(session()->get('server')==null){

            session()->set([

                'server'=>'Running',

                'database'=>'Connected',

                'backup'=>'Available',

                'attack'=>false

            ]);

        }

        return view('ransomware/index');

    }

    public function attack()
    {
        helper('security');

        saveLog(
            'Ransomware',
            'Critical',
            'Database berhasil dienkripsi.',
            'Service Down'
        );

        session()->set([

            'server'=>'DOWN',

            'database'=>'Encrypted',

            'attack'=>true

        ]);

        return redirect()->to('/ransomware');

    }

    public function restore()
    {
        helper('security');

saveLog(
    'Recovery',
    'Low',
    'Backup berhasil dipulihkan.',
    'Recovered'
);

        session()->set([

            'server'=>'Running',

            'database'=>'Connected',

            'attack'=>false

        ]);

        return redirect()->to('/ransomware');

    }

}