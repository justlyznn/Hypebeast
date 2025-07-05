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
    <title>Soft UI Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#898989',
                        secondary: '#000000',
                        dark: '#000000',
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <!-- Include Sidebar -->
    <?= $this->include('components/sidebarAdmin') ?>

        <!-- Include Header -->
    <?= $this->include('components/headerAdmin') ?>

    <!-- Main Content Section -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

</body>
</html>