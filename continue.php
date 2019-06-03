<?php
session_start();

if (isset($_SESSION['forename'])) {
  $forename = $_SESSION['forename'];
  $surname = $_SESSION['surname'];

  destroy_session_data();

  echo "Hi, $forename.<br>
    Your full name is $forename $surname.<br>";
} else {
  echo "Please, for enter <a href='authentication.php'>click here</a>.";
}

function destroy_session_data() {
  $_SESSION = array();
  setcookie(session_name(), '', time() - 2592000, '/');
  session_destroy();
}
?>
