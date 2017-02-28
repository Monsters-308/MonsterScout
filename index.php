<!DOCTYPE html>
<?php

  $errorCode = $_GET['error'];

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TODO Add content meta data & favicon -->
    <title>MonsterScout</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/siimple/2.0.0/siimple.min.css">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="css/signin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- Android Viewport height fix-->
    <script type="text/javascript">
      //Handle android bug fix

      var isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1; //&& ua.indexOf("mobile");
    
      if(isAndroid) {
        document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0">');
      }

    </script>
  </head>
  <body>
    

    <div class="container">
    <?php
      //Error 1: Password or username wrong/misspelled
      if ($errorCode == 1) {
         echo "<div class='alert alert-danger' role='alert' id='alert'><strong>Oh snap!</strong> Change a few things up and try submitting again.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
      }
      //Error 2: Database connection error
      else if($errorCode == 2){
        echo "<div class='alert alert-danger' role='alert' id='alert'><strong>No way!</strong> Somebody cut the wire to the database.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
      }
      //Error 3: Internal error
      else if($errorCode == 3){
        echo "<div class='alert alert-danger' role='alert' id='alert'><strong>Sorry!</strong> We have an internal error!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
      }

    ?>
      <form class="form-signin"  method="POST" action="login.php">
        <div class="siimple-h2">Login</div>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" class="siimple-input form-control" placeholder="Email address" name="email" required autofocus>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="siimple-input form-control" placeholder="Password" name="password" required>
        <button type="submit" class="core-colors btn-block" id="submitButton">Submit</button>
      </form>
      

    </div> <!-- /container -->

    <div class="footer">
          <p class="siimple-p">&#169; 2017 Monsters308 | Developed by <a class="siimple-link" href="http://www.codeteddy.de">Codeteddy</a></p>
        </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/signin.js"></script>
    <script type="text/javascript" src="js/android-fix.js"/> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>