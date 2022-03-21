<?php

if (isset($_POST['submit'])) {
    $profileImage = $_POST['profileImage'];
    $name = $_POST['name'];
    $real_name = $_POST['real_name'];
    $shortBio = $_POST['shortBio'];
    $longBio = $_POST['longBio'];

    // insert data from the users into database
    $insert = "INSERT INTO heroes (profileImage, name, real_name, shortBio, longBio) VALUE ('$profileImage', '$name','$real_name','$shortBio','$longBio')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo ("successfull add") . "<br>";
    } else {
        echo ("failed to add data") . "<br>";
    }
}
