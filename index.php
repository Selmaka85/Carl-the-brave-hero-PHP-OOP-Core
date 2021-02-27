<?php require_once('Duel.php');?>

<body>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css">
    <style>
        body{
            padding:10px;
        }
        .btn{
            margin:10px;
        }
    </style>
  
    <title>Document</title>
</head>
<body>
    <h1 class="text-center bg-success">Carl vs Dragon!</h1>
    <div class="container">
     
    
    <form method="post">
    <button class="btn btn-primary" type="submit" name="submit">Start duel!</button>
</form>

<?php
    if(isset($_POST['submit'])){
        $engine->duel();
    }
?>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"><script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
</body>
</html>