<?php 
if (!isset($_SESSION)) {
  session_start(); 
  
   require('sesion.php');
      
  if ($c > 0) {
      $id_usuario= $_SESSION['id_usuario']; 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OVA - Software Educativo</title>
        <link href="css/styles_app.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Software Educativo</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="cerrar_sesion.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="app.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="progreso.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Progreso
                            </a>
                            <a class="nav-link active collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                                OVA
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="capitulo_1.php">Capitulo 1</a>
                                    <a class="nav-link active" href="capitulo_2.php">Capitulo 2</a>
                                    <a class="nav-link" href="capitulo_3.php">Capitulo 3</a>
                                    <a class="nav-link" href="capitulo_4.php">Capitulo 4</a>
                                    <a class="nav-link" href="capitulo_5.php">Capitulo 5</a>
                                    <a class="nav-link" href="capitulo_6.php">Capitulo 6</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Capitulo #2 Evolución del software educativo</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                A continuación podrá visualizar el contenido del capitulo.
                            </div>
                        </div>    
                            <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Concepto</div>
                                    <div class="card-footer">
                                        <p>El software educativo ha evolucionado en la medida que tecnología se convierte en herramienta de avance en todos los campos del saber; el software es un facilitador de los procesos de enseñanza aprendizaje y hace que las prácticas pedagógicas sean más atractivas para los estudiantes e incrementan la proactividad en las aulas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Fechas Destacadas</div>
                                    <div class="card-footer">
                                       <ul>
                                            <p><li>FEB 16, 1960 - Enseñanza Asistida por Computadora.</li>
                                            <li>FEB 16, 1975 - Uso de la programación.</li>
                                            <li>FEB 16, 1985 - Multimedia.</li>
                                            <li>FEB 16, 1990 - Internet.</li>
                                            <li>FEB 16, 2000 - E- Learning.</li>
                                            <li>FEB 16, 2005 - Software Social.</li>
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Material Extra</div>
                                    <div class="card-footer">
                                        <p>En los siguientes videos, encontrará como fue la evolución y que inconvenientes tuvo el software educativo en sus inicios.</p>
                                        <p><link rel="stylesheet" type="text/css" href="">
                                            <a target="_blank" href="https://www.youtube.com/watch?v=1-mrKnYIkh8&ab_channel=Grupo1">La evolucion del software educativo</a>
                                            <a target="_blank" href="https://www.youtube.com/watch?v=Dh8ten5Vp7k">Evolucion del software educativo</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Actividad</div>
                                    <div class="card-footer">
                                        <p>Tema: Evolución del software educativo</p>
                                        <p>Tipo: Relacionar</p>
                                        <p>Indicaciones: Relacione el año de evolución con su respectivo nombre</p>
                                        <p>Link de Acceso: <a href="#" data-toggle="modal" data-target="#exampleModalLong">Relacionar Palabras</a></p>
                                        <p>Tiempo: 15 minutos</p>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Software Educativo - 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class=" modal-lg modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Actividad - Evolución del software educativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="../capitulo2/Relacionar_fechas_conceptos/Relacionar_fechas_conceptos.htm" width="100%" height="450" style="border:1px solid black;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="js/scripts_app.js"></script>
    </body>
</html>
<?php  }

  else{
  
header('location:login.php');

  }
      
}


?>  