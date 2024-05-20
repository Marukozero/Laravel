<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/welcome.css'])


        <title>Menu de rediriccion</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        <body>
            <h1>Bienvenido a nuestra tiendita</h1>
            <h3>A donde quieres ir?</h3>
            <section class="boton_der">
                <p>Ver los productos: </p>
                <a href="/producto">Producto</a>
            </section>
            <section class="boton_izq">
                <p>Ver los tipos de productos que tenemos: </p>
                <a href="/tipo">Tipo</a>
            </section>
        </body>
</html>
