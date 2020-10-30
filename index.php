<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->selectCollection("movies","movies");
$i = 0;
foreach ($collection->find() as $movie){
    echo "<h1 align='center' >"."Movie title - ".$movie['title']."</h1>"."<br>";
    echo "<h2>"."Year - ".$movie['year']."</h2>";
    echo "<h2>"."Rating - ".$movie['rating']."</h2>";
    echo "<h2>"."Genre - ";
    foreach ($movie['genre'] as $genre){
        $i++;
        if ($i<count($movie['genre'])) {
            echo $genre . ", ";
        }else{
            echo $genre;
        }
    }$i=0;
    echo "</h2>";
    echo "<h2>"."Director - ";
    foreach ($movie['director'] as $director){
        $i++;
        if ($i<count($movie['director'])) {
            echo $director . ", ";
        }else{
            echo $director;
        }
    }$i=0;
    echo "</h2>";
    echo "<h2>"."Screenwriter - ";
    foreach ($movie['screenwriter'] as $screenwriter){
        $i++;
        if ($i<count($movie['screenwriter'])) {
            echo $screenwriter . ", ";
        }else{
            echo $screenwriter;
        }
    }$i=0;
    echo "</h2>";
    echo "<h2>"."Actors - ";
    foreach ($movie['actors'] as $actor){
        $i++;
        if ($i<count($movie['actors'])) {
            echo $actor . ", ";
        }else{
            echo $actor;
        }
    }$i=0;
    if(isset($movie['awards'])) {
        echo "<h2>" . "Awards:";
        if(isset($movie['awards']->numOfVictories)){
            echo "<h3 style='margin-left: 30px'>"."Number of victories - ".$movie['awards']->numOfVictories."</h3>";
        }
        if(isset($movie['awards']->numOfNominations)){
            echo "<h3 style='margin-left: 30px'>"."Number of nominations - ".$movie['awards']->numOfNominations."</h3>";
        }
        if(isset($movie['awards']->info)){
            echo "<h3 style='margin-left: 30px'>"."Info - ".$movie['awards']->info."</h3>";
        }
        echo "</h2>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
