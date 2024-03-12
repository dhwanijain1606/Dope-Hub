// var theme = document.getElementById('theme');
// theme.onclick = function () {
//     document.body.classList.toggle("dark-theme");
// }
function darkmode() {
    const wasDarkmode = localStorage.getItem('dark-theme') === 'true';
    localStorage.setItem('dark-theme',!wasDarkmode);
    const element = document.body;
    element.classList.toggle('dark-theme',!wasDarkmode);
}
function theme(){
    document.body.classList.toggle('dark-theme',localStorage.getItem('dark-theme') === 'true');

}
