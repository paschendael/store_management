<div class="employes form">
<?php echo $this->Form->create('Employe'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('name');
		echo $this->Form->input('sex');
		echo $this->Form->input('date_start');
		echo $this->Form->input('date_end');
		echo $this->Form->input('other_details');
	?>
	<?php if (!empty($this->data['Employe']['filepath'])): ?>
		<div class="input">
			<label>Uploaded File</label>
			<?php
			echo $this->Form->input('filepath', array('type'=>'hidden'));
			echo $this->Html->link(basename($this->data['Employe']['filepath']), $this->data['Employe']['filepath']);
			?>
		</div>
	<?php else: ?>
	<?php echo $this->Form->input('filename',array(
		'type' => 'file'
	)); ?>
	<?php endif; ?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
