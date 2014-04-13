<div class="wars form">
<?php echo $this->Form->create('War'); ?>
	<fieldset>
		<legend><?php echo __('Add War'); ?></legend>
	<?php
		echo $this->Form->input('startTime');
		echo $this->Form->input('prepareTime');
		echo $this->Form->input('warTime');
		echo $this->Form->input('endTime');
		echo $this->Form->input('awayClan_id');
		echo $this->Form->input('homeClan_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Clan'), array('controller' => 'clans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attacks'), array('controller' => 'attacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack'), array('controller' => 'attacks', 'action' => 'add')); ?> </li>
	</ul>
</div>
