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
      $posts = $user->ShowVehicles($_SESSION['uid']);
      if ($posts){
        foreach ($posts as $post){
          include('myVehicles.php');
          echo '<br><br><br>';
        }}
      break;

    case 'Properties':
      $posts = $user->ShowProperties($_SESSION['uid']);
      if ($posts){ 
        foreach ($posts as $post){
          include('myProperties.php');
          echo '<br><br><br>';
        }};
      break;
    case 'Jobs':
      $posts = $user->ShowJobs($_SESSION['uid']);
      if ($posts): foreach ($posts as $post): ?>
                                <form action="..\App\Controller\UserC.php" method="post">
                                  <h1><?php echo $post['JobTitle'] ?></h1>
                                  <dl>
                                    <dt>Description</dt>
                                    <dd><?php echo $post['Description'] ?></dd>
                                    <dt>Job Type</dt>
                                    <dd><?php echo $post['JobType'] ?></dd>
                                    <dt>Location</dt>
                                    <dd><?php echo $post['Location'] ?></dd>
                                    <dt>Company</dt>
                                    <dd><?php echo $post['Company'] ?></dd>
                                    <dt>Salary</dt>
                                    <dd><?php echo $post['Salary'] ?></dd>
                                    <dt>Qualifications</dt>
                                    <dd><?php echo $post['Qualifications'] ?></dd>
                                    <dt>Skills</dt>
                                    <dd><?php echo $post['Skills'] ?></dd>
                                    <dt>Application Deadline</dt>
                                    <dd><?php echo $post['ApplicationDeadline'] ?></dd>
                                    <dt>Application Method</dt>
                                    <dd><?php echo $post['ApplicationMethod'] ?></dd>
                                    <dt>Contact</dt>
                                    <dd><?php echo $post['Contact'] ?></dd>
                                  </dl>
                                  <button name="dltJob" value="<?php echo $post['jid'] ?>">DELETE</button>
                                </form>
  
                        <?php endforeach; endif;
      break;
  }
}

?>
