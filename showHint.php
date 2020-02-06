<?php
// Fill up array with names
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

//get the letter parameter from url
$letter = $_GET['letter'];
//lookup all hints from array if length of letter > 0
if(strlen($letter) > 0){
    $hint = '';
    for ($i = 0; $i < count($a); $i++){
        if(strtolower($letter) == strtolower(substr($a[$i], 0, strlen($letter)))){
            if($hint == ''){
                $hint = $a[$i];
            }else {
                $hint = $hint . ',' . $a[$i];
            }
        }
    }
}

//set output to '没有匹配的提示。' if no hint were found
if($hint == ''){
    $response = '后台没有匹配的提示返回。';
}else {
    $response = $hint;
}

//output the response
echo $response;

?>