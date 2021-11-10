# Proyecto Final de PHP UTN
  El proyecto trata de una plantilla de lo que podria ser un ecommerce, con una base de datos SQL con tablas de usuarios y articulos
  ## Guia
  La pagina tiene dos vistas, una de administrador y otra de cliente.
  Cualquiera que se registre tendra condicion de cliente y se mostrara en el index los articulos a comprar, acceso a una pagina para editar su usuario y datos, para borrarlo
    y se le permitira salir de su usuario. El index tiene un aside que muestra distintas categorias, con el detalle que una categoria es un recomendado por el administrador que es
    la que tendra vista de entrada.
   - El usuario con condicion de administrador solo puede obtener ese rango modificando desde la base de datos. Los usuarios administradores tienen de primera vista el mismo index
    pero tendran en el dropdown del navbar mas paginas para navegar. Seran las mismas que el cliente con la inclusion de Deshabilitar o Habilitar otro usuario, una lista de usuario
    donde puede ver alguno de sus datos, una lista de productos para saber su informacion, agregar, eliminar y editar un producto
   - Los administradores para probar son usuario: Nano, password: 12345
  ## Detalles
   - Las sesiones tienen un limite de tiempo de 10 minutos
   - Se pueden guardar las contraseñas
   - El diseño esta hecho con bootstrap
   - Las contraseñas se podrian usar en sha1() pero no me parece correcto ponerlo cuando se esta probando la pagina
   - La tabla de mensajes que habia antes traia problemas a la hora de eliminar o editar un producto por como estaban relacionadas, por eso fue eliminada
   - En la tabla de articulos fue agregada la columna recomendado para poder usar esa categoria en index.php
