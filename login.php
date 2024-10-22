<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "" && $pass == "") {
        echo "<h2>Login Berhasil</h2>";
    } else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">  
<style>
    html,
body {
    height: 100%;
    background-color: #222d32 !important;
}

.global-container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #48e248;
}

.login-form {
    width: 380px;
    height: 450px;
    padding: 20px;
    background-color: #030303 !important;
    border-radius: 10px !important;
}

input[type="username"],
input[typpe="password"] {
    background: #428b82;
    color: #fff;
    border: 2px solid #00ff00;
    border-radius: 10px;
    margin-bottom: 25px;
}

input[type="username"]:focus,
input[type="password"]:focus {
    outline: none;
    border: none;
    background: #1a2226;
    color: #fff;
    margin: 0;
}

.card-tittle {
    font-weight: 900;
    padding-top: 20px;
}

.btn {
    background: #48e248 !important;
    color: #000 !important;
    transform: translate(10px);
    font-size: 14px;
    border-radius: 10px !important;
}
    </style>
</head>
<body>
    <FORM ACTION="index.php" METHOD="POST" NAME="input">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-tittle text-center">L O G I N</h1>
            </div>
            <div class="card-text">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputUsername" class="form-label">Username</label>
                      <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </form>
            </div>
        </div>
    </div>
    </FORM>
</body>
</html>

