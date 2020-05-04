<?PHP
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

echo 15;
echo"<br>";
print (1.1);
echo"<br>";
echo "cokkies";
echo"<br>";
print(TRUE);
echo"<br>";
echo "zde spojuji jeden řetězec" . " s druhým řetězcem";
echo"<br>";
echo "<img src=\"art.jpg\" alt=\"mno\">";
echo "<br>";
echo "\\";
echo "<br>";
echo "OPERÁTORY: ";
echo "<br>";
$a = 3;
$b = 5;
echo "a=" . $a . "<br>" . "b=" . $b . "<br>";
echo "sčítání,odčítání,děleno,krát";
dump($a + $b);
echo"<br>";
dump($a - $b);
echo"<br>";
dump($a / $b);
echo"<br>";
dump($a * $b);
echo"<br>" . "<br>";
echo "a++,++a, a--,--a, a+=b a-=b, a*=b,a/=b";
echo"<br>";
dump($a++);
$a = 3;
echo"<br>";
dump(++$a);
$a = 3;
echo"<br>";
dump($a--);
$a = 3;
echo"<br>";
dump(--$a);
$a = 3;
echo"<br>";
dump($a += $b);
$a = 3;
echo"<br>";
dump($a -= $b);
$a = 3;
echo"<br>";
dump($a *= $b);
$a = 3;
echo"<br>";
dump($a /= $b);
$a = 3;
echo"<br>" . "<br>";
echo "a==b,a!=b, a>b, a < b" . "<br>";
dump($a == $b);
echo"<br>";
dump($a != $b);
echo"<br>";
dump($a > $b);
echo"<br>";
dump($a < $b);
echo"<br>" . "<br>";
echo "a||b, a&&b, !a" . "<br>";
$a = 0;
$b = 1;
echo "a=" . $a . "<br>" . "b=" . $b;
echo"<br>";
dump($a || $b);
echo"<br>";
dump($a && $b);
echo "<br>";
dump(!$a);
$vojtaKubinec1 = 1;
$vojtaKubinec2 = 1;
if ($vojtaKubinec1 < $vojtaKubinec2) {
    echo "Kubinec Vojtěch<br>";
}
if ($vojtaKubinec1 > $vojtaKubinec2) {
    echo "Vojta<br>";
} else {
    echo"Kubinec<br>";
}
if ($vojtaKubinec1 >= $vojtaKubinec2) {
    echo "Vojta<br>";
    if ($vojtaKubinec1 == $vojtaKubinec2) {
        echo "Kubinec<br>";
    }
}
switch ($vojtaKubinec1) {
    case 0:
        break;
    case 1:
        echo"ok boomer <br>";
        
        break;
    case 2:
        break;
    case 3:
        break;
    case 4:
        break;
    case 5:
        break;
    default:
        break;
}
$produkty = array(1 =>"ok", 2 =>"ok1", 3 =>"ok2",4 =>"ok3",5 =>"ok4",6 =>"ok5",7 =>"ok6",8 =>"ok7",9 =>"ok8",10 =>"ok9");
dump($produkty);
$produkty1["ok"] = array( );
$produkty1["uk"] = array( );
$produkty1["ik"] = array(
    array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'věk' => 4 ),
    array('jméno' => 'Msx', 'pohlaví' => 'F', 'druh' => 'pes', 'rasa' => 'pudl', 'věk' => 3),
    array('jméno' => 'Mdx', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'buldok', 'věk' => 3 ),
    array('jméno' => 'Mfx', 'pohlaví' => 'F', 'druh' => 'pes', 'rasa' => 'chrt', 'věk' => 1),
    array('jméno' => 'Mgx', 'pohlaví' => 'F', 'druh' => 'pes', 'rasa' => 'kokršpaněl', 'věk' => 6 ),
    array('jméno' => 'Mhx', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'věk' => 4 ),
    array('jméno' => 'Mjx', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'pitbulteriér', 'věk' => 7),
    array('jméno' => 'Mkx', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'foxhound', 'věk' => 8),
    array('jméno' => 'Mlx', 'pohlaví' => 'F', 'druh' => 'pes', 'rasa' => 'malamut', 'věk' => 9),
    array('jméno' => 'Můx', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'akita', 'věk' => 6),
    );
dump($produkty1);

$radekVojtaKubinec=5; //mesic narozeni
$sloupecVojtaKubinec=16; //vek
            echo "<table border=1>";
            for($i=1;$i<=$radekVojtaKubinec;$i++) {
                echo "<tr>";
for($x=1;$x<=$sloupecVojtaKubinec;$x++){
    echo "<td>".$i."-".$x."</td>";
}
                echo "</tr>";
            }
            echo "</table><br><br><br>";
            
           echo abs(6)."<br>";//mat.funkce 1.
            echo cos(150)."<br>";//mat.funkce 2.
           $string="Hello its me mario";//řetězcová funkce 1.
          echo strstr($string, "its")."<br>";
          echo strpos($string, "its")."<br>";//řetězcová funkce 2.
          echo sizeof($produkty);//funce pole 1.
          array_splice($produkty, 0, 1, "oi1"); //funkce pole 2.
          dump($produkty);
          
          $i=1;
          foreach ($produkty as $produkt){
              echo $i."-".$produkt."<br>";
              $i++;
          }
          
                  $rodneCislo="030101/1111";
        echo "rodne cislo: ".$rodneCislo;
        dump(vek($rodneCislo)); //pokud je zadán druhý parametr jako 1 vypíše se rok narození
        /**
         * 
         * @param string $rodneCislo
         * @param bool $volba
         * @return int
         */
        function vek (string $rodneCislo, bool $volba = false){        //vlastni funkce
            $narozeni=substr($rodneCislo,0,2);
            $stoleti= substr(date("Y"),2,2);
            if($narozeni <=$stoleti){ //pokud jsou první 2 čísla rodného čísla větší než poslední dvě čísla aktuálního století, tak osoba patří do roku 2000-Současný rok
                $narozeni= "20".$narozeni;
            }
            else{
                $narozeni= "19".$narozeni;
            }
            $vek=date("Y")-$narozeni;
            if ($volba == true){
                return $narozeni;
            }
            return $vek;
        }
    ?>