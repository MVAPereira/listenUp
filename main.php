
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
        background-color: white;
    }
    
    audio::-webkit-media-controls-panel {
    background-color: white;
    }
    .pink{
        background-color: white;
    }
</style>
<body>
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ListenUp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="#">About</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="pink mx-auto p-4 border border-2 rounded shadow-lg ">
            <form method="post">
                <div class="d-flex align-items-center justify-content-center">
                    <?php include_once 'functions.php'; ?>
                    <button type="submit" name="convert" class="btn btn-light btn-lg rounded-pill">skip</button>
                </div>
                <div class="d-flex align-items-center justify-content-center m-3">
                    <img src="<?php echo $image_src; ?>" style="width: 200px; height: 200px;">
                </div>
                <div class="input-group mb-3 mt-4">
                    <input type="number" class="form-control rounded-pill" aria-describedby="button-addon2" name="text" autofocus>
                    <button class="btn btn-light btn-lg rounded-pill" type="submit" id="button-addon2" name="batata">go!</button>
                </div>  
            </form>     
        </div>  
   </div>

   <script>
        document.querySelector('input[name="text"]').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();  
                document.getElementById('button-addon2').click();  
            }
        });
    </script>
</body>
</html>
