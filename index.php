<?php




// User merried Year
$userName = "Shanto Roy";
$userDateOfBath = 2000;
$userGender = "Mail";

if ( $userName != '' && ( 2024 - $userDateOfBath ) > 21 && $userGender == "Mail" ) {
    echo "$userName Tomar Biyar Boyosh Hoica";
} else if ( $userName != '' && ( 2024 - $userDateOfBath ) > 18 && $userGender == "Femail" ) {
    echo "$userName Tomar Biyar Boyosh Hoica";
} else {
    echo "$userName Tomar biyar boyosh Hoyo nai";
}
echo "<br><br><br><br><hr>";
// Currency Convater

// Pound, Usd, Euro
$curncyName = "Euro";
$curncyAmound = 2;
$bdCurrency = " Tk";

switch ( $curncyName ) {
case 'Pound':
    if ( $curncyAmound != '' ) {
        echo $curncyAmound * 148 .$bdCurrency;
    }
    break;
case 'Usd':
    if ( $curncyAmound != '' ):
        echo $curncyAmound * 117.50 .$bdCurrency;
    endif;
    break;
case 'Euro':
    if ( $curncyAmound != '' ):
        echo $curncyAmound * 126.14 .$bdCurrency;
    endif;
    break;
default:
    echo "Not Match Currency";
    break;
}

echo "<br><br><br><br><hr>";
// BMI Convater 

$Weight = 60;  //kg
$Height = 5; //Feet
$HeightInche = 6; //Inche

if($Weight && $Height){
    $h = ((12*$Height)+$HeightInche)*((12*$Height)+$HeightInche)*0.0254;
    echo "$userName Your Height is:<b>". ($Weight/$h) ."</b>";
    echo "<br>";
    echo $h;
}



// For Loop 
for ($i= 5000; $i >= 3500; $i--) { 
    if($i%7 == 0){
        echo $i."<br>";
    }
}