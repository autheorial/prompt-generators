<?php
$input = array("Hinata/Kageyama","Kuroo/Tsukishima","Oikawa/Iwaizumi", "Hanamaki/Matsukawa", "Tanaka/Nishinoya","Yaku/Lev", "Daichi/Sugawara",
"Akaashi/Bokuto","Oikawa/Kageyama", "Kyoutani/Yahaba", "Kuroo/Kenma", "Tsukishima/Yamaguchi", "Kiyoko/Yachi", "Ukai/Takeda", 
"Ushijima/Oikawa", "Asahi/Nishinoya", "Kenma/Hinata", "Yamaguchi/Yachi","Daichi/Yui", "Akiteru/Saeko", "Oikawa/Sugawara", "Bokuto/Kuroo", "Kuroo/Daichi",
"Oikawa/Kuroo");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "";
?>