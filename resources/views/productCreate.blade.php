<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar nuevos productos</title>
    @vite(['resources/css/create.css'])
</head>
<body>
    <h1>Crear nuevo producto</h1>
    <form action="/producto" method="POST" id="formulario">
        @csrf

        <div class="iform">
            <label for="nombre">Nombre del roducto</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="iform">
            <label for="precio">Precio del producto</label>
            <input type="number" name="precio" id="precio" required>
        </div>

        <div class="iform">
            <label for="marca">Marca del producto</label>
            <input type="text" name="marca" id="marca" required>
        </div>

        <div class="iform">
            <label for="tipos">Categoria del producto</label>
            <select name="tipos[]" id="tipos" multiple required>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
                <label for="tipos">Categorias existentes</label>
            </select>
        </div>

        <input class="iset" type="submit" name="action" value="Enviar">

    </form>

    <a href="/producto">Regresar</a>
</body>
</html>