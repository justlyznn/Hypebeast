<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content') ?>  

<div class="container mx-auto p-6">
    <div class="bg-white shadow-xl rounded-xl">
        <h5 class="text-lg font-semibold p-4 border-b">Product</h5>
        
        <div class="p-4">
            <button type="button" class="btn rounded-md border-2 border-primary text-white bg-primary px-6 py-2.5 focus:outline-none mb-4">
                <span class="icon-base bx bx-plus icon-sm me-2"></span>Tambah
            </button>
            <button type="button" class="btn rounded-md border-2 border-secondary text-white bg-secondary px-6 py-2.5 focus:outline-none">
                <span class="icon-base bx bx-download icon-sm me-2"></span>Download
            </button>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">#</th>  <!-- Row number -->
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Name</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Price</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Stock</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Status</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Image</th>
                            <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- First Row -->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 text-sm text-gray-700">1</td> <!-- Row number -->
                            <td class="py-4 px-6 text-sm text-gray-700">
                                <span class="font-medium">Off White Hoodie white</span>
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-700">$150.00</td>
                            <td class="py-4 px-6 text-sm text-gray-700">19</td>
                            <td class="py-4 px-6">
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">Ready</span>
                            </td>
                            <td class="py-4 px-6">
                                <!-- Gambar produk bisa ditambahkan disini -->
                            </td>
                            <td class="py-4 px-6">
                                <button type="button" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                <button type="button" class="btn btn-danger text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-md">Delete</button>
                            </td>
                        </tr>
                        <!-- Second Row -->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 text-sm text-gray-700">2</td> <!-- Row number -->
                            <td class="py-4 px-6 text-sm text-gray-700">
                                <span class="font-medium">Air Jordan 1 Retro High</span>
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-700">$1,000.00</td>
                            <td class="py-4 px-6 text-sm text-gray-700">190</td>
                            <td class="py-4 px-6">
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">Out Of Stock</span>
                            </td>
                            <td class="py-4 px-6">
                                <!-- Gambar produk bisa ditambahkan disini -->
                            </td>
                            <td class="py-4 px-6">
                                <button type="button" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                <button type="button" class="btn btn-danger text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-md">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
