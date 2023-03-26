<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>

  <!-- Bootstrap -->
  <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="<?php echo e(route('admin-login-submit')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h1>Login Form</h1>
            <h1><?php echo e(session('msg')); ?></h1>
            <div>
              <input type="text" name="email" class="form-control" placeholder="Email" required/>
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Password" required/>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-secondary">Log in</button>

            <div class="separator">
              <p class="change_link">
                <a href="#signup" class="to_register"> Create Account </a>
              </p>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html><?php /**PATH D:\Laravel\Blog\resources\views/admin/login.blade.php ENDPATH**/ ?>