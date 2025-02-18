<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏢ข้อมูลเรซูเม่</title>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<style type="text/css">
    
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');

    body {
        background: #bdc3c7;
        font-family: 'Kanit', sans-serif;
    }

    .btn-primary {
        --bs-btn-color: #fff;
        --bs-btn-bg: #A3CB38;
        --bs-btn-border-color: #A3CB38;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #009432;
        --bs-btn-hover-border-color: #009432;
        --bs-btn-focus-shadow-rgb: 49,132,253;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #009432;
        --bs-btn-active-border-color: #009432;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #fff;
        --bs-btn-disabled-bg: #A3CB38;
        --bs-btn-disabled-border-color: #A3CB38;
    }

</style>
</head>
<body>
 <div class="container mt-5">
 <?php
    $img = $_GET['resume'];
    ?>
    <div class="card col-sm-12 col-md-7 col-lg-7 mx-auto">
        <div class="card-body text-center">
            <img src="resume/<?php echo $img; ?>" alt="" width="730px" >
        </div>
    </div>
 </div>
</body>
</html>