<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-brand {
            color: white;
        }
        .nav-link {
            color: white;
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
    </style>
</head>
<body>
<nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">nuevo diario a pacientes</a>
    <form class="d-flex" role="search">
    <li><a class="nav-link active" aria-current="page" href="{{ route('register.index') }}">registrar</a></li>
    <li><a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">retornar</a></li>
    </form>
  </div>
</nav>
<br><br>
<div class="container-fluid">
    <div class="block mx-auto p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold">iniciar sesión</h1>
        <form action="{{ route('login.store') }}" method="POST" class="mt-4">
            @csrf
            <input type="text" name="correo" id="correo" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="correo">
            <br>
            <input type="password" name="clave" id="clave" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="contraseña">
            <br>
            @error('correo')
            <p class="border border-red-500 rounded-md bg-red-100 w-full p-2 my-2">Acceso denegado</p>
            @enderror
            <button type="submit" class="rounded-md w-full text-lg font-semibold p-2 my-3">ingresar</button>
        </form>
    </div>
</div>
</body>
</html>
