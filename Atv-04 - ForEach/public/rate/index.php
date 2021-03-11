<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliação</title>
</head>

<body>

  <?php

  $rate = array();

  $rates[] = array("titulo" => "Mulher-Maravila",  "nota" => "8.45");
  $rates[] = array("titulo" => "O Rei Leão",       "nota" => "9.20");
  $rates[] = array("titulo" => "Mulher-Maravila",  "nota" => "7.30");
  $rates[] = array("titulo" => "Logan",            "nota" => "9.20");
  $rates[] = array("titulo" => "Lugar Silenciose", "nota" => "8.30");


  ?>

  <table>
    <tr>
      <th>titulo</th>
      <th>nota</th>
    </tr>

    <?php
    foreach ($rates as $rate) {
    ?>

      <tr>
        <td><?php echo $rate['titulo']; ?></td>
        <td><?php echo $rate['nota']; ?></td>
      <tr>

      <?php
    }
      ?>

  </table>



</body>

</html>