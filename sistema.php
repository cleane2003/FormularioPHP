<?php
    error_reporting(0);
    session_start();
    include_once('config_form.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuario ORDER BY id DESC";
    $result = $conexao-> query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>sistema-dados</title>
    <style>
        body {
            background-image: linear-gradient(to right, rgba(47, 35, 37, 0.85) 16.62%, rgba(134, 87, 98, 0.91) 85.61%);
            color: white;
        }

        .table-bg {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.44) 16.62%, rgba(0, 0, 0, 0.58) 85.61%);
            font-size: 12px;
            text-align: center;
            border-radius: 7px;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin: 20px;
        }

    </style>
</head>
<body>
    <div><h1>Lista de Usuários</h1></div>
    <div>
        <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Senha</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Sexo</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($user_dt = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_dt['id']."</td>";
                        echo "<td>".$user_dt['nome']."</td>";
                        echo "<td>".$user_dt['senha']."</td>";
                        echo "<td>".$user_dt['email']."</td>";
                        echo "<td>".$user_dt['telefone']."</td>";
                        echo "<td>".$user_dt['sexo']."</td>";
                        echo "<td>".$user_dt['data_nasc']."</td>";
                        echo "<td>".$user_dt['cidade']."</td>";
                        echo "<td>".$user_dt['estado']."</td>";
                        echo "<td>".$user_dt['endereco']."</td>";
                        echo "<td>ações</td>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
