<div class="schedules form">
<?php echo $this->Form->create('Schedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Schedule'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('time_start');
		echo $this->Form->input('time_end');
		echo $this->Form->input('Department');
		echo $this->Form->input('Employe');
		echo $this->Form->input('Manager');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?></li>
	</ul>
</div>
