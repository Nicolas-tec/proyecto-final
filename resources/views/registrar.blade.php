<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') registrate</title>
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
<nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">nuevo diario a pasientes</a>
    <form class="d-flex" role="search">
    <li><a class="nav-link active" aria-current="page" href="{{ route('login.create') }}">iniciar secion</a></li>
    <li><a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">retornar</a></li>
    </form>
  </div>
</nav>
<br><br>
<div class="container-fluid">
    <div class="block mx-auto p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold">registrar</h1>
        <form action="{{ route('register.store') }}" class="mt-4" method="POST">
          @csrf
          <input type="text" name="nombre" id="nombre" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="nombre">
          <br>
          <select name="rol" id="rol" class="opciones">
            <option value="#">elige un rol</option>
            <option value="doctor" class="doctor">doctor</option>
            <option value="paciente" class="paciente">paciente</option>
        </select>
          <br>
          <input type="text" name="edad" id="edad" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="edad">
          <br>
          <input type="text" name="correo" id="correo" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="correo">
          <br>
          <input type="password" name="clave" id="clave" class="border border-gray-200 rounded-md w-full text-lg p-2 my-2" placeholder="contraseña">
          <br>
          <button type="submit" class="rounded-md w-full text-lg font-semibold p-2 my-3">ingresar</button>
      </form>
    </div>
</div>
</body>
</html>