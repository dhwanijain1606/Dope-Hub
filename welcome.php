<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>DopeHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
    <link  rel="stylesheet" href="./welcome.css" >    
    <link rel="shortcut icon" href="dopehubfavicon.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
 
  <body id="godfather" >

    
     <header>
    
    
    
<nav >
        <div id="dopehub" class="nav-el">Dope Hub</div>
        <div id="icons" class="h-75 nav-el">
            <ul id="webNav">
                <li id="home"><i class="fa fa-home "></i></li>
                <li id="search"><a href="search.html"><i class="fa-solid fa-compass"></i></a></li>
               
                <li id="notification">
                    <div class="ndropdown">
                        <button class="ndropbtn"><i class="fa">&#xf0f3;</i></button>
                    <div class="ndropdown-content">
                        <a><p id="unread_notfications">~~~~~ NEW ~~~~~</p></a>
                        <a href="#">MoonlightDreamer liked your post</a>
                        <a href="#">PuzzleMaster73 shared your post</a>
                        <hr id="notiHR">
                        <a href="#">AdventureAwaits20 started following you</a>
                        <a href="#">StarGazer23 liked your post</a>
                        <a href="#">NightOwl3 shared your post</a>
                    </div></li> 
                <li><div class="dropdown"><button class="dropbtn"><i class='fas fa-user '></i>
                        </i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#"><ion-icon name="person-outline"class="dropdownIcons"></ion-icon>Profile</a>
                        <a href="#"><ion-icon name="help-circle-outline"class="dropdownIcons"></ion-icon>Help & Support</a>
                        <a href="#"><ion-icon name="settings-outline"class="dropdownIcons"></ion-icon>Setting</a>
                        <a  id ="theme" onclick="darkmode()" ><ion-icon name="contrast-outline"class="dropdownIcons"></ion-icon>Themes</a>
                        <a href="./login.php"><ion-icon name="log-out-outline"class="dropdownIcons"></ion-icon>Logout</a>
                    </div></li>  
                 <li id="plus"><a href="messages.html"><i class="far">&#xf4ad;</i></a></li>
            </ul>
        </div>
        <div id="dayAndTime"class="nav-el">
            <!-- <span id="timeAndDate"></span><br> -->
            
            
           
            <span class="time-element" id="ghante">00</span>
             <span class="colon-element"> : </span>
            <span class="time-element" id="minutes">00</span>
            <!-- <span class="colon-element"> : </span>
            <span class="time-element" id="seconds">00</span> -->
            <br>
            <span id="day"></span>
        </div>
        
</nav>


</header>
<div class="welcomeUser" id="welcomeUser">
    <span id="welcomeMessage">Welcome </span>
    <button id="welcomeCloseButton" onclick="closeWelcomeBox()"></button>
</div>
<div class="preloader">
<div class="loader">DopeHub</div></div>
    <div id="personalinfo">
        <div id="profilephoto">
            <span id="name"><?php echo $_SESSION['username']?></span>
            <div class="follwersData ">
            <div class="counter-container align-items-center d-flex flex-column ml-3">
                <div class="counter  " data-target="400"></div>
                <span class="">Posts</span>
            </div>
            <div class="counter-container align-items-center d-flex flex-column ml-3">
                <div class="counter" data-target="2500"></div>
                <span>Followers</span>
            </div>
            <div class="counter-container align-items-center d-flex flex-column ml-3">
                <div class="counter" data-target="1500"></div>
                <span>Followings</span>
            </div>
            </div>
        </div>
    </div>
    <div id="suggestionbox">
        <span>Suggestions For you...... </span>
        <div class="suggestions"><div class="suggestion-prof-photo1"></div><div class="suggestion-prof-username">TechNinja7 </div><button class="follow-btn">follow</button><button class="threeDots"><ion-icon name="ellipsis-vertical"></ion-icon></button></div>
        <div class="suggestions"><div class="suggestion-prof-photo2"></div><div class="suggestion-prof-username">StarGazer23</div><button class="follow-btn">follow</button><button class="threeDots"><ion-icon name="ellipsis-vertical"></ion-icon></button></div>
        <div class="suggestions"><div class="suggestion-prof-photo3"></div><div class="suggestion-prof-username">YogaGuru17</div><button class="follow-btn">follow</button><button class="threeDots"><ion-icon name="ellipsis-vertical"></ion-icon></button></div>
        <div class="suggestions"><div class="suggestion-prof-photo4"></div><div class="suggestion-prof-username">NatureLover56</div><button class="follow-btn">follow</button><button class="threeDots"><ion-icon name="ellipsis-vertical"></ion-icon></button></div>
        <div class="suggestions"><div class="suggestion-prof-photo5"></div><div class="suggestion-prof-username">SoccerStar19</div><button class="follow-btn">follow</button><button class="threeDots"><ion-icon name="ellipsis-vertical"></ion-icon></button></div>
        <div class="suggestions"><div class="suggestion-prof-photo6"></div><div class="suggestion-prof-username">DogLover3</div><button class="follow-btn">follow</button><button class="threeDots"><ion-icon name="ellipsis-vertical"></ion-icon></button></div>        
    </div>
    <div id="birthdaybox">
        <span id="birthdaymessage"></span>
    </div>
    <button class="d-1 scrollToTop" id="scrollToTop"  onclick="topFunction()">
        <i class="fa-solid fa-caret-up "></i>
    </button>
    
    <div id="feed">
        <div id="icons" class="h-75 nav-el">
            <ul id="mobileNav">
                <li id="home"><i class="fa fa-home "></i></li>
                <li id="search"><a href="search.html"><i class="fa-solid fa-compass"></i></a></li>
               
                <li id="notification">
                    <div class="ndropdown">
                        <button class="ndropbtn"><i class="fa">&#xf0f3;</i></button></li> 
                    
                <li><div class="dropdown"><button class="dropbtn"><i class='fas fa-user '></i>
                        </i>
                    </button></li> 
                    
                 <li id="plus"><a href="messages.html"><i class="far">&#xf4ad;</i></a></li>
            </ul>
        </div>
    <h3>Stories</h3>

        <div class="storiessection">

        <div class="stories">
            <div class="storyCircle" id="circle1" ></div>
            <div class="storyCircle" id="circle2"></div>
            <div class="storyCircle" id="circle3"></div>
            <div class="storyCircle" id="circle4"></div>
            <div class="storyCircle" id="circle5"></div>
            <div class="storyCircle" id="circle6"></div>
            <div class="storyCircle" id="circle7"></div>
            <div class="storyCircle" id="circle8"></div>
            <div class="storyCircle" id="circle9"></div>
            <div class="storyCircle" id="circle10"></div>
            <div class="storyCircle" id="circle11"></div>
            <div class="storyCircle" id="circle12"></div>
            <div class="storyCircle" id="circle13"></div>
            <div class="storyCircle" id="circle14"></div>
            <div class="storyCircle" id="circle15"></div>
            <div class="storyCircle" id="circle16"></div>
            <div class="storyCircle" id="circle17"></div>
            <div class="storyCircle" id="circle18"></div>
            <div class="storyCircle" id="circle19"></div>
            <div class="storyCircle" id="circle20"></div>
            
            </div>
            
            </div>
            
            <hr>
            
<div id="box1" class="randomimages">
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-1"></span>
            <span class="username">StarGazer23</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon fa" ><i class="fa dil" >&#xf004;</i></button>
            <!-- <div id='heart' class='button'></div> -->
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
    </div>

<div id="box2" class="randomimages" >    
    <div class="feednavbar">
        <span class="feedprofilephoto" id="profile-pic-2"></span>
        <span class="username">TechNinja7</span></div>
      
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>
<div id="box3" class="randomimages" >   
    <div class="feednavbar">
        <span class="feedprofilephoto" id="profile-pic-3"></span>
        <span class="username">MoonlightDreamer</span>
    </div>
    <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
    </div>
    

<div id="box4" class="randomimages">    
    <div class="feednavbar">
        <span class="feedprofilephoto" id="profile-pic-4"></span>
        <span class="username">SunnySmiles88</span>
    </div>
    <div class="bottomnavbar">
        <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
        <i class="fa fa-share" aria-hidden="true"></i>
        <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
    </div>
</div>

<div id="box5" class="randomimages" >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-5"></span>
            <span class="username">AdventureSeeker19</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil" >&#xf004;</i></button>
            <i class="fa fa-share" id="shareicon" aria-hidden="true"></i>
            <i class="fa fa-bookmark"id="bookmarkico bookmarkiconn" aria-hidden="true"></i>
        </div>
</div>

<div id="box6" class="randomimages" >    
    <div class="feednavbar">
        <span class="feedprofilephoto" id="profile-pic-6"></span>
        <span class="username">NatureLover56</span>
    </div>
    <div class="bottomnavbar">
        <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
        <i class="fa fa-share" aria-hidden="true"></i>
        <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
    </div>
</div>

<div id="box7" class="randomimages"  >    
    <div class="feednavbar">
    <span class="feedprofilephoto" id="profile-pic-7"></span>
    <span class="username">CoffeeAddict27</span></div>
  
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div></div>
<div id="box8" class="randomimages" >    <div class="feednavbar">
    <span class="feedprofilephoto" id="profile-pic-8"></span><span class="username">BookWorm101</span></div>
     
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>
<div id="box9" class="randomimages"  >    
    <div class="feednavbar">
        <span class="feedprofilephoto" id="profile-pic-9"></span>
        <span class="username">TravelerSpirit</span>
    </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>
<div id="box10" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-10"></span>
            <span class="username">FitnessFreak77</span
                ></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box11" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-11"></span>
            <span class="username">PizzaLover12</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box12" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-12"></span>
            <span class="username">NightOwl3</span>
        </div>
          <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div></div>
<div id="box13" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-13"></span>
            <span class="username">ArtisticSoul9</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box14" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-14"></span>
            <span class="username">GamerGeek25</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box15" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-15"></span>
            <span class="username"></span></div>
      
            <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box16" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-16"></span>
            <span class="username">BeachBum15</span>
            </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box17" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-17"></span>
            <span class="username">MountainHiker8</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box18" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-18"></span>
            <span class="username">CatWhisperer4</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box19" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-19"></span>
            <span class="username">DogLover3</span>
        </div>
          <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>
<div id="box20" class="randomimages"  >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-20"></span>
            <span class="username">FoodieKingdom</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box21" class="randomimages" >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-21"></span>
            <span class="username">YogaGuru17</span>
            </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box22" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-22"></span>
            <span class="username">MovieBuff36</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box23" class="randomimages" >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-23"></span>
            <span class="username">Fashionista88</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box24" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-24"></span>
            <span class="username">ScienceNerd13</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box25" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-25"></span>
            <span class="username">DIYEnthusiast</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box26" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-26"></span>
            <span class="username">RainbowChaser</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box27" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-27"></span>
            <span class="username">UnicornDreamer</span>
            </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box28" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-28"></span>
            <span class="username">HappyCamper60</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box29" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-29"></span>
            <span class="username">SoccerStar19</span></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box30" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-30"></span>
            <span class="username">GuitarHero99</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box31" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-31"></span>
            <span class="username">EcoWarrior7
            </span></div>

          <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div></div>
<div id="box32" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-32"></span>
            <span class="username">StarryEyes21</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
</div>

<div id="box33" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-33"></span>
            <span class="username">MysterySolverX</span
                ></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box34" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-34"></span>
            <span class="username">GreenThumb27</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </dIv>
</div>

<div id="box35" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-35"></span>
            <span class="username">FitnessFanatic42</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box36" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-36"></span>
            <span class="username">CoffeeCraze88</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box37" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-37"></span>
            <span class="username">ChefInTheMaking</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box38" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-38"></span>
            <span class="username">NightSkyWatcher</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box39" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-39"></span>
            <span class="username">  MusicMaker12</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box40" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-40"></span>
            <span class="username">WanderlustJunkie</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box41" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-41"></span>
            <span class="username"> DanceMachine21     
                    </span></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box42" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-42"></span>
            <span class="username">  PetPamperer44     
                   </span></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box43" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-43"></span>
            <span class="username">  PuzzleMaster73    
                    </span></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box44" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-44"></span>
            <span class="username">SnowboardPro3</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box45" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-45"></span>
            <span class="username">ThrillSeeker7</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box46" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-46"></span>
            <span class="username">CraftyCreator55</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box47" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-47"></span>
            <span class="username">ScienceFictionFan</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box48" class="randomimages" ">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-48"></span>
            <span class="username"> VintageCollector</span>
        </div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
        </div>
</div>

<div id="box49" class="randomimages">    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-49"></span>
            <span class="username">SushiSamurai9</span></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil ">&#xf004;</i> </button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

<div id="box50" class="randomimages" >    
        <div class="feednavbar">
            <span class="feedprofilephoto" id="profile-pic-50"></span>
            <span class="username">   AdventureAwaits20</span></div>
        <div class="bottomnavbar">
            <button class="hearticon"><i class="fa dil">&#xf004;</i></button>
            <i class="fa fa-share" aria-hidden="true"></i>
            <i class="fa fa-bookmark bookmarkicon" aria-hidden="true"></i>
            </div>
        </div>

    </div>
    </div>
    </div>
    <audio id="heartbeat" preload="auto" src="./beep.mp3">
       
    </audio>

    <script>
        // const currentDate = new Date();
        // const currentHour = currentDate.getHours();
        // const currentMinute = currentDate.getMinutes();
        // document.getElementById("timeAndDate").innerHTML = (`${currentHour}:${currentMinute}`);

        function updateClock(){

            let now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            hours = hours < 10? "0" + hours :hours;
            minutes = minutes < 10? "0" + minutes :minutes;
            seconds = seconds < 10? "0" + seconds :seconds;
            const hoursElement = document.getElementById("ghante");
            const minutesElement = document.getElementById("minutes");
            const secondsElement = document.getElementById("seconds");
            
            hoursElement.textContent = hours;
            minutesElement.textContent = minutes;
            secondsElement.textContent = seconds;
        }
        setInterval(updateClock,1000);
        const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const d = new Date();
        let day = weekday[d.getDay()];
        document.getElementById("day").innerHTML = day;
    </script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="welcome.js"></script>
    <script>
     AOS.init(
        
     );
     </script>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    var playBtn = document.querySelectorAll('button'),
    hearbeat = document.getElementById('heartbeat')
	audios = document.querySelectorAll('audio');
    console.log(audios);


playBtn.addEventListener('mouseover', function() {
[].forEach.call(audios, function(audio) {
  // do whatever
  audio.play();
});
}, false);

playBtn.addEventListener('mouseleave', function() {
  heartbeat.pause();
  heartbeat.currentTime = 0;
}, false);

</script>

     

</body>
</html>
