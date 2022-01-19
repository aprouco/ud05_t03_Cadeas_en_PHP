<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Construción de expresións en PHP</h3>

    <?php
        $primera="Primeira liña de texto";
        $segunda="Segunda liña de texto";
        $terceira="Terceira liña de texto";
        $resultado="{$primeira}<br/>{$segunda}<br/>{$terceira}";
        echo $resultado;
        echo "<br/> O número de carácteres de cadea resultante é: ".strlen($resultado);
    ?>
</body>
</html>