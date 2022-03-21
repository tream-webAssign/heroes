<?php

//Upadate database functionality

$update = "UPDATE heroes SET name='hey' WHERE id=3";
if ($conn->query($update) == TRUE) {

    echo "updated successful" . "<br>";
} else {
    echo "fiale to update" . $conn->error;
}
// $conn->close();
