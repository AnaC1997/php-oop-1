<?php

class Movie
{
    //variabili d'instanza
    public $titulo;
    public $genero;
    public $lingua;
    public $trama;
    public $attori;

    // Costruttore
    public function __construct($titulo, $genero, $lingua, $trama, $attori)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->lingua = $lingua;
        $this->trama = $trama;
        $this->attori = $attori;
    }

     // Metodi
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getLingua(){
        return $this->lingua;
    }
    public function getTrama(){
        return $this->trama;
    }
    public function getAttori(){
        return $this->attori;
    }


}