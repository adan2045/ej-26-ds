<?php




Class PropiedadInmobiliaria
{

function __construct ($id, $direc, $metrosCuadra, $ciu, $val)
{

$this->Id=$id;
$this->Direccion=$direc;
$this->MetrosCuadrados=$metrosCuadra;
$this->ciudad=$ciu;
$this->Valor=$val;
}



    
public $Id;
public $Direccion;
public $MetrosCuadrados;
public $ciudad;
public $Valor;

public function MostrarDatos()
{
echo 'Id: ' . $this->Id . '<Br>';
echo 'Direccion: ' . $this->Direccion . '<Br>';
echo 'Cantidad de metros cuadrados : ' . $this->MetrosCuadrados . '<Br>';
echo 'Ciudad : ' . $this->ciudad . '<Br>';
echo 'valor : ' . $this->Valor . '<Br>';



}


}