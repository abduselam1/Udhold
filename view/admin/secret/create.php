
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Etmu | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <?php include_once('./view/admin/components/asset/css.php'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
        </ul>

    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        <img src="../public/image/logo40.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Etmu</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="../<?=$data['user']->profile?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block"><?=$data['user']->name?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item active">
                <a href="/custom/mvc/admin/dashboard" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Post
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/custom/mvc/admin/create-post" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create post</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/custom/mvc/admin/posts" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>view Posts</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Secret Posts
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/custom/mvc/admin/create-secret" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Secret Content</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/custom/mvc/admin/secrets" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Secret Contents</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Catagory
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/custom/mvc/admin/create-catagory" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Catagory</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/custom/mvc/admin/catagories" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Catagory</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/custom/mvc/admin/suggestion" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    suggestion
                </p>
                </a>
            </li>
            
            <li class="nav-header">Setting</li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-exit-dor"></i>
                <p>
                    <form action="/custom/mvc/logout" method="post">
                    <button type="submit" class="btn btn-light">Logout</button>
                    </form>
                </p>
                </a>
            </li>
            
            </ul>
        </nav>
        </div>
    </aside>

    <div class="content-wrapper">
  
    <div class="row">
        <div class="col-12 text-center bg-secondary pt-1 pb-1 mt-2">
        <h3>Create new secret Contents</h3>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="/custom/mvc/admin/secret" class="" method="post" enctype="multipart/form-data">
                <?php include_once 'components/create-body.php'; ?>
                <button type="submit" id="secret-submit" class="btn btn-outline-success ">Post</button>
            </form>
        </div>
    </section>
    </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 Etmu <a href="http://localhost/custom/mvc/home">Etmu.org</a>.</strong>
    All rights reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<?php include_once('./view/admin/components/asset/js.php'); ?>


</body>
</html>
