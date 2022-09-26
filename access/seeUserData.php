<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel='stylesheet' href="../style/estilo.css">
</head>

<body>
    <h1>
        <?php
        define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/aplication/');

        require_once _BASE . 'dao/conexao.php';
        require_once _BASE . 'model/users.php';
        require_once _BASE . 'dao/DaoUsers.php';


        // LISTAR
        $du = new DaoUsers();
        $list = $du->list();
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>id </th>';
        echo '<th>nome </th>';
        echo '<th>sexo </th>';
        echo '<th>email </th>';
        echo '<th>ações </th>';
        echo '</tr>';

        foreach ($list as $indice => $valor) {
            echo '<tr>';
            foreach ($valor as $item => $dado) {
                echo '<td>';
                echo ($dado);
                echo '</td>';
            }
            // echo ($valor);
            echo ' <td> <a href = "deleteUserData.php?codigo=' . $valor['id'] . '">excluir</a></td>';
            echo ' <td> <a href = "editUserData.php?codigo=' . $valor['id'] . '">editar</a></td>';
            echo '</tr>';
        }

        // foreach($list as $indice){
        //     echo '<tr>';
        //         echo 'asdf';
        //     echo '</tr>';
        // }

        echo '</table>';

        ?>






    </h1>
    <p>
        <a href='../new.php'>Voltar para cadastro</a>
    </p>

</body>

</html>