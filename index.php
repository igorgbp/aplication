<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p{
color: blue;
font-size: 30px;
}
</style>
</head>

<body>
    <div style=" color:darkcyan";>
        <h1>
            <?php
            define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/aplication/');

            require_once _BASE . 'dao/conexao.php';
            require_once _BASE . 'model/users.php';
            require_once _BASE . 'dao/DaoUsers.php';


            //  $u = new Usuario();
            //  $u -> setId('1');
            //  $u -> setNome('igor gabriel');
            //  $u -> setSexo('masculino');
            //  $u -> setEmail('igor2@gmail.com');

            //  $du = new DaoUsers();


            //  if (    $du->Add($u)) {
            //     echo 'cadastro realizado';
            //  } else {
            //     echo 'erro ao cadastrar';
            //  }

            $du = new DaoUsers();
            $list = $du->list();
            foreach ($list as $indice => $valor) {
                foreach ($valor as $item => $dado) {
                    echo '<pre>';
                    echo ($item . ':' . $dado);

                    echo '</pre>';
                }
                echo '<br>';
            }

            // echo '<pre>';
            // print_r($list);
            // echo '</pre>';


            ?>
        </h1>
        <p>asdfasdf</p>
    </div>

</body>

</html>