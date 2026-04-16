<?php
$string = file_get_contents('dischi.json');
$obj = json_decode($string, true);
$albums = $obj['albums'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-light">
    
    <div class="container text-center py-4">
        <h1>Album</h1>
    </div>
    <div class="container boxed">
        <div class="row row-cols-1 row-cols-md-3 g-2">

            <?php foreach ($albums as $album) { ?>
                <div class="col">
                    <div class="card h-100 bg-secondary text-light border-3">
                        <div class="card-header p-0">
                            <img 
                                src="<?= $album['coverurl']; ?>" 
                                alt="<?= $album['title']; ?>" 
                                class="img-fluid w-100"
                                style="height: 150px; object-fit: cover;"
                            >
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-6"><?= $album['title']; ?></h2>
                            <div class="card-text fs-6">Artist: <?= $album['artist']; ?></div>
                            <div class="card-text fs-6">Year: <?= $album['year']; ?></div>
                            <div class="card-text fs-6">Genre: <?= $album['genre']; ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>