<?php

$age = 20;
$ano = "https://im9.cz/iR/importprodukt-orig/63f/63ff97a826ab65a9b150b3c10558f015.jpg";


if ($age >= 18 ) {
   $answer = "Děkujeme, přijdte zas."; $ano = "https://www.alkohol.cz/images/preview/thumb_1000_700_nw_1566241703finlandia_vodka_10_l.jpg";
}

else {
  $answer = "Máš smůlu...Alkohol a tabák prodáváme od 18ti let."; $ano = "https://www.jmenovky.cz/files/mod_eshop/produkty/piktogram-zakaz-prodeje-alkoholu-osobam-mladsim-18-let-piktotab.030.sc.jpg" ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> Kolik ti je?</p>
<p> Je mi <?= $age; ?> let</p> <img src="<?= $ano?>" alt="..." />
<p> <?= $answer; ?> </p>  








</body>
</html>