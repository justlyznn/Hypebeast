<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <?php if (session()->getFlashData('success')): ?>
        <div id="alert" class="flex items-center justify-between p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg shadow-md" role="alert">
            <span><?= session()->getFlashData('success') ?></span>
            <button type="button" class="text-black" id="close-alert" aria-label="Close">
                <i class="fas fa-times"></i> <!-- Ikon close -->
            </button>
        </div>
    <?php endif; ?>


<?php
}
?>
<?php echo form_open('cart/edit') ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Cart Items Section -->
        <div class="lg:col-span-2">
            <h1 class="text-3xl font-bold text-black mb-8">Your Cart</h1>
            <?php
            $i = 1;
            if (!empty($items)) :
                foreach ($items as $index => $item) :
            ?>
                    <div class="space-y-6">
                        <!-- Cart Item -->
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="w-full md:w-48 h-48 bg-gray-100 rounded-lg overflow-hidden">
                                    <img src="<?php echo base_url() . "img/" . $item['options']['image'] ?>" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <h3 class="text-xl font-bold text-black"><?php echo $item['name'] ?></h3>
                                        </div>
                                        <p class="text-xl font-bold"><?php echo number_to_currency($item['price'], 'IDR') ?></p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <button class="text-gray-400 hover:text-red-500">
                                                <i class="far fa-heart"></i>
                                            </button>
                                            <button class="text-gray-400 hover:text-red-500">
                                                <a href="<?php echo base_url('cart/delete/' . $item['rowid'] . '') ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                            </button>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <!-- Tombol Minus -->
                                            <button type="button" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 minus-btn">
                                                <i class="fas fa-minus text-xs"></i>
                                            </button>

                                            <!-- Menampilkan Kuantitas -->
                                            <span class="font-medium qty" data-id="<?= $item['id'] ?>" data-qty="<?= $item['qty'] ?>" name="qty<?php echo $i++ ?>" class="form-control"><?= $item['qty'] ?></span>

                                            <!-- Tombol Plus -->
                                            <button type="button" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 plus-btn">
                                                <i class="fas fa-plus text-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
        <!-- Summary Section -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg p-6 shadow-sm sticky top-24">
                <h2 class="text-2xl font-bold text-black mb-6">Summary</h2>

                <div class="space-y-4 mb-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-medium"><?php echo number_to_currency($total, 'IDR') ?> </span>
                    </div>
                    <hr class="border-gray-200">
                </div>
                <?php echo form_close() ?>
                <?php if (!empty($items)) : ?>
                    <form action="<?= base_url('checkout') ?>" method="GET">
                        <button type="submit" class="w-full bg-black text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                            Checkout Now
                        </button>
                    </form>
                <?php endif; ?>
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

    // Menambahkan event listener untuk tombol close
    document.getElementById('close-alert').addEventListener('click', function() {
        // Cari elemen dengan ID 'alert' dan sembunyikan dengan display none
        const alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.style.display = 'none';
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Menangani tombol minus
        const minusBtns = document.querySelectorAll('.minus-btn');
        minusBtns.forEach(button => {
            button.addEventListener('click', function() {
                const qtySpan = this.closest('div').querySelector('.qty');
                let qty = parseInt(qtySpan.textContent);

                // Pastikan jumlah tidak kurang dari 1
                if (qty > 1) {
                    qty--;
                    qtySpan.textContent = qty; // Update tampilan kuantitas
                    updateCart(qtySpan);
                }
            });
        });

        // Menangani tombol plus
        const plusBtns = document.querySelectorAll('.plus-btn');
        plusBtns.forEach(button => {
            button.addEventListener('click', function() {
                const qtySpan = this.closest('div').querySelector('.qty');
                let qty = parseInt(qtySpan.textContent);

                // Pastikan jumlah adalah angka yang valid
                if (!isNaN(qty)) {
                    qty++;
                    qtySpan.textContent = qty; // Update tampilan kuantitas
                    updateCart(qtySpan);
                }
            });
        });

        // Fungsi untuk mengupdate kuantitas di keranjang
        function updateCart(qtySpan) {
            const qty = parseInt(qtySpan.textContent);
            const itemId = qtySpan.getAttribute('data-id');

            // Mengirimkan data kuantitas yang baru ke server menggunakan AJAX
            fetch('<?= base_url('cart/update') ?>', {
                    method: 'POST',
                    body: JSON.stringify({
                        id: itemId,
                        qty: qty
                    }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Cart updated successfully!', data);
                    // Bisa melakukan update UI jika perlu setelah berhasil
                })
                .catch(error => {
                    console.error('Error updating cart:', error);
                });
        }
    });

    function addToCart(id, name, price, image) {
        // Cek jika item sudah ada di keranjang (berdasarkan id)
        fetch('<?= base_url('cart/cart_add') ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id: id,
                    name: name,
                    price: price,
                    image: image
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Item added to cart!');
                    // Update UI atau lakukan tindakan lain (seperti memperbarui jumlah di header)
                    // Misalnya, memperbarui jumlah keranjang yang ditampilkan
                    updateCartCount();
                } else {
                    alert('Error adding item to cart!');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error processing your request.');
            });
    }

    // Fungsi untuk memperbarui jumlah item dalam keranjang di UI
    function updateCartCount() {
        fetch('<?= base_url('cart/cart_count') ?>') // Endpoint untuk mendapatkan jumlah keranjang
            .then(response => response.json())
            .then(data => {
                document.querySelector('.cart-count').textContent = data.count; // Update jumlah keranjang
            });
    }
</script>
<?= $this->endSection() ?>