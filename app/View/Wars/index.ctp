<div class="wars index">
	<h2><?php echo __('Wars'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('startTime'); ?></th>
			<th><?php echo $this->Paginator->sort('warTime'); ?></th>
			<th><?php echo $this->Paginator->sort('endTime'); ?></th>
			<th><?php echo $this->Paginator->sort('awayClan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('homeClan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($wars as $war): ?>
	<tr>
		<td><?php echo h($war['War']['id']); ?>&nbsp;</td>
		<td><?php echo h($war['War']['startTime']); ?>&nbsp;</td>
		<td><?php echo h($war['War']['warTime']); ?>&nbsp;</td>
		<td><?php echo h($war['War']['endTime']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($war['AwayClan']['name'], array('controller' => 'clans', 'action' => 'view', $war['AwayClan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($war['HomeClan']['name'], array('controller' => 'clans', 'action' => 'view', $war['HomeClan']['id'])); ?>
		</td>
		<td><?php echo h($war['War']['created']); ?>&nbsp;</td>
		<td><?php echo h($war['War']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $war['War']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $war['War']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $war['War']['id']), null, __('Are you sure you want to delete # %s?', $war['War']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New War'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Clan'), array('controller' => 'clans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attacks'), array('controller' => 'attacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add')); ?> </li>
	</ul>
</div>
