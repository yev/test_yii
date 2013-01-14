<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->passwordField($model,'user_password',array('size'=>45, 'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password_repeat'); ?>
		<?php echo $form->passwordField($model,'user_password_repeat',array('size'=>45, 'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_password_repeat'); ?>
	</div>


	<div class="row">
        <?php echo $form->labelEx($model,'role_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'role_id',CHtml::listData(Role::model()->findAll(), 'id', 'name'), array('prompt' => '-- Please Select --')) ?>
        <?php echo $form->error($model,'role_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->