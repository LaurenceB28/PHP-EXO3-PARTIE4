<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function nombre($number_1, $number2){

 return $number_1;
 if ($number_1 < $number2){
 echo 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';}
 else if ($number_1 > $number2){
 echo 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';}
 else if ($number_1 == $number2){
 echo 'Les deux nombres sont identiques si les deux nombres sont égaux';}



} ?>

<?php
function nombre($number_1, $number2){

 
 if ($number_1 < $number2){
 return $number_1;
 echo 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';}

 else if ($number_1 > $number2){
    return $number_1; 
 echo 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';}

 else if ($number_1 == $number2){
    return $number_1; 
 echo 'Les deux nombres sont identiques si les deux nombres sont égaux';}

 


} ?>
</body>
</html>