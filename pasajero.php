<?php

class Pasajero{
    private $nombre;
    private $numAsiento;
    private $numTicket;


    /* metodo construct */

    public function __construct($nom, $numAsi, $numTick){
        $this->nombre=$nom;
        $this->numAsiento=$numAsi;
        $this->numTicket=$numTick;
    }


    /* Metodos seeter y getter */

    public function getNombre(){
        return $this->nombre;
    }

    public function getNumAsiento(){
        return $this->numAsiento;
    }

    public function getNumTicket(){
        return $this->numTicket;
    }


    public function setNombre ($newNom){
        $this->nombre=$newNom;
    }
    public function setNumAsiento($newNumAsiento){
        $this->numAsiento=$newNumAsiento;
    }
    public function setNumTicket($newNumTicket){
        $this->numTicket=$newNumTicket;
    }

    /* Metodo tostring */

    public function __toString(){
        return
        "Nombre: ".$this->nombre.
        "\n Numero asiento: ".$this->numAsiento.
        "\n Numero ticket:n".$this->numTicket
        ;
    }

    public function darPorcentajeIncremento(){
        $porcentaje = 10;
        return $porcentaje;
    }
}