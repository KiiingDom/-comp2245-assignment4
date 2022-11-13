<?php

$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T'challa",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];

?>

<?php 
/*
IDK JUST TESTING SOMETHING
<ul>
<?php foreach ($superheroes as $superhero): ?>
  <li><?= $superhero['alias']; ?></li>
<?php endforeach; ?>
</ul> 
*/ 
?>



<?php

function sanitization($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}


if( (isset($_GET['set'])) )
{

    $UserInput = $_GET['set'];
    $searchQuery = strtolower(sanitization($UserInput));

    if(empty($searchQuery))
{
        echo "<h1 style='color:blue; background-color:yellow;'>The Heroes</h1>";
        echo "<hr>";
        echo "<ul>";
        foreach ($superheroes as $superhero)
{
            echo "<li>" . $superhero['name'] . "</li>";
}
        echo "</ul>";
    }

    else
{
        $found = false;
        foreach ($superheroes as $superhero)
{
            if( (strtolower($superhero['name']) == $searchQuery) || (strtolower($superhero['alias']) == $searchQuery) )
{
                $found = true;
		  
                echo "<h1>RESULT</h1>";
                echo "<hr>";
                echo "<h3>" . $superhero['alias'] . "</h3>";
                echo "<h4> A.K.A. " . $superhero['name'] . "</h4>";
                echo "<p>" . $superhero['biography'] . "</p>";
                break;

            }
        }
        if($found == false)
{
		echo "<div id = \result\>";
            echo "<h1>RESULT</h1>";
            echo "<hr>";
            echo "<h4 style= 'font-size:25px; color: red; background-color : black;'>Sorry! Superhero not found</h4>";
		echo "</div>";
        

    }}
}

 ?>
