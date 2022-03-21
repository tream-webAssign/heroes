<?php

//deleting data from database

$del = "DELETE FROM heroes WHERE id=3";
if ($conn->query($del) == TRUE) {
    echo "row deleted " . "<br>";
} else {
    echo "error of deleting data: " . $conn->error;
}
