<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            [
                'name' => 'Off White Hoodie white',
                'description' => 'Premium white hoodie from Off White, suitable for casual and streetwear style.',
                'price' => 150000,
                'category' => 'hoodie',
                'stock' => 19,
                'status' => 'ready',
                'image' => 'pakaian1.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Stone Island Seersucker Cargo Pants Olive',
                'description' => 'Stone Island olive cargo pants with seersucker fabric, stylish and comfortable.',
                'price' => 150000,
                'category' => 'pants',
                'stock' => 19,
                'status' => 'ready',
                'image' => 'celana3.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Air Jordan I Retro High Off - White Chicago',
                'description' => 'Legendary Air Jordan 1 Retro High in Chicago colorway. A must-have for collectors.',
                'price' => 3000000,
                'category' => 'shoes',
                'stock' => 19,
                'status' => 'ready',
                'image' => 'sepatu1.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Stone Island Jacket',
                'description' => 'Stone Island lightweight jacket with modern silhouette and functional pockets.',
                'price' => 150000,
                'category' => 'jacket',
                'stock' => 19,
                'status' => 'ready',
                'image' => 'pakaian3.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Jordan Jumpman Air Fleece Hoodie Red',
                'description' => 'Cozy fleece hoodie with Jumpman Air logo in bold red, perfect for chilly days.',
                'price' => 150000,
                'category' => 'hoodie',
                'stock' => 0,
                'status' => 'out_of_stock',
                'image' => 'pakaian2.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Jordan Shorts Essentials',
                'description' => 'Essential training shorts from Jordan, designed for performance and comfort.',
                'price' => 150000,
                'category' => 'pants',
                'stock' => 0,
                'status' => 'out_of_stock',
                'image' => 'celana2.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Adidas Yeezy 350 V2',
                'description' => 'Yeezy 350 V2 with Boost technology and sleek silhouette for ultimate comfort.',
                'price' => 1000000,
                'category' => 'shoes',
                'stock' => 0,
                'status' => 'out_of_stock',
                'image' => 'sepatu3.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Off - White Long Sleeve',
                'description' => 'Long sleeve Off - White tee with iconic print and relaxed fit.',
                'price' => 150000,
                'category' => 'shirt',
                'stock' => 0,
                'status' => 'out_of_stock',
                'image' => 'pakaian4.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Stussy Black T - Shirt',
                'description' => 'Classic black T-shirt from Stussy with clean logo design on the front.',
                'price' => 150000,
                'category' => 'shirt',
                'stock' => 0,
                'status' => 'out_of_stock',
                'image' => 'pakaian5.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Nike Swoosh Fleece Pants',
                'description' => 'Nike fleece pants with Swoosh branding, great for lounging or light workouts.',
                'price' => 150000,
                'category' => 'pants',
                'stock' => 19,
                'status' => 'ready',
                'image' => 'celana1.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Nike GT Cut 2 University Red',
                'description' => 'Basketball shoes with responsive cushioning and stylish university red color.',
                'price' => 1000000,
                'category' => 'shoes',
                'stock' => 19,
                'status' => 'ready',
                'image' => 'sepatu5.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Off White Hoodie white',
                'description' => 'Another drop of the popular Off White white hoodie, updated fit and fabric.',
                'price' => 150000,
                'category' => 'hoodie',
                'stock' => 0,
                'status' => 'out_of_stock',
                'image' => 'pakaian1.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('product')->insertBatch($data);
    }
}
