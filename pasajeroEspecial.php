<?php

class PasajeroEspecial extends Pasajero{
    private $sillaRuedas;
    private $asistencia;
    private $comidasEspeciales;

    //metodo construct
    public function __construct($nom, $numAsi, $numTick, $silRuedas, $asis, $comidasEsp){
        //invocamos al constructor de Pasajero
        parent::__construct($nom, $numAsi, $numTick);
            //agregamos los nuevos atributos
            $this->sillaRuedas=$silRuedas;
            $this->asistencia=$asis;
            $this->comidasEspeciales=$comidasEsp;
    }

    //metodos de acceso

    public function getSillaRuedas(){
        return $this->sillaRuedas;
    }
    public function getAsistencia(){
        return $this->asistencia;
    }
    public function getComidasEspeciales(){
        return $this->comidasEspeciales;
    }

    public function setSillaRuedas($newSillaRuedas){
        $this->sillaRuedas=$newSillaRuedas;
    }
    public function setAsistencia($newAsistencia){
        $this->asistencia=$newAsistencia;
    }
    public function setComidasEspeciales($newComidEsp){
        $this->comidasEspeciales=$newComidEsp;
    }

    //metodo toString

    public function __toString(){
        $cadena= parent::__toString();
        $cadena=$cadena.
        "\n Silla de ruedas: ".$this->getSillaRuedas().
        "\n Asistencia: ".$this->getAsistencia().
        "\n Comidas Especiales: ".$this->getComidasEspeciales()
        ;
        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $cantNecesidades=0;
        $sillaRuedas=$this->getSillaRuedas();
        $asistencia=$this->getAsistencia();
        $comidasEsp=$this->getComidasEspeciales();
        $porcentaje=0;
        if ($sillaRuedas && $asistencia && $comidasEsp){
            $porcentaje=30;
        }elseif($sillaRuedas || $asistencia || $comidasEsp){
            $porcentaje=15;
        }

        return $porcentaje;
    }
}