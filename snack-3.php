<?php 


    $posts = 
    [
        '29/07/2002' => [
            'titolo' => 'Post 1 | ',
            'author' => 'me'
        ],

        '10/02/2009' => [
            'titolo' => 'Post 2 | ',
            'author' => 'you'
        ],

        '27/10/1999' => [
            'titolo' => 'Post 3 | ',
            'author' => 'him'
        ],

        '01/02/2003' => [
            'titolo' => 'Post 4 | ',
            'author' => 'her'
        ],
    ];

    var_dump($posts);

    foreach($posts as $data => $description){
        echo $data, " ", $description['titolo'], "L'autore del post è: ", $description['author'], "<br><br>";
       
    }
?>