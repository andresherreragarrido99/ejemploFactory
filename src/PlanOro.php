<?php
class PlanOro implements Plan {
    public function precioFinal(float $dineroGastado): float {
        return $dineroGastado*0.90 ; // aplico un 10% de descuento
    }
}
?>