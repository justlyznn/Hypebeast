<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;

class DashboardAdminController extends BaseController
{
    public function index()
    {
        // Ambil data transaksi dari model
        $transactionModel = new TransactionModel();
        $sales = $transactionModel->findAll();  // Mengambil semua transaksi

        // Kirim data ke tampilan dashboard admin
        return view('v_dashboardAdmin', ['sales' => $sales]);
    }
}
