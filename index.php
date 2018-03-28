<?php


$rezultat = str_replace("a", "4", "Ja sam programer");
echo $rezultat;

$drugaRec = str_replace(["a", "e"], ["4", "3"], "Ja sam programer");
echo $drugaRec;

$malaSlova = "OVO BI TREBALO DA BUDE MALIM SLOVIMA";
$malaSlova = strtolower($malaSlova);
echo $malaSlova;

// strtoupper - prebacuje mala slova u velika slova

$recenica = str_replace(["a", "e", "i", "o"], ["4", "3", "1", "0"], "Ideja nije moja, smislili su je neki kreativni nastavnici");
echo $recenica;

$recenica = strtoupper($recenica);
echo $recenica;






?>