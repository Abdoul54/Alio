<?php
include_once('C:\Apache24\htdocs\Scrape_Project\App\Controller\UserC.php');
$user = new UserC();
if ($_GET['t'] != 'Vehicles' && $_GET['t'] != 'Jobs' && $_GET['t'] != 'Properties') {
  http_response_code(404);
  include('404.php');
  die();
} else {

  if (!isset($_GET['q'])) { ?>
    <form action="" method="post">
      <input type="text" name="q">
      <button name="srch">Search</button>
    </form>
<?php }
    switch ($_GET['t']) {
      case 'Vehicles':
        if (isset($_POST['srch'])) {
          $queue = $_POST['q'];
          header("Location: /Scrape_Project/Views/search.php?t=Vehicles&q=$queue");
        }
        if (isset($_GET['q'])){
          $data = $user->searchScrapedVehcs($_GET['q']);
          $result = $user->searchV($_GET['q']);
          include_once('./SearchV.php');
        }
        break;
      case 'Properties':
        if (isset($_POST['srch'])) {
          $queue = $_POST['q'];
          header("Location: /Scrape_Project/Views/search.php?t=Properties&q=$queue");
        }
        if (isset($_GET['q'])){
          $data = $user->searchScrapedProps($_GET['q']);
          $result = $user->searchP($_GET['q']);
          include_once('./SearchP.php');
        }
        break;
      case 'Jobs':
        if (isset($_POST['srch'])) {
          $queue = $_POST['q'];
          header("Location: /Scrape_Project/Views/search.php?t=Properties&q=$queue");
        }
        if (isset($_GET['q'])){
          $data = $user->searchScrapedJobs($_GET['q']);
          $result = $user->searchJ($_GET['q']);
          include_once('./SearchJ.php');
        }
        break;
    
  }
}


?>