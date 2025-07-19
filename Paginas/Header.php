<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/Hoja de estilos.css">
    <link rel="shortcut icon" href="../Recursos/logotipo-8.png" type="image/x-icon">
    <title>DotBox Studio</title>
    <!--Añadimos todos los componenetes de Bootstrap 3.3.5-->
    <link rel="stylesheet" href="../Public/bootstrap/css/bootstrap.min.css">
    <!--Añadimos otra libreria-->
    <link rel="stylesheet" href="../Public/css/font-awesome.css">
    <!--Añadimos la libreria del tema de estilos AdminLTE-->
    <link rel="stylesheet" href="../Public/css/AdminLTE.min.css">
    <!--Añadimos Librerias de AdminLTE-->
    <link rel="stylesheet" href="../Public/css/_all-skins.min.css">
    <!--Añadimos la libreria de Jquery-->
    <script src="../Public/js/jquery-3.7.1.min.js"></script>
    <!--Libreria de Bootstrap-->
    <script src="../Public/js/bootstrap.min.js"></script>
    <!--Libreria de AdminLTE-->
    <script src="../Public/js/app.js"></script>
    <!--Añadimos bootbox a nuestro projecto-->
    <script src="../Public/js/bootbox.min.js"></script>
    
</head>

<body class="body">
    <div class="header">
        <div class="header-left">
            <a href="loginV2.html" class="logo">
                <img src="../Recursos/isotipo-8.png" alt="Logo" style="height: 75px;">
            </a>
        </div>
        <div class="header-center" style="height: auto;">
            <a href="pagina-integrantes.php"><button>Inicio</button></a>

            
        </div>
        <!--Navbar menu derecho-->
                <div class="header-right">
                    <ul class="nav navbar-nav">
                        <!--Cuenta de Usuario: los estilos estan en dropdown.less-->
                        <li class="dropdrown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--Cargamos la imagen del usuario-->
                                <img src="../Public/img/freddy.jpg" alt="Imagen Usuario" class="user-image">
                                <!--Nombre de Usuario-->
                                <span class="user2">Dave Quintero</span>
                            </a>
                            <!--Desplegable del usuario-->
                            <ul class="dropdown-menu">
                                <!--Imagen del usuario-->
                                <li class="user-header">
                                    <img src="../Public/img/freddy.jpg" alt="Imagen de Usuario" class="img-circle">
                                    
                                </li>
                                <!--Menu footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <!--Añadimos el nombre de usuario y su rol-->
                                        
                                        <p class="user">Rol: Administrador</p>
                                        <a href="#" class="btn btn-default btn-flat">Cerrar Sesion</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav><!--Fin del navbar-->
        
        
    </div>
</body>