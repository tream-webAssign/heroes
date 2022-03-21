<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">

</head>

<body>


    <form action="databaseConnection.php" method="POST">
        Name: <input type="text" name="name" placeholder="name here"><br>
        Real name: <input type="text" name="real_name" placeholder="your real name here"><br>
        Short bio: <input type="text" name="shortBio" placeholder="write your shortbio"><br>
        Long bio: <textarea id="longBio" name="longBio" rows="5" cols="50" placeholder="write your long bio here"></textarea><br>
        Profile image:<input type="file" name="profileImage" value="choose image">
        <input type="submit" name="submit" value="Submit">

    </form>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "heros";

    //connect database with php
    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn) {
        die("failed");
    } else {
        echo ("connected successful<br>");
    }

    ?>

    <h2>insert data from the users into database </h2>

    <?php include 'AddRecord.php'; ?>


    <h2>select or display data from database on browser</h2>
    <?php

    $select = 'SELECT  id, profileImage, name, real_name, shortBio, longBio FROM heroes';
    $result = $conn->query($select);

    if ($select) {

        //        echo "id: " .$row["id"]. " name: ".$row["name"]." Real Name: ".$row["real_name"]. "shortBio: ".$row["shortBio"]. "Long Bio :".$row["longBio"]. "<br>";


    ?>

        <table id="tab">
            <tr>

                <th>Id</th>
                <th>Profile Image</th>
                <th>Name</th>
                <th>Real_name</th>
                <th>Short Name</th>
                <th>Long Bio</th>

            </tr>

            <?php while ($row = $result->fetch_assoc()) {
            ?>
                <tr>

                    <td><?php echo $row["id"]; ?></td>

                    <td><img src=" <?php echo $row["profileImage"]; ?>" alt="oops"> </td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["real_name"]; ?></td>
                    <td><?php echo $row["shortBio"]; ?></td>
                    <td><?php echo $row["longBio"]; ?></td>

                </tr>

        <?php

            }
        } else {
            echo "Zero result";
        }

        ?>

        </table>

        <h2>Upadate database functionality</h2>
        <?php include 'update.php'; ?>

        <h2>deleting data from database</h2>

        <?php include 'delete.php'; ?>


</body>

</html>