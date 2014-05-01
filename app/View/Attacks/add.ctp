<div class="attacks form">
<?php echo $this->Form->create('Attack'); ?>
	<fieldset>
		<legend><?php echo __('Add Attack'); ?></legend>
	<?php
		echo $this->Form->input('war_id');
		echo $this->Form->input('stars');
		echo $this->Form->input('attacker_id');
		echo $this->Form->input('defender_id');
		echo $this->params['pass'][0];
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attacks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Wars'), array('controller' => 'wars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New War'), array('controller' => 'wars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attacker'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
