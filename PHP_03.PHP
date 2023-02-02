<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $boolReverse = true;
        for ($i = 0; $i < strlen($username); $i++){
            if ($username[$i] != $password[strlen($password) -1 - $i]){
                $boolReverse = false;
                break;
            }
        }

        if ($boolReverse) {
            ?> <script>
                alert ("Login successful");
            </script>
            <?php
        }else {
            ?>
            <script>
                alert ("Login Failed...");
            </script>
            <?php
        }
    }
    ?>
    <div class="">
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" require id="username">
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" name="password" require id="password">
                </li>
                <button type="submit" name="submit" value="submit">Submit</button>
            </ul>
        </form>
    </div>
</body>
</html>