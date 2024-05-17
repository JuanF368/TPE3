<?php

class PasajeroVIP extends Pasajero{
    private $numViajeroFrecuente;
    private $cantMillas;

    public function __construct($nom, $numAsi, $numTick, $numViajFrec, $cantMill){
        //invocamos al constructor de Pasajero
        parent::__construct($nom, $numAsi, $numTick);
            //agregamos los nuevos atributos
            $this->numViajeroFrecuente=$numViajFrec;
            $this->cantMillas=$cantMill;
    }

    //metodos de acceso

    public function getNumViajero(){
        return $this->numViajeroFrecuente;
    }
    public function getCantMillas(){
        return $this->cantMillas;
    }

    public function setNumViajero($newNumViajero){
        $this->numViajeroFrecuente=$newNumViajero;
    }
    public function setCantMillas($newCantMillas){
        $this->cantMillas=$newCantMillas;
    }

    //metodo toString

    public function __toString(){
        $cadena= parent::__toString();
        $cadena=$cadena.
        "\n Numero de Viajero Frecuente: ".$this->getNumViajero().
        "\n Cantidad de millas de pasajero: ".$this->getCantMillas()
        ;
        return $cadena;

    }

    public function darPorcentajeIncremento(){
        $porcentaje = 35;
        $millas=$this->getCantMillas();
        if ($millas>300){
            $porcentaje=30;
        }
        return $porcentaje;
    }

}