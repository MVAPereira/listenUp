<?php

session_start();

if (!isset($_SESSION['text'])) {
    $_SESSION['text'] = null;
}
$text = $_SESSION['text'];
$audio_player = "";
$image_src = "hand.png";  

function play($language = 'en-US'){

    global $text, $audio_player;
    
    $language = rawurldecode($language);

    $min_random_number = 0;
    $max_random_number = 100;
    $text = rand($min_random_number, $max_random_number);

    $text = htmlspecialchars($text);
    $text = rawurlencode($text);

    
    $convert = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&q=' . $text . '&tl='. $language .'');

    if ($convert !== false) {
        $audio_base64 = base64_encode($convert);

        $audio_player = "
            <audio controls='controls' autoplay>
                <source src='data:audio/mpeg;base64," . $audio_base64 . "' type='audio/mpeg'>
            </audio>";

        $_SESSION['audio_player'] = $audio_player;
        $_SESSION['text'] = $text;    
    } else {
        $audio_player = "<p>Failed to fetch audio. Please try again.</p>";

        $_SESSION['audio_player'] = $audio_player;
    }
}


if (isset($_POST['convert'])) {
    play($_SESSION['language']); 
}

if (isset($_POST['batata'])) {
  
    $inputedText = $_POST['text'];

    if($_SESSION['text'] == $inputedText){
        play($_SESSION['language']);
        $image_src = "tup.png";
    }else{
        $image_src = "tdown.png";
        echo $_SESSION['audio_player'];
    }
}

if (isset($_POST['playStart'])) {
    $_SESSION['language'] = $_POST['language'];

    play($_SESSION['language']); 
}

if (isset($audio_player)) {
    echo $audio_player;
}

?>