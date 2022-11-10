function SuperFunction() 
{
fetch('./superheroes.php').then(function(response) {
    return response.text().then(function(text) {
        alert(text);
    });
});
}