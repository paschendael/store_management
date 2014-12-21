<?php if(!Configure::read('Application.maintenance')){?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php echo $this->Html->link(
			Configure::read('Application.name'),
			AuthComponent::user('id') ? "/employes" : "/"
			, array('class' => 'navbar-brand')) ?>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<?php if(AuthComponent::user('id')){?>
			<ul class="nav navbar-nav side-nav">
				
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'departments' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-departments"></i> <?php echo __('Departments')?><b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>departments"><i class="fa fa-list"></i><?php echo __('List')?> </a></li>
						<li><a href="<?php echo $this->params->webroot?>departments/add"><i class="fa fa-plus"></i><?php echo __('Register new department')?></a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'employes' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-employes"></i><?php echo __('Employes')?><b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>employes"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>employes/add"><i class="fa fa-plus"></i><?php echo __('Register new employe')?></a></li>
					</ul>
				</li>
				
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'managers' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-managers"></i><?php echo __('Managers')?><b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>managers"><i class="fa fa-list"></i><?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>managers/add"><i class="fa fa-plus"></i><?php echo __('Register new manager')?></a></li>
					</ul>
				</li>
				
						
				<li class="dropdown <?php echo $this->params->params['controller'] == 'schedules' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-schedules"></i><?php echo __('Schedules')?><b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>schedules"><i class="fa fa-list"></i><?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>schedules/add"><i class="fa fa-plus"></i><?php echo __('Register new schedule')?></a></li>
					</ul>
				</li>

				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i><?php echo __('Users')?><b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>users"><i class="fa fa-list"></i><?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>users/add"><i class="fa fa-plus"></i><?php echo __('Register new user')?></a></li>
					</ul>
				</li>
				
				
<!--				<li><a href="tables.html"><i class="fa fa-list"></i> Activity</a></li>-->
			</ul>
		<?php } ?>



		<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="<?php echo $this->params->webroot?>users/edit/<?php echo AuthComponent::user('id')?>"><i class="fa fa-gear"></i> Settings</a></li>
					<li><a href="<?php echo$this->I18n->flagSwitcher (array(
						'class' => 'dropdown user-dropdown',
						'id' => 'language-switcher'
						));?></li>
						
					<li class="divider"></li>
					<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> Log Out</a></li>
				</ul>
			</li>
		</ul>
		<?php }?>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php } ?>