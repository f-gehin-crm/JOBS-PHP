<?php
/**
* Affiche "Hello World !"
*/
function helloWorld() : void
{
 echo "Hello World ! ".PHP_EOL;
}
// test de la fonction (la fonction affiche directement le résultat)
helloWorld();


/**
* Retourne "Hello $name !"
* @param string $name le nom à afficher
*/

$name = readline("Entrez votre nom : ");

if (empty($name)) {
    echo "Le nom ne peut pas être vide.".PHP_EOL;
    exit(1);
}

function hello(string $name) : string



{
 return "Hello $name";
}
// test de la fonction (la fonction n'affiche rien. "echo" affichera la valeur retournée par la fonction)
echo hello("David").PHP_EOL;


?>