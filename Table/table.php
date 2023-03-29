<?php
require_once "../DB/db.php";
global $connect;
$selects = mysqli_query($connect, "SELECT * FROM `form`");
$selects = mysqli_fetch_all($selects);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Table</title>
</head>
<body>

<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Programming languages do you know</th>
            <th>File</th>
            <th>Message</th>
            <th>Programming language do you learn</th>
            <th>Password</th>
        </tr>
        <?php
        foreach ($selects as $select) {

            $email = "Id: $select[0]\nFirstname: $select[1]\nLastname: $select[2]\nEmail: $select[3]\nGender: $select[4]\nProgramming languages do you know: $select[5]\nFile: $select[6]\nMessage: $select[7]\nProgramming language do you learn: $select[8]\nPassword: $select[9]";

            mail("kirill@gmail.com", "table res", $email);
            ?>
            <tr>
                <td><?= $select[0] ?></td>
                <td><?= $select[1] ?></td>
                <td><?= $select[2] ?></td>
                <td><?= $select[3] ?></td>
                <td><?= $select[4] ?></td>
                <td><?= $select[5] ?></td>
                <td><?= $select[6] ?></td>
                <td><?= $select[7] ?></td>
                <td><?= $select[8] ?></td>
                <td><?= $select[9] ?></td>


            </tr>
            <?php

        }
        ?>
        </thead>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>
