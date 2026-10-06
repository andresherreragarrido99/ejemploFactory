<?php

spl_autoload_register(function (string $nombreClase){
    $ruta = __DIR__ . "/../src/" . $nombreClase . ".php";
    require $ruta;
});
$cliente1 = new Cliente("Juan", 1000);
$cliente2 = new Cliente("Pedro", 2000);
$cliente3 = new Cliente("Maria", 5000);
$cliente4 = new cliente("Ana", 10000);

//----------Veamos que plan nos corresponde a cada cliente
$planCliente1 = (new PlanFactory())->getplan($cliente1);
echo "El plan de ".$cliente1->nombre." es: ".get_class($planCliente1)." y el precio final es: ".$planCliente1->precioFinal($cliente1->totalCompra)."<br>";
$planCliente2 = (new PlanFactory())->getplan($cliente2);
echo "El plan de ".$cliente2->nombre." es: ".get_class($planCliente2)." y el precio final es: ".$planCliente2->precioFinal($cliente2->totalCompra)."<br>";
$planCliente3 = (new PlanFactory())->getplan($cliente3);
echo "El plan de ".$cliente3->nombre." es: ".get_class($planCliente3)." y el precio final es: ".$planCliente3->precioFinal($cliente3->totalCompra)."<br>";
$planCliente4 = (new PlanFactory())->getplan($cliente4);
echo "El plan de ".$cliente4->nombre." es: ".get_class($planCliente4)." y el precio final es: ".$planCliente4->precioFinal($cliente4->totalCompra)."<br>";

?>