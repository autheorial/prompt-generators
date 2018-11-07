<?php
$input = array("Hinata","Kageyama","Yamaguchi","Tsukishima","Yachi","Ennoshita","Daichi","Sugawara","Asahi","Nishinoya","Tanaka","Kiyoko",
"Oikawa","Iwaizumi","Yahaba","Kyoutani","Kunimi","Kindaichi","Matsukawa","Hanamaki",
"Kuroo","Kenma","Lev","Yaku","Inuoka","Taketora",
"Bokuto","Akaashi","Konoha",
"Ushijima", "Semi", "Tendou", "Shirabu","Goshiki",
"Futakuchi","Moniwa","Aone",
"Daishou",
"Terushima");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "/";
echo $input[$rand_keys[1]] . "";
?>