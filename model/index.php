<?php
require_once "articulo.php";
require_once "bebida.php";

$menu = [
    new Articulo("Ensalada César", 8.5, true, "Entrante"),
    new Articulo("Hamburguesa Clásica", 12, true, "Principal"),
    new Articulo("Pizza Margarita", 10, false, "Principal"),
    new Articulo("Spaghetti Boloñesa", 11, true, "Principal"),
    new Articulo("Sopa de Tomate", 7, false, "Entrante"),
    new Bebida("Coca-Cola", 2.5, true, "Bebida", "Mediano", "Fría"),
    new Bebida("Café", 1.5, true, "Bebida", "Pequeño", "Caliente"),
    new Bebida("Té Helado", 2, false, "Bebida", "Grande", "Fría"),
    new Bebida("Jugo de Naranja", 3, false, "Bebida", "Mediano", "Fría")
];

$ubicaciones = [
    "Centro" => [
        "direccion" => "Calle Mayor 123, Centro",
        "telefono" => "123-456-789",
        "horario" => "10:00 - 22:00"
    ],
    "Norte" => [
        "direccion" => "Avenida Norte 456, Zona Norte",
        "telefono" => "987-654-321",
        "horario" => "11:00 - 20:00"
    ],
    "Sur" => [
        "direccion" => "Boulevard Sur 789, Zona Sur",
        "telefono" => "654-321-987",
        "horario" => "10:00 - 23:00"
    ]
];

$pedido = ["Ensalada César", "Pizza Margarita", "Café"];

//TODO Filtrar platos por disponibilidad, guardando en variable $disponibles
$disponibles = array_filter($menu, function($articulo) {
    return $articulo->disponibilidad;
});

//////////////////////////////
//        FUNCIONES         //
//////////////////////////////

//TODO Función para imprimir una lista de artículos con nombre y precio
function imprimirListaArticulos($articulos){
    foreach ($articulos as $a) {
        echo "<li>{$a->nombre}. {$a->precio}</li>";
    }
}

//TODO Función para imprimir un pedido
function imprimirPedido($pedido, $menu) {
    echo "<table border='1' cellspacing='3' cellpadding='4'>";
    echo "<tr><th>Artículo</th><th>Precio</th></tr>";
    $total = 0;

    foreach ($pedido as $nombrePedido) {
        $encontrado = false;
        foreach ($menu as $articulo) {
            if ($articulo->nombre === $nombrePedido) {
                $encontrado = true;
                if ($articulo->disponibilidad) {
                    echo "<tr><td>{$articulo->nombre}</td><td>€{$articulo->precio}</td></tr>";
                    $total += $articulo->precio;
                } else {
                    echo "<tr><td>{$articulo->nombre}</td><td>No disponible</td></tr>";
                }
                break;
            }
        }
        if (!$encontrado) {
            echo "<tr><td>{$nombrePedido}</td><td>No encontrado en el menú</td></tr>";
        }
    }

    echo "<tr><td><b>Total</b></td><td><b>€{$total}</b></td></tr>";
    echo "</table>";
}

//TODO Función para imprimir las ubicaciones
function imprimirUbicaciones($ubicaciones) {
    echo "<ul>";
    foreach ($ubicaciones as $nombre => $info) {
        echo "<li><strong>{$nombre}:</strong> {$info['direccion']}. Teléfono: {$info['telefono']}. Horario: {$info['horario']}</li>";
    }
    echo "</ul>";
}
?>
    
<h2>Menú Completo:</h2>
<ul>
    <?php imprimirListaArticulos($menu); ?>
</ul>

<h2>Platos disponibles:</h2>
<ul>
    <?php imprimirListaArticulos($disponibles); ?>
</ul>

<h2>Pedido realizado:</h2>
<?php imprimirPedido($pedido, $menu); ?>

<h2>Ubicaciones de Recogida:</h2>
<?php imprimirUbicaciones($ubicaciones); ?>

<p>Ilustración 1 - Resultado final</p>