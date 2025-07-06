<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class ProdukAdminController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->findAll();

        return view('v_produkAdmin', ['product' => $products]);
    }
}
