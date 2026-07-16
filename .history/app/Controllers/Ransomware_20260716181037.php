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

        session()->set([

            'server'=>'DOWN',

            'database'=>'Encrypted',

            'attack'=>true

        ]);

        return redirect()->to('/ransomware');

    }

    public function restore()
    {

        session()->set([

            'server'=>'Running',

            'database'=>'Connected',

            'attack'=>false

        ]);

        return redirect()->to('/ransomware');

    }

}