<?php

//connect to MySQL
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');


//create the main database if it doesn't already exist
$query='ALTER TABLE movie ADD CONSTRAINT movie_leadactor_people ADD FOREIGN KEY (movie_leadactor) REFERENCES people_id(ID)';
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));


echo 'Relationship created successfully';
?>