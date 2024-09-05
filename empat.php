<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type)
    {
        if ($type == "name") {
            return $this->name;
        } elseif ($type == "description") {
            return $this->description;
        } else {
            return "Type not found.";
        }
    }
}

class Publisher
{
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll()
    {
        return [
            "ISBN" => $this->ISBN,
            "Title" => $this->title,
            "Description" => $this->description,
            "Category" => $this->category,
            "Language" => $this->language,
            "Number of Pages" => $this->numberOfPage,
            "Author" => $this->author->show('name'),
            "Publisher" => $this->publisher->name
        ];
    }

    public function detail($ISBN)
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return "Buku dengan ISBN $ISBN tidak ditemukan.";
        }
    }
}

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
