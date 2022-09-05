<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/aplication/');
    require_once _BASE . 'dao/conexao.php';
    require_once _BASE . 'model/users.php';
    require_once _BASE . 'dao/DaoUsers.php';

    $id = filter_input(INPUT_POST, 'id_user');
    $nome = filter_input(INPUT_POST, 'name_user');
    $sexo = filter_input(INPUT_POST, 'sexo');
    $email = filter_input(INPUT_POST, 'email_user');
    echo ($id);
    echo ('<br>');
    echo ($nome);
    echo ('<br>');
    echo ($sexo);
    echo ('<br>');
    echo ($email);
    echo ('<br>');

    $u = new Usuario();
    $u->setId($id);
    $u->setNome($nome);
    $u->setSexo($sexo);
    $u->setEmail($email);

    $du = new DaoUsers();
    if ($du->Add($u)) {
        echo 'cadastro realizado';
    } else {
        echo 'erro ao cadastrar';
    }


    ?>
    <form action = 'new.php'>
        <button> voltar</button>
    </form>
    <form action = 'seeUserData.php'>
        <button> Ver usuarios </button>
    </form>
</body>

</html>