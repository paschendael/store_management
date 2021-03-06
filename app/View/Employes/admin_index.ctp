<div class="employes index">
	<h2><?php echo __('Employes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('date_start'); ?></th>
			<th><?php echo $this->Paginator->sort('date_end'); ?></th>
			<th><?php echo $this->Paginator->sort('other_details'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employes as $employe): ?>
	<tr>
		<td><?php echo h($employe['Employe']['id']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['name']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['sex']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['date_start']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['date_end']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['other_details']); ?>&nbsp;</td>
		<td><?php echo h($employe['Employe']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employe['Employe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employe['Employe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employe['Employe']['id']), null, __('Are you sure you want to delete # %s?', $employe['Employe']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employe'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
