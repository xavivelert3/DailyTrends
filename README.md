##DAILYTRENDS

#PASOS A TENER EN CUENTA

- Ejectutar directamente en IP local 192.168.1.1 o localhost
- Crear Base de datos por defecto de laravel: homestead
- Ejecutar $ php artisan migrate para crear las tablas necesarias

#DESCRIPCION

La web inicialmente trae las 5 últimas noticias de los periódicos El Pais y El Mundo, se conecta a su respectivo enlace RSS y muestra las últimas 5 noticias, sin guardar en BBDD.
Tiene el modelo Feed que a través de dos métodos se encarga de traer las noticias, uno para cada periódico.
Tenemos las opciones CRUD, crear, leer, editar y eliminar que permite la gestión de las noticias personales y también la opción de crear la noticia de portada del el Pais que está actualmente, utilizando web scraping, mediante el enlace buscar noticia.

He creado dos controladores uno para CRUD o otro más personalizable para añadir o quitar funcionalidad, a todo ello acompañan las vistas necesarias.

Cualquier duda estoy disponible, xavivelert@gmail.com