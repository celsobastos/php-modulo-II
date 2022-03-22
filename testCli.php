<?php
$interrompe = '';
while ($interrompe === '') {

    if($argc == 2) {
        $type = $argv[1];
        switch($type) {
            
            case '--m' :
                echo 'Por favor digite uma mensagem:';
                $mensagem = fgets(STDIN);
                echo 'Você digitou: ' . $mensagem . PHP_EOL;
            break;
            default :
                echo 'Fim do programa';
                $interrompe = 'd';
                $soma = soma();
        }

    }

    echo 'digite (i) interromper ' . PHP_EOL;
    $interrompe = fgets(STDIN);
}

function soma() {
    return 1 + 1;
} 


// $argv // array com todos os parametros

//print_r($argc);

//var_dump($argv);

// foreach(['a','b','c','d'] as $values) {
//     echo $values . PHP_EOL;
// }

// echo __DIR__ . "\n";
// include __DIR__ . "/docs/exec.php";