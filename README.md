
# ComposedAdminLte

## Contribuyendo en el desarrollo.

Para contribuir en el desarrollo de este proyecto primeramente se debe hacer un *fork* de este repositorio y clonar en local la nueva copia del mismo.

Seguidamente se deberán ejecutar los siguientes comandos sobre el directorio local donde se ha clonado el repositorio.

    $ composer install
    $ php vendor/bin/then install:assets examples then-package.json
    $ cd examples/assets
    $ bower install
    $ npm install
    $ cd ../..

Para ejecutar las páginas de ejemplos se debe ejecutar el comando:

    $ php serve

Esto creará una URL donde se encontrarán dichas páginas.

Una vez que usted haga sus contribuciones al código puede confirmarlas en su repositorio y crear un *pull request* para que las mismas sean incluidas en el proyecto.

Recomendamos visitar la web del proyecto [AdminLTE](https://adminlte.io/themes/AdminLTE/index.html) para conocer los componentes que faltan por desarrollar en nuestro proyecto.
