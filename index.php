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
div{
background-color:#aaa;
/* align-items: center; */
width:500px;
text-align:center;
/* align-items: center; */
border-radius:20px;
justify-content:center;
}
body{
    background-color:#2a2a2a;
    display:flex;
    align-items:center;
    justify-content:center;


}
img{
    border-radius: 40px;
}
</style>
</head>

<body>
    <div>
        <h1>
            <?php
            define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/aplication/');

            require_once _BASE . 'dao/conexao.php';
            require_once _BASE . 'model/users.php';
            require_once _BASE . 'dao/DaoUsers.php';


            //  $u = new Usuario();
            //  $u -> setId('1');
            //  $u -> setNome('igor asdf');
            //  $u -> setSexo('masculiasdfno');
            //  $u -> setEmail('igor2@asdfasdf.com');

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
                echo '<hr>';
            }

            // echo '<pre>';
            // print_r($list);
            // echo '</pre>';


            ?>
        </h1>
        <img src="https://th.bing.com/th/id/OIP.LIIAoCSSGv8EBsV99qeOyAHaE8?pid=ImgDet&rs=1" height="150px" width="150px" >
    </div>
    <img
            
    />

</body>

</html>