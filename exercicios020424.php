<?php
	// 1. Escreva uma funcao que receba um numero (entre 1 e 10) e escreva a tabuada desse numero.
function tabuada($n){
	for($i=1; $i<=10; $i++){
        $result = $n * $i;    
        echo("$i x $n = $result <br>");

	}
}
tabuada(5);
/*
// 2. Escreva uma funcao em PHP que recebe um ano como parametro e escreve se este eh um ano bissexto ou nao.
function bisexto($n){
    if($n % 4 == 0){
    	echo("O ano é bisexto");
    }else{
    	echo("Não é bisexto");
    }
}
bisexto(2008);

// 3. Modifique o exercicio para encontrar numeros primos (desenvolvido nas aulas anteriores), para que ele utilize funcoes.
function primo($n){
   for($nu=0; $nu<=$n; $nu++){
	    $ehPrimo = true;
    for ($j=2; $j<$nu; $j++){
       if($nu % $j == 0){
            $ehPrimo = false;
		}
    }
        if ($ehPrimo == true){
            echo("$nu ");
        }

    }
 }
 primo(30);

// 4. Crie uma funcao que receba uma string como entrada e retorne o numero de palavras dessa string.
$ola = ("ola mun do ge n te");

echo(count(explode(" ",$ola)));

?>
