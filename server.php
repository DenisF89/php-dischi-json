<?php
    $newAlbum = [];
    $newAlbum['title'] = $_POST['albumTitle'] ?? '';
    $newAlbum['artist'] = $_POST['albumArtist'] ?? '';
    $newAlbum['coverurl'] = $_POST['albumUrl'] ?? '';
    $newAlbum['year'] = $_POST['albumYear'] ?? '';
    $newAlbum['genre'] = $_POST['albumGenre'] ?? '';

    $json = file_get_contents("./dischi.json");

    $albums = json_decode($json, true);

    $albums[] = $newAlbum;

    $json_text_updated = json_encode($albums, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    file_put_contents("./dischi.json", $json_text_updated);

    header("Location: ./index.php");
?>
