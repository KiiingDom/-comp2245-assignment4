function SuperFunction() 
{
fetch('./superheroes.php').then(function(response) 
{
    return response.text().then(function(text) 
{
        alert(text);
});
});
}

window.addEventListener('DOMContentLoaded', (event)=>{

let MainIndex = "http://localhost/Web-Dev/Assignment%204/comp2245-assignment4/superheroes.php?TheHero=";
let theButton = document.getElementById("search");
let Entry = document.getElementById("HeroSearch");
theButton.onclick = function() {SuperSearch()}



function SuperSearch() 
{


fetch(MainIndex+Entry.value)
.then(response => response.text())
.then(data =>{
document.getElementById("result-holder").className ="visible";
let TheHero = document.getElementById("result");
TheHero.innerHTML = data;
})

};
});