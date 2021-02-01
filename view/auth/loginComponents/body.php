<div class="text-center">
    <img class="img-fluid mb-4" src="public/image/Logo40.png" alt="company logo" height="100" width="100">  
  </div>
  <form class="mb-4" id="login-form" action="login-handler" method="POST">
    <div class="input-group mb-3">
      <input type="email" onkeypress="email_validation()" class="form-control" id="email" placeholder="Email"  name="email" value="<?=$data['email']["old"]?>" required autocomplete="email" autofocus>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
      </div>
      </div>
    </div>
    <div>
      <span style="color:red" class="error-class" role="alert">
              <strong><?=$data['email']['message']?></strong>
        </span>
    </div>
    <div class="input-group mb-3">
      <input type="password" onkeypress="password_validation()" class="form-control" id="pass" placeholder="Password"  name="password" autocomplete="current-password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span id="show-password" class="fas fa-eye-slash"></span>
        </div>
      </div>
          <span style="color:red"  class="error-class" role="alert">
              
          </span>
      <div>
        
      </div>
    </div>
    
    <div class="">
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>
  </form>

  <div class="row">
    <div class="col-6">
      <p id="signup" class="mb-0">
        
      </p>
    </div>
  </div>