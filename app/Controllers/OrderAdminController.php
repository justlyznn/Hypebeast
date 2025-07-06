<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class OrderAdminController extends BaseController
{
    public function index()
    {
        return view('v_orderAdmin');
    }
}
