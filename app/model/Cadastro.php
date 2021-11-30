<?php

    class Cadastro 
    {
        public static function insert($dadosPost){
            if (
                empty($dadosPost['name']) OR 
                empty($dadosPost['lastname']) OR
                empty($dadosPost['username']) OR 
                empty($dadosPost['email']) OR 
                empty($dadosPost['tel']) OR 
                empty($dadosPost['password']) 
                ) {
                throw new Exception("Preenchar todos os campos");
                return false;
            }
            
            $con = Connection::getConn();
            $sql = $con->prepare('INSERT INTO usuario(NOME,SOBRENOME,NOMEUSUARIO,EMAIL,TELEFONE,SENHA) VALUES ( :NOME ,:SOBRENOME , :NOMEUSUARIO , :EMAIL , :TELEFONE , :SENHA )');
            $sql->bindValue(':NOME',$dadosPost['name']);
            $sql->bindValue(':SOBRENOME',$dadosPost['lastname']);
            $sql->bindValue(':NOMEUSUARIO',$dadosPost['username']);
            $sql->bindValue(':EMAIL',$dadosPost['email']);
            $sql->bindValue(':TELEFONE',$dadosPost['tel']);
            $sql->bindValue(':SENHA',$dadosPost['password']);
            $res = $sql->execute();

            if ($res == 0) {
                throw new Exception("Error em efeutar registro");

                return false;
            }

            return true;

        }
        

    }