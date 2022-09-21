<?php
class DaoUsers
{
    public function list()
    {
        $list = [];
        $pst = Conexao::getPreparedStatement('select * from usuarios');
        $pst ->execute();
        $list = $pst -> fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    public function Add (Usuario $usuario)
    {
        $sql = 'insert into usuarios (id, nome, sexo, email) values (?,?,?,?)';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1, $usuario->getId());
        $pst -> bindValue(2, $usuario->getNome());
        $pst -> bindValue(3, $usuario->getSexo());
        $pst -> bindValue(4, $usuario->getEmail());
        if ($pst -> execute ()) {
            return true;
        }   else {
            return false;
        }
    }

    public function exclui (Usuario $usuario)
    {
        $sql = 'delete from usuarios where id = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1, $usuario->getId());
        if ($pst -> execute()){
            return true;
        }else {
            return false;
        }
    }


    public function update (Usuario $usuario)
    {
        $sql = 'update usuarios set nome = ?, sexo = ?, email = ? where id = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1, $usuario->getNome());
        $pst -> bindValue(2, $usuario->getSexo());
        $pst -> bindValue(3, $usuario->getEmail());
        $pst -> bindValue(4, $usuario->getId());

        if ($pst ->execute())
        {
            return true;
        }else {
            return false;
        }
    }
    public function busca (Usuario $usuario)
    {
        $list = [];
        $pst = Conexao::getPreparedStatement('select * from usuarios where id= ?');
        $pst -> bindValue(1, $usuario->getId());
        $pst ->execute();
        $list = $pst -> fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function Edita (Usuario $usuario)
    {
        $sql = 'update usuarios set nome=?, sexo =?, email=? where id= ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1, $usuario->getNome());
        $pst -> bindValue(2, $usuario->getSexo());
        $pst -> bindValue(3, $usuario->getEmail());
        $pst -> bindValue(4, $usuario->getId());

        if ($pst -> execute ()) {
            return true;
        }   else {
            return false;
        }
    }
}