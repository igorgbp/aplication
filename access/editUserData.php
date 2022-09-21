<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Edição de Veículos</h1>
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
    $busca= $dao->busca($u);
    // print_r($busca); 
    $buscat = $busca[0]


    ?>
    <div>
        <form action="edit.php" method="POST">



            <!-- <select></select> -->
            <label for='id_user'>id do usuário</label>
            <input type='text' value="<?= $buscat['id'] ?>" name='id_user' id='id_user'> <br />
            <label for='name_user' >Nome do usuário</label>
            <input type='text' value="<?= $buscat['nome'] ?>" name='name_user' id='name_user'> <br />
            <!-- <label for = 'data_nascimento'>Data de nascimento</label>
        <input type='date' name='data_nascimento' id = 'data_nascimento'> -->
            <label for='sexo' >Sexo</label>
            <select name='sexo' id='sexo' >
                <option value='Masculino'>Masculino</option>
                <option value='Feminino'>Feminino</option>
            </select> <br>

            <label for='email_user'>Email do usuário</label>
            <input type='text' value="<?= $buscat['email'] ?>" name='email_user' id='email_user'> <br />

            <button>Enviar</button>
        </form>
    </div>
    
    <a href = 'seeUserData.php'>Ver usuarios</a>
</body>
</html>