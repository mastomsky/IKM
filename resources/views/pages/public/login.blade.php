<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}landing/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('/') }}landing/img/favicon.png">
  <title>
   IKM - Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('/') }}landing/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('/') }}landing/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->        
  <link id="pagestyle" href="{{ asset('/') }}landing/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row ">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2" style="text-align: center">
                <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1" >
                  <img width="100" src="{{ asset('assets/logo.png') }}" alt="" >
                  <div class="row mt-3">
                    <h6 class="text-white text-center">Silakan masukkan akun Anda untuk masuk ke panel</h6>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" action="{{ url('auth/prosess') }}" method="POST">
                    @csrf
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input  class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label mb-0 ms-2" for="remember">Ingat Saya</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('/') }}landing/js/core/popper.min.js"></script>
  <script src="{{ asset('/') }}landing/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('/') }}landing/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('/') }}landing/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    };
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/') }}landing/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>