<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (8, "Marc Aspas", 1, 0),
        (9, "Jeremias Johnson", 0, 1),
        (10, "Michael Bay", 0, 1)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>