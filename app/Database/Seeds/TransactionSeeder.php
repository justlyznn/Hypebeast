<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        for ($i = 1; $i <= 10; $i++) {
            // Buat data transaksi
            $userId = rand(1, 5); // asumsi ada 5 user
            $total = rand(150000, 500000);
            $created_at = date('Y-m-d H:i:s', strtotime("-$i days"));

            $db->table('transaction')->insert([
                'username' => $userId,
                'total' => $total,
                'created_at' => $created_at,
            ]);

            $idTransaksi = $db->insertID();

            // Buat detail transaksi
            for ($j = 1; $j <= rand(1, 3); $j++) {
                $db->table('transactiondetail')->insert([
                    'id_transaksi' => $idTransaksi,
                    'id_produk' => rand(1, 12), // asumsi 12 produk
                    'quantity' => rand(1, 4),
                ]);
            }
        }
    }
}
