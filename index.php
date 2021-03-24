<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/daed5e1e73.js" crossorigin="anonymous"></script>
    <title>Login With OAuth 2</title>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading {
            margin-bottom: 10px;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">

            <form class="col-md-4 offset-md-4" method="post" action="login.php">
                <h2 style="text-align: center;">Login</h2>
                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                <br>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <br>
                <div class="offset-md-3">
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-user"></i> Login</button>
                    atau
                    <a href="google.php" class="btn btn-danger"><i class="fa fa-google"></i> Google</a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>