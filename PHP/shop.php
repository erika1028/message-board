<?php

class shop{
    public $name;
    public $price;
    
    function sayITEM(){
        print "<html><head><meta charet='UTF-8'></head><body><p>";
          print "アイテム : " . $this->name . PHP_EOL;
          print"</p><p>";
          print "値段(税込): " . $this->price * 1.08 . PHP_EOL;
          print "</p></body></html>";
          
                }
}

$shirts=new shop();
$shirts->name='シャツ';
$shirts->price=1000;

$shirts->sayITEM();