<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Product Images -->
        <div class="space-y-4">
            <!-- Main Product Image -->
            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                <img id="mainImage" src="<?= base_url('./hypebeast/img/inspect2.png') ?>" alt="Air Jordan I Retro High Off-White Chicago" class="w-full h-full object-cover">
            </div>
            
            <!-- Thumbnail Images -->
            <div class="grid grid-cols-4 gap-4">
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer" onclick="changeImage('<?= base_url('./hypebeast/img/inspect2.png') ?>', this)">
                    <img src="<?= base_url('./hypebeast/img/inspect2.png') ?>" alt="Product view 1" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer" onclick="changeImage('<?= base_url('./hypebeast/img/inspect3.png') ?>', this)">
                    <img src="<?= base_url('./hypebeast/img/inspect3.png') ?>" alt="Product view 2" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer" onclick="changeImage('<?= base_url('./hypebeast/img/inspect4.png') ?>', this)">
                    <img src="<?= base_url('./hypebeast/img/inspect4.png') ?>" alt="Product view 3" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer" onclick="changeImage('<?= base_url('./hypebeast/img/inspect5.png') ?>', this)">
                    <img src="<?= base_url('./hypebeast/img/inspect5.png') ?>" alt="Product view 4" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="space-y-6">
            <div>
                <h1 class="text-3xl font-bold text-black mb-4">Air Jordan I Retro High Off - White Chicago</h1>
                <div class="flex items-center space-x-4 mb-4">
                    <span class="text-gray-400 line-through text-lg">$3,000.00</span>
                    <span class="text-3xl font-bold text-black">$2,500.00</span>
                    <span class="bg-black text-white text-xs px-2 py-1 rounded">On Sale</span>
                </div>
                
                <!-- Rating -->
                <div class="flex items-center space-x-2 mb-6">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <span class="text-gray-600">(4.9) 1.2K Reviews</span>
                </div>
            </div>

            <!-- Description -->
            <div>
                <h3 class="font-semibold text-black mb-2">Descriptions</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Introducing our latest collection, designed specifically for outdoor enthusiasts. Features a range of high performance outerwear with range of bold and vibrant colors and patterns to choose from.
                </p>
            </div>

            <!-- Size -->
            <div>
                <h3 class="font-semibold text-black mb-3">Size</h3>
                <div class="flex space-x-3">
                    <button class="size-button px-4 py-2 border border-gray-300 rounded text-sm hover:border-black" onclick="selectSize(this)">S</button>
                    <button class="size-button px-4 py-2 border py-2 bg-black text-white rounded text-sm hover:border-black" onclick="selectSize(this)">M</button>
                    <button class="size-button px-4 py-2 border border-gray-300 rounded text-sm hover:border-black" onclick="selectSize(this)">L</button>
                    <button class="size-button px-4 py-2 border border-gray-300 rounded text-sm hover:border-black" onclick="selectSize(this)">XL</button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-4 pt-6">
                <a href="cart" class="flex-1">
                    <button class="bg-gray-200 text-black py-3 px-6 rounded-lg font-medium hover:bg-gray-400 transition-colors w-full">
                        Add To Cart
                    </button>
                </a>
                <button class="bg-black text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-800 transition-colors flex-1">
                    Checkout Now
                </button>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    <section class="mt-20">
        <h2 class="text-2xl font-bold text-black mb-8">This item can be cool with this</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Related Product 1 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/sepatu3.png') ?>" alt="Adidas Yeezy 350 V2" class="w-full h-full object-cover">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-4 right-4 bg-white rounded-full p-2 shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Adidas Yeezy 350 V2</h3>
                    <p class="text-lg font-bold">$1,000.00</p>
                </div>
            </div>

            <!-- Additional related products would go here -->
        </div>
    </section>
</main>

<script>
    // Fungsi untuk mengganti gambar utama dengan gambar yang dipilih
    function changeImage(imageSrc, element) {
        document.getElementById("mainImage").src = imageSrc;
        
        // Menghapus border hitam dari semua thumbnail
        const thumbnails = document.querySelectorAll('.aspect-square');
        thumbnails.forEach(thumb => {
            thumb.classList.remove('border-2', 'border-black');
        });

        // Menambahkan border hitam ke gambar yang dipilih
        element.classList.add('border-2', 'border-black');
    }

    function selectSize(button) {
        // Menghapus kelas 'bg-black' dan 'text-white' dari semua tombol
        const buttons = document.querySelectorAll('.size-button');
        buttons.forEach(btn => {
            btn.classList.remove('bg-black', 'text-white');
            btn.classList.add('border-gray-300');
        });

        // Menambahkan kelas 'bg-black' dan 'text-white' pada tombol yang dipilih
        button.classList.add('bg-black', 'text-white');
        button.classList.remove('border-gray-300');
    }
</script>

<?= $this->endSection() ?>
