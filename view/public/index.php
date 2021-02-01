<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Etmu </title>
  <!-- Tell the browser to be responsive to screen width -->

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="public/css/fontawesom.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="{{asset('code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.html')}}"> -->
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/app.min.css">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <style>
      .hover-effect:hover{
          box-shadow: -3px -3px 10px 3px black;
      }
  </style>

  <!--icon for the title-->
  <link rel="icon" href="public/image/Logo40.png">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<!-- /.login-box -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="public/image/home/hamar1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hamar Peoples</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="public/image/home/chilada1.jpg" class="d-block w-100" style="width:100%; hight:100%" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>chilada</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="public/image/home/sof-omer1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

<div class="row ml-2 mr-2 mt-3">

        
        <!-- /.login-logo -->
        <div class="row">
            
            <?php 
                foreach ($data['catagories'] as $value) {
                    echo "
                        <div class=\"col-md-3 col-6\">
                            <div class=\"card\" \">
                                <img src=\"$value->img_path\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-center\"><a class=\"card-link\" href=\"catagories/$value->id\">$value->name</a></h5>
                                </div><!--end of card body-->
                            </div><!-- end card-->
                            
                        </div>
                    ";
                }
            ?>

            <!--end col-3 -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                        <i class="fas fa-text-width"></i>
                            What is EtMu? 
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <blockquote>
                        <p>EtMu is a combination of Two words Ethipia and Museum so it refers to Ethiopian museum</p>
                        <small>Form  <cite title="Source Title">Administrators</cite></small>
                        </blockquote>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>


            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                        <i class="fas fa-text-width"></i>
                        What we offer
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <blockquote>
                        <p>Our system offers unlimited view of any Ethiopian culture, heritage,history and any other things that realated with Ethiopian.</p>
                        <small> Source <cite title="Source Title">Adminisrators</cite></small>
                        </blockquote>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>


    <!-- <div class="col-md-3"> -->

    
        <!-- /.login-logo -->
        <!-- <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">
                Catagory
            </button>
            <a href="unesco" class="list-group-item list-group-item-action">UNESCO</a>
            <a href="people" class="list-group-item list-group-item-action">People</a>
            <a href="heritage" class="list-group-item list-group-item-action">Heritage</a>
            <a href="others" class="list-group-item list-group-item-action" disabled>foods</a>
        </div>


    </div> -->

</div>

<?php include_once 'components/footer.php' ?>

<script src="public/js/jquery3.5.js"></script>

<script src="public/js/bootstrap.min.js"></script>


<!-- <script src="public/js/bootstrap.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 18:40:57 GMT -->
</html>
