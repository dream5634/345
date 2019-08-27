<!DOCTYPE html>
<html>
<head>
  <title>File source</title>
  <meta charset="iso-8859-1">
</head>

<body>
<?php
/*
 * This script displays the contents of $file without
 * interpreting embedded PHP, HTML or JavaScript elements.
 * It only allows files in or below the current directory.
 */

  $file = $_GET['file'];
  $error = "";
  // echo "<b>$file:</b><br>\n";

  // Check a file name was given
  if ( empty($file) || $file == "" ) {
    $error = "Missing filename.<br>";
  }

  // Check file path is allowed
  if ( strncmp($file, "/", 1) == 0 || strstr($file, "../") ) {
    $error = "File name is not allowed: $file.<br>";
  }

  // Sanitise file name (unnecessary here?)
  $file = EscapeShellCmd(substr($file, 0, 40));

  // Check file exists
  if ( !file_exists($file) || !is_file($file) ) {
    $error = "File not found or not printable: $file.<br>";
  }

  // Attempt to open file
  $fp = fopen($file, "r");
  if ( $fp == FALSE ) {
    $error = "Couldn't open file: $file.<br>";
  }

  // print lines of the file
  echo "<pre>\n";
  while ( !feof($fp) ) {
      echo htmlspecialchars(fgets($fp,4096));
  }
  fclose($fp);
  echo "</pre>\n";
?>
</body>
</html>
