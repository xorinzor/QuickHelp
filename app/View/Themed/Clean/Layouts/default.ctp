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
		<script type="text/javascript">
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip();
			})
		</script>
	</head>
	<body>
		<nav id="mainmenu" class="navbar container-fluid" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">QH</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if(strtolower($this->params['controller']) == 'tickets') { echo 'class="active"'; } ?>>
						<?php
							echo $this->Html->link(
								__('Tickets'),
								array(
									'controller' => 'Tickets',
									'action' => 'index'
								));
						?>
					</li>
					<li <?php if(strtolower($this->params['controller']) == 'social') { echo 'class="active"'; } ?>>
						<?php
							echo $this->Html->link(
								__('Social'),
								array(
									'controller' => 'Social',
									'action' => 'index'
								));
						?>
					</li>
					<li <?php if(strtolower($this->params['controller']) == 'faq') { echo 'class="active"'; } ?>>
						<?php
							echo $this->Html->link(
								__('Chat') . '<span class="badge">4</span>',
								array(
									'controller' => 'Chat',
									'action' => 'index'
								),
								array('escape' => false));
						?>
					</li>
					<li <?php if(strtolower($this->params['controller']) == 'faq') { echo 'class="active"'; } ?>>
						<?php
							echo $this->Html->link(
								__('FAQ'),
								array(
									'controller' => 'Faq',
									'action' => 'index'
								));
						?>
					</li>
					<li <?php if(strtolower($this->params['controller']) == 'users') { echo 'class="active"'; } ?>>
						<?php
							echo $this->Html->link(
								__('Users'),
								array(
									'controller' => 'Users',
									'action' => 'index'
								));
						?>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right navbar-profile">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							Xorinzor
							<?php echo $this->Html->image('me.png', array('class' => 'img-circle profilepicture-small')); ?>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><?php echo __('Profile'); ?></a></li>
							<li class="divider"></li>
							<li><a href="#"><?php echo __('Logout'); ?></a></li>
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

		<div id="sidebar">
			<ul class="nav">
				<li <?php if(strtolower($this->params['action']) == 'dashboard') { echo 'class="active"'; } ?>><a href="<?php echo $this->Html->url(array('controller' => 'Tickets', 'action' => 'index')); ?>" data-toggle="tooltip" data-placement="right" title="Dashboard"><i class="glyphicon glyphicon-th-large"></i></a></li>
				<li <?php if(strtolower($this->params['action']) == 'index') { echo 'class="active"'; } ?>><a href="<?php echo $this->Html->url(array('controller' => 'Tickets', 'action' => 'index')); ?>" data-toggle="tooltip" data-placement="right" title="List"><i class="glyphicon glyphicon-th-list"></i></a></li>
				<li <?php if(strtolower($this->params['action']) == 'new') { echo 'class="active"'; } ?>><a href="<?php echo $this->Html->url(array('controller' => 'Tickets', 'action' => 'add')); ?>" data-toggle="tooltip" data-placement="right" title="Create ticket"><i class="glyphicon glyphicon-tag"></i></a></li>

				<li class="bottom"><a href="#settings" data-toggle="tooltip" data-placement="right" title="Settings"><i class="glyphicon glyphicon-cog"></i></a></li>
			</ul>
		</div>
		<div id="container" class="container-fluid">
			<div class="row">
			    <div class="col-xs-12">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
	</body>
</html>