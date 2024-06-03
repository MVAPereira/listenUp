
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-custom {
            width: 200px;  /* Adjust width as needed */
            height: 200px; /* Adjust height as needed */
            border-radius: 50%; /* Makes the button round */
            font-size: 24px; /* Adjust font size as needed */
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="bg-warning mx-auto p-4 border border-2 rounded fixed-size-container">
            <form method="post" action="main.php">
                <button button class="btn btn-outline-light btn-custom " type="submit" name="playStart" >PLAY</button>
            </form>   
        </div>    
   </div>
</body>
</html>

