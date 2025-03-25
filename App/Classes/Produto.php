<?php

require './App/DB/Database.php';

class Produto{

    public int $id_produto;
    public string $nome;
    public string $preco;
    public int $id_perfil;
    

    public function cadastrar(){
        
        $db = new Database('produto');
        $res = $db->insert(
                [
                    'nome' => $this->nome,
                    'preco' => $this->preco,                    
                    'id_perfil' => $this->id_perfil
                ]
            );
        return $res;
    }

    public function buscar($where=null,$order=null,$limit=null){
        $db = new Database('produto');
        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id){
        $db = new Database('produto');
        $obj = $db->select('id_produto ='.$id)->fetchObject(self::class);
        return $obj; //retorna um objeto da CLASSE USUARIO!!!!
    }

    public function atualizar(){
        $db = new Database('produto');

        $res = $db->update('id_produto ='.$this->id_produto,
                            [
                                "nome" => $this->nome,
                                "preco" => $this->preco,                              
                                "id_perfil" => $this->id_perfil
                            ]
                        );

        return $res;
    }

    public function excluir(){
        $db = new Database('produto');
        $res = $db->delete('id_produto ='.$this->id_produto);
        return $res;
    }
}