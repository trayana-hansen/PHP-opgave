<?php
$strPageTitle = "Home";
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/header.php";

?>

<?php
//Define a constant
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
?>
<?php
echo "<h1> Velkommen til min første PHP side</h1>"
?>
<?php
$user = new User();
$user->firstname = "John";
$user->lastname = "Peterson";
$user->address = "Knowingstreet 15,";
$user->postcode = "3500,";
$user->land = "Argentina";
$user->birthdate = "17. januar 1998";

$user->showUserDetails();
?>



<?php echo
"<h2>Hvad kan PHP?</h2>
<h2>Her er en liste over nogle af de ting man kan med PHP:</h2>
<ul>
  <li>PHP kan generere dynamisk indhold på din webside</li>
  <li>PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren</li>
  <li>PHP kan modtage data fra en formular</li>
  <li>PHP kan læse, tilføje, redigere og slette data i din database</li>
  <li>PHP kan bruges til brugerkontrolleret adgang</li>
</ul>"
?>


<?php
echo "<h1 class=\"text-primary\">PHP's Historie</h1>" .
        "<div class=\"container\">" .
		"<div class=\"row\">" .
		"<div class=\"col-md-6\">" .
		  "<p>Grundlagt af Rasmus Lerdorf og udgivet første gang den 8. juni 1995</p>".
		  "<p>Startede som et lille, simpelt CGI script i Perl til trafik overvågning</p>" .
		  "<p>PHP står for Hypertext Preprocessor</p>" .
		"</div>" .
		"<div class=\"col-md-6\">" .
		  "<p>open source, objekt-orienteret server-side programmeringssprog</p>" .
		  "<p>ideel til udvikling af dynamiske webapplikationer</p>" .
		  "<p>Afvikles på webserver software som Apache eller IIS</p>" .
		"</div>"  .
	  "</div>"  .
	"</div>".
	"<hr/>"
?>


<?php
	$modtager = "Bo Nicolajsen";
	$afsenderNavn = "Tina";
	$belob = "21.405,52 kr.";
	$textOne = "Til $modtager\n\n" .
    "Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. Grundet vi har skiftet platform bedes du
    oprette din konto på ny med email adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din konto hvor
    du enten kan bruge dem eller få dem udbetalt." .
    "\n\nBeløb tilgængeligt opgjort pr. : $belob" .
    "\n\n venlig hilsen $afsenderNavn\n\n\n";
	$textOne = nl2br(strToUpper($textOne));
?>

<?php
$modtager = "Bo Nicolajsen";
$afsenderNavn = "Tina";
$donationsModtager = "Dyrenes beskyttelse";
$donationsNavn = "Georg Giraf";
$textTwo = "Hej $afsenderNavn\n\n" .

	"Da jeg er ufattelig rig, og derfor ikke har brug for pengene. Ser jeg gerne at i donere alle pengene til $donationsModtager.". "Under navnet \"$donationsNavn\". \n\n".

	"Venlig hilsen $modtager \n\n" ;

	$textTwo = nl2br(strtolower($textTwo));
	$textTwo = str_replace("ikke", "", $textTwo);
	echo "<hr/>";
?>
<?php
echo str_replace("BO", "BOB", $textOne);
echo str_replace("rig", "fattigt", $textTwo);
echo "<hr/>";
?>


<?php
echo "<hr>";


function getPosChar($str, $char, $numpos) {
    $arrChars = str_split($str); //Splitter ens array
    $i = 0;
    foreach($arrChars as $key => $value){
        if($value === $char) {
            $i++;
            if($i === $numpos) {
                return $key+1;
            }
        }
	}
    };
	echo getPosChar($textOne, 'E', 7);
echo "<hr/>";
?>
<?php
echo strpos($textOne, "E");
echo "<hr/>";
?>

<?php
echo strcasecmp($textOne, $textTwo);
echo "<hr/>";
?>
<?php
echo str_shuffle($textOne.$textTwo);
echo "<hr/>";
?>
<?php
$number = 14;
if ($number == 10) {
    echo "Korrekt";
};
echo "<hr/>";
?>
<?php

if ($number == 10) {
    echo "Korrekt";
};
echo "<hr/>";
?>
<?php

if ($number < 10) {
    echo "Korrekt";
};
echo "<hr/>";
?>
<?php

echo ($number >= 40) ? "Korrekt" : "Forkert";
echo "<hr/>";
?>
<?php
if ($number == 10) {
    echo "Number = 10";
}else if ($number == 20) {
	echo "Number = 20";
}else if ($number == 30) {
	echo "Number = 30";
}
;
echo "<hr/>";
?>

<?php
if ($number < 15) {
    echo "Number mindre end 15";
}else if ($number > 25) {
	echo "Number større end 25";
}else {
	echo "Ingen af betingelserne opfyldt";
}
;
echo "<hr/>";
?>
<?php
$name = "Peter Hansen";
if ($number < 15 && $name == "Peter Hansen") {
    echo "Korrekt";
}
;
echo "<hr/>";
?>
<?php
$age = 20;
$name = "Gitte Stallone";
if ($age > 18 && $name == "Gitte Stallone") {
    echo "Hej fru Hansen";
} else if ($age < 18 && $name == "Bøllebob"){
	echo "Hej lille Jeppe";
}
;
echo "<hr/>";
?>


<?php

$errorcode = "1002";
switch ($errorcode) {

    case "1000":
        $error = "Errorcode 1000";
        break;
	case "1001":
			$error = "Errorcode 1001";
			break;
	case "1002":
			$error = "Errorcode 1002";
			break;
}
echo $error ;
echo "<br/>";
?>

<?php
$a = "10";
$b = "30";
$c = "7";
$d = "";
$besked = " ";

if ($a != 10) {
    $besked = $besked . "En led stodder ";
} else {
    $besked = $besked . "Jeg ";
}

if ($b == $a * 3) {
    if ($c < $b / 6) {
        $besked = $besked . "er ligeglad med ";
    } elseif ($c <= $b / 6) {
        $besked = $besked . "husker ikke ";
    } else {
        $besked = $besked . "elsker ";
    }
} else {
    $besked = $besked . "hader ";
}

if ($d) {
    $besked = $besked . "alt ";
} else {
    $besked = $besked . "at ";
}
echo $besked . "kode";
echo "<br/>";
?>

<?php
$navne[] = "Per";
$navne[] = "Hans";
$navne[] = "Brian";
$navne[] = "Gitte";

print_r($navne[3]);
echo "<br/>";

?>

<?php
$tal = array();

for ($i = 0; $i < 5; $i++)
{
  $tal[] = $i + 10;
}

print_r($tal);

echo "<br/>";
?>
<?php
    $kategorier = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
    foreach($kategorier as $key => $value) {
       echo "Key: ". $key . " Value: " . $value;
       echo "<br />";
    }
echo "<br/>";
?>

    <?php
    $colors = array("blue", "red", "green", "yellow");
    print_r($colors);
    echo "<br />";
    asort($colors);
    print_r($colors);
    echo "<br />";
    ?>


<?php
   $cars = array("MC" => "Mercedes", "V" => "Volvo", "VW" => "Volkswagen", "TY" => "Toyota");
   print_r($cars);
   echo "<br/>";
   asort($cars);
   print_r($cars);
   echo "<br/>";
?>

<?php
$categories = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
print_r($categories);
echo "<br/>";
shuffle($categories);
print_r($categories);
echo "<br/>";
?>

<?php
$cards = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "knægt", "dame", "konge");
shuffle($cards);
print_r($cards);

echo "<br/>";

for ($i = 1; $i < 6; $i++) {

    echo "<img src='./assets/images/card-$i.png' width='200' height='200' />";
}
echo "<br/>"
?>




<select>
<option selected="selected">Choose one</option>
<?php

$countries = array("DK" => "Denmark", "BG" => "Bulgaria", "EN" => "England", "CH" => "China", "IT" => "Italy");

// Iterating through the array
foreach($countries as $key => $value){
    echo "<option value='$key'>$value</option>";
}
?>
</select>

<ul>
<?php

$menu = array("Home", "Contact us", "About us", "Products", "Services");

// Iterating through the array
foreach($menu as $value){
    echo "<li>$value</li>";
}
?>
</ul>


<table>
  <td>
    <tr>1 </tr>
    <?php
    $xo = array("X", "O");
    for ($i=0; $i < 10; $i++) {
      shuffle($xo);
      echo "<tr>" . $xo[0] ."</tr>";
    }
    ?>
  </td>
</table>

<?php
echo "<hr/>";
?>



<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/footer.php";
?>





