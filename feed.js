
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




window.onload = function updateCounter() { }
const counters = document.querySelectorAll('.counter');

counters.forEach((counter) => {
    counter.innerHTML = 0;

    const updateCounter = () => {
        const targetCount = +counter.getAttribute('data-target');

        const startingCount = Number(counter.innerHTML);

        const incr = targetCount / 100;

        if (startingCount < targetCount) {
            counter.innerHTML = `${Math.round(startingCount + incr)}`;
            setTimeout(updateCounter, 100)
        } else {
            counter.innerHTML = targetCount;
        }
    }
    updateCounter();
})


window.onload = function () {
    var el = document.querySelector('.loader');
    var preloader = document.querySelector('.preloader');
    preloader.style.display = 'none';
    el.style.display = 'none';
};

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("modalButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
