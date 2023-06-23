<?php

function auth()
{  
  if (!$_SESSION['uid']) {
        header("Location:/Scrape_Project/Views/SignIn.php");
    }    
}

function ShowImgs($dir)
{
  $files = scandir($dir);
  $num_files = count(array_filter($files, function ($file) use ($dir) {
    return is_file($dir . '/' . $file);
  }));
  $files = array_diff($files, array('.', '..'));
  $files = array_map(function($file) use ($dir){
    return str_replace('/Apache24/htdocs/Scrape_Project', '..', $dir) . $file;
  }, $files);
  return $files;
}


function deleteDirectory($dir) {
  if (!file_exists($dir)) {
      return true;
  }

  if (!is_dir($dir)) {
      return unlink($dir);
  }

  foreach (scandir($dir) as $item) {
      if ($item == '.' || $item == '..') {
          continue;
      }

      if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
          return false;
      }

  }

  return rmdir($dir);
}
?>