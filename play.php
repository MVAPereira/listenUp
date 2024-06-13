
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

        .btn-dark {
            background: red;
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
                <button button class="btn btn-outline-secondary btn-custom shadow border border-0" type="submit" name="playStart" >START</button>

                <div class="p-5 d-flex justify-content-center align-items-center">
                    <div class="form-check d-flex align-items-center m-2">
                        <input class="form-check-input" type="radio" name="language" id="exampleRadios1" value="en-US"checked>
                        <label class="form-check-label ms-1" for="exampleRadios1">
                            <img src="english.png" alt="english" style="width: 100%; height: auto;">
                        </label>
                    </div>
                    <div class="form-check d-flex align-items-center m-2 ms-5">
                        <input class="form-check-input" type="radio" name="language" id="exampleRadios2" value="de-DE">
                        <label class="form-check-label ms-1" for="exampleRadios2">
                            <img src="germany.png" alt="german" style="width: 100%; height: auto;">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center m-2 ms-5">
                        <input class="form-check-input" type="radio" name="language" id="exampleRadios2" value="fr-FR">
                        <label class="form-check-label ms-1" for="exampleRadios2">
                            <img src="france.png" alt="french" style="width: 100%; height: auto;">
                        </label>
                    </div>
                </div>
                <!-- <input type="checkbox" class="btn-check" name="mode" id="btn-check-4" autocomplete="off">
                <label class="btn btn-primary" for="btn-check" data-bs-toggle="tooltip" title="Hooray!">Single toggle</label> -->
              
                

                

                

                <!-- <div class="container text-center">
                    <div class="row">
                        <div class="col btn-dark m-1">
                            <input type="radio" class="btn-check" name="mode" value="fr-FR" id="option5" autocomplete="off" checked>
                            <label class="btn btn-secondary" for="option5">standart</label>
                        </div>
                        <div class="col btn-dark m-1">
                            <input type="radio" class="btn-check" name="mode" value="batata" id="option6" autocomplete="off">
                            <label class="btn btn-secondary" for="option6">years</label>
                        </div>
                        <div class="col btn-dark m-1">
                            <input type="radio" class="btn-check" name="mode" value="batata" id="option7" autocomplete="off">
                            <label class="btn btn-secondary" for="option7">changes</label>
                        </div>
                    </div>
                </div> -->

                <div class="d-grid gap-2">
                    <input type="radio" class="btn-check" name="mode" value="standard" id="option5" autocomplete="off" checked>
                    <label class="btn btn-secondary" for="option5" data-bs-toggle="tooltip" title="Hooray!">standard</label>

                    <input type="radio" class="btn-check" name="mode" value="years" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">years</label>

                    <input type="radio" class="btn-check" name="mode" value="cash" id="option6" autocomplete="off">
                    <label class="btn btn-secondary" for="option6">cash</label>
                </div>

            </form>
   </div>
   <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>     
   
</body>
</html>

