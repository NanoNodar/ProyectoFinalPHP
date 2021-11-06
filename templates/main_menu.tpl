<header class="border-bottom" id="mainMenu">
                <div class="menuSep"></div>
                <div class="menuPerfil">
                    <div id="nameAndLastName"></div>
                    <a href="index.php">Inicio</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="imgIco" src="img/ico/user-04.png">
                                {$usuarioLoged}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?connected=update">Modificar Usuario</a></li>
                                <li><a class="dropdown-item" href="index.php?connected=borrarUsuario">Borrar Usuario</a></li>
                                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
                            </ul>
                        </div>
                    
                </div>
            </header>