<?php

$title = $_POST['title'];
$text = $_POST['text'];


$open = fopen($title.".txt", "a");
$open;
fwrite($open, $text);

echo "You've create ".$title.".txt with the text :</br></br>".$text;

?>