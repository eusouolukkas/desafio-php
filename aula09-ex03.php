<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota1 = isset($_GET["n1"])?$_GET["n1"]:"Nota não informada!";
    $nota2 = isset($_GET["n2"])?$_GET["n2"]: "Nota não informada!";
    $s = $nota1 + $nota2;
    $m = ($nota1 + $nota2) / 2;

    echo "A média de $s é $m <br/>";

    if($m < 5) {
        $r = "Reprovado!";
    } 
    elseif ($m > 5 && $m < 7) {
        $r = "Em Recuperação!";
    } else {
        $r = "Aprovado!";
    }

    echo "Sua situação é: $r";
    ?>
</body>
</html>