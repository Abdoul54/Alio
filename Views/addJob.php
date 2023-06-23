<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Css/style.css">
  <title>Post job</title>
</head>

<body style="background-image: url('../Public/images/four-empty-white-chairs-room.jpg'); background-repeat: no-repeat; background-size: cover;">
  <main>
    <h2><img src="../Public/images/icons8-job-100.png" alt="Icon"><br>Post a job</h2><br>
    <form action="..\App\Controller\UserC.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="JobTitle">Title</label>
        <input type="text" name="JobTitle" id="JobTitle" required class="Form_Job" />
      </div>
      <div>
        <label for="Description">Description</label>
        <textarea name="Description" id="Description" class="Form_Job"></textarea>
      </div>
      <div>
        <label for="Company">Company</label>
        <input type="text" name="Company" id="Company" required class="Form_Job">
      </div>
      <div>
        <label for="Qualification">Qualification</label>
        <textarea name="Qualification" id="Qualification" class="Form_Job"></textarea>
      </div>
      <div>
        <label for="JobType">Job Type</label>
        <select name="JobType">
          <?php
          for ($i = 0; $i < count($JT); $i++) {
            echo '<option value=' . $JT[$i] . '>' . $JT[$i] . '</option>';
          }
          ?>
        </select>
      </div>
      <div>
        <label for="Category">Category</label>
        <select name="Category">
          <?php
          for ($i = 0; $i < count($Cat); $i++) {
            echo '<option value=' . $Cat[$i] . '>' . $Cat[$i] . '</option>';
          }
          ?>
        </select>
      </div>
      <div>
        <label for="Skills">Skills</label>
        <textarea name="Skills" id="Skills" class="Form_Job"></textarea>
      </div>
      <div>
        <label for="Location">Location</label>
        <input type="text" name="Location" id="Location" required class="Form_Job">
      </div>
      <div>
        <label for="AppMethod">Application Method</label>
        <input type="text" name="AppMethod" id="AppMethod" required class="Form_Job">
      </div>
      <div>
        <label for="AppDeadline">Deadline</label>
        <input type="date" name="AppDeadline" id="AppDeadline" required class="Form_Job" style="width:50%">
      </div>
      <div class="full-width">
        <label for="Salary">Salary</label>
        <input type="number" name="Salary" id="Salary" required class="Form_Job">
      </div>

      <div class="full-width">
        <label for="Contact">Contact</label>
        <input type="text" name="Contact" id="Contact" required>
      </div>
      <div class="full-width">
        <button name="addJob">Add Post</button>
      </div>
    </form>
  </main>

</body>

</html>