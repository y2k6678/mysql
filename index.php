<?php
echo "hello"
# include 'databaseconnect.php';
$url = "www."
$json = file_get_contents($url);


$data = json_decode($jsonInput,true);

foreach($data as $inv){
    $id = $inv['id'];
    $datetime = $inv['datetime'];
    $type = $inv['type'];
    $width = $inv['width'];
    $height = $inv['height'];
    $size = $inv['size'];
    $link = $inv['link'];
       $sql = "INSERT INTO mydba (id, datetime, type, width, height, size, link) VALUES ('$id', '$datetime', '$type', '$width' '$height' '$size' '$link')";

    echo $sql."\n";

}
?>
