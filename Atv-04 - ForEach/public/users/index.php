<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários</title>
</head>

<body>

  <?php

  $users = array();

  $users[] = array("email" => "marcio@gmail.com",    "nome" => "Mácio",   "sobrenome" => "Andrade");
  $users[] = array("email" => "andre@gmail.com",     "nome" => "André",   "sobrenome" => "Silva");
  $users[] = array("email" => "carla@gmail.com",     "nome" => "Carla",   "sobrenome" => "Peixoto");
  $users[] = array("email" => "regina@gmail.com",    "nome" => "Regina",  "sobrenome" => "Oliva");
  $users[] = array("email" => "roberta@gmail.com",   "nome" => "Roberta", "sobrenome" => "Trindade");

  ?>

  <table>
    <tr>
      <th>email</th>
      <th>nome</th>
      <th>sobrenome</th>
    </tr>

    <?php
    foreach ($users as $user) {
    ?>

      <tr>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['nome']; ?></td>
        <td><?php echo $user['sobrenome']; ?></td>
      <tr>

      <?php
    }
      ?>

  </table>


</body>

</html>