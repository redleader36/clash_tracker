<div class="attacks view">
<h2><?php echo __('Attack'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attack['Attack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('War'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attack['War']['id'], array('controller' => 'wars', 'action' => 'view', $attack['War']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stars'); ?></dt>
		<dd>
			<?php echo h($attack['Attack']['stars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacker'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attack['Attacker']['name'], array('controller' => 'players', 'action' => 'view', $attack['Attacker']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attack['Defender']['name'], array('controller' => 'players', 'action' => 'view', $attack['Defender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attack['Attack']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($attack['Attack']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attack'), array('action' => 'edit', $attack['Attack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attack'), array('action' => 'delete', $attack['Attack']['id']), null, __('Are you sure you want to delete # %s?', $attack['Attack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attacks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wars'), array('controller' => 'wars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New War'), array('controller' => 'wars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attacker'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
