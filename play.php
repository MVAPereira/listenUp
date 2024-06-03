
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body {
                height: 100%;
                margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: white;
        }

        .btn-custom {
            width: 25vw; /* 200px = 25% of viewport width */
            height: 25vw; /* 200px = 25% of viewport width */
            border-radius: 50%;
            font-size: 3vw; /* 24px = 3% of viewport width */
        }
    </style>
</head>
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
            <form method="post" action="main.php">
                <button button class="btn btn-outline-secondary btn-custom shadow border border-0" type="submit" name="playStart">START</button>
            </form> 
   </div>

</body>
</html>

