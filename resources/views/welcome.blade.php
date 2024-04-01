<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
            width: 400px;
            height: 300px;
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
    </style>
</head>
<body>
<nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">nuevo diario a pasientes</a>
    <form class="d-flex" role="search">
    <a class="nav-link active" aria-current="page" href="{{ route('login.create') }}">inicio de seccion</a>
    </form>
  </div>
</nav>
<center>
<div class="container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <br>
                    <img src="{{ asset('img/carusel1.jpg') }}" class="d-block img-carousel" alt="carusel1">
                    <br>
                </div>
                <div class="carousel-item">
                    <br>
                    <img src="{{ asset('img/carusel2.png') }}" class="d-block img-carousel" alt="carusel2">
                    <br>
                </div>
                <div class="carousel-item">
                    <br>
                    <img src="{{ asset('img/carusel3.jpg') }}" class="d-block img-carousel" alt="carusel3">
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
    <center>
        <h1>¿que somos?</h1>
    </center>
    <div class="intro">
            <div class="text-img">
                <p>Somos un sistema web que busca dar una facilidad a los doctores de psiquiatría de <br>
                    mantener un seguimiento más estricto sobre sus pacientes esto con el fin de acelerar <br>
                    el proceso de recuperación o rehabilitación de estos pacientes dependiendo del <br>
                     caso, ya que este sistema permitirá a los doctores analizar las perfectiva diaria sobre <br>
                      su propio proceso de curación. <br> <br>
De igual forma buscamos ser una forma de desahogue ya sea de parte de la familia <br>
del paciente o del mismo paciente, ya que se pueden expresar de forma <br>
completamente libre, no tendrán que preocuparse de que alguna persona que no se <br>
algún doctor lea o borre estas entradas 
    </p>
            </div>
            <div class="text-img">
                <center>
                <img src="{{ asset('img/APOYOPSICOLOGICO.jpg') }}" alt="">
                </center>
            </div>
        </div>
</section>
<section>
    <center>
        <h2>cuáles son los veneficios de realizar un buen seguimiento en el tratamiento psicológico</h2>
    </center>
    <ul>
        <li><h3>Mejora de la confianza</h3></li>
        <ul>
            <li>
                <p>Al establecer una relación de confianza mas amplia con tu terapeuta, le será más fácil ser más abierto con las demás personas, para poder compartir de forma más fácil información importante con seres queridos, u otras personas a continuación podrían ver un video que explique mejor esto</p>
                <div class="container">
                <iframe width="400" height="300" src="https://www.youtube.com/embed/UxhGgMUvt5E" frameborder="0" allowfullscreen></iframe>
                </div>
            </li>
        </ul>
        <li><h3>Mejor manejo de los conflictos</h3></li>
        <ul>
            <li>
                <p>En la vida cotidiana se presentarán muchos conflictos, pero lo importante es tener la capacidad de resolver estos mismos de la mejor manera posible para llegar a cumplir un objetivo tener un proceso terapéutico se poden adquirir todo tipo de herramientas para eso a continuación, se mostrará un video que explique mejor esto </p>
                <div class="container">
                <iframe width="400" height="300" src="https://www.youtube.com/embed/ut9ITixue1o" frameborder="0" allowfullscreen></iframe>
                </div>          
            </li>
        </ul>
        <li><h3>Mejora en las habilidades sociales</h3></li>
        <ul>
            <li><p>A muchas personas se le dificulta socializar con otras personas, lo cual causa que estas mismas estén sujetas a situaciones negativas con niveles de seriedad diferentes, pero si se tiene con buen acompañamiento terapéutico la persona puede observar las creencias que tienes sobre los otros y sobre si mismo, aprendiendo nuevas maneras de relacionarse con las demás personas a continuación se mostrar un video que permita ejemplificar mejor esto</p></li>
            <div class="container">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/r-mHX6UwgS8" frameborder="0" allowfullscreen></iframe>
            </div>
        </ul>
        <li><h3>Mejora de la salud mental</h3></li>
        <ul>
            <li>
                <p>Realizar un buen proceso terapéutico es clave para llevar o restaurar una buena salud mental ya que para la vida cotidiana hay que tener una mente clara y sana, esto con el fin de afrontar los retos que se pueden presentar cada día, a continuación e mostrara un video que explicara mejor esto mismo</p>
            </li>
            <div class="container">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/ET07JuROce0" frameborder="0" allowfullscreen></iframe>
            </div>
        </ul>
    </ul>
</section>
<footer>
<div>
      <h3>Creador</h3>
      <p>Nicolas Turcy Santos</p>
      <p>Corporación universitaria iberoamericana</p>
      <p>Diplomado en desarrollo web</p>
      <p>Soacha, Cundinamarca </p>
      <p>2024</p>
    </div>
    <div>
      <h3>redes sociales</h3>
      <ul>
        <li><a href="https://m.facebook.com/people/Nicolas-Turcy-Santos/100009155986728/">facebook</a></li>
        <li><a href="https://co.linkedin.com/in/nicolas-turcy-santos-8094a32b0">linkedin</a></li>
        <li><a href="https://www.youtube.com/channel/UCzBBx0OyK6cky-dCzhav7dA">youtube</a></li>
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
        </ul>
    </div>
</footer>
</body>
</html>