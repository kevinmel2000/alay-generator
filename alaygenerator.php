<h1>Alay Generator</h1>
<form action="" method='post'>
    <input type="radio" name="level_alay" value='1' id="lev_1" selected> <label for="lev_1"> L3v3l 84W4h </label><br>
    <input type="radio" name="level_alay" value='2' id="lev_dewa"> <label for="lev_dewa"> |_3V3L D3W4 </label> <br> <br>
    <input type="text" name='text'>
    <button type="submit">Alaaayyyy</button>
</form>

<?php
$alay_tingkat_dewa = [
    'a' => '4',
    'b' => '6',
    'c' => '(',
    'd' => 'D',
    'e' => '3',
    'f' => '|=',
    'g' => '9',
    'h' => '|-|',
    'i' => '!',
    'j' => 'J',
    'k' => '|<',
    'l' => '|_',
    'm' => '|v|',
    'n' => '|\|',
    'o' => '0',
    'p' => 'P',
    'q' => 'Q',
    'r' => '|2',
    's' => '5',
    't' => '7',
    'u' => '|_|',
    'v' => 'V',
    'w' => 'vv',
    'x' => 'X',
    'y' => '\'/',
    'z' => '2'
];

$alay_tingkat_1 = [
    'a' => '4',
    'b' => '8',
    'g' => '9',
    's' => '5',
    'k' => 'x',
    'z' => '2',
    'u' => 'oe',
    't' => '7',
];


if(!isset($_POST['text'])){
    die();
}
$text = $_POST['text'];
echo "Text : ".$text."<br>";

function alay_generator($text, $level_alay){
    
    $text = strtolower($text);
    $split = str_split($text);
    $new_text = "";
    foreach($split as $huruf){
        if(preg_match("/[a-z]/", $huruf)){
            $new_text .= (isset($level_alay[$huruf]))?$level_alay[$huruf]:$huruf;
        }else{
            $new_text .= $huruf;
        }
    }
    return $new_text;
}
if($_POST['level_alay'] == 1){
    $alay = alay_generator($text, $alay_tingkat_1);
}else if($_POST['level_alay'] == 2){
    $alay = alay_generator($text, $alay_tingkat_dewa);
}

echo "Alay Version : ".$alay;