<?php

$title = $_POST['title'];
$text = $_POST['text'];

if (file_exists('BlogFolder')) {}
else {
    mkdir("BlogFolder");
}


$open = fopen("BlogFolder/".$title.".txt", "a");
$open;
fwrite($open, $title.".txt\n \n".$text);
fclose($open);

// echo "You've create ".$title.".txt with the text :</br></br>".$text;


?>

<script>
    location.href = "../index.php";
</script>