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
                                    <a class="nav-link" href="capitulo_2.php">Capitulo 2</a>
                                    <a class="nav-link" href="capitulo_3.php">Capitulo 3</a>
                                    <a class="nav-link" href="capitulo_4.php">Capitulo 4</a>
                                    <a class="nav-link active" href="capitulo_5.php">Capitulo 5</a>
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
                        <h1 class="mt-4">Capitulo #5 Objeto virtuales de aprendizaje: OVA</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                A continuaci??n podr?? visualizar el contenido del capitulo.
                            </div>
                        </div>    
                            <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Concepto</div>
                                    <div class="card-footer">
                                        <p>Un OVA es definido como un conjunto de recursos digitales que puede ser utilizado en diversos contextos, con un prop??sito educativo y constituido por al menos tres componentes internos: contenidos, actividades de aprendizaje y elementos de contextualizaci??n (Tovar, 2014). Adem??s, el objeto de aprendizaje debe tener una estructura de informaci??n externa (metadato), para facilitar su almacenamiento, identificaci??n y recuperaci??n.</p>

                                        <p>Por otra parte, los OVA se enmarcan en los prop??sitos de las herramientas TIC, las cuales est??n produciendo cambios en las metodolog??as de ense??anza y aprendizaje, en la forma en que los profesores y estudiantes se relacionan con el conocimiento, y la manera en que interact??an los agentes involucrados en el proceso educativo (Cabrera, 2014).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Los OVA en la educaci??n virtual</div>
                                    <div class="card-footer">
                                       <p>La estructura general de los OVA contiene un objetivo, un contenido, una actividad de aprendizaje y un mecanismo de evaluaci??n. Este recurso did??ctico es independiente, es decir, es creado para ser reutilizable en variados contextos educativos y en distintos dispositivos.</p>

                                       <p>Los OVA se pueden desarrollar en diversos formatos como: HTML, XML, JPEG, PDF, Flash, GIF, etc., que sean compatibles con distintos programas. Es recomendable que se estructure bajo un paquete de estandarizaci??n, como SCORM.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Los OVA son:</div>
                                    <div class="card-footer">
                                       <p><ul>
                                           <li>Reutilizables: a partir de un OVA existente, puede modificarse o crearse uno nuevo, mejorando su contenido o utilizarlo en otros contextos.</li>
                                           <li>Compatibles: su compatibilidad con otros est??ndares sin inconvenientes t??cnicos al utilizarlos.</li>
                                           <li>Estructurados: con una interfaz f??cil de utilizar y explorar por el usuario, contando con un dise??o atractivo.</li>
                                           <li>Atemporales: no pierden vigencia en el tiempo ni en los contextos que se utilizan</li>
                                       </ul></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Material Extra</div>
                                    <div class="card-footer">
                                        <p>En los siguientes videos se explica de maneras muy distintas pero claras de que es un OVA (Objeto virtuales de aprendizaje):</p>
                                        <p><link rel="stylesheet" type="text/css" href="">
                                            <a target="_blank" href="https://www.youtube.com/watch?v=OJmmvpxKhN8">Que es un OVA (Objeto Virtual de Aprendizaje)</a>
                                        </p>
                                        <p><link rel="stylesheet" type="text/css" href="">
                                            <a target="_blank" href="https://www.youtube.com/watch?v=5NWQ3jqWx3w">??Qu?? es un OVA? -Objeto Virtual de Aprendizaje-</a>
                                        </p>
                                        <p><a target="_blank" href="https://www.youtube.com/watch?v=r30ld0w8R4s">OVA - Objetos Virtuales de Aprendizaje</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Actividad</div>
                                    <div class="card-footer">
                                        <p>Tema: Objeto virtuales de aprendizaje: OVA</p>
                                        <p>Tipo: Quiz</p>
                                        <p>Indicaciones: Buscar las palabras.</p>
                                        <p>Link de Acceso: <a href="#" data-toggle="modal" data-target="#exampleModalLong">OVA (Objeto virtuales de aprendizaje)</a></p>
                                        <p>Tiempo: 10 minutos</p>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Actividad - OVA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="../capitulo5/ova_quiz.htm" width="100%" height="450" style="border:1px solid black;"></iframe>
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