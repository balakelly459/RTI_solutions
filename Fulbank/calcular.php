
<?php

if(isset($_REQUEST["nome"]) && isset($_REQUEST["salario"]) && isset($_REQUEST["cargos"])){
    $nome = $_REQUEST["nome"];
    $salario = $_REQUEST["salario"];
    $cargos = $_REQUEST["cargos"];

    // $salario = 0;
    
    if($salario > 5000){
        $total = $salario * 1.1;
       
    }else{
        $total = $salario * 1.2;
       
    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular salário</title>
    <link href="./style.css" rel="stylesheet"/>
</head>
<body>
    <main>
        <p><?=$nome?> passará a receber R$<?=$total?>, no cargo de <?=$cargos?></p>
    </main>
    
</body>
</html>
