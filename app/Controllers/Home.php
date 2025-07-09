<?php

namespace App\Controllers;

use App\Models\ProductModel; 

class Home extends BaseController
{
    protected $product;

    function __construct()
    {
        helper('number');
        helper('form');
        $this->product = new ProductModel();
    }
    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
    }
}
