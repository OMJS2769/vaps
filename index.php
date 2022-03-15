<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<!DOCTYPE html>
<html lang="es_ES">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content=" media-src *">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <title><?php echo $_ENV['APP_NAME'] ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="public/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="public/css/font.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/adminlte/css/adminlte.min.css">
    <!-- Styles -->
    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/alertify.css" rel="stylesheet">
    <link href="public/css/semantic.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed layout-fixed sidebar-collapse ">
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-weight-bold">Login</div>
                    <div class="card-body">
                        <form method="POST" id="login_form" action="controllers/UserController.php?e=login">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Usuario</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="public/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/adminlte/js/adminlte.min.js"></script>

    <script src="public/js/alertify.js" type="text/javascript"></script>
    <script src="public/js/app.js" type="text/javascript"></script>
    <script src="public/js/jquery-ui.min.js" defer></script>
</body>

</html>