<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OVA - Software Educativo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="index.html">Software Educativo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="acerca.html">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link " href="registro.php">Registro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <section class="pt-4">
            <div id="login">
                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="conexion/enlace.php" method="POST">
                                    <h3 class="text-center">Iniciar sesi??n</h3>
                                    <div class="form-group">
                                        <label for="username">Usuario:</label><br>
                                        <input type="text" name="user" id="username" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contrase??a:</label><br>
                                        <input type="password" name="pass" id="password" class="form-control" required>
                                    </div>
                                    <div class="form-group pt-1 text-center">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar">
                                    </div>
                                    <div class="form-group">
                                        <div id="register-link" class="text-right">
                                            <a href="registro.php" class="text-info">Reg??strese</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; OVA - Software Educativo 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
