<?php


class Viaje{
    private $costoViaje;
    private $sumaCostosAbonados;

    public function __construct($costoViaje, $sumCostosAbon){
        $this->costoViaje=$costoViaje;
        $this->sumaCostosAbonados=$sumCostosAbon;
    }

    //metodos de acceso

    public function getCostoViaje(){
        return $this->costoViaje;
    }
    public function getSumaCostosAbonados(){
        return $this->sumaCostosAbonados;
    }

    public function setCostoViaje($newCostoViaje){
        $this->costoViaje=$newCostoViaje;
    }
    public function setSumaCostosAbonados($newSumaCostosAbonados){
        $this->sumaCostosAbonados=$newSumaCostosAbonados;
    }

    public function __toString(){
        return
        "Costo viaje: ".$this->costoViaje.
        "\n Costos abonados: ".$this->sumaCostosAbonados
        ;
    }

    public function verderPasaje($objPasajero){
        
    }

    public function hayPasajesDisponibles(){

    }
}