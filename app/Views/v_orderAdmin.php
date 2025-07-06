<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content') ?>  

<div class="container mx-auto p-6">
    <div class="bg-white shadow-xl rounded-xl">
        <h5 class="text-lg font-semibold p-4 border-b">Order</h5>

        <div class="overflow-x-auto p-4">
            <table class="min-w-full bg-white border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">#</th>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">ID Pembelian</th>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Waktu Pembelian</th>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Total Bayar</th>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Alamat</th>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Status</th>
                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Order 1 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 text-sm text-gray-700">1</td>
                        <td class="py-4 px-6 text-sm text-gray-700">1234567</td>
                        <td class="py-4 px-6 text-sm text-gray-700">2025-06-19 05:47:18</td>
                        <td class="py-4 px-6 text-sm text-gray-700">IDR 11,109,000</td>
                        <td class="py-4 px-6 text-sm text-gray-700">Demak</td>
                        <td class="py-4 px-6">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">Belum Selesai</span>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-700">
                            <button type="button" class="btn btn-success text-white bg-primary hover:bg-gray-500 px-4 py-2 rounded-md">Detail</button>
                        </td>
                    </tr>
                    <!-- Example Order 2 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 text-sm text-gray-700">2</td>
                        <td class="py-4 px-6 text-sm text-gray-700">1234567</td>
                        <td class="py-4 px-6 text-sm text-gray-700">2025-06-20 10:15:00</td>
                        <td class="py-4 px-6 text-sm text-gray-700">IDR 5,500,000</td>
                        <td class="py-4 px-6 text-sm text-gray-700">Semarang</td>
                        <td class="py-4 px-6">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">Proses</span>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-700">
                            <button type="button" class="btn btn-success text-white bg-primary hover:bg-gray-500 px-4 py-2 rounded-md">Detail</button>
                        </td>
                    </tr>
                    <!-- Example Order 3 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 text-sm text-gray-700">3</td>
                        <td class="py-4 px-6 text-sm text-gray-700">1234567</td>
                        <td class="py-4 px-6 text-sm text-gray-700">2025-06-21 14:20:00</td>
                        <td class="py-4 px-6 text-sm text-gray-700">IDR 3,200,000</td>
                        <td class="py-4 px-6 text-sm text-gray-700">Yogyakarta</td>
                        <td class="py-4 px-6">
                            <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">Batal</span>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-700">
                            <button type="button" class="btn btn-success text-white bg-primary hover:bg-gray-500 px-4 py-2 rounded-md">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
