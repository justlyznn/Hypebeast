<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items Section -->
            <div class="lg:col-span-2">
                <h1 class="text-3xl font-bold text-black mb-8">Your Cart</h1>
                
                <div class="space-y-6">
                    <!-- Cart Item 1 -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="w-full md:w-48 h-48 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="<?= base_url('./hypebeast/img/pakaian5.png') ?>" alt="Stussy Black Tshirt" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-black">Stussy Black Tshirt</h3>
                                        <p class="text-gray-500 text-sm mt-1">Variant: Oversize</p>
                                        <p class="text-gray-500 text-sm">Size: XL</p>
                                        <p class="text-gray-500 text-sm">Color: Black</p>
                                    </div>
                                    <p class="text-xl font-bold">$90.00</p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="far fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                                            <i class="fas fa-minus text-xs"></i>
                                        </button>
                                        <span class="font-medium">1</span>
                                        <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                                            <i class="fas fa-plus text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="w-full md:w-48 h-48 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="<?= base_url('./hypebeast/img/celana3.png') ?>" alt="Stone Island Cargo Pants" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-black">Stone Island Seersucker Cargo Pants 'Olive'</h3>
                                        <p class="text-gray-500 text-sm mt-1">Variant: Oversize</p>
                                        <p class="text-gray-500 text-sm">Size: 40</p>
                                        <p class="text-gray-500 text-sm">Color: Green</p>
                                    </div>
                                    <p class="text-xl font-bold">$90.00</p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="far fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                                            <i class="fas fa-minus text-xs"></i>
                                        </button>
                                        <span class="font-medium">1</span>
                                        <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                                            <i class="fas fa-plus text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="w-full md:w-48 h-48 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="<?= base_url('./hypebeast/img/sepatu1.png') ?>" alt="Air Jordan Retro High" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-black">Air Jordan I Retro High Off - White Chicago</h3>
                                        <p class="text-gray-500 text-sm mt-1">Variant: Oversize</p>
                                        <p class="text-gray-500 text-sm">Size: 44</p>
                                        <p class="text-gray-500 text-sm">Color: Red</p>
                                    </div>
                                    <p class="text-xl font-bold">$90.00</p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="far fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                                            <i class="fas fa-minus text-xs"></i>
                                        </button>
                                        <span class="font-medium">1</span>
                                        <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                                            <i class="fas fa-plus text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Summary Section -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg p-6 shadow-sm sticky top-24">
                    <h2 class="text-2xl font-bold text-black mb-6">Summary</h2>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-medium">$191.00</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Estimated Delivery & Handling</span>
                            <span class="font-medium">Free</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Estimated Taxes</span>
                            <span class="font-medium">$21.00</span>
                        </div>
                        <hr class="border-gray-200">
                        <div class="flex justify-between items-center text-lg font-bold">
                            <span>Total</span>
                            <span>$212.00</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-black text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Checkout Now
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript for cart functionality -->
    <script>
        // Quantity controls
        const quantityButtons = document.querySelectorAll('.fa-plus, .fa-minus');
        quantityButtons.forEach(button => {
            button.addEventListener('click', function() {
                const isPlus = this.classList.contains('fa-plus');
                const quantitySpan = isPlus ? 
                    this.parentElement.previousElementSibling : 
                    this.parentElement.nextElementSibling;
                
                let quantity = parseInt(quantitySpan.textContent);
                
                if (isPlus) {
                    quantity++;
                } else if (quantity > 1) {
                    quantity--;
                }
                
                quantitySpan.textContent = quantity;
                updateCartTotal();
            });
        });

        // Remove item functionality
        const deleteButtons = document.querySelectorAll('.fa-trash-alt');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (confirm('Are you sure you want to remove this item?')) {
                    this.closest('.bg-white').remove();
                    updateCartTotal();
                    updateCartCount();
                }
            });
        });

        // Heart toggle functionality
        const heartButtons = document.querySelectorAll('.fa-heart');
        heartButtons.forEach(heart => {
            heart.parentElement.addEventListener('click', function() {
                if (heart.classList.contains('far')) {
                    heart.classList.remove('far');
                    heart.classList.add('fas');
                    heart.classList.add('text-red-500');
                } else {
                    heart.classList.remove('fas', 'text-red-500');
                    heart.classList.add('far');
                }
            });
        });

        // Update cart total
        function updateCartTotal() {
            // This would calculate the actual total based on quantities
            console.log('Updating cart total...');
        }

        // Update cart count in header
        function updateCartCount() {
            const cartItems = document.querySelectorAll('.bg-white.rounded-lg.p-6').length;
            document.querySelector('.fa-shopping-cart + span').textContent = cartItems;
        }

        // Checkout functionality
        document.querySelector('button').addEventListener('click', function() {
            alert('Proceeding to checkout...');
        });
    </script>

<?= $this->endSection() ?>