<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <form class="form-group" method="POST" action="/trainer">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

</body>
</html>