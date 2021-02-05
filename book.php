<?php 
  
  class Book {
    // Definisco le proprietà della classe libro
    public $title;
    public $author;
    public $genre;
    public $cover;
    public $publication_year;
    public $isbn_code;

    // Inserisco la funzione construct
    public function _construct($title,$author,$genre,$cover,$publication_year,$isbn_code) {
      $this->title = $title;
      $this->author = $author;
      $this->genre = $genre;
      $this->cover = $cover;
      $this->publicaiton_year = $publicaiton_year;
      $this->isbn_code = $isbn_code;
    }
  }

  // Creo delle istanze della classe libro
  $book1 = new Book (
    "Padroni del destino",
    "Richard Stengel",
    "Biografie storiche",
    "",
    "2018",
    "9788817102308",
  );

  $book2 = new Book (
    "Dieci cose da sapere sull'economia italiana prima che sia troppo tardi",
    "Alan Friedman",
    "Economia",
    "",
    "2018",
    "9788822714190",
  );

  $book3 = new Book (
    "1984",
    "George Orwell",
    "Romanzo",
    "",
    "1949",
    "9788817154857",
  );

  $book4 = new Book (
    "Manuale di sopravvivenza per UX designer",
    "Matteo di Pascale",
    "Manuale tecnico",
    "",
    "2019",
    "9788820389192",
  );

  // Pusho le istanze in un array
  $books = [$book1, $book2, $book3, $book4];

?>