<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content') ?>

<div class="container mx-auto p-6">
    <div class="bg-white shadow-xl rounded-xl">
        <h5 class="text-lg font-semibold p-4 border-b">Product</h5>
        <div class="p-4">
            <?php
            if (session()->getFlashData('success')) {
            ?>
                <div class="alert alert-info alert-dismissible fade show bg-blue-100 text-blue-800 p-4 rounded-md shadow-md" role="alert">
                    <?= session()->getFlashData('success') ?>
                    <button type="button" class="btn-close text-blue-800" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <?php
            if (session()->getFlashData('failed')) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show bg-red-100 text-red-800 p-4 rounded-md shadow-md" role="alert">
                    <?= session()->getFlashData('failed') ?>
                    <button type="button" class="btn-close text-red-800" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <button type="button" class="btn rounded-md border-2 border-primary text-white bg-primary px-6 py-2.5 focus:outline-none mb-4" data-bs-toggle="modal" data-bs-target="#addModal">
                <span class="icon-base bx bx-plus icon-sm me-2"></span>Tambah
            </button>
            <button type="button" class="btn rounded-md border-2 border-secondary text-white bg-secondary px-6 py-2.5 focus:outline-none">
                <span class="icon-base bx bx-download icon-sm me-2"></span>Download
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
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Foto</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $index => $produk) : ?>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="py-4 px-6 text-sm text-gray-700"><?php echo $index + 1 ?></th>
                                <td class="py-4 px-6 text-sm text-gray-700"><?php echo $produk['name'] ?></td>
                                <td class="py-4 px-6 text-sm text-gray-700"><?php echo $produk['price'] ?></td>
                                <td class="py-4 px-6 text-sm text-gray-700"><?php echo $produk['stock'] ?></td>
                                <td class="py-4 px-6 text-sm">
                                    <?php if ($produk['status'] == 'Ready'): ?>
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                                            Ready
                                        </span>
                                    <?php else: ?>
                                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">
                                            Out of Stock
                                        </span>
                                    <?php endif; ?>
                                </td>

                                <td class="py-4 px-6">
                                    <?php if ($produk['image'] != '' and file_exists("img/" . $produk['image'])) : ?>
                                        <img src="<?php echo base_url() . "img/" . $produk['image'] ?>" width="100px">
                                    <?php endif; ?>
                                </td>
                                <td class="py-4 px-6">
                                    <button type="button" class="btn btn-success text-white bg-green-500 hover:bg-green-700 px-4 py-2 rounded-md" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                        Ubah
                                    </button>
                                    <a href="<?= base_url('/produk-admin/delete/' . $produk['id']) ?>" class="text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-md" onclick="return confirm('Yakin hapus data ini ?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            <!-- Edit Modal Begin -->
                            <div class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50" id="editModal-<?= $produk['id'] ?>" style="display: none;">
                                <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                                    <div class="flex justify-between items-center p-4 border-b">
                                        <h5 class="text-xl font-semibold">Edit Data</h5>
                                        <button type="button" class="text-gray-500 hover:text-gray-800" id="closeModal-<?= $produk['id'] ?>" aria-label="Close">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('/produk-admin/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="p-4 space-y-4">
                                            <div>
                                                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                                <input type="text" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="name" value="<?= $produk['name'] ?>" placeholder="Nama Barang" required>
                                            </div>
                                            <div>
                                                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                                                <input type="text" name="price" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="price" value="<?= $produk['price'] ?>" placeholder="Harga Barang" required>
                                            </div>
                                            <div>
                                                <label for="stock" class="block text-sm font-medium text-gray-700">Jumlah</label>
                                                <input type="text" name="stock" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="stock" value="<?= $produk['stock'] ?>" placeholder="Jumlah Barang" required>
                                            </div>
                                            <div class="space-y-2">
                                                <img src="<?php echo base_url() . "img/" . $produk['image'] ?>" width="100px">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="check-<?= $produk['id'] ?>" name="check" value="1">
                                                    <label class="form-check-label text-sm text-gray-700" for="check">
                                                        Ceklis jika ingin mengganti foto
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                                                <input type="file" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center p-4 border-t">
                                            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600" id="closeModalBtn-<?= $produk['id'] ?>">Tutup</button>
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Edit Modal End -->
                        <?php endforeach ?>
                    </tbody>
                </table>

                <script>
                    // Open Modal
                    <?php foreach ($product as $produk) : ?>
                        document.querySelector('[data-bs-target="#editModal-<?= $produk['id'] ?>"]').addEventListener('click', () => {
                            document.getElementById('editModal-<?= $produk['id'] ?>').style.display = 'flex';
                        });

                        // Close Modal
                        document.getElementById('closeModalBtn-<?= $produk['id'] ?>').addEventListener('click', () => {
                            document.getElementById('editModal-<?= $produk['id'] ?>').style.display = 'none';
                        });

                        document.getElementById('closeModal-<?= $produk['id'] ?>').addEventListener('click', () => {
                            document.getElementById('editModal-<?= $produk['id'] ?>').style.display = 'none';
                        });
                    <?php endforeach ?>
                </script>

            </div>
        </div>
    </div>
</div>

<!-- Add Modal Begin -->
<div class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50" id="addModal" style="display: none;">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-between items-center p-4 border-b">
            <h5 class="text-xl font-semibold">Tambah Data</h5>
            <button type="button" class="text-gray-500 hover:text-gray-800" id="closeModal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form action="<?= base_url('/produk-admin') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="p-4 space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="name" placeholder="Nama Barang" required>
                </div>
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="text" name="price" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="price" placeholder="Harga Barang" required>
                </div>
                <div>
                    <label for="stock" class="block text-sm font-medium text-gray-700">Jumlah</label>
                    <input type="text" name="stock" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="stock" placeholder="Jumlah Barang" required>
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input type="file" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" id="image" name="foto">
                </div>
            </div>
            <div class="flex justify-between items-center p-4 border-t">
                <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600" id="closeModalBtn">Tutup</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Simpan</button>
            </div>
        </form>
    </div>
</div>
<!-- Add Modal End -->

<script>
    // Open Modal
    const modal = document.getElementById('addModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const closeModal = document.getElementById('closeModal');

    // Open Modal when needed
    document.querySelector('[data-bs-target="#addModal"]').addEventListener('click', () => {
        modal.style.display = 'flex';
    });

    // Close Modal
    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });
</script>

<?= $this->endSection() ?>