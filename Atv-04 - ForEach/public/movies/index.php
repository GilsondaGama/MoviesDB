<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmes</title>
</head>

<body>

  <?php

  $movies = array();

  $movies[] = array("titulo" => "Mulher-Maravila",  "duracao" => "01:40", "categoria" => "Ação");
  $movies[] = array("titulo" => "O Rei Leão",       "duracao" => "01:20", "categoria" => "Infantil");
  $movies[] = array("titulo" => "Mulher-Maravila",  "duracao" => "01:30", "categoria" => "Ação");
  $movies[] = array("titulo" => "Logan",            "duracao" => "01:20", "categoria" => "Ação");
  $movies[] = array("titulo" => "Lugar Silenciose", "duracao" => "01:30", "categoria" => "suspense");

  ?>


  <table>
    <tr>
      <th>titulo</th>
      <th>duracao</th>
      <th>categoria</th>
    </tr>

    <?php
    foreach ($movies as $movie) {
    ?>

      <tr>
        <td><?php echo $movie['titulo']; ?></td>
        <td><?php echo $movie['duracao']; ?></td>
        <td><?php echo $movie['categoria']; ?></td>
      <tr>

      <?php
    }
      ?>

  </table>


</body>

</html>