<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/chat.css">
    <script src="js/functions.js"></script>


    <title>Sistema Escolar</title>
</head>

<body>


    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->

    <title>Sistema Escolar</title>
    </head>

    <body>

        <section class="content">
            <header class="border-bottom" id="mainMenu">
                <div class="menuSep"></div>
                <div class="menuPerfil">
                    <div id="nameAndLastName"></div>
                    
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="imgIco" src="img/ico/user-04.png">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="mod_profile.html">Modificar Usuario</a></li>
                                <li><a class="dropdown-item" href="javascript:borrarUsuario()">Borrar Usuario</a></li>
                                <li><a class="dropdown-item" href="index.html">Salir</a></li>                                
                            </ul>
                        </div>
                    
                </div>
            </header>
            <section class="middlePanel">
                <aside  class="border-end" id="leftMenu">
                    <ul>
                        <li>Actividades</li>
                        <li>Cursos</li>
                        <li>Tareas</li>
                        <li>Recursos</li>                        
                        <li><a href="javascript:createChat()">Chat</a></li>
                    </ul>
                </aside>
                <div id="mainPanel">
                    
                </div>
            </section>
        </section>
        <script src="js/main.js"></script>
        <script src="js/deleteProfile.js"></script>
        <script src="js/chat.js"></script>
        

    </body>