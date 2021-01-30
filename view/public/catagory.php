<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EtMu</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <?php include_once('components/asset/css.php'); ?>
    <!-- <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/app.min.css"> -->

    <style>
    img{
        transition: 1s,
    }
    img:hover{
        filter: grayscale(100%),
        transform: scale(1.1)
    }
    .jumbotron{
        background-image:url('../public/image/home/jumpo.jpg');
        /* background-repeat: no-repeat; */
    }
    .text-center{
        color:yellow;
    }
    </style>

</head>
<body>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center"> <strong>EtMu Digital Museum of Ethiopia</strong> </h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class="row">
        
            <?php  foreach ($data['post'] as $value) {
            echo "<div class=\"col-md-3 col-6 mb-2\">
                    <div class=\"card shadow p-3 mb-5 bg-white rounded\">
                    <img src=\"../$value->avatar\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$value->title</h5>
                    </div>
                    <div class=\"card-footer\">
                        
                    </div>
                </div>
                </div>";
        } ?>
    </div>


<?php include_once 'components/footer.php' ?>


<?php include_once('components/asset/js.php'); ?>

<!-- <script src="../public/js/jquery3.5.js"></script>

<script src="../public/js/bootstrap.min.js"></script> -->


</body>
</html>