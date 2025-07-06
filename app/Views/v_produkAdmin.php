v_produkAdmin

<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto p-6">
    <div class="bg-white shadow-xl rounded-xl">
        <h5 class="text-lg font-semibold p-4 border-b">Produk Admin</h5>

        <div class="p-4">
            <button type="button" class="btn rounded-md border-2 border-primary text-white bg-primary px-6 py-2.5 focus:outline-none mb-4" onclick="openModal()">
                <span class="icon-base bx bx-plus icon-sm me-2"></span>Tambah Produk
            </button>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">#</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Nama</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Harga</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Stok</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Status</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Gambar</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 text-sm text-gray-700"><?= $product['id'] ?></td>
                            <td class="py-4 px-6 text-sm text-gray-700"><?= $product['name'] ?></td>
                            <td class="py-4 px-6 text-sm text-gray-700">$<?= number_format($product['price'], 2) ?></td>
                            <td class="py-4 px-6 text-sm text-gray-700"><?= $product['stock'] ?></td>
                            <td class="py-4 px-6">
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full"><?= $product['status'] ?></span>
                            </td>
                            <td class="py-4 px-6">
                                <img src="<?= base_url('uploads/'.$product['image']) ?>" class="w-16 h-16 object-cover rounded-lg" />
                            </td>
                            <td class="py-4 px-6">
                                <button type="button" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md" onclick="openModal(<?= $product['id'] ?>)">Edit</button>
                                <a href="/product/delete/<?= $product['id'] ?>" class="btn btn-danger text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-md">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal (Floating Window) for Adding or Editing Product -->
<div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h2 class="text-xl font-semibold mb-4" id="modalTitle">Tambah Produk</h2>
        <form action="/product/storeOrUpdate" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="productId" value="">
            <input type="hidden" name="old_image" id="oldImage" value="">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk:</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required><br><br>

            <label for="price" class="block text-sm font-medium text-gray-700">Harga:</label>
            <input type="text" id="price" name="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required><br><br>

            <label for="stock" class="block text-sm font-medium text-gray-700">Stok:</label>
            <input type="text" id="stock" name="stock" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required><br><br>

            <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
            <select id="status" name="status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="Ready">Ready</option>
                <option value="Out Of Stock">Out Of Stock</option>
            </select><br><br>

            <label for="image" class="block text-sm font-medium text-gray-700">Gambar:</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"><br><br>

            <div class="flex justify-between mt-4">
                <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md" onclick="closeModal()">Batal</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(id = null) {
        document.getElementById('productModal').classList.remove('hidden');
        document.getElementById('productId').value = id;
        document.getElementById('modalTitle').textContent = id ? 'Edit Produk' : 'Tambah Produk';

        if (id) {
            fetch(`/product/edit/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('name').value = data.name;
                    document.getElementById('price').value = data.price;
                    document.getElementById('stock').value = data.stock;
                    document.getElementById('status').value = data.status;
                    document.getElementById('oldImage').value = data.image;
                });
        }
    }

    function closeModal() {
        document.getElementById('productModal').classList.add('hidden');
    }
</script>

<?= $this->endSection() ?>
