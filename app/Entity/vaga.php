<?php 
    namespace App\Entity;

use App\DB\Database;
use \PDO;
    class Vaga{

        // identificador único da vaga
        // @var integer
        public $id;

        // título da vaga
        // @var string
        public $titulo;

        // descrição da vaga
        // @var string
        public $descricao;

        // define se a vaga está ativa ou inativa
        // @var string(s/n)
        public $status;

        // data de publicação da vaga
        //@var string
        public $data;

        // método responsável por cadastrar uma nova vaga
        //@return boolean
        public function cadastrar(){
            // DEFINIR UMA DATA
            $this->data = date('Y-m-d H:i:s');

            // INSERIR A VAGA NO BANCO
            $obDatabase = new Database('vagas');
            $this->id = $obDatabase->insert([
                'titulo' => $this->titulo,
                'descricao' => $this->descricao,
                'status' => $this->status,
                'data' => $this->data
            ]);

            // RETORNAR SUCESSO
            return true;
        }

        // método responsável por atualizar a vaga no Banco de Dados
        // @return boolean
        public function atualizar(){
            return (new Database('vagas'))->update('id = '.$this->id, [
                'titulo' => $this->titulo,
                'descricao' => $this->descricao,
                'status' => $this->status,
                'data' => $this->data
            ]);
        }

        // método responsável por excluir a vaga do Banco de Dados
        // @return boolean
        public function excluir(){
            return (new Database('vagas'))->delete('id = '.$this->id);
        }

        // método responsável por obter as vagas do Banco de Dados
        // @param string $where
        // @param string $order
        // @param string $limit
        // return array
        public static function getVagas($where = null, $order = null, $limit = null){
            return (new Database('vagas'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        }

        // método responsável por buscar uma vaga com base em seu ID
        // @param integer $id
        // return Vaga
        public static function getVaga($id){
            return (new Database('vagas'))->select('id ='.$id)->fetchObject(self::class);
        }
    }