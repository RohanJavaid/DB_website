<?php

// Define a Book model class
class Book {
    // Properties of the book
    private $title;
    private $author;
    private $description;

    // Constructor to initialize the book object
    public function __construct($title, $author, $description) {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }

    // Setter for title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for author
    public function getAuthor() {
        return $this->author;
    }

    // Setter for author
    // public function setAuthor($author) {
    //     $this->author = $author;
    // }

    // Getter for description
    public function getDescription() {
        return $this->description;
    }

    // Setter for description
    public function setDescription($description) {
        $this->description = $description;
    }

    // A method to return all the information about the book
    public function getBookInfo() {
        return "Title: " . $this->getTitle() . "<br>Author: "  . "<br>Description: " . $this->getDescription();
    }

    public function __toString() {
        return "Title: $this->title, Author: $this->author, Year: $this->year";
    }
}

?>
