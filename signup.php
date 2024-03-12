    <?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $exists=false;
        if(($password == $cpassword) && $exists==false){
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
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
    <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>
    <link rel="stylesheet" href="./signup.css">
    <link rel="stylesheet" href="/partials/_nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="dopehubfavicon.png">
    
    <title>SignUp</title>
    
    
    <script>   function bomb(){
    const end = Date.now() + 1 * 1000;

    // go Buckeyes!
    const colors = ["#007acc", "#ffffff"];
    const defaults = {
    spread: 360,
    ticks: 100,
    gravity: 0,
    decay: 0.94,
    startVelocity: 30,
    shapes: ["heart"],
    colors: ["#007acc", "#fff", "#569cd6", "blue"],
    };
    confetti({
  ...defaults,
  particleCount: 50,
  scalar: 2,
});

confetti({
  ...defaults,
  particleCount: 25,
  scalar: 3,
});

confetti({
  ...defaults,
  particleCount: 25,
  scalar: 4,
});

    (function frame() {
        confetti({
            particleCount: 2,
            angle: 60,
            spread: 55,
            origin: { x: 0 },
            colors: colors,
        });

        confetti({
            particleCount: 2,
            angle: 120,
            spread: 55,
            origin: { x: 1 },
            colors: colors,
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    })();
    }
    </script>
    <link rel="stylesheet" href="signup.css">
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
    if($showAlert ){
    echo'<div class="successButton" role="alert" id="SuccessAlertBox">
        <strong>Success!</strong> Now you can login
        <button type="button"  id="SuccessClose" onclick="SuccessBoxClose()">
        <i class="fa-solid fa-xmark fa-bounce"></i>
        </button>
    </div>';
    
    echo "<script>bomb();</script>" ;
    

    }
    if($showError){
    echo ' <div class="alertButton" role="alert" id="ErrorAlertBox">
        <strong>Error!</strong> '. $showError.'
        <button type="button" id="ErrorClose" onclick="ErrorBoxClose()" >
        <i class="fa-solid fa-xmark fa-bounce"></i>
        </button>
        </div> ';
   
    }
    ?>
 
    
    <div class=" whitebox ">
     <h1 class="text-center">Dope Hub</h1>
     <form action="/loginsystem/signup.php" method="post" autocomplete="">      
        <div class="form-control" >  
            
            <input type="text" id="username" name="username" required="" >
            <label>
                <span style="transition-delay:0ms">U</span>
                <span style="transition-delay:50ms">s</span>
                <span style="transition-delay:100ms">e</span>
                <span style="transition-delay:150ms">r</span>
                <span style="transition-delay:200ms">n</span>
                <span style="transition-delay:250ms">a</span>
                <span style="transition-delay:300ms">m</span>
                <span style="transition-delay:350ms">e</span>
            </label>
             

        </div>
        
        <div class="form-control2 ">
            
            <input type="text"  id="password" name="password"  required="">
             <label>
                <span style="transition-delay:0ms">P</span>
                <span style="transition-delay:50ms">a</span>
                <span style="transition-delay:100ms">s</span>
                <span style="transition-delay:150ms">s</span>
                <span style="transition-delay:200ms">w</span>
                <span style="transition-delay:250ms">o</span>
                <span style="transition-delay:300ms">r</span>
                <span style="transition-delay:350ms">d</span>            
            </label>
            
        </div>
        <div class="form-control3 ">
            <input type="password"  id="cpassword" name="cpassword" required="">
            <label>
                <span style="transition-delay:0ms">C</span>
                <span style="transition-delay:50ms">o</span>
                <span style="transition-delay:100ms">n</span>
                <span style="transition-delay:150ms">f</span>
                <span style="transition-delay:200ms">i</span>
                <span style="transition-delay:250ms">r</span>
                <span style="transition-delay:300ms">m</span>
                <span style="transition-delay:350ms"> </span>            
                <span style="transition-delay:400ms">P</span>
                <span style="transition-delay:450ms">a</span>
                <span style="transition-delay:500ms">s</span>
                <span style="transition-delay:550ms">s</span>            
                <span style="transition-delay:600ms">w</span>
                <span style="transition-delay:650ms">o</span>
                <span style="transition-delay:700ms">r</span>
                <span style="transition-delay:750ms">d</span>            
            </label>
        
        
        
        </div>
        
        
        
        <small id="emailHelp" class=" text-muted" >Make sure to type the same password</small>
        <div class="buttons">
        <!-- <button type="submit" class="tichuk">SignUp</button> -->
        <button class="btn-53">
                    <div class="original">SIGNUP </div>
                    <div class="letters">    
                    <span>S</span>                    
                    <span>I</span>
                    <span>G</span>
                    <span>N </span>
                    
                    <span>U</span>
                    <span>P</span>
                </div>
        </button>                   
        <!-- <button id="submit" type="reset" class="tichuk" onclick="bomb()" >Reset</button></div> -->
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
     </form>
    </div>


    <script>
        let SuccessAlertBox = document.getElementById("SuccessAlertBox");
        function SuccessBoxClose() {
            SuccessAlertBox.style.display="none";
        }

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
        setTimeout(loader,2000);
    </script>

</body>
</html>