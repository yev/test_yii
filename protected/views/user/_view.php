<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pass')); ?>:</b>
	<?php echo CHtml::encode($data->user_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_salt')); ?>:</b>
	<?php echo CHtml::encode($data->user_salt); ?>
	<br />


</div>