<?php

class Slime {
    public $type='スライム';
    public $hp;
    public $power;
  
    function __construct($h,$p){
        $this->hp=$h;
        $this->power=$p;
    }
    
    function attack($character_name) {
        print $this->type . 'が' . $character_name . 'を攻撃して' .$this->power. 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime(10,4);
$slime_A ->attack('主人公');



