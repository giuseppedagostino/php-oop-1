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
    "",
    "",
    "",
    "",
    "",
    "",
  );

  $book3 = new Book (
    "",
    "",
    "",
    "",
    "",
    "",
  );

  $book4 = new Book (
    "",
    "",
    "",
    "",
    "",
    "",
  );

?>