<div class="bg-gray-800 text-white text-center py-3 text-sm">
    New Season Coming! Discount 10% for all products! Check out now!
</div>

        <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="/" class="text-xl font-bold">HYPEBEAST</a>
                    </div>

                    <!-- Navigation Menu -->
                    <nav class="hidden md:flex space-x-8">
                        <a href="collection" class="text-gray-600 hover:text-black">Collections</a>
                        <a href="store" class="text-gray-600 hover:text-black">Store</a>
                        <a href="blog" class="text-gray-600 hover:text-black">Blog</a>
                        <a href="find-store" class="text-gray-600 hover:text-black">Find Store</a>
                    </nav>

                    <!-- Right Side Actions -->
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search" class="pl-8 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-black">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400 text-sm"></i>
                        </div>
                        <div class="relative">
                            <a href="cart" class="text-black">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        <span class="text-gray-600"><?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</span>
                        <a href="login" class="text-black">
                            <i class="fas fa-sign-out-alt text-xl hover:text-gray-600 transition-colors"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>