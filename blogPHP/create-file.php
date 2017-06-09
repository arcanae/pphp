<?php

$title = $_POST['title'];
$text = $_POST['text'];
$user = $_POST['user'];

if (file_exists('BlogFolder')) {}
else {
    mkdir("BlogFolder");
}


$open = fopen("BlogFolder/".$title.".txt", "a");
$open;
fwrite($open,$title."\n \n".$text."\n"."~~ by ".$user."\n \n");
fclose($open);

// echo "You've create ".$title.".txt with the text :</br></br>".$text;


?>

<script>
    location.href = "../index.php";
</script>