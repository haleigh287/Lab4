<?php
//access the global array called $_POST to get the values from the text fields
$input1 = $_POST['answer1'];
$input2 = $_POST['answer2'];
$input3 = $_POST['answer3'];
$input4 = $_POST['answer4'];
$input5 = $_POST['answer5'];
$right =  0;
$total = 5;

echo "Question 1: Who has the best hair? <br>";
echo "You answered: " . $input1 . "<br>";
echo "Correct answer: d. you <br> <br>";
if($input1 == "d. you")
{
  $right++;
}

echo "Question 2: Who has the brightest smile? <br>";
echo "You answered: " . $input2 . "<br>";
echo "Correct answer: c. you <br> <br>";
if($input2 == "c. you")
{
  $right++;
}

echo "Question 3: Who can do anything they set their mind to?<br>";
echo "You answered: " . $input3 . "<br>";
echo "Correct answer: a. you <br> <br>";
if($input3 == "a. you")
{
  $right++;
}

echo "Question 4: Who is the funniest person alive? <br>";
echo "You answered: " . $input4 . "<br>";
echo "Correct answer: d. you <br> <br>";
if($input4 == "d. you")
{
  $right++;
}

echo "Question 5: Who is the smartest person alive?<br>";
echo "You answered: " . $input5 . "<br>";
echo "Correct answer: b. you <br> <br>";
if($input5 == "b. you")
{
  $right++;
}

echo "You are " . (($right/$total)*100) . "% confident!";

 ?>
