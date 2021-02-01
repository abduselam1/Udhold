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
        .bg-custom{
            background-color: rgb(175, 175, 194);
            border-radius: 10px;
        }
        .bg-little-darker{
            background-color: rgb(131, 131, 161);
            border-radius: 5px;
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

    <div class="mt-5 mb-5">
        <div class="row">
            <div class="col-12 justify-content-center">
                <?php if (checkSuccessSession()) {
                    $cookie_value = getSuccessSession('success');
                    echo "
                    <div class=\"alert alert-success \" role=\"alert\">
                        <strong>$cookie_value.</strong>
                    </div>
                    ";
                } else if(checkErrorSession()){
                    $session_value = getErrorSession('error');
                    echo "
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <strong>$session_value.</strong>
                    </div>
                    ";
                }
                ?>
            </div>
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header bg-success">
                            Contact Us
                        </div>
                        <div class="card-body">
                            <form action="/custom/mvc/contact-us" method="POST" class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="name">First Name</label>
                                        <input class="form-control" id="fname" onchange="validateName('fname')" type="text" name="fname" placeholder="Your firs name">
                                        <span id="errorfname" class="error-message"></span>
                                    </div>
                                    <div class="col-6">
                                        <label for="mname">Middle Name</label>
                                        <input class="form-control" type="text" id="mname" name="mname" onchange="validateName('mname')" placeholder="Your middle name">
                                        <span id="errormname" class="error-message"></span>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-6">
                                        <label for="lname">Last Name</label>
                                        <input class="form-control"type="text" id="lname" onchange="validateName('lname')" name="lname" placeholder="Your last name">
                                        <span id="errorlname" class="error-message"></span>
                                    </div>
                
                                    <div class="col-6">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" onchange="emailValidate('lname')" type="text" name="email" placeholder="example@example.com">
                                        <span id="javascript-erroremail"></span>
                                    </div>
                                    
                                </div>
                                
                                
                                <textarea class="form-control mt-5" name="body" rows="5"></textarea>
                                <button type="submit" id="form-submit" class="btn btn-primary mt-5">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--end of form col-->
            <div class="col-md-5 pt-2 bg-custom">
                <div class="mb-3">
                    <div class="h4 text-center">Our Address</div>
                    <div class="row pl-2 mt-5">
                        <div class="col-12 pt-3 pb-3 mb-3 bg-little-darker">
                            <div class="row">
                                <div class="col-4">
                                <i class="fas fa-map-marker"></i> Address
                                </div>
                                <div class="col-8 text-center">Ethiopia ,Adama</div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 pb-3 mb-3 bg-little-darker">
                            <div class="row">
                                <div class="col-4">
                                <i class="fas fa-home"></i> Home Number
                                </div>
                                <div class="col-8 text-center">192-168</div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 pb-3 mb-3 bg-little-darker">
                            <div class="row">
                                <div class="col-4">
                                <i class="fas fa-phone"></i> Phone Number
                                </div>
                                <div class="col-8 text-center">+251929194872</div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 pb-3 mb-3 bg-little-darker">
                            <div class="row">
                                <div class="col-4">
                                <i class="fas fa-envelope"></i> Email
                                </div>
                                <div class="col-8 text-center">etmu@gmail.com</div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 pb-3 mb-3 bg-little-darker">
                            <div class="row">
                                <div class="col-4">
                                <i class="fas fa-envelope"></i> Postal SN
                                </div>
                                <div class="col-8 text-center">posta number</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
       
    </div>
    <div class="col-3"><a href="#"><i class="fas fa-twitter"></i></a></div>
    <div class="col-3"></div>
    <div class="col-3"><i class="fas fa-github"></i></div>
    <div class="col-3"></div>

<!-- <div class="row ml-2 mr-2 mt-3">

        
        



</div> -->

<?php include_once 'components/footer.php';
// include_once 'components/asset/js.php';
?>

<script src="public/js/jquery.min.js"></script>


<script src="public/js/bootstrap.min.js"></script>

<script src="public/js/contact-validation.js"></script>

</body>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 18:40:57 GMT -->
</html>
