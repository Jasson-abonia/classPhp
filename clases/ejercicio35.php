<?php

$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

$opctiones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
$respuesta=file_get_contents($url,false,stream_context_create($opctiones));
$objRespuesta=json_decode($respuesta);
//print_r($objRespuesta);

// foreach($objRespuesta->list as $video){
//     print_r($video);
//     print_r($video->titl);
//     print_r($video->channel);
// }


?>
<ul>
    <?php foreach($objRespuesta->list as $video){ ?>
        <li><?php echo ($video->titl); ?> <?php echo ($video->channel); ?></li>
    <?php } ?>
</ul>