<?php

$distancia = $_POST["distancia"];
$pedagios = $_POST["pedagios"];
$valorPedágio = 9.40;
$local = $_POST["local"];
$destino = $_POST["destino"];
$frete = ($distancia * $valorPedágio) / $pedagios;

echo "A viagem de $local à $destino irá custar o valor total de $frete. ";