<div class="wars view">
<h2><?php echo $this->Html->link($currentWar['HomeClan']['name'], array('controller' => 'clans', 'action' => 'view', $currentWar['HomeClan']['id'])); ?> vs <?php echo $this->Html->link($currentWar['AwayClan']['name'], array('controller' => 'clans', 'action' => 'view', $currentWar['AwayClan']['id'])); ?></h2>
	<dl>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($currentWar['War']['startTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PrepareTime'); ?></dt>
		<dd>
			<?php echo h($currentWar['War']['prepareTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WarTime'); ?></dt>
		<dd>
			<?php echo h($currentWar['War']['warTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndTime'); ?></dt>
		<dd>
			<?php echo h($currentWar['War']['endTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Away Clan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currentWar['AwayClan']['name'], array('controller' => 'clans', 'action' => 'view', $currentWar['AwayClan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Clan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($currentWar['HomeClan']['name'], array('controller' => 'clans', 'action' => 'view', $currentWar['HomeClan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($currentWar['War']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($currentWar['War']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<h3><?php echo __('Attacks'); ?></h3>
	<?php if (!empty($currentWar['Attack'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Attacker Id'); ?></th>
		<th><?php echo __('Defender Id'); ?></th>
		<th><?php echo __('Stars'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($currentWar['Attack'] as $attack): ?>
		<tr>
			<td><?php echo $attack['Attacker']['name']; ?></td>
			<td><?php echo $attack['Defender']['name']; ?></td>
			<td><?php echo $attack['stars']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attacks', 'action' => 'view', $attack['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attacks', 'action' => 'edit', $attack['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attacks', 'action' => 'delete', $attack['id']), null, __('Are you sure you want to delete # %s?', $attack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

To Do:<br><br>

add War Score/Percentages<br>
add Top Atackers/Starrers<br>
add Top Defenders<br>
use Attacker and Defender Names<br>
use star icons?<br>
<br>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit War'), array('action' => 'edit', $currentWar['War']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete War'), array('action' => 'delete', $currentWar['War']['id']), null, __('Are you sure you want to delete # %s?', $currentWar['War']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New War'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Clan'), array('controller' => 'clans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attacks'), array('controller' => 'attacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add')); ?> </li>
	</ul>
</div>
