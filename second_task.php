<?php 

declare(strict_types=1);

$grauztukai = new stdClass();

class Vaisius
{
    private $dydis;
    public $id;
    private $prakastas;
    public function __construct()
    {
        $this->dydis = rand(5,25);
        $this->id = rand(1000000, 9999999);
        $this->prakastas = false;
    }
    public function prakasti()
    {
        $this->prakastas=true;
        return $this;
    }
    public function getDydis()
    {
        return $this->dydis;
    }
}
class Krepsys 
{
    public  static array $vaisiai = [];
    public static function pripildyti(){
        if (count(self::$vaisiai)<20){
            $trukumas = 20 - count(self::$vaisiai);
            for ($i = 0; $i < 20; $i++){
                array_push(self::$vaisiai, new Vaisius);
            }
        }else {
            for ($i = 0; $i < 20; $i++){
                array_push(self::$vaisiai, new Vaisius);
            }
        }
        usort(self::$vaisiai, function($a, $b) {
            return $a->getDydis() > $b->getDydis();
        });
    }
    public static function   isimti()
    {
        self::$vaisiai[0]->prakasti();
        $id = self::$vaisiai[0]->id;
        $GLOBALS['grauztukai']->$id = self::$vaisiai[0];
        array_shift(self::$vaisiai);
    }
}

$obuolys = new Vaisius();
print_r($obuolys);
echo "<pre>";
Krepsys::pripildyti();
Krepsys::isimti();
print_r(Krepsys::$vaisiai);
print_r($grauztukai);
echo "</pre>";