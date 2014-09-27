<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lets Get Data Using Form</title>
</head>
<body>

<?php
if (!empty($_POST)) {
    echo 'My name is ' . $_POST['name'] . ' and my age is ' . $_POST['age'];
}
?>


<form action="" method="post">
    <p>What is your name? </p>
    <input type="text" name="name"/>


    <p>What is your Age: </p>
    <input type="number" name="age"/>

    <button type="submit">Enter!</button>
</form>

</body>
</html>