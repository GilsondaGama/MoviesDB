<!DOCTYPE html>
<html>

<head>
  <title>--Formulário Contato--</title>
  <meta charset="utf-8" />
  <link href="style.css" rel="stylesheet" media="all" />
</head>

<body>
  <form name="meu_form">

    <h2>Formulario de Contato</h2>


    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Masculino</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Feminino</label><br>




    <table>
      <tbody>
        <tr>
          <td align="right">Nome Completo</td>
          <td><input type="text" id="nome" name="nome" required></td>
        </tr>
        <tr>
          <td align="right">Email</td>
          <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
          <td align="right">Assunto</td>
          <td><input type="text" id="assunto" name="assunto" required></td>
        </tr>
        <tr>
          <td align="right">Opções</td>
          <td>
            <select id="cars" name="cars">
              <option value="1">item_1 da lista</option>
              <option value="2">item_2 da lista</option>
              <option value="3">item_3 da lista</option>
              <option value="4">item_4 da lista</option>
            </select>
          </td>
        </tr>


        <tr>
          <td align="right">Mensagem</td>
          <td>
            <textarea id="mensagem" name="Mensagem"></textarea><br>
            <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
          </td>
        </tr>

      </tbody>
    </table>

  </form>
</body>

</html>