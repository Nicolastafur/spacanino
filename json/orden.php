<?php
include_once '../conexion/conexionApi.php';

class Orden extends Database
{
    function GETOrden()
    {
        $query = $this->connect()->query('SELECT * FROM orden_servicio  INNER JOIN clientes ON orden_servicio.id_cliente=clientes.id_cliente INNER JOIN auxiliar ON orden_servicio.id_auxiliar=auxiliar.id_auxiliar ');
        return $query;
    }
}
