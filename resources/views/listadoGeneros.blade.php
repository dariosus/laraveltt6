<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Mis Géneros</h1>
    <ul>
      <?php foreach($generos as $key => $genero) : ?>
        <li>
          <a href="/genero/<?=$key?>">
            <?=$genero?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </body>
</html>
