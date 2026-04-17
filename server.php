<?php
    $newAlbum = [];
    $newAlbum['title'] = $_POST['albumTitle'] ?? '';
    $newAlbum['artist'] = $_POST['albumArtist'] ?? '';
    $newAlbum['coverurl'] = $_POST['albumUrl'] ?? '';
    $newAlbum['year'] = $_POST['albumYear'] ?? '';
    $newAlbum['genre'] = $_POST['albumGenre'] ?? '';

    $json = file_get_contents("./dischi.json");

    $obj = json_decode($json, true);

    $obj["albums"][] = $newAlbum;

    $json_text_updated = json_encode($obj, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    file_put_contents("./dischi.json", $json_text_updated);

    header("Location: ./index.php");
?>
