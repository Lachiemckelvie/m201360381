<!doctype html>
<html lang="en">
<head>
	<title>Test</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>

		<?php
			if (isset($this->js))
			{
					foreach ($this->js as $js) {


							echo '<script type="text/javascript" src="'.URL. 'views/'.$js.'"></script>';
						}
			}
		?>
</head>
<body>

<?php Session::init(); ?>
	<div class="container">
			<div id="header">
				<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      			<a class="navbar-brand" href="<?php echo URL; ?>index">*logo</a>
    			</div>
    				<ul class="nav navbar-nav">
							<?php if (Session::get('loggedIn') == false):?>
      				<li class="active"><a href="<?php echo URL; ?>index">Home</a></li>
      				<li><a href="<?php echo URL; ?>help">Help</a></li>
							<?php endif; ?>
								<?php if (Session::get('loggedIn') == true):?>
									<li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>

								<?php if (Session::get('role') == 'owner'):?>
									<li><a href="<?php echo URL; ?>user">Users</a></li>
								<?php endif; ?>
			     		<li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>

								<?php else: ?>
			    	</ul>
								<ul class="nav navbar-nav navbar-right">
					 				<li><a href="<?php echo URL; ?>#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					 				<li><a href="<?php echo URL; ?>login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					 						<?php endif; ?>
				 				</ul>
  		</div>
		</nav>

</div>

<div id="content">
