<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Nike Resmi Luncurkan GT Cut 3, Dirilis Musim Semi 2024',
                'category' => 'Fashion',
                'author' => 'Hypesnakers',
                'image' => 'artikel1.png',
                'published_at' => '2024-01-12',
                'hype_count' => '5.7M Hypes',
                'content' => 'Nike akhirnya secara resmi meluncurkan GT Cut 3, sepatu basket generasi terbaru yang hadir dengan peningkatan teknologi untuk kenyamanan dan performa. Peluncuran ini direncanakan pada musim semi 2024 dan diharapkan menjadi highlight produk mereka tahun ini.'
            ],
            [
                'title' => 'Puma Bakal Berhenti Sponsori Timnas Israel Mulai 2024',
                'category' => 'Fashion',
                'author' => 'Hypesnakers',
                'image' => 'artikel2.png',
                'published_at' => '2024-01-12',
                'hype_count' => '5.7M Hypes',
                'content' => 'Puma mengumumkan bahwa mereka tidak akan lagi menjadi sponsor resmi Timnas Israel mulai 2024. Keputusan ini dikabarkan merupakan hasil dari tekanan global dan pertimbangan strategi brand positioning Puma untuk fokus pada pasar baru.'
            ],
            [
                'title' => 'Pecah Rekor, Karina Aespa Jadi Idol Wanita Gen 4 Tercepat Yang Berhasil Dapatkan 10 Juta Followers Instagram',
                'category' => 'K-POP',
                'author' => 'Hypesnakers',
                'image' => 'artikel3.png',
                'published_at' => '2024-01-12',
                'hype_count' => '5.7M Hypes',
                'content' => 'Karina dari grup aespa mencetak rekor baru sebagai idol wanita generasi keempat tercepat yang berhasil meraih 10 juta pengikut di Instagram. Prestasi ini membuktikan popularitas dan pengaruh besar Karina di dunia hiburan K-Pop.'
            ],
            [
                'title' => 'Jadi Rookie Paling Populer, Riot Games dan Newjeans Kolaborasi Lagu untuk Turnamen League Of Legends',
                'category' => 'K-POP',
                'author' => 'Hypesnakers',
                'image' => 'artikel4.png',
                'published_at' => '2024-01-12',
                'hype_count' => '5.7M Hypes',
                'content' => 'Grup rookie NewJeans resmi bekerja sama dengan Riot Games untuk menghadirkan lagu tema turnamen League of Legends. Kolaborasi ini menjadi pembuktian bahwa NewJeans adalah rookie paling populer yang mampu menjangkau dunia gaming global.'
            ],
            [
                'title' => 'Nike Resmi Luncurkan GT Cut 3, Dirilis Musim Semi 2024',
                'category' => 'Fashion',
                'author' => 'Hypesnakers',
                'image' => 'artikel1.png',
                'published_at' => '2024-01-10',
                'hype_count' => '6.7M Hypes',
                'content' => 'GT Cut 3 dari Nike hadir dengan desain yang diperbarui dan fitur bantalan baru untuk mendukung kelincahan pemain basket. Sepatu ini menargetkan atlet muda dan komunitas streetball dengan gaya yang modern dan teknologi terbaik.'
            ],
        ];

        $this->db->table('blog')->insertBatch($data);
    }
}
