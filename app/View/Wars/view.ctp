<div class="wars view">
<h2><?php echo __('War'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($war['War']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartTime'); ?></dt>
		<dd>
			<?php echo h($war['War']['startTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WarTime'); ?></dt>
		<dd>
			<?php echo h($war['War']['warTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndTime'); ?></dt>
		<dd>
			<?php echo h($war['War']['endTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Away Clan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($war['AwayClan']['name'], array('controller' => 'clans', 'action' => 'view', $war['AwayClan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Clan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($war['HomeClan']['name'], array('controller' => 'clans', 'action' => 'view', $war['HomeClan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($war['War']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($war['War']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit War'), array('action' => 'edit', $war['War']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete War'), array('action' => 'delete', $war['War']['id']), null, __('Are you sure you want to delete # %s?', $war['War']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New War'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Clan'), array('controller' => 'clans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attacks'), array('controller' => 'attacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Attacks'); ?></h3>
	<?php if (!empty($war['Attack'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('War Id'); ?></th>
		<th><?php echo __('Stars'); ?></th>
		<th><?php echo __('Attacker Id'); ?></th>
		<th><?php echo __('Defender Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($war['Attack'] as $attack): ?>
		<tr>
			<td><?php echo $attack['id']; ?></td>
			<td><?php echo $attack['war_id']; ?></td>
			<td><?php echo $attack['stars']; ?></td>
			<td><?php echo $attack['attacker_id']; ?></td>
			<td><?php echo $attack['defender_id']; ?></td>
			<td><?php echo $attack['created']; ?></td>
			<td><?php echo $attack['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attacks', 'action' => 'view', $attack['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attacks', 'action' => 'edit', $attack['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attacks', 'action' => 'delete', $attack['id']), null, __('Are you sure you want to delete # %s?', $attack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
