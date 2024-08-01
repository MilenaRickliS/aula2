<?php 
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

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

    $cachorro1 = new Cachorro("Marley", 1);

    echo "Nome do cachorro: ". $cachorro1->getNome() ."<br>";
    $cachorro1->IdadeCachorro(3);

    echo "Idade do cachorro: ". $cachorro1->getIdade() ."<br>";


?>