<?php
# include 'databaseconnect.php';
down vote
echo "<pre>";


$jsonInput = '"id":"rlZiIaC",
   "title":null,
   "description":null,
   "datetime":1497624461,
   "type":"image\/jpeg",
   "animated":false,
   "width":370,
   "height":320,
   "size":57357,
   "views":0,
   "bandwidth":0,
   "vote":null,
   "favorite":false,
   "nsfw":null,
   "section":null,
   "account_url":null,
   "account_id":0,
   "is_ad":false,
   "in_most_viral":false,
   "tags":[   ],
   "ad_type":0,
   "ad_url":"",
   "in_gallery":false,
   "deletehash":"kNKhDYuj5OrECCS",
   "name":"",
   "link":"http:\/\/i.imgur.com\/rlZiIaC.jpg"
},
"success":true,
"status":200
}'; 
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
