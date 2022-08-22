<?php
class Kibiras2{

    protected $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose = 0;
    private static $manoKibiras;

    public static function kiekYraAkmenu() : int
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

    public static function naujasKibiras() : Kibiras2
    {
        return self::$manoKibiras ?? self::$manoKibiras = new self;
    }

    private function __construct()
    {
        $this->akmenuKiekis = 0;
    }

    private function __clone() : void
    {
        
    }

    public function __wakeup()
    {
        throw new Exception('Cannot unserialize a singleton.');
    }

    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu(int $kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() : int
    {
        return $this->akmenuKiekis;
    }

    public function kiekBendraiYraAkmenu() : int
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

}