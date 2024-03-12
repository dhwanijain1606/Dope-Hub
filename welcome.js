
/* dropdown javascript */

/* When the user clicks on the button, 
                   toggle between hiding and showing the dropdown content */
// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// Close the dropdown if the user clicks outside of it
// window.onclick = function (event) {
//     if (!event.target.matches('.dropbtn')) {

//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;

//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }





const counters = document.querySelectorAll('.counter');

counters.forEach((counter) => {
    counter.innerHTML = 0;

    const updateCounter = () => {
        const targetCount = +counter.getAttribute('data-target');

        const startingCount = Number(counter.innerHTML);

        const incr = targetCount / 10;

        if (startingCount < targetCount) {
            counter.innerHTML = `${Math.round(startingCount + incr)}`;
            setTimeout(updateCounter, 100)
        } else {
            counter.innerHTML = targetCount;
        }
    }
    
    setTimeout(() => {
        updateCounter();
    }, 2000);
    
})





// function gola() {
//     var el = document.getElementsByClassName(".loader");
//     var preloader = document.getElementsByClassName(".preloader");
//     preloader.style.display = "none";
//     el.style.display = "none";
//    setTimeout(() => {
//         gola();
//     }, 2000);
// }
//  gola();
function gola() {
    var el = document.getElementsByClassName("loader")[0];
    var preloader = document.getElementsByClassName("preloader")[0];
   
        preloader.style.display = "none";
        el.style.display = "none";
        
    
}
setTimeout(() => {
            gola();
        }, 2000);




function random_item(items) {

    return items[Math.floor(Math.random() * items.length)];

}
function random_name(names) {

    return names[Math.floor(Math.random() * names.length)];

}
function random_wishes(wishes) {

    return wishes[Math.floor(Math.random() * wishes.length)];

}
var names = ["StarGazer23", "TechNinja7", "MoonlightDreamer", "SunnySmiles88", "AdventureSeeker19", "NatureLover56", "CoffeeAddict27", "BookWorm101", "TravelerSpirit", "FitnessFreak77", "PizzaLover12", "NightOwl3", "ArtisticSoul9", "GamerGeek25", "BeachBum15","MountainHiker8"];
var wishes = ["Countdown alert! 🎁 ", "Prepare for a blast! 🚀", "Ready to party? 🥳","The countdown begins! 🎉"]
var items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
document.getElementById("birthdaymessage").innerHTML = `${ random_wishes(wishes)}${random_item(items)} days to go for ${random_name(names)}'s birthday`;




// var theme = document.getElementById('theme');
// theme.onclick = function(){
//     document.body.classList.toggle("dark-theme");   
// }+
/*~~~~~~~~~~~~~~~~~ SCROLL BUTTON JS START~~~~~~~~~~~~~~~~*/ 
let mybutton = document.getElementById("scrollToTop");
let myarrow = document.getElementsByClassName("fa-caret-up;");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.visibility = "visible";
        myarrow.style.visibility = "visible";
    } else {
        mybutton.style.visibility = "hidden";
        myarrow.style.visibility = "hidden";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0; 
}



// welcome box javascript
function closeWelcomeBox(){
    let welcomeBox = document.getElementById("welcomeUser");
welcomeBox.style.display="none";

}

var isKeyPressed = {
    a: false, // ASCII code for 'a'
    b: false // ASCII code for 'b'
    // ... Other keys to check for custom key combinations
};
document.onkeydown = (keyDownEvent) => {

    isKeyPressed[keyDownEvent.key] = true;
    if (isKeyPressed["a"] && isKeyPressed["b"]) {
        
        let welcomeBox = document.getElementById("welcomeUser");
        welcomeBox.style.opacity = "1";

        
    }else{
        welcomeBox.style.opacity = "0";
    }
}
document.onkeyup = keyUpEvent => {
    // Prevent default key actions, if desired
    keyUpEvent.preventDefault();

    // Track down key release
    isKeyPressed[keyUpEvent.key] = false;

    // when one of the keys is released, show text indicating
    // text is no longer clicked
    if (!isKeyPressed["a"] || !isKeyPressed["b"]) {
        welcomeBox.style.opacity = "0";
        welcomeBox.style.opacity = "1";
    }
};




