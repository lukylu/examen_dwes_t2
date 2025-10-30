
### Puntuación
- `1p`: Repositorio
- `2p`: Menú completo
- `3p`: Platos disponibles
- `3p`: Pedido realizado
- `1p`: Ubicaciones de Recogida

### Presentación
Desarrolla un sistema en PHP para gestionar el menú de un restaurante que ofrece comida para llevar. El sistema debe mostrar:
- Menú completo.
- Menú filtrarlo por disponibilidad
- Tabla con el detalle de un pedido realizado.
- Lista de ubicaciones de recogida.

Encontrarás el esqueleto de un proyecto, dentro del cual deberás:
- Importar los archivos necesarios desde `index.php`.
- Definir las clases `Articulo` y `Bebida`, de forma que puedas utilizar el array ya definido.
- Completar `index` con la funcionalidad indicada. Los lugares donde se espera incluir código, están marcados por un comentario `TODO`.

### Git
Debes crear un repositorio git y hacer un mínimo de 4 commits relevantes a lo largo del proyecto. No hace falta que lo publiques en GitHub; es suficiente con que la carpeta `.git` esté presente en el archivo comprimido que contiene tu proyecto.

### Clases
Los atributos de ambas clases serán públicos para poder acceder a ellos directamente.

#### Clase `Articulo`
Atributos:
- `nombre`
- `precio`
- `disponiblidad`
- `categoria`
Métodos:
- Constructor que encaje con las llamadas al mismo desde index.

#### Clase `Bebida`
Esta clase hereda de `Articulo`y añade el atributo:
- `tamaño`
Métodos:
- Constructor que encaje con las llamadas al mismo desde index. Dentro de este constructor se debe llamar al constructor de la clase padre, para así solo tener que asignar un atributo manualmente.

### Index
El archivo está organizado de la siguiente forma:

1. Importar los archivos necesarios.
2. Declaración de array `$artículos`.
3. Declaración de array `$ubicaciones`.
4. Declaración de array `$disponibles`. Se deberá filtrar de alguna forma para lograr un array que contenga solo los artículos disponibles (ver atributo `disponibilidad`.
5. Declaración de array `$pedido`. 
6. implementación de la función `imprimirListaArticulos`.
7. implementación de la función `imprimirPedido`.
8. implementación de la función `imprimirUbicaciones`.
9. Impresiones por pantalla

Observa la captura de pantalla del resultado final para que tu resultado se parezca lo máximo posible.

#### `imprimirPedido`
Esta función recibe un array `$pedido` con los nombres de los productos seleccionados y el array completo `$menu`.

• La función debe recorrer el menú y mostrar una tabla HTML que incluya:
• Una fila por cada artículo del pedido con el nombre y el precio.
• Si un artículo en el pedido no está disponible, muestra “No disponible” en lugar del precio.
• Si algún artículo del pedido no se encuentra en el menú, muestra “No encontrado en el menú”.
• Muestra una fila final con el **total** del pedido, sumando solo los artículos disponibles.

