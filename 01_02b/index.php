<?php
// Use the Console / Terminal for this exercise! 
$number = rand(1, 30);
$guess = null;
echo $number;

while ($guess != $number) {
  $guess = readline("Guess a number between 1 and 30: ");
  if ($guess == $number) {
    echo "Yes! You guessed correctly. \n\n";
  } else if ($guess > $number) {
    echo "Alas. Your guess is incorrect. \n\n";
  }
}

die();
