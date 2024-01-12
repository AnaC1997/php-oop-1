

<?php 

require __DIR__ . "/Models/Movie.php";

//  Creazione di un'istanza della classe Movie con la trama

$tramaHarry = ("A 11 anni, Harry Potter scopre di essere il figlio orfano di due potenti maghi. Frequenta la scuola di magia e stregoneria di Hogwarts dove scopre la verità su se stesso e sulla morte dei suoi genitori. ");
// Creazione istanza della classe Persona con una lista di attori

$attoriHarry = ["Daniel Radcliffe", "Emma Watson", "Rupert Grint", "Alan Rickman", "Tom Felton"];

$movie1 = new Movie("Harry Poter", "Fantasia", "Lingua",$tramaHarry, $attoriHarry); 

var_dump($movie1);

// Stampa delle informazioni dell'oggetto Movie

echo "<h2>Chiamo metodi degli oggetti indirizzo</h2>";

echo "Titolo: " . $movie1 ->titulo . "<br>"; 
echo "Genere: " . $movie1 ->genero . "<br>";
echo "Lingua: ". $movie1 ->lingua . "<br>";
echo "Trama: " . $movie1 ->trama . "<br>";
echo "Attori: " . implode(", ", $movie1->attori);




    




