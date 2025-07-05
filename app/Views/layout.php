<?php
$hlm = "Home";
if(uri_string()!=""){
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
</head>
<body class="min-h-screen bg-white">

    <!-- Include Header -->
    <?= $this->include('components/header') ?>

    <!-- Main Content Section -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Include Footer -->
    <?= $this->include('components/footer') ?>

</body>
</html>
