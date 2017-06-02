<?php 
$todo = $_POST['action'];
$tosupr = $_POST['filename'];
$title = $_POST['title'];
$text = $_POST['text'];

if ($todo === "Modify") {

unlink("BlogFolder/".$tosupr);

$open = fopen("BlogFolder/".$title.".txt", "a");
$open;
fwrite($open,$text);
fclose($open);
}


?>

<script>
    location.href = "../index.php";
</script>