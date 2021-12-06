<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title><?php echo $title; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">

    

    <!-- Bootstrap core CSS -->
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

    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>/assets/custom/css/heroes.css" rel="stylesheet">
  </head>
  <body>
    
  <main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3"><?php echo $title; ?></h1>
          <p class="col-lg-10 fs-4">Aplikasi ini dibuat untuk mendukung Kampung Cyber pada di Wilayah RW 01 Patangpuluhan, Yogyakarta</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="<?php echo base_url('user/auth') ?>">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            <hr class="my-4">
            <small class="text-muted">Powered by Lintas Menara | Muhi Digital Camp | iterwenolsatu</small>
          </form>
        </div>
      </div>
    </div>
  </main>


  <script src="<?php echo base_url() ?>/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
