<?php

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

        // Load the view
        require 'views/home.php'; 
    }
}
?>
