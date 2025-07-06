<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class CollectionController extends BaseController
{
    public function index($category = null)
    {
        $model = new ProductModel();

        // Ambil limit dari query string (?limit=8), default 8
        $limit = $this->request->getGet('limit') ?? 8;

        if ($category && $category !== 'all') {
            $products = $model->where('category', $category)->findAll($limit);
        } else {
            $products = $model->findAll($limit);
        }

        // Hitung total untuk cek apakah masih ada produk yang belum dimuat
        $total = $category && $category !== 'all'
            ? $model->where('category', $category)->countAllResults()
            : $model->countAll();

        return view('v_collection', [
            'product' => $products,
            'activeCategory' => $category,
            'totalProducts' => $total,
            'currentLimit' => $limit
        ]);
    }
}
