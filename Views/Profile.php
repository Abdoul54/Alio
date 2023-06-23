<?php

include_once('C:\Apache24\htdocs\Scrape_Project\App\Controller\UserC.php');
session_start();
$user = new UserC();
$result = $user->ShowProfile($_SESSION['uid']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../Public/Css/ProfilePageUserd.css">
</head>

<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5 title">Account Settings</h1>
			<?php if ($_SESSION['status']) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_SESSION['status']; ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php elseif ($_SESSION['error']) : ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_SESSION['error']; ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif;
			unset($_SESSION['status']);
			unset($_SESSION['error']); ?>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex ConProfile">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="../Public/images/user.png" alt="User Avatar" class="shadow">
						</div>
						<h4 class="text-center"><?php echo $result['username'] ?></h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i>
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Password
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<form action="..\App\Controller\UserC.php" method="post">
							<h3 class="mb-4">Account Settings</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Username</label>
										<input type="text" class="form-control" name="username" value="<?php echo $result['username'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Address</label>
										<input type="text" class="form-control" name="addr" value="<?php echo $result['address'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control" name="fn" value="<?php echo $result['firstName'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control" name="ln" value="<?php echo $result['lastName'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" name="email" value="<?php echo $result['email'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone number</label>
										<input type="text" class="form-control" name="tel" value="<?php echo $result['tel'] ?>">
									</div>
								</div>

							</div>
							<div>
								<button class="btn btn-primary Btn_Color" name="update_info">Update</button>
							</div>
						</form>
					</div>

					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<form action="..\App\Controller\UserC.php" method="post">
							<h3 class="mb-4">Password Settings</h3>
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<label>Old password</label>
										<input type="password" class="form-control" name="currPwd">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<label>New password</label>
										<input type="password" class="form-control" name="newPwd">
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary Btn_Color" name="update_pwd">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<button class="btn btn-danger Btn_Color float-right" name="delAcc">Delete Account</button>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>