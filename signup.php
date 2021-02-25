<?php
if (isset($_POST["submit"])){
    $whoIAm = $_POST["inlineRadioOptions"];
    if($whoIAm == "option1"){
        echo "I'm a teacher";
    }else{
        echo "Hi, I'm a student";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignIn | You Can</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Sign Up</h3>
            <div class="card-text">
                <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                <form method="post">
                    <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                        <label for="exampleInputFirstname" >First Name</label>
                        <input type="text" name="firstname" class="form-control form-control-sm" id="exampleInputFirstname" minlength="2" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastname">Last Name</label>
                        <input type="text" name="lastname" class="form-control form-control-sm" id="exampleInputLastname" minlength="2" required>
                    </div>
                    <div class="form-group">
<!--                        <label for="exampleSelectWhoIAm">I am a:</label>-->
                        <label for="exampleInputRadio">I am a</label><br/>
                        <div class="form-check form-check-inline" id="exampleInputRadio">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                            <label class="form-check-label" for="inlineRadio1">Teacher</label>
                        </div>
                        <div class="form-check form-check-inline secondOptionDiv">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                            <label class="form-check-label" for="inlineRadio2">Student</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign up</button>

                    <div class="sign-up">
                        Already have account? <a href="signin.php">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>