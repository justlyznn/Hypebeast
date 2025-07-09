<?php
$hlm = "Home";
if (uri_string() != "") {
    $hlm = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hypebeast - <?php echo $hlm ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<body class="min-h-screen bg-white">

    <!-- Include Header -->
    <?= $this->include('components/header') ?>

    <!-- Main Content Section -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Include Footer -->
    <?= $this->include('components/footer') ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <?= $this->renderSection('script') ?> 

</body>

</html>