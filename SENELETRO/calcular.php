<?php

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$Consumos = $_POST["consumo"];
$total;

if($Consumos >  120 ){
    $total = $Consumos / 0.42;
    $classeRed;
    $texto = "Obrigado(a) por usar nossa companhia";
}else{
    $total = $Consumos / 0.32;
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
        <title>Calcular</title>
    </head>
    <body class= "<?= $classeRed ?>" class="<?= $classGreen ?>">
    <main>
        <h1> Conta de luz de <?= $nome ?></h1>
        <h3><?= $endereco ?></h3>
        <h3 class="consumos">Consumo: <?= $Consumos ?></h3>
        <h3> Valor a ser pago: R$ <?= number_format($total,2) ?></h3> 
        <h1 class= "consumos"><?= $texto ?></h1>
    </main>
    </body>
    </html>
