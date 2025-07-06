<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StoreController extends BaseController
{
    public function index()
    {
        return view('v_store');
    }
}
