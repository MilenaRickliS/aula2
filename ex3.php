<?php 
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }
    public function setIdade($novaIdade){
        if($novaIdade >=0){
            $this->idade = $novaIdade;
        }else{
            echo 'Idade Inválida';
        }
    }

    }

    class Cachorro extends Animal {
        public function IdadeCachorro($novaIdade){
            $this->setIdade($novaIdade + 7);
        }
    }

    $cachorro1 = new Cachorro("Bob", 1);

    echo "Nome do cachorro: ". $cachorro1->getNome() ."<br>";
    $cachorro1->IdadeCachorro(2);

    echo "Idade do cachorro: ". $cachorro1->getIdade() ."<br>";

?>