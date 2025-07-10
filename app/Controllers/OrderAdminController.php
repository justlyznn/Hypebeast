<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;

class OrderAdminController extends BaseController
{
    protected $transactionModel;

    public function __construct()
    {
        $this->transactionModel = new TransactionModel();  // Inisialisasi model transaksi
    }

    // Menampilkan daftar transaksi
    public function index()
    {
        $sales = $this->transactionModel->findAll();  // Mengambil semua transaksi

        return view('v_orderAdmin', ['sales' => $sales]);
    }

    // Fungsi untuk mengapprove order
    public function approve($order_id)
    {
        // Tidak perlu melakukan apa-apa, hanya mengarahkan ke dashboard
        return redirect()->to(base_url('admin/dashboard'));
    }
}
