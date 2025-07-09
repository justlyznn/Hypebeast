<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;

class DashboardAdminController extends BaseController
{
    public function index()
    {
        $transactionModel = new TransactionModel();
        // Ambil data penjualan dan abaikan kolom 'ongkir'
        $sales = $transactionModel->findAll(); 

        // Kirim data ke tampilan
        return view('v_dashboardAdmin', ['sales' => $sales]);
    }
}
