<?php

$nome = $_POST["nome"];
$endereço = $_POST["endereço"];
$Consumo = $_POST["Consumo"];
$total;

if($Consumo >  120 ){
    $total = $Consumo / 0.42;
    $classeRed;
    $texto = "Obrigado(a) por usar nossa companhia";
}else{
    $total = $Consumo / 0.32;
    $classeGreen;
    $texto = "Obrigado(a) por economizar!!!";
}

?>

<!DOCTYPE html>
    <html lang="pr-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body class= "<?= $classeRed ?>" class="<?= $classGreen ?>">
        <h1> Conta de luz de <?= $nome ?></h1>
        <h3><?= $endereço ?></h3>
        <h3 class="consumos">Consumo: <?= $Consumo ?></h3>
        <h3> Valor a ser pago: R$ <?= number_format($total,2) ?></h3> 
        <h1 class= "consumos"><?= $texto ?></h1>
    </body>
    </html>
