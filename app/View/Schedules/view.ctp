<div class="schedules view">
<h2><?php echo __('Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Start'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['time_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time End'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['time_end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule'), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schedule'), array('action' => 'delete', $schedule['Schedule']['id']), null, __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?> </li>		
		
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departments'); ?></h3>
	<?php if (!empty($schedule['Department'])): ?>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedule['Department'] as $department): ?>
		<tr>
			<td><?php echo $department['name']; ?></td>
			<td><?php echo $department['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departments', 'action' => 'view', $department['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
<div class="related">
	<h3><?php echo __('Related Employes'); ?></h3>
	<?php if (!empty($schedule['Employe'])): ?>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Date Start'); ?></th>
		<th><?php echo __('Date End'); ?></th>
		<th><?php echo __('Other Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedule['Employe'] as $employe): ?>
		<tr>
			<td><?php echo $employe['first_name']; ?></td>
			<td><?php echo $employe['name']; ?></td>
			<td><?php echo $employe['sex']; ?></td>
			<td><?php echo $employe['date_start']; ?></td>
			<td><?php echo $employe['date_end']; ?></td>
			<td><?php echo $employe['other_details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employes', 'action' => 'view', $employe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
<div class="related">
	<h3><?php echo __('Related Managers'); ?></h3>
	<?php if (!empty($schedule['Manager'])): ?>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedule['Manager'] as $manager): ?>
		<tr>
			<td><?php echo $manager['first_name']; ?></td>
			<td><?php echo $manager['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'managers', 'action' => 'view', $manager['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
