<?php

namespace App\Controllers;

class Bola extends BaseController
{
    helper('security');

    public function index()
    {

        $db=db_connect();

        $patients=$db->table('patients')->get()->getResult();

        return view('bola/index',compact('patients'));

    }

    public function view($id)
    {

        $mode=$this->request->getGet('mode');

        $db=db_connect();

        $patient=$db->table('patients')

                    ->where('id',$id)

                    ->get()

                    ->getRow();

        if(!$patient){

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        }

        if($mode=="secure"){

            // simulasi user login id = 1
            $loginUser=1;

            if($patient->owner_id!=$loginUser){

                return view('bola/forbidden');

            }

        }

        return view('bola/detail',compact('patient','mode'));

    }

}