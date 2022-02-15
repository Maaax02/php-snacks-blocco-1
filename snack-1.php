<?php 

    $matches = [

        [
        'home' => 'Olimpia Milano ',
        'guest' => 'Cantù ',
        'home-points' => 30,
        'guest-points' => 40
        ],
        [
        'home' => 'Los Anegles Lakers ',
        'guest' => 'Chicago Bulls ',
        'home-points' => 20,
        'guest-points' => 60
        ],
        [
        'home' => 'Toronto Raptors ',
        'guest' => 'Boston Celtics ',
        'home-points' => 10,
        'guest-points' => 50
        ],
    ];
    var_dump($matches);

    for ($i = 0; $i < count($matches); $i++){
        echo $matches[$i]['home'], " - ", $matches[$i]['guest'], " | ",$matches[$i]['home-points'], " - ", $matches[$i]['guest-points'], "<br><br>";
    }


?>