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
      img{
        transition: 1s,
    }
    img:hover{
        filter: grayscale(100%),
        transform: scale(1.1)
    }
    .jumbotron{
        background-image:url('public/image/home/jumpo.jpg');
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

  <!--icon for the title-->
  <link rel="icon" href="public/image/Logo40.png">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<!-- /.login-box -->

<?php include_once 'components/navbar.php'; ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center change-opacity"> <strong>EtMu Digital Museum of Ethiopia</strong> </h1>
        </div>
    </div>

<div class="row ml-2 mr-2 mt-3">

        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card card-primary">
                    <img src="/custom/mvc/public/image/devs/abdulmejid.png" class="card-img-top" class="" alt="">
                    <div class="card-footer">
                        <div class="card-title">Abdulmejid shemsu</div>
                        <h5 class="card-text">FullStack Dev</h5>
                        <div class="card-text">Follow him on</div>
                        <div class="row">
                            <div class="col-6"><i class="fas fa-telegram"></i></div>
                            <div class="col-6"><i class="fas fa-facebook"></i></div>
                        </div>
                    </div><!--end of abdulmejid-->
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card card-primary">
                    <img src="/custom/mvc/public/image/devs/abduselam.png" width="200" class="card-img-top" class="" alt="">
                    <div class="card-footer">
                        <div class="card-title">Abduselam Hafiz</div>
                        <h5 class="card-text">BackEnd Dev</h5>
                        <div class="card-text">Follow him on</div>
                        <div class="row">
                            <div class="col-6"><i class="fas fa-telegram"></i></div>
                            <div class="col-6"><i class="fas fa-facebook"></i></div>
                        </div>
                    </div><!--end of abduselam-->
                </div>
            </div>
            
            
            <div class="col-md-4 col-12">
                <div class="card card-primary">
                    <img src="/custom/mvc/public/image/devs/hayat.png" class="card-img-top" class="" alt="">
                    <div class="card-footer">
                        <div class="card-title">Hayat Ahmed</div>
                        <h5 class="card-text">FullStack Dev</h5>
                        <div class="card-text">Follow her on</div>
                        <div class="row">
                            <div class="col-6"><i class="fas fa-telegram"></i></div>
                            <div class="col-6"><i class="fas fa-facebook"></i></div>
                        </div>
                    </div><!--end of hayat-->
                </div>
            </div>
            

            <div class="col-md-4 col-12">
                <div class="card card-primary">
                    <img src="/custom/mvc/public/image/devs/firaol.png" class="card-img-top" class="" alt="">
                    <div class="card-footer">
                        <div class="card-title">Firaol Tesfaye</div>
                        <h5 class="card-text">BackEnd Dev</h5>
                        <div class="card-text">Follow him on</div>
                        <div class="row">
                            <div class="col-6"><i class="fas fa-telegram"></i></div>
                            <div class="col-6"><i class="fas fa-facebook"></i></div>
                        </div>
                    </div><!--end of firaol-->
                </div>
            </div>
            
            
            <div class="col-md-4 col-12">
                <div class="card card-primary">
                    <img src="/custom/mvc/public/image/devs/hayat.png" class="card-img-top" class="" alt="">
                    <div class="card-footer">
                        <div class="card-title">Sosna Beyene</div>
                        <h5 class="card-text">FrontEnd dev Dev</h5>
                        <div class="card-text">Follow her on</div>
                        <div class="row">
                            <div class="col-6"><i class="fas fa-telegram"></i></div>
                            <div class="col-6"><i class="fas fa-facebook"></i></div>
                        </div>
                    </div><!--end of sosna-->
                </div>
            </div>
            
            
        </div>



</div>

<?php include_once 'components/footer.php' ?>

<script src="public/js/jquery3.5.js"></script>

<script src="public/js/bootstrap.min.js"></script>



</body>

</html>
