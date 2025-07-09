<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="flex items-center justify-between p-4 bg-green-500 text-white rounded-lg shadow-md">
            <span><?= session()->getFlashData('success') ?></span>
            <button type="button" class="text-white" data-bs-dismiss="alert" aria-label="Close">
                <i class="fas fa-times"></i> <!-- Menggunakan icon close -->
            </button>
        </div>
    </div>

<?php
}
?>

<!-- Hero Section -->
<section class="relative h-[600px] bg-black text-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="<?= base_url('./hypebeast/img/dashboard.png') ?>"
            alt="Basketball player dunking"
            class="w-full h-full object-cover opacity-70">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex items-center">
        <div class="max-w-2xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">HYPEBEAST</h1>
            <p class="text-lg mb-8 text-gray-200">
                Discover our latest sportswear for outdoor enthusiasts. Explore our range of high - performance gear with
                cutting-edge technology and vibrant colors and patterns to choose from.
            </p>
            <a href="<?= base_url('/store') ?>"
                class="bg-white text-black hover:bg-gray-100 px-8 py-3 rounded-full font-medium transition-colors inline-block">
                Shop now
            </a>
        </div>
    </div>
</section>

<!-- New Arrivals -->
<section class="py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">New Arrivals</h2>
            <p class="text-gray-600">
                Our new arrivals are built to withstand your activities while keeping you looking your best!
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <?php foreach ($product as $key => $item): ?>
                <div class="group cursor-pointer">
                    <?= form_open('cart') ?>
                    <?php
                    echo form_hidden('id', $item['id']);
                    echo form_hidden('name', $item['name']);
                    echo form_hidden('price', $item['price']);
                    echo form_hidden('image', $item['image']);
                    ?>
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('img/' . $item['image']) ?>" alt="<?= esc($item['name']) ?>" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <!-- Tombol Love -->
                        <button
                            onclick="toggleFavorite(this)"
                            class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>

                        <!-- Tombol Plus -->
                        <button
                            onclick="addToCart(<?= $item['id'] ?>, '<?= esc($item['name']) ?>', <?= $item['price'] ?>, '<?= $item['image'] ?>')"
                            class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                        <?= form_close() ?>

                    </div>
                    <h3 class="font-medium text-sm mb-2"><?= esc($item['name']) ?></h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">Rp <?= number_format($item['price'], 0, ',', '.') ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex justify-center mt-8">
            <a href="<?= base_url('/collection') ?>"
                class="inline-block border border-gray-300 bg-transparent hover:bg-gray-50 px-8 py-2 rounded-full transition-colors">
                See All
            </a>
        </div>
    </div>
</section>

<!-- Store Promotion -->
<section class="py-16 px-6 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="<?= base_url('./hypebeast/img/store.png') ?>"
                    alt="Store interior"
                    class="rounded-lg w-full h-96 object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-6">Find Your Perfect Look at HYPEBEAST'S Stylist New on Semarang</h2>
                <p class="text-gray-600 mb-8">
                    Discover your new style and strong style with our expert stylists. Experience personalized fashion
                    consultation and find the perfect pieces that match your personality and lifestyle. Our team of
                    professional stylists will help you create looks that make you feel confident and stylish.
                </p>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Come and Enjoy Sale!</h3>
                    <div class="text-4xl font-bold mb-4">50%</div>
                </div>
                <a href="<?= base_url('/store') ?>"
                    class="bg-black text-white hover:bg-gray-800 px-8 py-3 rounded-full transition-colors inline-block">
                    Shop Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Collections -->
<section class="py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Featured Collections</h2>
            <p class="text-gray-600">
                Dare to mix and match! Check out our collections to level up your fashion game
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Footwear -->
            <a href="<?= base_url('/store?category=shoes') ?>" class="relative group cursor-pointer overflow-hidden rounded-lg block">
                <img src="<?= base_url('./hypebeast/img/footwear.png') ?>"
                    alt="Footwear"
                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h3 class="text-white text-xl font-bold">Footwear</h3>
                </div>
            </a>

            <!-- Jacket -->
            <a href="<?= base_url('/store?category=jacket') ?>" class="relative group cursor-pointer overflow-hidden rounded-lg block">
                <img src="<?= base_url('./hypebeast/img/jacket.png') ?>"
                    alt="Jacket"
                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h3 class="text-white text-xl font-bold">Jacket</h3>
                </div>
            </a>

            <!-- Accesories -->
            <a href="<?= base_url('/store?category=accesories') ?>" class="relative group cursor-pointer overflow-hidden rounded-lg block">
                <img src="<?= base_url('./hypebeast/img/accesories.png') ?>"
                    alt="Accesories"
                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h3 class="text-white text-xl font-bold">Accesories</h3>
                </div>
            </a>

            <!-- Headwear -->
            <a href="<?= base_url('/store?category=headwear') ?>" class="relative group cursor-pointer overflow-hidden rounded-lg block">
                <img src="<?= base_url('./hypebeast/img/headwear.png') ?>"
                    alt="Headwear"
                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h3 class="text-white text-xl font-bold">Headwear</h3>
                </div>
            </a>

            <!-- Bags -->
            <a href="<?= base_url('/store?category=bag') ?>" class="relative group cursor-pointer overflow-hidden rounded-lg block">
                <img src="<?= base_url('./hypebeast/img/bags.png') ?>"
                    alt="Bags"
                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h3 class="text-white text-xl font-bold">Bags</h3>
                </div>
            </a>

            <!-- Bottoms -->
            <a href="<?= base_url('/store?category=pants') ?>" class="relative group cursor-pointer overflow-hidden rounded-lg block">
                <img src="<?= base_url('./hypebeast/img/bottoms.png') ?>"
                    alt="Bottoms"
                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h3 class="text-white text-xl font-bold">Bottoms</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 px-6 bg-gray-100">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Sign up Our Newsletter</h2>
        <p class="text-gray-600 mb-8">Get the latest updates on new products and upcoming sales</p>
        <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input type="email"
                placeholder="Enter your email"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent">
            <button class="bg-black text-white hover:bg-gray-800 px-8 py-2 rounded-md transition-colors">
                Subscribe
            </button>
        </div>
    </div>
</section>

<script>
    // JavaScript untuk menutup alert
    document.querySelector('[data-bs-dismiss="alert"]').addEventListener('click', function() {
        this.closest('.alert').style.display = 'none';
    });
</script>

<?= $this->endSection() ?>