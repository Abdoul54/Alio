<?php
include_once('C:\Apache24\htdocs\Scrape_Project\App\Controller\UserC.php');
session_start();
$user = new UserC();
if ($_GET['t'] != 'Vehicles' && $_GET['t'] != 'Jobs' && $_GET['t'] != 'Properties') {
  http_response_code(404);
  include('404.php');
  die();
} else {
  switch ($_GET['t']) {
    case 'Vehicles':
      $post = $user->ShowVehiclesByID($_GET['vid']);
      if ($post) {                                  
            include('VPost.php');
      } else {
        http_response_code(404);
        include('404.php');
        die();
      }
      break;

    case 'Properties':
      $post = $user->ShowPropertiesByID($_GET['pid']);
      if ($post) { 
            include('PPost.php');
      } else {
        http_response_code(404);
        include('404.php');
        die();
      }
      break;
    case 'Jobs':
      $post = $user->ShowJobsByID($_GET['jid']);
      if ($post) { 
        include('JPost.php');
      } else {
        http_response_code(404);
        include('404.php');
        die();
      }
      break;
  }
}
