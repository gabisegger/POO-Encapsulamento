<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $switchedOn;
    private $ringing;
    //Métodos Especiais
    public function __construct(){
        $this -> volume = 50;
        $this -> switchedOn = false;
        $this -> ringing = false;
    }
    private function getVolume() {
        return $this->volume;
    }

    private function getSwitchedOn() {
        return $this->switchedOn;
    }

    private function getRinging() {
        return $this->ringing;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setSwitchedOn($switchedOn) {
        $this->switchedOn = $switchedOn;
    }

    private function setRinging($ringing) {
        $this->ringing = $ringing;
    }
    //Métodos
    public function turnOn() {
        $this -> setSwitchedOn(true);
    }
    
    public function turnOff() {
        $this -> setSwitchedOn(false);
    }
    
    public function openMenu() {
        echo "<br>Está ligado?: " . ($this->getSwitchedOn()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getRinging()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br>";
    }
    
    public function closeMenu() {
        echo "<br>Fechando Menu...";
    }

    public function moreVolume() {
        if ($this->getSwitchedOn()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>ERRO! Não posso aumentar o volume</p>";
        }
    }
    
    public function lessVolume() {
        if ($this->getSwitchedOn()) {
            $this->setSwitchedOn($this->getVolume() - 5);
        } else {
            echo "<p>ERRO! Não posso diminuir o volume</p>";
        }
    }

    public function turnOnMute() {
       if ($this->getSwitchedOn() && $this->getVolume() > 0) {
           $this->setVolume(0);
       } 
    }

    public function turnOffMute() {
        if ($this->getSwitchedOn() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getSwitchedOn() && $this->getRinging()) {
            $this->setRinging(true);
        }
    }
    
    public function pause() {
        if ($this->getSwitchedOn() && $this->getRinging()){
            $this->setRinging(false);
        }
    }

    

    

    

    

    

}
