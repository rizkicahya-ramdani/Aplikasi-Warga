<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eko Priyo Triasmoro">
    <meta name="generator" content="appwarga.v00.00.01">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

  <link href="<?php echo base_url() ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="<?php echo base_url()?>/assets/custom/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <h1 class="h3 mb-3 fw-normal"><?php echo $title; ?></h1>
  <?php echo validation_errors() ?>
  <form action="<?php echo base_url('user/auth') ?>" method="post">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">
      <label for="floatingInput">Username <?php echo form_error('username'); ?></label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>
