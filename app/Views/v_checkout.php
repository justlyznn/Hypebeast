<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Form Section -->
        <div class="col-lg-6">
            <?= form_open('buy', 'class="row g-3"') ?>
            <?= form_hidden('username', session()->get('username')) ?>
            <?= form_input(['type' => 'hidden', 'name' => 'total_harga', 'id' => 'total_harga', 'value' => '']) ?>

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" id="nama" value="<?= session()->get('username') ?>" disabled>
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>

            <!-- Kelurahan -->
            <div>
                <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan</label>
                <select id="kelurahan" class="w-full border-2 border-gray-300 p-2 rounded-lg" name="kelurahan" required></select>
            </div>

            <!-- Layanan -->
            <div>
                <label for="layanan" class="block text-sm font-medium text-gray-700">Layanan</label>
                <select id="layanan" class="w-full border-2 border-gray-300 p-2 rounded-lg" name="layanan" required></select>
            </div>

            <div>
                <label for="ongkir" class="block text-sm font-medium text-gray-700">Ongkir</label>
                <input type="text" class="mt-1 p-2 w-full border border-gray-300 rounded-lg" id="ongkir" name="ongkir" readonly>
            </div>
        </div>

        <!-- Cart Summary Section -->
        <div class="space-y-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Summary</h2>
            <div class="bg-white rounded-lg p-6 shadow-md">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 text-left">Nama</th>
                            <th class="py-2 px-4 text-left">Harga</th>
                            <th class="py-2 px-4 text-left">Jumlah</th>
                            <th class="py-2 px-4 text-left">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if (!empty($items)) :
                            foreach ($items as $index => $item) :
                        ?>
                                <tr>
                                    <td class="py-2 px-4"><?= $item['name'] ?></td>
                                    <td class="py-2 px-4"><?= number_to_currency($item['price'], 'IDR') ?></td>
                                    <td class="py-2 px-4"><?= $item['qty'] ?></td>
                                    <td class="py-2 px-4"><?= number_to_currency($item['price'] * $item['qty'], 'IDR') ?></td>
                                </tr>
                        <?php
                            endforeach;
                        endif;
                        ?>
                        <tr>
                            <td colspan="2" class="py-2 px-4"></td>
                            <td class="py-2 px-4 font-semibold">Subtotal</td>
                            <td class="py-2 px-4"><?= number_to_currency($total, 'IDR') ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="py-2 px-4"></td>
                            <td class="py-2 px-4 font-semibold">Total</td>
                            <td class="py-2 px-4"><span id="total"><?= number_to_currency($total, 'IDR') ?></span></td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-6 text-center">
                    <button type="submit" class="btn btn-primary w-full bg-black text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Pay Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        var ongkir = 0;
        var total = 0;
        hitungTotal();

        $('#kelurahan').select2({
            placeholder: 'Ketik nama kelurahan...',
            ajax: {
                url: '<?= base_url('get-location') ?>',
                dataType: 'json',
                delay: 1500,
                data: function(params) {
                    return {
                        search: params.term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data.map(function(item) {
                            return {
                                id: item.id,
                                text: item.subdistrict_name + ", " + item.district_name + ", " + item.city_name + ", " + item.province_name + ", " + item.zip_code
                            };
                        })
                    };
                },
                cache: true
            },
            minimumInputLength: 3
        });

        $("#kelurahan").on('change', function() {
            var id_kelurahan = $(this).val();
            $("#layanan").empty();
            ongkir = 0;

            $.ajax({
                url: "<?= site_url('get-cost') ?>",
                type: 'GET',
                data: {
                    'destination': id_kelurahan,
                },
                dataType: 'json',
                success: function(data) {
                    data.forEach(function(item) {
                        var text = item["description"] + " (" + item["service"] + ") : estimasi " + item["etd"] + "";
                        $("#layanan").append($('<option>', {
                            value: item["cost"],
                            text: text
                        }));
                    });
                    hitungTotal();
                },
            });
        });

        $("#layanan").on('change', function() {
            ongkir = parseInt($(this).val());
            hitungTotal();
        });

        function hitungTotal() {
            total = ongkir + <?= $total ?>;

            $("#ongkir").val(ongkir);
            $("#total").html("IDR " + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')); 
            $("#total_harga").val(total);
        }
    });
</script>
<?= $this->endSection() ?>
