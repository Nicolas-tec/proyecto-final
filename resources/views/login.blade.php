<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
.navbar-brand {
            color: white;
        }

        .nav-link {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            color: black; /* Cambiar a negro cuando pasa el cursor */
        }

        li {
            display: inline;
            margin-right: 10px;
        }

        button {
            background-color: #0080FF;
            color: white;
            text-align: center;
            padding: 10px; 
            width: 95%;
            margin-bottom: 10px;
            border-radius: 0.25rem;   
        }

        button:hover {
            background-color: #81DAF5;
            color: white;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            background-color: #BDBDBD; 
            border: 1px solid #ced4da; 
            border-radius: 0.25rem; 
            padding: 10px; 
            width: 95%; 
            margin-bottom: 10px; 
            font-size: 1rem; 
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .block {
            width: 400px; 
        }

        .mt-4{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        p{
            background-color: #F5A9A9;
            color: red;
            width: 95%;
            text-align: center;
            border-color: #FF0000;
        }

        .opciones{
            background-color: #BDBDBD; 
            border: 1px solid #ced4da; 
            border-radius: 0.25rem; 
            padding: 10px; 
            width: 95%; 
            margin-bottom: 10px; 
            font-size: 1rem;
            color: #848484;
        }

        .doctor{
            color: #000000;
        }

        .paciente{
            color: #000000;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">nuevo diario a pacientes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('register.index')}}">registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">retornar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container-fluid">
        <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
            <h1 class="text-3xl text-center font-bold">inicio de seccion</h1>
            <form class="mt-4" action="" method="post">
                @csrf
                <input type="email" name="correo" id="correo" style="background-color: #BDBDBD; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 10px; width: 95%; margin-bottom: 10px; font-size: 1rem;" placeholder="ingresa tu correo">
                <br>
                <input type="password" name="clave" id="clave" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="ingresa tu contraseña">
                <br>
                @error('message')
                    <p class="border border-danger rounded-md bg-red-100 w-full text-red-600 p-2 my-2">ACCESO DENEGADO</p>
                @enderror
                <button type="submit" class="rounded-md w-full text-lg font-semibold p-2 my-3">ingresar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>