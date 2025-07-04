<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Map Placeholder Section -->
        <div class="mb-12">
            <div class="bg-gray-800 h-96 rounded-lg flex items-center justify-center relative">
                <img src="<?= base_url('./hypebeast/img/map.png') ?>" alt="map" class="absolute inset-0 w-full h-full object-cover rounded-lg">
            </div>
        </div>


        <!-- Store Content Section -->
        <div class="space-y-8">
            <!-- Store Visit Post -->
            <article class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="md:w-1/3">
                    <img src="<?= base_url('./hypebeast/img/review1.png') ?>" alt="Hypesneaker Store Interior" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6 flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-black mb-3 hover:text-gray-700 cursor-pointer">
                            Gw hari ini lagi coba ke Hypesneaker dan ini literally toko beneran The best Hype store di semarang.
                        </h2>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>ahgiatmie.official.jajz</span>
                            <span class="mx-2">•</span>
                            <span>Jan 12, 2024</span>
                        </div>
                    </div>
                    <div class="flex items-center text-sm text-orange-500">
                        <i class="fas fa-fire mr-1"></i>
                        <span>5.7M Hypes</span>
                    </div>
                </div>
            </article>

            <!-- Product Display Post -->
            <article class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="md:w-1/3">
                    <img src="<?= base_url('./hypebeast/img/review2.png') ?>" alt="Shoe Display Shelves" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6 flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-black mb-3 hover:text-gray-700 cursor-pointer">
                            Barangnya bagus2 banget bikin khilaf donk,klo ngga siap mending jangan ksini drpd nahan pengen doank wk,
                        </h2>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>ahgiatmie.mau.official.jajz</span>
                            <span class="mx-2">•</span>
                            <span>Jan 12, 2024</span>
                        </div>
                    </div>
                    <div class="flex items-center text-sm text-orange-500">
                        <i class="fas fa-fire mr-1"></i>
                        <span>6.7M Hypes</span>
                    </div>
                </div>
            </article>
        </div>

        <!-- Load More Section -->
        <div class="text-center mt-12">
            <button class="bg-black text-white px-8 py-3 rounded-full font-medium hover:bg-gray-800 transition-colors">
                Load more
            </button>
        </div>
    </main>

<?= $this->endSection() ?>