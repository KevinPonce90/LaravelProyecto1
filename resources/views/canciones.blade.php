<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANCIONES</title>
</head>
<body>

    @if(is_null($select_Cancion))
        <h1>CANCIONES</h1>
        <ul>
        @foreach ($canciones as $cancion)
            <li>{{ $cancion['nombre'] }} - {{ $cancion['artista'] }}</li>
        @endforeach
        </ul>

    @else

        <h1>Informacion</h1>

        <p>{{ $select_Cancion['nombre'] }} - {{ $select_Cancion['artista'] }}</p>

    @endif
</body>
</html>