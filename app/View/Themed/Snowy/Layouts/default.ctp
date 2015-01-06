<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>QuickHelp -	<?php echo $this->fetch('title'); ?></title>

		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('bootstrap.min.css?'.time());
			echo $this->Html->css('theme.css?'.time());

			echo $this->Html->script('jquery-1.11.1.min');
			echo $this->Html->script('selectivizr-min');
			echo $this->Html->script('bootstrap.min');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<nav id="mainmenu" class="navbar container-fluid shadowBorder" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">QuickHelp</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Dashboard</a></li>
					<li class="active"><a href="#about">Tickets</a></li>
					<li><a href="#contact">Statistics</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right navbar-profile">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							Xorinzor
							<?php echo $this->Html->image('me.png', array('class' => 'img-circle profilepicture-small')); ?>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings</a></li>
							<li class="divider"></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

				<div class="navbar-divider navbar-right hidden-xs"></div>

				<form id="search" class="navbar-form navbar-right hidden-xs hidden-sm" role="search">
					<div class="form-group">
						<div class="input-group">
							<label class="sr-only" for="searchInput">Search</label>
							<input type="search" class="form-control" id="searchInput" placeholder="Search">
							<div class="input-group-addon"><button type="submit" class="glyphicon glyphicon-search"></button></div>
						</div>
					</div>
				</form>

			</div><!--/.nav-collapse -->
		</nav>

		<?php echo $this->Session->flash(); ?>

		<div class="container-fluid">
			<?php echo $this->fetch('content'); ?>
		</div>
	</body>
</html>