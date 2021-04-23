<?php
    require_once("store.php");

    $mystore->login();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store | login</title>
</head>

<style>
*{
    margin-left:5%;
}
</style>
<body>
    <div class="container">
        <div class="form-container">
            <form action="" method = "post">
                <div class="form-input">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form-input">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password">
                </div>

                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>