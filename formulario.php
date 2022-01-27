<?php
    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);

        include_once('config_form.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
          <fieldset>
            <legend><strong>Formulário Best Cake</strong></legend>
            <br>
            <div class="inputBox">
              <input type="text" name="nome" id="nome" class="Username" required>
              <label for="nome" class="labelUser">Nome completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="Username" required>
                <label for="nome" class="labelUser">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="Username" required>
                <label for="nome" class="labelUser">Telefone</label>
            </div>
            <br>
            <p>Sexo</p>
           <div class="btn-group">
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="genero" id="masculino" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="genero" id="outro" value="outro" required>
            <label for="outro">Outro</label>
            </div>
            <br>
            <label for="data_nascimento"><strong>Data de Nascimento:</strong></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="Username" required>
                <label for="cidade" class="labelUser">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="Username" required>
                <label for="estado" class="labelUser">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="Username" required>
                <label for="endereco"
                class="labelUser">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            </div>
          </fieldset>
        </form>
    </div>  
</body>
</html>