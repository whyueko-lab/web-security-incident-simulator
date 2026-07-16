<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Bola extends BaseController
{
    public function index()
    {
        return view('bola/index');
    }
}
