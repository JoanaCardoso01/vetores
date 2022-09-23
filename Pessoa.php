<?php
class Pessoa {
    /**
      * atributos
     */
    public $nome;
    public $telefone;
    public $email;

    /**
     * métodos
     */

     public function mostrarNome (){

     }

     public function mensagem (){
        echo "Boa tarde";
     }

     public function mostraDados (){
       
        echo $this->nome.'<br>';
        echo $this->telefone.'<br>';
        echo $this->email.'<br>';
     }

     public function cadastro($n,$t,$e){
        $this->nome=$n;
        $this->telefone=$t;
        $this->email=$e;
     }
}
