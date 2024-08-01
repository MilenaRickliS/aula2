<?php 
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.


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

$livro1->setTitulo("Romeu E Julieta");
$livro1->setAutor("William Shakespeare");

echo "Título do livro: " . $livro1->getTitulo() . "<br>";
echo "Autor do livro: " . $livro1->getAutor() . "<br>";

?>