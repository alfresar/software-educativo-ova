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
                                    <a class="nav-link active" href="capitulo_3.php">Capitulo 3</a>
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
                        <h1 class="mt-4">Capitulo #3 Dise??o del Software Educativo</h1>
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
                                        <p>En el dise??o del software educativo se deben tener definidos los objetivos de aprendizaje, la estructura del contenido, las actividades de formaci??n, los recursos complementarios, la evaluaci??n para el usuario, etc.</p>

                                        <p>La calidad es otro aspecto importante que el docente tiene que tomar en cuenta al momento de elaborar sus materiales did??cticos. La calidad implica: saber manejar la informaci??n que est?? a su alcance, adecuarla a sus necesidades, a las necesidades de sus alumnos y saberla comunicar. Con ello el docente intentar?? desencadenar procesos de aprendizaje en los alumnos, mediante su dominio de la hipermedia (palabras, im??genes y sonidos) como una nueva y necesaria forma de expresi??n, as?? como la adquisici??n de conocimiento, que se desarrolla en los diferentes equipos de investigaci??n sobre la materia de inter??s, las nuevas tecnolog??as de la informaci??n y los nuevos m??todos pedag??gicos (Duart y Sangr??, 2000).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Mas Datos...</div>
                                    <div class="card-footer">
                                       <p>Este software educativo, se dise??a con base en una metodolog??a fundamentada por la ingenier??a del software que permite su desarrollo como apoyo did??ctico a los programas de estudio de educaci??n b??sica, media y de estudios superiores. Se determin?? una necesidad, que consisti?? en la falta de un software educativo que sirviera de apoyo para un ??rea de estudio, como es la Contabilidad Financiera en el ??mbito Educativo. Para el an??lisis y delimitaci??n del tema, se respondi?? a las preguntas ??Que se va a hacer? ??Cu??nto se abordar?? de contenido? Se establecieron objetivos de estudio.</p>

                                       <p>Se defini?? al usuario, mediante el establecimiento de su perfil y nivel escolar. Se seleccion?? y estructur?? el contenido tem??tico, bas??ndose en el programa did??ctico escolarizado. Mediante el trabajo conjunto con profesores, pedagogos, psic??logos, redactores, se crearon m??dulos de aprendizaje y se seleccion?? el tipo de software educativo a desarrollar (tutorial, ejercitador, juego). Se dise??aron las interfaces, acordes al medio ambiente que necesita el alumno y se definieron las estructuras de evaluaci??n (Pel??ez y L??pez, 2006).
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Material Extra</div>
                                    <div class="card-footer">
                                        <p>En los siguientes videos, encontrar?? la introduccion al dise??o de software y los pasos de como deberiamois hacerlo.</p>
                                        <p><a target="_blank" href="../capitulo2/Sopaletras/Sopaletras.htm">Dise??o de software educativo</a>
                                        </p>
                                        <p><a target="_blank" href="https://www.youtube.com/watch?v=tKJeEXwZ1QA&ab_channel=CatchExceptionCanal">Introducci??n al dise??o de softwareo</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">Actividad</div>
                                    <div class="card-footer">
                                        <p>Tema: Dise??o del Software Educativo</p>
                                        <p>Tipo: Sopa de Letras</p>
                                        <p>Indicaciones: Buscar las palabras.</p>
                                        <p>Link de Acceso: <a href="#" data-toggle="modal" data-target="#exampleModalLong">Dise??o del Software Educativo</a></p>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Actividad - Dise??o del Software Educativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="../capitulo3/Sopaletras/Sopaletras.htm" width="100%" height="450" style="border:1px solid black;"></iframe>
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