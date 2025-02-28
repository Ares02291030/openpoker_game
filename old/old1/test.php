<?php
session_start();

echo $_SESSION['Deck'];

$_SESSION = null;
unset($_SESSION['Deck']);
echo '<h4>And again</h4>';
echo $_SESSION;
print_r($_SESSION);
?>
