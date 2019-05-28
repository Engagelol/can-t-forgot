<?php
function sanitizeString($var) {
  if (get_magic_quotes_gpc())
    $var = stripslashes($var);
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}

function sanitizeMySQL($conn, $var) {
  $var = $conn->real_escape_string($var);
  $var = sanitizeString($var);
  return $var;
}
?>
