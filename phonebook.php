<?php

include 'credentials.php';

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db);

// Check connection
if (!$conn) {
	// jei prisijungti nepavyko
	echo mysqli_connect_error();
    die();
} else {
	// jei prisijungi pavyko
	echo "Connected <br/>";
	mysqli_set_charset($conn, "utf8");
}
 
$name_array = [
"Austeja",
"Alfred",
"Morris",
"Angele",
"Antanas",
"Petras",
"Mindaugas",
"Kestas",
"Vingaudas",
"Algirdas",
"Gediminas",
"Arunas",
"Regina",
"Lina",
"Ignas",
"Vytautas",
"Raimonda",
"Anele",
"Petrute",
"Kazimieras",
"Dainius",
"Marius",
"Povilas",
"Evita",
"Robertas",
"Rasa",
"Martynas",
"Ivesta",
"Audrone",
"Laurynas",
];

for ($i=1; $i <=99999 ; $i++) { 
	$sql = "INSERT INTO phonebook (name, prefix, number) VALUES ('".$name_array[rand(0, count($name_array)-1)]."', 37, '".$i."')"; 

	mysqli_query($conn, $sql);
 

}

echo $i." products was added.";
 
mysqli_close($conn);
