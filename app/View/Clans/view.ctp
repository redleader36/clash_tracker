<div class="clans view">
<h2><?php echo h($clan['Clan']['name']); ?></h2>
	<?php if (!empty($clan['Player'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Trophies'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Town Hall'); ?></th>
		<th><?php echo __('Base Layout'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clan['Player'] as $player): ?>
		<tr>
			<td><?php echo $player['name']; ?></td>
			<td><?php echo $player['trophies']; ?></td>
			<td><?php echo $player['playLevel']; ?></td>
			<td><?php echo $player['thLevel']; ?></td>
			<td><?php echo $player['imageUrl']; ?></td>
			<td><?php echo $player['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'players', 'action' => 'view', $player['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'players', 'action' => 'edit', $player['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'players', 'action' => 'delete', $player['id']), null, __('Are you sure you want to delete # %s?', $player['id'])); ?>
				To Do: Attack Field, Star Field
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>Add clan id to automagically populate Clan on add player page
		</ul>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clan'), array('action' => 'edit', $clan['Clan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clan'), array('action' => 'delete', $clan['Clan']['id']), null, __('Are you sure you want to delete # %s?', $clan['Clan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clan'), array('action' => 'add')); ?> </li>
	</ul>
</div>
