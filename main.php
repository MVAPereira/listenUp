
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="bg-warning mx-auto p-4 border border-2 rounded">
        <?php include_once 'functions.php'; ?>
            <form method="post">
                <textarea name="text"></textarea>
                <button type="submit" name="convert">Next</button>
                <button type="submit" name="batata">GO</button>
            </form>     
        </div>    
   </div>
</body>
</html>
