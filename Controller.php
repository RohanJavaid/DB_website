

<?php

require_once 'Models.php';

class Controller {
    public function index() {
        // Dummy data to pass to the view
        $data = [
            'title' => 'Welcome to the Simple MVC Website',
            'message' => 'This is a simple page to test MVC structure.',
            'description' => 'This is a simple page to test MVC structure.'

        ];

        // Use extract to convert the array into variables
        extract($data);
                // Corrected echo statements
        // Will work if Book has __toString() method

        $book1 = new Book("Pride & Predujice", "Rohaan", "12");
        $book2 = new Book("Knight Riders", "Anzer", "2005");



        //echo $book;
        echo $book1 . "<br>";
        echo $book2 . "<br>";
        // Load the view
        require 'views/home.php'; 

        



    }
}
?>
