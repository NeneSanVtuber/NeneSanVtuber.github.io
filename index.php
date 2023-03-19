<?php
// $ruta = "Img/333278841_482183790636525_645090359507754974_n.jpg";
// $i = imagecreatefromjpeg($ruta);
// $rTotal = 0;
// $vTotal = 0;
// $aTotal = 0;
// $total = 0;
// for ($x=0;$x<imagesx($i);$x++) {
//     for ($y=0;$y<imagesy($i);$y++) {
//         $rgb = imagecolorat($i,$x,$y);
//         $r   = ($rgb >> 16) & 0xFF;
//         $v   = ($rgb >> 8) & 0xFF;
//         $a   = $rgb & 0xFF;
//         $rTotal += $r;
//         $vTotal += $v;
//         $aTotal += $a;
//         $total++;
//     }
// }
// $rPromedio = round($rTotal/$total);
// $vPromedio = round($vTotal/$total);
// $aPromedio = round($aTotal/$total);
// echo "<img src='".$ruta."' width='400' />";

?>
<!DOCTYPE html>
<html>
 <head>
    <title>ConnetR</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="Icon.ico" >
    <meta   name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
 </head>
 <body>
   <nav></nav>
   <img id="imginput" src="img/87048.jpg">
   <div class="container">
    <div class="UserInforContainer">
      <div class="UserImage"></div>
      <div class="textInf">
        <h1>NeneSan</h1>
        <span>Social Media Center</span>
      </div>
    </div>
    <div class="linkcontainer">
      <a id="linkR" class="Facebook" href="https://www.facebook.com/profile.php?id=100090274435908">Facebook</a>
      <a id="linkR" class="YouTube" href="https://www.youtube.com/channel/UCS-dMafyb_0QOHO5Mp2XKyQ">YouTube</a>
      <a id="linkR" class="Instagram" href="https://www.instagram.com/nenesanvtuber/">Instagram</a>
      <a id="linkR" class="TikTok" href="https://www.tiktok.com/@nene_san002">TikTok</a>
      <a id="linkR" class="Twitch" href="https://www.twitch.tv/nenesanvtuber">Twitch</a>

    </div>

   </div>
  
  
 </body>
</html>