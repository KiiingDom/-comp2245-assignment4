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

let MainIndex = "http://localhost/Web-Dev/Assignment%204/comp2245-assignment4/superheroes.php?set=";
let theButton = document.getElementById("search");
let Entry = document.getElementById("HeroSearch").value;
theButton.onclick = function() {SuperSearch()}



function SuperSearch() 
{


fetch(MainIndex+Entry)
.then(response => response.text())
.then(data =>{
let set = document.getElementById("result");
set.innerHTML = data;
})

};
});