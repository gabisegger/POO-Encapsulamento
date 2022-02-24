<?php

interface Controlador {
    public function turnOn();
    public function turnOff();
    public function openMenu();
    public function closeMenu();
    public function moreVolume();
    public function lessVolume();
    public function turnOnMute();
    public function turnOffMute();
    public function play();
    public function pause();
}
