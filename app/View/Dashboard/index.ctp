<div class="wars view">
<h2><?php echo $this->Html->link($currentWar['War']['date']." War", array('controller' => 'wars', 'action' => 'view', $currentWar['War']['id'])); ?></h2>	
<h4><?php echo $this->Html->link($currentWar['HomeClan']['name'], array('controller' => 'clans', 'action' => 'view', $currentWar['HomeClan']['id'])); ?> vs <?php echo $this->Html->link($currentWar['AwayClan']['name'], array('controller' => 'clans', 'action' => 'view', $currentWar['AwayClan']['id'])); ?></h4>
	<dl>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($this->Time->format($currentWar['War']['startTime'],'%B %e, %Y %l:%M %p')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WarTime'); ?></dt>
		<dd>
			<?php echo h($this->Time->format($currentWar['War']['warTime'],'%B %e, %Y %l:%M %p')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndTime'); ?></dt>
		<dd>
			<?php echo h($this->Time->format($currentWar['War']['endTime'],'%B %e, %Y %l:%M %p')); ?>
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
		<th><?php echo __('Percent'); ?></th>
		<th><?php echo __('Base Destroyed'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($currentWar['Attack'] as $attack): ?>
		<tr>
			<td><?php echo $attack['Attacker']['name']; ?></td>
			<td><?php echo $attack['Defender']['name']; ?></td>
			<td><?php echo $attack['stars']; ?></td>
			<td><?php echo $attack['percent']; ?></td>
			<td><?php echo ($attack['base_destroyed']?'yes':'no'); ?></td>
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
			<li><?php //this successfully adds the current war id to the url to populate the war ide in add attack view
			echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add', $currentWar['War']['id'] )); ?> </li>
		</ul>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Wars'), array('controller' => 'wars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New War'), array('controller' => 'wars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index')); ?> </li>
	</ul>
</div>
