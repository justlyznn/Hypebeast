        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-xl rounded-xl m-4 p-6">
            <!-- Logo -->
            <div class="flex items-center mb-8">
                <div class="w-8 h-8 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-3">
                    <i class="text-white text-sm">H</i>
                </div>
                <span class="font-bold text-dark">Hypebeast</span>
            </div>

            <!-- Navigation -->
            <nav class="space-y-2">
                <a id="dashboard-link" href="dashboard-admin" class="flex items-center px-4 py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-lg shadow-lg">
                    <i class="fas fa-tv mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a id="produk-link" href="produk-admin" class="flex items-center px-4 py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-lg shadow-lg">
                    <i class="fas fa-table mr-3"></i>
                    <span>Produk</span>
                </a>
                <a id="order-link" href="order-admin" class="flex items-center px-4 py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-lg shadow-lg">
                    <i class="fas fa-table mr-3"></i>
                    <span>Order</span>
                </a>
            </nav>

            <!-- Account Pages -->
            <div class="mt-8">
                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">Account Pages</h3>
                <nav class="space-y-2">
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-user mr-3"></i>
                        <span><?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</span></span>
                    </a>
                    <a href="login" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        <span>Logout</span>
                    </a>
                </nav>
            </div>
        </div>

<script>
    // Ambil elemen link
    const dashboardLink = document.getElementById('dashboard-link');
    const produkLink = document.getElementById('produk-link');
    const orderLink = document.getElementById('order-link'); // Tambahkan baris ini

    // Fungsi untuk menambahkan kelas aktif pada link
    function setActiveLink() {
        // Ambil URL saat ini
        const currentUrl = window.location.pathname;

        // Periksa URL dan sesuaikan kelas untuk Dashboard
        if (currentUrl.includes("dashboard-admin")) {
            dashboardLink.classList.add('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
            dashboardLink.classList.remove('text-gray-600');
        } else {
            dashboardLink.classList.remove('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
            dashboardLink.classList.add('text-gray-600');
        }

        // Periksa URL dan sesuaikan kelas untuk Produk
        if (currentUrl.includes("produk-admin")) {
            produkLink.classList.add('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
            produkLink.classList.remove('text-gray-600');
        } else {
            produkLink.classList.remove('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
            produkLink.classList.add('text-gray-600');
        }

        // Periksa URL dan sesuaikan kelas untuk Order
        if (currentUrl.includes("order-admin")) {
            orderLink.classList.add('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
            orderLink.classList.remove('text-gray-600');
        } else {
            orderLink.classList.remove('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
            orderLink.classList.add('text-gray-600');
        }
    }

    // Panggil fungsi saat halaman dimuat
    window.onload = setActiveLink;
</script>


