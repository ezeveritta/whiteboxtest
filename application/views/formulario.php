<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container w-25 mt-5 bg-light border p-3">
        <form action="http://localhost/whitebox/index.php/Formulario/lets_post_it"  method="post" enctype="multipart/form-data">
            <div class="form-group mt-2">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>

            <div class="form-group mt-2">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control">
            </div>

            <div class="form-group mt-2">
                <label for="dni">Dni</label>
                <input type="text" id="dni" name="dni" class="form-control">
            </div>

            <input type="submit" class="btn btn-outline-dark mt-3" value="Enviar">
        </form>
    </main>
</body>
</html>