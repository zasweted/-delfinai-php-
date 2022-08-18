<?php
class Tv {

    public $color;
    private $size;

    public function __construct($c = 'Black', $s = '9"'){
        $this->color = $c;
        $this->size = $s;
    }

    public function __destruct(){
        echo '<h1>Numiro </h1>';
    }

    public function show(){
        echo '<h1>*************</h1>';
    }
    public function showParams(){
        echo '<h1>'. $this->color .'</h1>';
        echo '<h1>'. $this->size .'</h1>';
    }

    public function __get($a){
        if($a == 'size'){
            return $this->size;
        }
        //return $this->$a;
    }

    public function __set($kam, $ka){
        if($kam == 'size'){
            $this->size = $ka;
        }
        //return $this->$kam = $ka;
    }







}