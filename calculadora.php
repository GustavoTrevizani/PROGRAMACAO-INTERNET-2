<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="POST">
        Número 1: <input type="text" name="n1"> <br>
        Número 2: <input type="text" name="n2"> <br>
        <select name="op">
            <option value="+">Somar</option>
            <option value="-">Subtrair</option>
            <option value="/">Dividir</option>
            <option value="*">Multiplicar</option>
        </select>
        <br>
        <input type="submit" value="calcular">
    </form>
    <?php

    if (isset($_POST['calcular'])){
        $numero1 = 0;
        $numero2 = 0;
        $resultado = 0;
        $tem_erro = false;

        if (!empty($_POST["n1"]) && is_int($_POST["n1"]))
            $numero1 = $_POST['n1'];
         else
            echo ("Preencha o número 1");
            $tem_erro = true;

        if (!empty($_POST["n2"]) && is_int($_POST["n2"]))
            $numero2 = $_POST['n2'];
         else
            echo ("Preencha o número 2");
            $tem_erro = true;
        }

        if ($tem_erro == false){

            switch($_POST["op"]){
                case "+":
                    $resultado = $numero1 + $numero2;
                    break;
                case "-":
                    $resultado = $numero1 - $numero2;
                    break;
                case "/":
                    $resultado = $numero1 / $numero2;
                    break;
                case "*":
                    $resultado = $numero1 * $numero2;
                    break;
            }
        }

        echo ("O resultado da operação foi $resultado");
    ?>

</body>
</html>