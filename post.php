
<?php
if (isset($_POST['message'])) {
  $message = strip_tags($_POST['message']);
  file_put_contents("log.txt", htmlspecialchars($message) . "<br>\n", FILE_APPEND);
}
?>
