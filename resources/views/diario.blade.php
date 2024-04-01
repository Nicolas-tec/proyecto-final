<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d73986632c.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background: silver;
    }
    .navbar-brand {
        color: white;
    }
    .nav-link {
        color: white;
    }
    .img-carousel {
        width: 50%; 
        height: auto; 
    }
    .p1 {
        background: white;
        padding: 20px; 
    }

    h1 {
        text-transform: uppercase;
    }
    .text-img img {
        border-radius: 50%;
        width: 500px;
        height: 400px;
    }
    .intro {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 20px;
    }
    .text-img p {
        max-width: 100%; 
    }
    h2{
        text-transform: uppercase; 
    }
    iframe{
        border-radius: 10%; 
    }
    footer {
        background-color: #0080FF;
        color: white;
        padding: 20px;
        text-align: center;
    }
    footer div {
        margin-bottom: 20px;
    }
    footer ul {
        list-style: none;
        padding: 0;
    }

    footer ul li {
        display: inline;
        margin-right: 10px;
    }

    footer a {
        color: white;
        text-decoration: none;
    }
    .navbar-nav .nav-link:hover {
    color: black;
}
.carousel-item img {
    max-height: 400px;
    height: 300px;
    width: 500px; 
    margin: auto; 
}
</style>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center p-3">tu diario de tratamiento</h1>
    @if (session("CORRECTO"))
        <div class="alert alert-success">{{session("CORRECTO")}}</div>
    @endif
    @if (session("ERROR"))
    <div class="alert alert-danger">{{session("ERROR")}}</div>
@endif
<script>
  var res=function(){
    var not=confirm("¿deseas eliminar la entrada?");
    return not;
  }
</script>
      <!-- Modal crear-->
  <div class="modal fade" id="Crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear entreada</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route("diario.create")}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="Fecha" placeholder="Fecha">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del paciente</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Nombre_paciente" placeholder="Nombre del paciente">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del doctor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Nombre_doctor" placeholder="Nombre del doctor">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enfermedad</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Enfermedad" placeholder="Enfermedad">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">entrada del dia</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Reporte_día" placeholder="entrada del dia"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>    
    <div class="p-5 table-responsive">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Crear">Agregar entrada</button>
        <br>
        <br>
        <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr class="table-primary">
                <th scope="col">Fecha</th>
                <th scope="col">Nombre del paciente</th>
                <th scope="col">Nombre del doctor</th>
                <th scope="col">Enfermedad</th>
                <th scope="col">entrada del dia</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item )
                <tr>
                    <th>{{$item->Fecha}}</th>
                    <td>{{$item->Nombre_paciente}}</td>
                    <td>{{$item->Nombre_doctor}}</td>
                    <td>{{$item->Enfermedad}}</td>
                    <td>{{$item->Reporte_día}}</td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#Editar{{$item->id}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>
                        <a href="{{route("diario.delete", $item->id)}}" onclick="return res()" class="btn btn-danger btn-sm"><i class="fas fa-delete-left"></i></a>
                    </td>
  
  <!-- Modal modificar-->
  <div class="modal fade" id="Editar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">modificar entrada</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route("diario.update")}}" method="POST">
              @csrf
              <div class="mb-3">
                <input type="hidden" name="id" value="{{$item->id}}">
              </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="Fecha" value="{{$item->Fecha}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del paciente</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Nombre_paciente" value="{{$item->Nombre_paciente}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del doctor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Nombre_doctor" value="{{$item->Nombre_doctor}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enfermedad</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Enfermedad" value="{{$item->Enfermedad}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">entrada del dia</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Reporte_día">{{$item->Reporte_día}}</textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <footer>
        <div>
              <h3>Creadores</h3>
              <p>Nicolas Turcy Santos</p>
              <p>Laura Paola Leon Castillo</p>
              <p>Diplomado en desarrollo web</p>
              <p>2024</p>
            </div>
            <div>
              <h3>redes sociales</h3>
              <ul>
                <p>NIcolas Turcy Santos</p>
                <li><a href="https://m.facebook.com/people/Nicolas-Turcy-Santos/100009155986728/"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://co.linkedin.com/in/nicolas-turcy-santos-8094a32b0"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCzBBx0OyK6cky-dCzhav7dA"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
              <ul>
                <p>Laura Paola Leon Castillo</p>
                <li><a href="https://www.instagram.com/laurapaolaleon03/?igsh=enhjYzF1ZG54NjJ2"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
            <div>
                <h3>Referencias bibliográficas</h3>
                <ul>
                    <li><a href="https://www.terapify.com/blog/por-que-es-importante-el-seguimiento-en-terapia/">¿Por qué es importante tener un seguimiento en la terapia psicológica?</a></li><br>
                    <li><a href="https://www.youtube.com/watch?v=UxhGgMUvt5E">Cómo mejorar la autoestima con la Terapia Breve Estratégica</a></li><br>
                    <li><a href="https://www.youtube.com/watch?v=ut9ITixue1o">Cómo resolver los conflictos con tus hijos. Pilar de la Torre, psicóloga</a></li><br>
                    <li><a href="https://www.youtube.com/watch?v=r-mHX6UwgS8">Ejemplo de terapia psicológica sobre habilidades sociales</a></li><br>
                    <li><a href="https://www.youtube.com/watch?v=ET07JuROce0&t=1s">¿Cómo es ir a terapia para cuidar la salud mental?</a></li><br>
                    <li><a href="https://www.tuterapia.com.uy/blog/la-sinceridad-beneficios-de-ser-verdadero/#:~:text=La%20Honestidad%20nos%20hace%20Ganar%20(en%20muchos%20sentidos)&text=confianza%20y%20respeto%20hacia%20tu,como%20un%20mecanismo%20de%20defensa.">La Sinceridad: Beneficios de ser Verdadero</a></li><br>
                    <li><a href="https://www.youtube.com/watch?v=TA9U517ISOo&t=3472s">Cómo HACER un CRUD en Laravel 9 y MySQL: Tutorial completo PASO A PASO</a></li><br>
                    <li><a href="https://www.youtube.com/watch?v=DqWXEiyp22E&t=2106s">Login y Registro de usuarios con laravel 8</a></li><br>
                </ul>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>