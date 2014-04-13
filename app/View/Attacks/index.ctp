<div class="attacks index">
	<h2><?php echo __('Attacks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('war_id'); ?></th>
			<th><?php echo $this->Paginator->sort('stars'); ?></th>
			<th><?php echo $this->Paginator->sort('attacker_id'); ?></th>
			<th><?php echo $this->Paginator->sort('defender_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($attacks as $attack): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($attack['War']['id'], array('controller' => 'wars', 'action' => 'view', $attack['War']['id'])); ?>
		</td>
		<td><?php echo h($attack['Attack']['stars']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attack['Attacker']['name'], array('controller' => 'players', 'action' => 'view', $attack['Attacker']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attack['Defender']['name'], array('controller' => 'players', 'action' => 'view', $attack['Defender']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attack['Attack']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attack['Attack']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attack['Attack']['id']), null, __('Are you sure you want to delete # %s?', $attack['Attack']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Attack'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Wars'), array('controller' => 'wars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New War'), array('controller' => 'wars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attacker'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
