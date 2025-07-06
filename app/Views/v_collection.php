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
            <?php
                $categories = ['all', 'jacket', 'pants', 'hoodie', 'shoes'];
                foreach ($categories as $cat):
                    $isActive = ($activeCategory ?? 'all') === $cat;
            ?>
                <a href="<?= base_url('/collection/' . $cat) ?>"
                class="px-6 py-2 rounded-full text-sm font-medium 
                <?= $isActive ? 'bg-black text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?>">
                    <?= ucfirst($cat) ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <?php foreach ($product as $p): ?>
                <div class="group relative bg-gray-50 rounded-lg overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="<?= base_url('img/' . $p['image']) ?>" 
                            alt="<?= esc($p['name']) ?>" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                        <button class="absolute top-4 right-4 text-red-500 hover:text-red-600">
                            <i class="fas fa-heart"></i>
                        </button>

                        <button 
                            class="absolute bottom-3 right-3 p-2 bg-white rounded-full shadow-md hover:bg-gray-50"
                            onclick="addToCart(<?= $p['id'] ?>, '<?= esc($p['name']) ?>', <?= $p['price'] ?>, '<?= $p['image'] ?>')">
                            <i class="fas fa-plus text-gray-600"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-medium text-sm mb-1"><?= esc($p['name']) ?></h3>
                        <p class="text-lg font-bold">Rp <?= number_format($p['price'], 0, ',', '.') ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More Button -->
        <?php if (count($product) < $totalProducts): ?>
            <div class="text-center">
                <a href="<?= current_url() . '?limit=' . ($currentLimit + 4) ?>"
                class="bg-black text-white px-8 py-3 rounded-full font-medium hover:bg-gray-800 transition-colors">
                    Load more
                </a>
            </div>
        <?php endif; ?>
    </main>

<?= $this->endSection() ?>