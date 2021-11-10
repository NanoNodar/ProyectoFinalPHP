<header id="header" class="row sticky-top">
    <nav class="navbar navbar-dark bg-dark ">
        <a class="navbar-brand ps-0" href="index.php">Inicio</a>
        <div class="justify-content-end">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                {$usuarioLoged}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="index.php?admin=update">Modificar Usuario</a></li>
                <li><a class="dropdown-item" href="index.php?admin=borrarUsuario">Borrar tu usuario</a></li>
                <li><a class="dropdown-item" href="index.php?admin=DisabledEnabledUser">Deshabilitar/Habilitar un usuario</a></li>
                <li><a class="dropdown-item" href="index.php?admin=Users">Lista de usuarios</a></li>
                <li><a class="dropdown-item" href="index.php?admin=Products">Lista de productos</a></li>
                <li><a class="dropdown-item" href="index.php?admin=InsertProduct">Agregar un producto</a></li>
                <li><a class="dropdown-item" href="index.php?admin=DeleteProduct">Eliminar un producto</a></li>
                <li><a class="dropdown-item" href="index.php?admin=EditProduct">Editar un producto</a></li>
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>
            </ul>
        </div>
    </nav>
</header>