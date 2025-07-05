<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Page Title -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">HYPEBEAST COLLECTION</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Find everything you need to look and feel your best, and shop the latest men's fashion and lifestyle products
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="bg-black text-white px-6 py-2 rounded-full text-sm font-medium">All</button>
            <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-200">Jacket</button>
            <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-200">Pants</button>
            <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-200">Hoodie</button>
            <button class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-200">Shoes</button>
            <button class="bg-gray-100 text-gray-700 p-2 rounded-full hover:bg-gray-200">
                <i class="fas fa-sliders-h"></i>
            </button>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Product 1 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/pakaian1.png') ?>" alt="Off White Hoodie white" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Off White Hoodie white</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/celana3.png') ?>" alt="Stone Island Seersucker Cargo Pants 'Olive'" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Stone Island Seersucker Cargo Pants 'Olive'</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/sepatu1.png') ?>" alt="Air Jordan I Retro High Off - White Chicago" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Air Jordan I Retro High Off - White Chicago</h3>
                    <p class="text-lg font-bold">$3,000.00</p>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/pakaian3.png') ?>" alt="Stone Island Jacket" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Stone Island Jacket</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/pakaian2.png') ?>" alt="Jordan Jumpman Air Fleece Hoodie Red" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Jordan Jumpman Air Fleece Hoodie Red</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/celana2.png') ?>" alt="Jordan Shorts Essentials" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Jordan Shorts Essentials</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/sepatu3.png') ?>" alt="Adidas Yeezy 350 V2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Adidas Yeezy 350 V2</h3>
                    <p class="text-lg font-bold">$1,000.00</p>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/pakaian4.png') ?>" alt="Off - White Long Sleeve" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Off - White Long Sleeve</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 9 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/pakaian5.png') ?>" alt="Stussy Black T - Shirt" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Stussy Black T - Shirt</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 10 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/celana1.png') ?>" alt="Nike Swoosh Fleece Pants" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Nike Swoosh Fleece Pants</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>

            <!-- Product 11 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/sepatu5.png') ?>" alt="Nike GT Cut 2 University Red" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Nike GT Cut 2 University Red</h3>
                    <p class="text-lg font-bold">$1,000.00</p>
                </div>
            </div>

            <!-- Product 12 -->
            <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                <div class="aspect-square relative">
                    <img src="<?= base_url('./hypebeast/img/pakaian1.png') ?>" alt="Off White Hoodie white" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-sm mb-1">Off White Hoodie white</h3>
                    <p class="text-lg font-bold">$150.00</p>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center">
            <button class="bg-black text-white px-8 py-3 rounded-full font-medium hover:bg-gray-800 transition-colors">
                Load more
            </button>
        </div>
    </main>

<?= $this->endSection() ?>