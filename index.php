<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "This is the PHP guessing game! Input a number and see if you can guess our number!\n";

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count++;
  $random = rand(1,10);
  echo "Make your guess!\n";
  $guess = intval(readline(">> "));
  echo "Round:$play_count: You guessed $guess.  The correct number is $random \n";
  if ($guess === $random){
    $correct_guesses++;
  }

  if($guess > $random){
    $guess_high++;
  }

  if($guess < $random){
    $guess_low++;
  }
}

$percent_correct = $correct_guesses/$play_count * 100;

guessNumber();
guessNumber();
guessNumber();
echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";
