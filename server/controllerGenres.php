<?php 
include __DIR__ . "/data.php";
$genres = [];
foreach($albums as $album){
    if (!in_array(strtolower($album['genre']), $genres)){
        $genres[] = strtolower($album['genre']);
    }
}
    header('Content-Type: application/json');
    echo json_encode($genres);
?>