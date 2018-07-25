<?php
// Exercice 1

function isTrue (){
    return true;
};


// Exercice 2

function sayHello ($Hello){
return $Hello;
};

// Exercice 3

function helloWorld ($Hello, $World){
    return $Hello . $World;
    };

// Exercice 4 

function compare ($number1, $number2){
    if ($number1>$number2){
        echo "Le premier nombre est plus grand ";
    } else if ($number1<$number2){
        echo "Le premier nombre est plus petit ";
    }
    else if ($number1==$number2){
        echo "Les deux nombres sont identiques ";
    }
}
echo compare(rand(1,100),rand(1,100));
echo "<br><br>";
// Exercice 5

function fonction5($varA,$varB){
    return $varA.$varB;
}
echo fonction5(rand(1,100)," string");
echo "<br><br>";

// Exercice 6

function hello($nom,$prenom,$age){
    echo "Bonjour ".$nom." ".$prenom.", tu as ".$age." ans";
}
echo hello("truc","muche",rand(1,100));
echo "<br><br>";

// Exercice 7

function genre($age,$genre){
    if ($age>=18){
        echo "Vous êtes un.e ".$genre." et majeur";
    } else {
        echo "Vous êtes un.e ".$genre." et mineur";
    }
}
echo genre(rand(1,100), "homme");
echo "<br><br>";

// Exercice 8

function somme($n1 = 1 , $n2 = 2 , $n3 = 3) {
    return ($n1+$n2+$n3);
}
echo somme();