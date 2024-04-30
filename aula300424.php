
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form method="GET">
        Número: <input type="text" name="numero">
    </form>

    <?php
        if (isset($_GET['numero']) && !empty($_GET["numero"])){
            $numero = $_GET['numero'];
            if ($numero % 2 == 0) {
                echo ("O número $numero é par");
            } else {
                echo ("O número $numero é ímpar");
            }
        } else {
            echo ("Insira um número <br>");
        }
    ?>
</body>
</html>
 