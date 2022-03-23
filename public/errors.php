<?php

error_reporting(0);
ini_set("display_errors", 1);


class MinhaClasse extends Exception {
    public function __construct() {
        $linha = $this->getLine();
        parent::__construct('Erro de Runtime minha classe - linha:' . $linha);
    }
}

function funcao_01() {
    echo 'Função numero 1 iniciada' . PHP_EOL;
    funcao_02(); 
    // try {
    //     funcao_02(); 
    // }
    // catch (
    //     Exception $problema
    // ) { // Mult catch
    //     echo $problema->getMessage() . PHP_EOL;
    //     //echo $problema->getTraceAsString() . PHP_EOL;
    //     // echo $problema->getLine() . PHP_EOL;
    // }

    echo 'Função numero 1 Finalizada' . PHP_EOL;
}

function funcao_02 () {
    echo 'Função numero 2 iniciada'. PHP_EOL;
    $calculo = 7/0; 
    // $array = new SplFixedArray(5);
    // $array[10] = 'Ricardo';
    //throw new MinhaClasse();
    // echo $nome;
    //echo(NOME);

    for($i = 0; $i < 10 ; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Função numero 2 Finalizada'. PHP_EOL;
}

echo 'Main (programa principal) iniciado' . PHP_EOL;
funcao_01();
echo 'Main (Programa principal) finalizado' . PHP_EOL;