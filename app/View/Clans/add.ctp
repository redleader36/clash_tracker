<div class="clans form">
<?php echo $this->Form->create('Clan'); ?>
	<fieldset>
		<legend><?php echo __('Add Clan'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('home');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clans'), array('action' => 'index')); ?></li>
	</ul>
</div>
