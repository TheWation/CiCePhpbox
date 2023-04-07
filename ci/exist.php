<?php
$file_path = $_GET['file'];
system("test -f $file_path", $exit_code);

if ($exit_code == 0) {
  echo "The file exists!";
} else {
  echo "The file does not exist.";
}
?>