<?PHP

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
var_dump($a + $b);
echo"<br>";
var_dump($a - $b);
echo"<br>";
var_dump($a / $b);
echo"<br>";
var_dump($a * $b);
echo"<br>" . "<br>";
echo "a++,++a, a--,--a, a+=b a-=b, a*=b,a/=b";
echo"<br>";
var_dump($a++);
$a = 3;
echo"<br>";
var_dump(++$a);
$a = 3;
echo"<br>";
var_dump($a--);
$a = 3;
echo"<br>";
var_dump(--$a);
$a = 3;
echo"<br>";
var_dump($a += $b);
$a = 3;
echo"<br>";
var_dump($a -= $b);
$a = 3;
echo"<br>";
var_dump($a *= $b);
$a = 3;
echo"<br>";
var_dump($a /= $b);
$a = 3;
echo"<br>" . "<br>";
echo "a==b,a!=b, a>b, a < b" . "<br>";
var_dump($a == $b);
echo"<br>";
var_dump($a != $b);
echo"<br>";
var_dump($a > $b);
echo"<br>";
var_dump($a < $b);
echo"<br>" . "<br>";
echo "a||b, a&&b, !a" . "<br>";
$a = 0;
$b = 1;
echo "a=" . $a . "<br>" . "b=" . $b;
echo"<br>";
var_dump($a || $b);
echo"<br>";
var_dump($a && $b);
echo "<br>";
var_dump(!$a);
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
var_dump($produkty);
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
var_dump($produkty1);
    ?>