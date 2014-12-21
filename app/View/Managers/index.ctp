<div class="managers index">
	<h2><?php echo __('Managers'); ?></h2>
	<table cellpadding="10" cellspacing="5" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($managers as $manager): ?>
	<tr>
		<td><?php echo h($manager['Manager']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($manager['Manager']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $manager['Manager']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $manager['Manager']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $manager['Manager']['id']), null, __('Are you sure you want to delete # %s?', $manager['Manager']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Manager'), array('action' => 'add')); ?></li>
	</ul>
</div>
