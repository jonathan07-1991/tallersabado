<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="img/compras.png" width="30" height="30" alt="" loading="lazy">
            Tienda
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registro</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <form action="" class="mt-5 mb-5">
                        <div class="form-group">
                            <label for="nombre">NOMBRE</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">APELLIDO</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                        </div>
                        <div class="form-group">
                            <label for="cedula">CÉDULA</label>
                            <input type="number" class="form-control" id="cedula" name="cedula">
                        </div>
                        <div class="form-group">
                            <label for="edad">EDAD</label>
                            <input type="number" class="form-control" id="edad" name="edad">
                        </div>
                        <div class="form-group">
                            <label for="telefono">TELEFONO</label>
                            <input type="number" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="form-group">
                            <label for="direccion">DIRECCIÓN</label>
                            <input type="number" class="form-control" id="direccion" name="direccion">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="botonEnviar">ENVIAR</button>
                    </form>
                </div>
                <div class="col-8">
                <img src="img/personas.png" alt="img1" class="img-fluid mt-5 mb-5">
                </div>
            </div>
        </div>
    
    </main>
    <footer>
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>