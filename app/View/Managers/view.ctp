<div class="managers view">
<h2><?php echo __('Manager'); ?></h2>
	<dl>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($manager['Manager']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($manager['Manager']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manager'), array('action' => 'edit', $manager['Manager']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manager'), array('action' => 'delete', $manager['Manager']['id']), null, __('Are you sure you want to delete # %s?', $manager['Manager']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Managers'), array('action' => 'index')); ?> </li>

	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departments'); ?></h3>
	<?php if (!empty($manager['Department'])): ?>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($manager['Department'] as $department): ?>
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

</div>
