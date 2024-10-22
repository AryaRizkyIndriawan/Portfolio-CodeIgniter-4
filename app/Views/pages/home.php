<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container hero">
        <div class="text-container">
            <h1 class="custom-title fw-bold">Hallo Semua 👋, saya</h1>
            <h2 class="custom-name fw-bold">Arya Rizky Indriawan</h2>
            <h3 class="all-custom-job">Student & Content Creator</h3>
            <p class="mt-4 all-custom-tagline">Belajar web programming itu mudah dan menyenangkan bukan. <span class="fw-bold">bukan!</span></p>
            <a href="https://wa.me/+6282134752922" target="_blank" class="btn btn-primary mt-3">Hubungi Saya</a>
        </div>
        <div class="image-container ms-auto">
            <!-- Inline SVG positioned behind the image -->
            <svg class="svg-background" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#14B8A6" d="M60.5,-37.6C67.9,-22.2,55.9,1.6,42.6,19.5C29.3,37.4,14.7,49.4,-1.1,50.1C-16.8,50.7,-33.7,39.9,-46,22.6C-58.4,5.2,-66.2,-18.8,-57.8,-34.7C-49.4,-50.7,-24.7,-58.6,1,-59.2C26.6,-59.7,53.2,-52.9,60.5,-37.6Z" transform="translate(100 100)" />
            </svg>
            <!-- Image -->
            <img src="img/foto 2.png" alt="Arya Rizky Indriawan">
        </div>
    </div>

</body>

</html>

<?= $this->endSection(); ?>