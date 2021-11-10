# Proyecto Final de PHP UTN
  El proyecto trata de una plantilla de lo que podría ser un ecommerce, con una base de datos SQL con tablas de usuarios y artículos y la librería Smarty
  ## Guía
  La página tiene dos vistas, una de administrador y otra de cliente.
  - Cualquiera que se registre tendrá condición de cliente y se mostrara en el index los artículos a comprar, acceso a una página para editar su usuario y datos, para borrarlo y se le permitirá salir de su usuario. El index tiene un aside que muestra distintas categorías, con el detalle que una categoría es un recomendado por el administrador que es la que tendrá vista de entrada.
   - El usuario con condición de administrador solo puede obtener ese rango modificando desde la base de datos. Los usuarios administradores tienen de primera vista el mismo index, pero tendrán en el dropdown del navbar más paginas para navegar. Serán las mismas que el cliente con la inclusión de Deshabilitar o Habilitar otro usuario, una lista de usuario donde puede ver alguno de sus datos, una lista de productos para saber su información, agregar, eliminar y editar un producto
   - Los administradores para probar son usuario: Nano, password: 12345
  ## Detalles
   - Las sesiones tienen un límite de tiempo de 10 minutos
   - Se pueden guardar las contraseñas
   - El diseño esta hecho con Bootstrap
   - Las contraseñas se podrían usar en sha1() pero no me parece correcto ponerlo cuando se está probando la pagina
   - La tabla de mensajes que había antes traía problemas a la hora de eliminar o editar un producto por como estaban relacionadas, por eso fue eliminada
   - En la tabla de artículos fue agregada la columna "recomendado" para poder usar esa categoría en index.php
