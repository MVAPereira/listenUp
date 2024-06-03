<?php

session_start();

if (!isset($_SESSION['text'])) {
    $_SESSION['text'] = null;
}
$text = $_SESSION['text'];
$audio_player = "";

function getBackgroundClass() {
    return 'bg-warning';
}

function play(){
    global $text, $audio_player;
    $min_random_number = 0;
    $max_random_number = 100;
    $text = rand($min_random_number, $max_random_number);

    $text = htmlspecialchars($text);
    $text = rawurlencode($text);

    
    $convert = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&q=' . $text . '&tl=en-US');

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
    play(); 
}

if (isset($_POST['batata'])) {
  
    $inputedText = $_POST['text'];

    if($_SESSION['text'] == $inputedText){
        echo "ahhh caralho";
        getBackgroundClass();
        play();
    }else{
        echo "ERRADOOOO";
        echo $_SESSION['audio_player'];
    }

}

if (isset($_POST['playStart'])) { 
    play();
}

if (isset($audio_player)) {
    echo $audio_player;
}

?>