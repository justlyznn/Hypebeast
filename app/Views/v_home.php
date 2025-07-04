<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Hero Section -->
    <section class="relative h-[600px] bg-black text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
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
                <button class="bg-white text-black hover:bg-gray-100 px-8 py-3 rounded-full font-medium transition-colors">
                    Shop now
                </button>
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
                <!-- Product 1 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/pakaian1.png') ?>"
                             alt="Off White Hoodie white" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Off White Hoodie white</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$150.00</span>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <a href="produk-detail" class="block">
                            <img src="<?= base_url('./hypebeast/img/sepatu1.png') ?>"
                                alt="Air Jordan 1 Retro High"
                                class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        </a>
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-heart text-red-500"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Air Jordan 1 Retro High</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$1,000.00</span>
                        <span class="text-gray-500 line-through text-sm">$1,500.00</span>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/celana1.png') ?>" 
                             alt="Nike Essential Fleece Pants" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Nike Essential Fleece Pants</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$150.00</span>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/sepatu2.png') ?>" 
                             alt="Nike Air Griffey Varsity Red" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Nike Air Griffey Varsity Red</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$150.00</span>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/pakaian2.png') ?>" 
                             alt="Adidas Originals Adicolor Fleece Hoodie Red" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-heart text-red-500"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Adidas Originals Adicolor Fleece Hoodie Red</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$150.00</span>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/sepatu3.png') ?>" 
                             alt="Nike Air Max 270 React" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Nike Air Max 270 React</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$1,000.00</span>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/celana2.png') ?>" 
                             alt="Jordan Dri-Fit Essentials Basketball Shorts Black" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Jordan Dri-Fit Essentials Basketball Shorts Black</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$150.00</span>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="group cursor-pointer">
                    <div class="relative mb-4 bg-gray-100 rounded-lg overflow-hidden">
                        <img src="<?= base_url('./hypebeast/img/sepatu4.png') ?>" 
                             alt="Nike Kobe 6 Protro 5 Rings" 
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="far fa-heart text-gray-400"></i>
                        </button>
                        <button class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <h3 class="font-medium text-sm mb-2">Nike Kobe 6 Protro 5 Rings</h3>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold">$150.00</span>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="border border-gray-300 bg-transparent hover:bg-gray-50 px-8 py-2 rounded-full transition-colors">
                    See All
                </button>
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
                    <button class="bg-black text-white hover:bg-gray-800 px-8 py-3 rounded-full transition-colors">
                        Shop Now
                    </button>
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
                <div class="relative group cursor-pointer overflow-hidden rounded-lg">
                    <img src="<?= base_url('./hypebeast/img/footwear.png') ?>" 
                         alt="Footwear" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h3 class="text-white text-xl font-bold">Footwear</h3>
                    </div>
                </div>

                <!-- Jacket -->
                <div class="relative group cursor-pointer overflow-hidden rounded-lg">
                    <img src="<?= base_url('./hypebeast/img/jacket.png') ?>" 
                         alt="Jacket" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h3 class="text-white text-xl font-bold">Jacket</h3>
                    </div>
                </div>

                <!-- Accessories -->
                <div class="relative group cursor-pointer overflow-hidden rounded-lg">
                    <img src="<?= base_url('./hypebeast/img/accesories.png') ?>" 
                         alt="Accessories" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h3 class="text-white text-xl font-bold">Accessories</h3>
                    </div>
                </div>

                <!-- Headwear -->
                <div class="relative group cursor-pointer overflow-hidden rounded-lg">
                    <img src="<?= base_url('./hypebeast/img/headwear.png') ?>" 
                         alt="Headwear" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h3 class="text-white text-xl font-bold">Headwear</h3>
                    </div>
                </div>

                <!-- Bags -->
                <div class="relative group cursor-pointer overflow-hidden rounded-lg">
                    <img src="<?= base_url('./hypebeast/img/bags.png') ?>" 
                         alt="Bags" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h3 class="text-white text-xl font-bold">Bags</h3>
                    </div>
                </div>

                <!-- Bottoms -->
                <div class="relative group cursor-pointer overflow-hidden rounded-lg">
                    <img src="<?= base_url('./hypebeast/img/bottoms.png') ?>" 
                         alt="Bottoms" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <h3 class="text-white text-xl font-bold">Bottoms</h3>
                    </div>
                </div>
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

    <?= $this->endSection() ?>