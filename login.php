    <?php
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $username = $_POST["username"];
        $password = $_POST["password"]; 
        
        
        $sql = "Select * from users where username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");

        } 
        else{
            $showError = "Invalid Credentials";
        }
    }
        
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="dopehubfavicon.png">
    <title>Login</title>    
  </head>
  <body>
    <nav>
        <a id="logo" href="/loginsystem">DopeHub</a>
        <!-- <button type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
        </button>     -->
        <div id="navbarSupportedContent">
            <ul class="navUL">
                <li>
                    <a href="/loginsystem/login.php">Login</a>
                </li>
                <li>
                    <a href="/loginsystem/signup.php">Signup</a>
                </li>   
            </ul>    
        </div>
    </nav>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show successButton" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
        echo ' <div class="alertButton" role="alert" id="ErrorAlertBox">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" id="ErrorClose" onclick="ErrorBoxClose()" >
        <i class="fa-solid fa-xmark fa-bounce"></i>
        </button>
        </div> ';
    }
    ?>
    
    
    <div class="container  whitebox col-md-4 col-xs-4">
     <h1 class="text-center">Dope Hub</h1>
     <form action="/loginsystem/login.php" method="post">
        <!-- <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         
        <button type="submit" class="btn btn-primary">Login</button> -->

        <div class="inputbox " >   
            <label for="username"></label>         
            <input type="text" required="required"  name="username">
            <span>User name</span>
        </div>

        <div class="inputbox ">
            <label for="password"></label>
            <input type="password" required="required"  name="password"class="">
            <span>Password</span>
        </div>

            
            <div class="buttons ">
            <!-- <button id="login" class="tichuk btn btn-primary" type="submit" >Login</button> -->
            <button class="btn-53">
                    <div class="original">LOGIN </div>
                    <div class="letters">    
                    <span>L</span>                    
                    <span>O</span>
                    <span>G</span>
                    <span>I </span>                    
                    <span>N</span>
                    
                </div>
        </button>  
            <!-- <button id="submit" type="reset" class="tichuk btn btn-secondary">Resest</button> -->
            <button class="btn-54">
                    <div class="original">RESET</div>
                    <div class="letters">    
                    <span>R</span>                    
                    <span>E</span>
                    <span>S</span>
                    <span>E </span>                    
                    <span>T</span>

                </div>
        </button>    
            </div>



     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>   
        let ErrorAlertBox = document.getElementById("ErrorAlertBox");
        function ErrorBoxClose(){
        ErrorAlertBox.style.display="none";
        }
    </script>

    <script>
        
        function loader(){
            var loader =document.getElementById("loader");
        var preloader =document.getElementById("preloader");
            preloader.style.display="none";
            loader.style.display="none";
        }
        setTimeout(loader,3000);
        

        
    </script>
</body>
</html>
     