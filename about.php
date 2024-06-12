
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    html, body {
            height: 100%;
            margin: 0;
    }
    body {
        display: flex;
        flex-direction: column;
        background-color: #2B3035;
    }

    .white{
        color: white;
    }
    
</style>
<body>
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="play.php">ListenUp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="about.php">About</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container vh-100 d-flex justify-content-center align-items-center">

        <div>
            <p class="text-start fs-4 fw-medium font-monospace white">
                Anyone studying a new language knows how complicated the process of fully understanding numbers can be. Keeping that in mind, "ListenUp" was developed to help language learners improve their listening skills regarding numbers. 
            </p>
            <p class="text-start fs-4 fw-medium font-monospace white">
                The page operates similarly to a game: you listen to an audio clip of a random number in your target language, then you try to guess it right by typing your guess and pressing the "Go!" button. If you get it right, you'll receive a thumbs up; if wrong, a thumbs down. If you find the current audio too difficult, you can skip it and try a different one.
            </p>
        </div>
        
   </div>

</body>
</html>
