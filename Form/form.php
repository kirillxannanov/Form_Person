<?php
require_once "../DB/db.php";


$name = trim($_POST['name']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$gender = trim($_POST['inlineRadioOptions']);
$lang_php = trim($_POST['langPHP']);
$lang_py = trim($_POST['langPY']);
$lang_cpp = trim($_POST['langC++']);
$lang_java = trim($_POST['langJAVA']);
$file = trim($_POST['file']);
$message = trim($_POST['message']);
$menu = trim($_POST['menu']);
$password = trim($_POST['password']);
$submit = $_POST['submit'];
//global $connect;

if ($password) {
    $password = MD5($password);
}

if (!$name == NULL) {
    mysqli_query($connect, "INSERT INTO `form` (`id`, `firstname`, `lastname`, `email`, `gender`, `programming_lang`, `file`, `Message`, `menu`, `password`) VALUES (NULL, '$name', '$lastname', '$email', '$gender', '$lang_php $lang_py $lang_cpp $lang_java', '$file', '$message', '$menu', '$password')");
}


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
    <title>Form</title>
</head>
<body>
<?php

if (isset($submit)) {
    header("Location: form.php");
    die;

}
?>

<div class="container ">
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <form action="../Form/form.php" method="post">
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">First name</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="First name" name="name"
                           required>
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Last name</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Last name"
                           name="lastname"
                           required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="name@example.com"
                           name="email"
                           required>
                </div>

                <div>
                    Select gender?
                    <br><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="Male"
                               checked>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>

                <br>

                <div>
                    What programming languages do you know?
                    <br><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PHP" id="flexCheckChecked" name="langPHP"
                               checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            PHP
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PYTHON" id="flexCheckChecked"
                               name="langPY">
                        <label class="form-check-label" for="flexCheckChecked">
                            PYTHON
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="C++" id="flexCheckChecked"
                               name="langC++">
                        <label class="form-check-label" for="flexCheckChecked">
                            C++
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="JAVA" id="flexCheckChecked"
                               name="langJAVA">
                        <label class="form-check-label" for="flexCheckChecked">
                            JAVA
                        </label>
                    </div>
                </div>


                <br>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Select file?</label>
                    <input class="form-control" type="file" id="formFile" name="file" required>
                </div>

                <br>

                <p>Write a message</p>
                <div class="overflow-auto"
                ">
                <textarea class="form-control" id="floatingTextarea2"
                          style="height: 100px" name="message" placeholder="Message" required></textarea>
                <label for="floatingTextarea2"></label>


                <br>
                <p>What programming language do you learn?</p>
                <select class="form-select" aria-label="Default select example" name="menu" required>
                    <option selected>Open this select menu</option>
                    <option value="PHP">PHP</option>
                    <option value="C++">C++</option>
                    <option value="PYTHON">PYTHON</option>
                </select>

                <br>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                           name="password" required>
                </div>

                <br>


                <button class="btn btn-outline-success" type="submit" name="submit">Submit</button> &emsp;&emsp;

                <button class="btn btn-outline-danger" type="reset" name="reset">Reset</button>&emsp;&emsp;

                <a href="../Table/table.php" class="btn btn-outline-info">Link to table</a>

                <br><br>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>
</html>
