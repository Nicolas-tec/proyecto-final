<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d73986632c.js" crossorigin="anonymous"></script>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('diario.index') }}">Diario</a>
                    </li>
                    <li class="nav-item">
                        <a id="cerrar-sesion" class="nav-link active" aria-current="page" href="#">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<center>
<div class="container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <br>
                    <img src="{{ asset('img/inicio1.jfif') }}" class="d-block img-carousel" alt="carusel1">
                    <br>
                </div>
                <div class="carousel-item">
                    <br>
                    <img src="{{ asset('img/inicio2.jfif') }}" class="d-block img-carousel" alt="carusel2">
                    <br>
                </div>
                <div class="carousel-item">
                    <br>
                    <img src="{{ asset('img/inicio3.jpg') }}" class="d-block img-carousel" alt="carusel3">
                    <br>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</center>
<section class="p1">
    <div class="container">
        <h1 class="text-center">Bienvenidos al diario de apoyo</h1>
        <br>
        <div class="row">
            <div class="col-md-6">
                <p>Te damos la bienvenida a nuestro nuevo diario de apoyo psicológico donde podrás compartir tu percepción de tus avances 
                    en tu tratamiento y compartirlo con tu médico o profesional de confianza para mejorar a buen tiempo tu tratamiento y 
                    cumplirlo exitosamente.</p>
            </div>
            <div class=" text-img col-md-6">
                <img src="{{ asset('img/APOYOPSICOLOGICO.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

    <center>
        <h2>Cuales son los efectos de los grados de honestidad para tu tratamiento</h2>
    </center>
    <table class="table">
        <thead>
          <tr class="table-info">
            <th scope="col">niveles de honestidad</th>
            <th scope="col">efectos</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-center">
                <center><img src="{{ asset('img/total.jpg') }}" class="d-block img-carousel" alt="carusel1" style="max-width: 500px; max-height: 400px;"></center>
            </th>
            <td>Si eres totalmente honesto no solo con tu psicólogo sino también contigo mismo permitirá avanzar de manera
                 rápida en tu tratamiento ya que puedes informar al profesional que te atiende y determinar que estas por 
                 buen o mal camino, además de mejorar tus relaciones interpersonales con más personas y obtener varios valores 
                 útiles para la vida </td>
          </tr>
          <tr>
            <th class="text-center">
                <center><img src="{{ asset('img/medio.png') }}" class="d-block img-carousel" alt="carusel1" style="max-width: 700px; max-height: 600px;"></center>
            </th>
            <td>si eres mediamente honesto con tu psicólogo y contigo mismo el proceso de tratamiento o recuperación puede avanzar
                 pero a un ritmo mas lento de lo que se podría desear ya que el profesional que te esté tratando, no tendrá toda la
                  información necesaria para poder ayudarte </td>
          </tr>
          <tr>
            <th class="text-center">
                <center><img src="{{ asset('img/bajo.avif') }}" class="d-block img-carousel" alt="carusel1" style="max-width: 100px; max-height: 150px;"></center>
            </th>
            <td>si no eres honesto ni con tu psicólogo ni contigo mismo, el tratamiento se verá severamente saboteado, lo cual causaría 
                que el proceso de tratamiento se extienda, mas de lo que debería o en si llevaría al fracaso, el tratamiento</td>
          </tr>
        </tbody>
      </table>
</section>
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
    <script>
        document.getElementById('cerrar-sesion').addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = '/';
        });
    </script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</html>