<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = $_POST["content"];
    file_put_contents("content.php", $content);
}
?>
