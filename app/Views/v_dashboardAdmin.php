<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Data Penjualan</h2>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-6 text-left">Nama User</th>
                    <th class="py-3 px-6 text-left">Total Pembelian</th>
                    <th class="py-3 px-6 text-left">Tanggal Pembelian</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php foreach ($sales as $sale): ?>
                    <tr class="border-t hover:bg-gray-50">
                        <td class="py-4 px-6"><?= esc($sale['username']) ?></td>
                        <td class="py-4 px-6"><?= esc($sale['total_harga']) ?></td>
                        <td class="py-4 px-6"><?= esc($sale['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>
