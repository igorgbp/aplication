<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./style/estilo.css">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro</h1>
    <div>
        <form action="access/addUserData.php" method="POST">



            <!-- <select></select> -->
            <label for='id_user'>id do usuário</label>
            <input type='text' name='id_user' id='id_user'> <br />

            <label for='name_user'>Nome do usuário</label>
            <input type='text'  name='name_user' id='name_user'> <br />
            <!-- <label for = 'data_nascimento'>Data de nascimento</label>
        <input type='date' name='data_nascimento' id = 'data_nascimento'> -->
            <label for='sexo'>Sexo</label>
            <select name='sexo' id='sexo'>
                <option value='Masculino'>Masculino</option>
                <option value='Feminino'>Feminino</option>
            </select> <br>

            <label for='email_user'>Email do usuário</label>
            <input type='text' name='email_user' id='email_user'> <br />

            <button>Enviar</button>
        </form>
    </div>


    <!-- <form action = 'access/seeUserData.php'>
        <button> Ver usuarios </button>
    </form> -->
    <a href='access/seeUserData.php'> Ver usuários</a>
</body>

</html>