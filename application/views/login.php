<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schoolmaya | Login</title>
</head>
<body>
<form action=”<?php echo base_url(‘login/login_process’) ?>” method=“post”> 
      <div class=“form-group has-feedback”> 
        <input type=“text” class=“form-control” placeholder=“Username atau Email” name=“username” required id=“username”> 
        <span class=“glyphicon glyphicon-user form-control-feedback”></span> 
      </div> 
      <div class=“form-group has-feedback”> 
        <input type=“password” class=“form-control” placeholder=“Password” name=“password” required> 
        <span class=“glyphicon glyphicon-lock form-control-feedback”></span> 
      </div> 
      <div class=“row”> 
        <div class=“col-xs-8”> 
          <div class=“checkbox icheck”> 
            <label> 
              <input type=“checkbox”> Ingat Saya 
            </label> 
          </div> 
        </div> 
        <!– /.col –> 
        <div class=“col-xs-4”> 
          <button type=“submit” class=“btn btn-primary btn-block btn-flat”>Masuk</button> 
        </div> 
        <!– /.col –> 
      </div> 
    </form>
</body>
</html>