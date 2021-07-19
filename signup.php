<!DOCTYPE html>
<html>

<head>
    <title>Room chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    #signup_form {
        width: 350px;
        height: 430px;
        position: relative;
        top: 50px;
        margin: auto;
        padding: auto;
    }
    </style>
</head>

<body>
    <div class="container">
        <div id="signup_form" class="well">
            <h2>
                <center><span class="glyphicon glyphicon-user"></span> Inscription</center>
            </h2>
            <hr>
            <form method="POST" action="register.php">
                Nom: <input type="text" name="name" class="form-control" required>
                <div style="height: 10px;"></div>
                Username: <input type="text" name="username" class="form-control" required>
                <div style="height: 10px;"></div>
                Password: <input type="password" name="password" class="form-control" required>
                <div style="height: 10px;"></div>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>
                    S'inscrire</button> <a class="btn btn-success" href="index.php"> Connexion</a>
            </form>
            <div style="height: 15px;"></div>
            <div style="color: red; font-size: 15px;">
                <center>
                    <?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
                </center>
            </div>
        </div>
    </div>
</body>

</html>