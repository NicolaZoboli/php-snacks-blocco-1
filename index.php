<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<?php

  echo "SNACK 1";
  echo "<br> <br>";


  $arrHomeTeam = ["Los Angeles Lakers", "Boston Celtics", "Toronto Raptors", "Houston Rockets", "Milwaukee Bucks", "Los Angeles Clippers"];
  $arrVisitingTeam = ["Oklahoma City Thunder", "Denver Nuggets", "Dallas Mavericks", "Miami Heat", "Golden State Warriors", "Utah Jazz"];

  $arrMatches = [];

  for ($i=0; $i < count($arrHomeTeam); $i++) {

    $homeTeam = $arrHomeTeam[$i];
    $visitingTeam = $arrVisitingTeam[$i];

    $homeTeamScore = rand(0, 186);
    $visitingTeamScore = rand(0, 186);

    $match = $homeTeam . " - " . $visitingTeam . " | " . $homeTeamScore . "-" . $visitingTeamScore;

    array_push($arrMatches, $match);

    echo $match . "<br>";
  }

  echo "<br> <br>";
 ?>

<!-- Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php

  echo "SNACK 2";
  echo "<br> <br>";

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  echo "Name: " . $name . "<br>" . "Mail: " . $mail . "<br>". "Age: " . $age . "<br> <br>";

  if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
    echo "Accesso riuscito";
  } else {
    echo "Accesso negato";
  }

  echo "<br> <br>";


 ?>

<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

  echo "SNACK 3";
  echo "<br> <br>";

  $arrRandomNumbers = [];

  for ($i=0; $i < 15; $i++) {
    $number = rand(1, 50);
    if (!in_array($number, $arrRandomNumbers)) {
      array_push($arrRandomNumbers, $number);
      echo $number . "<br>";
    } else {
      $i--;
    }
  }

 ?>
