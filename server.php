<?php
    $dischi_json = file_get_contents('dischi-list.json');
    $dischi = json_decode($dischi_json, true);

    header('Content-Type: application/json');
    echo json_encode($dischi);
?>