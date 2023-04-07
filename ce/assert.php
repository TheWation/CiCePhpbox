<?php
assert(trim("'". $_GET['name'] . "'"));
echo "Hello ". htmlentities($_GET['name']);
?>