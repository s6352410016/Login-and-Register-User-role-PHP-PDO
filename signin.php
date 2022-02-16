<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin system PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container"><br><br>
        <h3>เข้าสู่ระบบ</h3>
        <hr>
        <form action="signin_db.php" method="POST">
            <?php if(isset($_SESSION["error"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION["error"];
                        unset($_SESSION["error"]);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION["success"])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION["success"];
                        unset($_SESSION["success"]);
                    ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="signin" class="btn btn-primary">เข้าสู่ระบบ</button>
        </form>
        <hr>
        <p>ยังไม่เป็นสมาชิกใช่ไหม? <a href="index.php">สมัครสมาชิก</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>