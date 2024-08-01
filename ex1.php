<?php 
 // Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.


class Livro{

    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this -> titulo = $titulo;
        $this -> autor = $autor;
    }
    public function getTitulo(){
        return $this -> titulo;
    }
    public function getAutor(){
        return $this -> autor;
    }
    public function setTitulo($novoTitulo){
        $this -> titulo = $novoTitulo;
    }
    public function setAutor($novoAutor){
        $this -> autor = $novoAutor;
    }

}

$livro1 = new Livro ("O Pequeno Príncipe", "Antoine de Saint-Exupéry");

echo "Título do livro: " . $livro1->getTitulo() . "<br>";
echo "Autor do livro: " . $livro1->getAutor() . "<br>";

?>