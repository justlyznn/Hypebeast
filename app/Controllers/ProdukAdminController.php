<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukAdminController extends BaseController
{
    public function index()
    {
        return view('v_produkAdmin');
    }
}
