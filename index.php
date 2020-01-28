<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <link rel="icon" href="../../favicon.ico">

        <title>Login</title>

        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="assets/etc/signin.css" rel="stylesheet">
        <script src="assets/js/ie-emulation-modes-warning.js"></script>

    </head>

    <body>

        <div class="container">

            <form class="form-signin" method="POST" action="cek_login.php">
                <h2 class="form-signin-heading">Masuk</h2>
                <label for="inputEmail" class="sr-only"></label>
                <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Username" required autofocus><br>
                <label for="inputPassword" class="sr-only"></label>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="log">Masuk</button>
            </form>

        </div>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>  
      
        
</html>