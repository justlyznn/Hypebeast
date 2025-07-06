<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class StoreController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $category = $this->request->getGet('category');
        $limit = $this->request->getGet('limit') ?? 4;

        // Produk untuk New Arrivals
        $allProducts = $model->findAll();
        $newArrivals = array_slice($allProducts, 0, $limit);

        // Produk utama (di bawah filter)
        if ($category && $category !== 'all') {
            $filteredProducts = $model->where('category', $category)->findAll();
        } else {
            $filteredProducts = $model->findAll();
        }

        $data = [
            'newArrivals' => $newArrivals,
            'totalNewArrivals' => count($allProducts),
            'currentLimit' => $limit,
            'product' => $filteredProducts,
            'activeCategory' => $category ?? 'all'
        ];

        return view('v_store', $data);
    }
}