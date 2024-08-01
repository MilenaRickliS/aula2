<?php 
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora{
    public $valor1;
    public $valor2;

    public function __construct($valor1, $valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    public function getValor1(){
        return $this->valor1;
    }
    public function getValor2(){
        return $this->valor2;
    }
    public function setValor1($novoValor1){
        $this->valor1 = $novoValor1;
    }
    public function setValor2($novoValor2){
        $this->valor2 = $novoValor2;
    }

    public function somar($valor1, $valor2){
        echo $valor1 + $valor2;
    }

}

$soma1 = new Calculadora(2, 3);

echo "Primeiro valor: " . $soma1->getValor1() . "<br>";
echo "Segundo valor: " . $soma1->getValor2() . "<br>". "Soma: ";
echo $soma1->somar(2,3);


?>