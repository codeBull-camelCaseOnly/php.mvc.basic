<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>This is the home page</h1>
<p>
    <?php

    use Lib\database\User;

    $user = $user ?? [];
    echo 'User #' . $user['id'] . ', has name - ' . $user['name'] . '<br>';
    ?>
</p>
<a href="/">Back</a>

</body>
</html>