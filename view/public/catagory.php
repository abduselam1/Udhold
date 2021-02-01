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
    .change-opacity{
        background-color:black;
        opacity: 60%;
    }
    </style>

</head>
<body>

    <?php include_once 'components/navbar.php'; ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center change-opacity"> <strong>EtMu Digital Museum of Ethiopia</strong> </h1>
        </div>
    </div>

    <div class="row">
        
            <?php 
            if ($data['post'] == '') {
                echo "<div class=\"row mb-2\">
                    <div class=\"col-12 bg-secondary justify-content-center pt-2 pb-2\">
                        <h3 class=\"text-center\">Sorry we don't have any content for this catagory</h3>
                    </div>
                </div>";
            }else{
                foreach ($data['post'] as $value) {
                    echo "<div class=\"col-md-3 col-6 mb-2\">
                            <div class=\"card shadow p-3 mb-5 bg-white rounded\">
                            <img src=\"../$value->avatar\" class=\"card-img-top\" alt=\"...\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">$value->title</h5>
                            </div>
                            <div class=\"card-footer\">
                                <span class=\"btn btn-sm btn-secondary\" id=\"tobe-toggled$value->id\" onclick=\"viewDetail('tobe-toggled$value->id')\">view detail</span>

                                <div style=\"display:none\" class=\"tobe-toggled$value->id\">$value->content</div>
                            </div>
                        </div>
                        </div>";
                } 
            }
        ?>
    </div>


<?php include_once 'components/footer.php' ?>


<?php include_once('components/asset/js.php'); ?>


<script>
    function viewDetail(toggle_class){
        $('.'+toggle_class).toggle("slow");
        $('#'+toggle_class).text('Hide detail');
    }
</script>

<!-- <script src="../public/js/jquery3.5.js"></script>

<script src="../public/js/bootstrap.min.js"></script> -->


</body>
</html>