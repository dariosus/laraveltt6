<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Mis películas</h1>
    <ul>
      <?php foreach($peliculas as $key => $pelicula) : ?>
        <li>
          <a href="/pelicula/<?=$key?>">
            <?=$pelicula?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </body>
</html>
