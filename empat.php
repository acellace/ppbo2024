<?php

require_once 'Author.php';
require_once 'Publisher.php';
require_once 'Book.php';

$author = new Author("Pramoedya Ananta Toer", "Penulis besar Indonesia, terkenal dengan Tetralogi Buru");
$publisher = new Publisher("Penerbit Lentera Dipantara", "Jl. Salemba Raya No. 24, Jakarta", "081234567890");
$book = new Book(9789799731241, "Bumi Manusia", "Novel sejarah tentang kehidupan di masa kolonial", "Sejarah", "Bahasa Indonesia", 535, $author, $publisher);

echo "Informasi Penulis:\n";
echo "Nama: " . $author->show('name') . "\n";
echo "Deskripsi: " . $author->show('description') . "\n";

echo "\nInformasi Penerbit:\n";
echo "Nama: " . $publisher->name . "\n";
echo "Alamat: " . $publisher->address . "\n";
echo "Telepon: " . $publisher->getPhone() . "\n";

echo "\nInformasi Buku:\n";
print_r($book->showAll());

?>
