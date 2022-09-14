<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Exclusão de Veículos</h1>
    <?php
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/aplication/');

    require_once _BASE . 'dao/conexao.php';
    require_once _BASE . 'model/users.php';
    require_once _BASE . 'dao/DaoUsers.php';

    $id = filter_input(INPUT_GET, 'codigo');
    // print_r($id);

    $u = new Usuario();
    $u->setId($id);


    $dao = new DaoUsers();
    if ($dao->exclui($u)){
        echo 'deletou';
        echo '<br></br>';
        // echo ($id);
    }else echo 'deu ruim';

    ?>
    
    <a href = 'seeUserData.php'>Ver usuarios</a>
</body>

</html>