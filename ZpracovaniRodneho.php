<?php

/**
 * 
 * @author Vojta
 */
class zpracovaniRodneho {
    public $rodneCislo;
    public $jmeno;
    public function __construct($rodneCislo, $jmeno) {
        $this->rodneCislo = $rodneCislo;
        $this->jmeno = $jmeno;
    }
    
    /**
     * 
     * @return string
     */
private function narozeni(){
    $rok=substr($this -> rodneCislo,0,2);
    $stoleti= substr(date("Y"),2,2);
                if($rok <=$stoleti){ //pokud jsou první 2 čísla rodného čísla větší než poslední dvě čísla aktuálního století, tak osoba patří do roku 2000-Současný rok
                $rok= "20".$rok;
            }
            else{
                $rok= "19".$rok;
            }
            return $rok;
}

public function jmeno(){
    echo "<br>".$this->jmeno;
}
 /**
  * 
  * @return int
  */
       public function vek (){
            $rok= $this -> narozeni();
            $vek=date("Y")-$rok;
            echo "<br>"."rodne cislo: " . $this->rodneCislo;
            echo "<br>".$vek;
            return 0;
        }
        
        /**
         * 
         * @return int
         */
        public function datum (){
      $rok= $this -> narozeni();
            $mesic = substr($this -> rodneCislo,2,2);
            $den = substr($this -> rodneCislo,4,2);
            if($mesic >50){
                $mesic =$mesic - 50;
                if($mesic <10){
                    $mesic = "0".$mesic;
                }
            }
            else if($mesic >12 && $mesic <=50 ){
                echo "<br>"."Zadal jsi Neplatný Měsíc";
                return 0;
            }
                
          echo "<br>".$den.".".$mesic.".".$rok;
          return 0;
}

/**
 * 
 * @return int
 */
public function pohlavi (){
    $pohlavi = "";
    $mesic = substr($this -> rodneCislo,2,2);
    if ($mesic >50){
      $pohlavi= "žena";
      echo "<br>".$pohlavi."<br>";
      return 0;
    }
                else if($mesic >12 && $mesic <=50 ){
                echo "<br>"."Zadal jsi Neplatný Měsíc";
                return 0;
            }
    $pohlavi = "muž";
    echo "<br>".$pohlavi."<br>";
    return 0;
}


}