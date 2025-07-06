<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-4xl font-bold text-black">Terbaru</h1>
    </div>

    <!-- Jika ada yang dipilih -->
    <?php if ($selected): ?>
        <div class="mb-12 bg-white p-6 rounded-lg shadow-md">
            <div class="w-full flex justify-center items-center bg-white mb-4">
                <img src="<?= base_url('hypebeast/img/' . $selected['image']) ?>" 
                    alt="<?= esc($selected['title']) ?>" 
                    class="max-h-[600px] object-contain">
            </div>
            <h2 class="text-3xl font-bold text-black mb-2"><?= esc($selected['title']) ?></h2>
            <div class="text-sm text-gray-500 mb-4">
                <span><?= esc($selected['author']) ?></span> • <span><?= date('M d, Y', strtotime($selected['published_at'])) ?></span>
            </div>
            <p class="text-gray-700 leading-relaxed">
                <?= esc($selected['content']) ?>
            </p>
            <div class="mt-6">
                <a href="<?= base_url('blog') ?>" class="text-blue-600 hover:underline">← Kembali ke daftar artikel</a>
            </div>
        </div>
    <?php endif; ?>

    <!-- List artikel -->
    <div class="space-y-8">
        <?php foreach ($blogs as $blog): ?>
            <article class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="md:w-1/3">
                    <img src="<?= base_url('hypebeast/img/' . $blog['image']) ?>" alt="<?= esc($blog['title']) ?>" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6 flex flex-col justify-between">
                    <div>
                        <span class="inline-block bg-gray-100 text-gray-700 text-xs font-medium px-3 py-1 rounded-full mb-3"><?= esc($blog['category']) ?></span>
                        <form method="get" action="<?= base_url('blog') ?>">
                            <input type="hidden" name="article_id" value="<?= $blog['id_blog'] ?>">
                            <button type="submit" class="text-left w-full">
                                <h2 class="text-2xl font-bold text-black mb-3 hover:text-gray-700 cursor-pointer"><?= esc($blog['title']) ?></h2>
                            </button>
                        </form>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span><?= esc($blog['author']) ?></span>
                            <span class="mx-2">•</span>
                            <span><?= date('M d, Y', strtotime($blog['published_at'])) ?></span>
                        </div>
                    </div>
                    <div class="flex items-center text-sm text-orange-500">
                        <i class="fas fa-fire mr-1"></i>
                        <span><?= esc($blog['hype_count']) ?></span>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <!-- Load More Section -->
    <?php if ($limit < $total): ?>
        <div class="text-center mt-12">
            <form method="get" action="<?= base_url('blog') ?>">
                <input type="hidden" name="limit" value="<?= $limit + 3 ?>">
                <?php if (isset($selected)): ?>
                    <input type="hidden" name="article_id" value="<?= esc($selected['id_blog']) ?>">
                <?php endif; ?>
                <button type="submit" class="bg-black text-white px-8 py-3 rounded-full font-medium hover:bg-gray-800 transition-colors">
                    Load More Articles
                </button>
            </form>
        </div>
    <?php endif; ?>
</main>

<?= $this->endSection() ?>
