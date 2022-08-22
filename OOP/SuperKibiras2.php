<?php
class SuperKibiras2 extends Kibiras2 {

    public function prideti2Akmeni() : void
    {
        $this->akmenuKiekis += 2;
        self::$akmenuKiekisVisuoseKibiruose += 2;
    }

    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis *= 10;
        self::$akmenuKiekisVisuoseKibiruose *= 10;
    }
}