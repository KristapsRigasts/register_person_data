<?php



?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
<header>

</header>

<section class ="index-signup">
    <div class="wrapper"  >
        <div class="index-signup-register" >
            <h4>Register your data</h4>
            <form action="app/register.inc.php" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="surname" placeholder="Surname">
                <input type="text" name="personalcode" placeholder="Personal Code">

                <br>
                <button type="submit" name="submit">Register</button>
            </form>
        </div>

</section>

</body>
</html>
