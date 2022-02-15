<?php 
$newNumbers = [];
while(count($newNumbers) < 15){
    $number = rand(1, 40);
    
    if(!in_array($number, $newNumbers)){
       $newNumbers [] = $number;
    }
   
}
var_dump($newNumbers);
    echo "<ul>";
for ($i = 0; $i < count($newNumbers); $i++){
    echo "<li>$newNumbers[$i]</li>";
} 
  echo "</ul>"  
?>