<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield("titulo")
    </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>
            Inicio
          </li>
          <li>
            <a href="/peliculas">
              Películas
            </a>
          </li>
          <li>
            <a href="/generos">
              Géneros
            </a>
          </li>
          <li>
            <a href="/actores">
              Actores
            </a>
          </li>
          <li>
            <a href="/pelisBuenRating">
              Pelis Buen Rating
            </a>
          </li>
          @if (session("usuario"))
            <li>
              Hola {{session("usuario")->name}}
            </li>
          @else
            <li>
              <a href="/register">Registración</a>
            </li>
            <li>
              <a href="/login">Login</a>
            </li>
          @endif
        </ul>
      </nav>
    </header>
    <section id="principal" class="container">
      @yield("principal")
    </section>
    <footer class="text-muted">
      Digital House, 2018
    </footer>
  </body>
</html>
