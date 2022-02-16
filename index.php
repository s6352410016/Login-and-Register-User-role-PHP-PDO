<?php  

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration system PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container"><br><br>
        <h3>สมัครสมาชิก</h3>
        <hr>
        <form action="signup_db.php" method="POST">
            <?php if(isset($_SESSION["error"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION["error"];
                        unset($_SESSION["error"]);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION["warning"])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION["warning"];
                        unset($_SESSION["warning"]);
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
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="Confirm password" class="form-label">Confirm password</label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Signup</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม? <a href="signin.php">เข้าสู่ระบบ</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>