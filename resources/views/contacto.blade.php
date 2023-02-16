<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contacto" method="POST">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre">
    <br><br>
    @error('nombre')
        <h4>{{ $message }}</h4>
    @enderror
    <label for="codigo">Codigo</label><br>
    <input type="text" name="codigo" id="codigo">
    <br><br>
    @error('codigo')
        <h4>{{ $message }}</h4>
    @enderror
    <input type="submit">   
    </form>
</body>
</html>