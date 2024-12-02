<?php

require(__DIR__.'/clases/Admin.php');

//crear instancia para iniciar sesion
$user = new Administrador(1, 'lennyprueba@gmail.com', '123456');

// Ejemplo de uso de los métodos de Administrador
$book = $user->addBook(1, 'Cien años de soledad', 'Gabriel García Márquez', 'Novela', 'Editorial XYZ', 1967, 417, '978-3-16-148410-0', 10);
print_r($book);
echo "<br><br>";

$updatedBook = $user->updateBook(1, 'Cien años de soledad', 'Gabriel García Márquez', 'Novela', 'Editorial ABC', 1967, 417, '978-3-16-148410-0', 15);
print_r($updatedBook);
echo "<br><br>";

$searchedBookId = $user->searchBook(1);
echo "Libro buscado con ID: " . $searchedBookId;