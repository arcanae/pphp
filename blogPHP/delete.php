<?php 
$tosupr = $_GET['filename'];
unlink("BlogFolder/".$tosupr);

?>

<script>
    location.href = "../index.php";
</script> 