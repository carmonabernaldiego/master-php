<?php

//Arrays: tipo de colección de variables
$peliculas = array('Batman','Spiderman','Ordet','Star Wars');
$cantantes = ['Bruce Dickinson', 'Rob Halford', 'Jens Kidman'];

echo '<h1>Listado de peliculas</h1>';
echo '<ul>';
for($i = 0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i] . '</li>';
}
echo '</ul>';

echo '<h2>Cantantes</h2>';
echo '<ul>';
foreach ($cantantes as $cantante){
    echo '<li>'.$cantante .'</li>';
}
echo '</ul>';

$personas = array(
    'nombre' => 'Diego',
    'apellidos' => 'Carmona',
    'website' => 'prueba.com'
);
echo $personas['nombre'];
echo '<br/>';
//Arrays multidimensionales
$contactos = array(
    array(
        'nombre' => 'Pepe',
        'email' => 'pepe@test.com',
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@test.com',
    ),
    array(
        'nombre' => 'Salva',
        'email' => 'salva@test.com',
    ),

);
echo '<ul>';
foreach($contactos as $contact){
    echo '<li>' . $contact['nombre'] .' '.$contact['email'] . '</li>';
}
echo '</ul>';

sort($cantantes);
var_dump($cantantes);

$numeros = [4,6,1231,61,87];
sort($numeros);
var_dump($numeros);

$cantantes[] = "Russel Allen";
array_push($cantantes,'Mikael Akerfeldt');
var_dump($cantantes);
unset($cantantes[2]);
var_dump($cantantes);

echo $cantantes[array_rand($cantantes)];

var_dump(array_reverse($numeros));

var_dump(array_search('Bruce Dickinson',$cantantes));
